<?php

namespace App\Nova;

use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Http\Request;
use Laravel\Nova\Actions\ExportAsCsv;
use App\Nova\Abstracts\Resource;
use Carbon\Carbon;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\FormData;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Line;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Nova;

class Content extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Content>
     */
    public static $model = \App\Models\Content::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * Indicates if the resource should be displayed in the sidebar.
     *
     * @return bool
     */
    public static function availableForNavigation(Request $request)
    {
        return $request->user()->isAdmin();
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Lesson', 'lesson', Lesson::class)
                ->sortable()
                ->searchable()
                ->withSubtitles()
                ->modalSize('5xl')
                ->showWhenPeeking()
                ->showOnPreview(),

            Text::make('Topic', 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Trix::make('Description')
                ->sortable()
                ->rules('required'),

            File::make('Thumnail Image', 'image_path')
                ->disk('public')
                ->path('/assets/course_contents/images')
                ->acceptedTypes('image/*'),

            Select::make('Video Upload Method', 'video_type')->options([
                'Manual' => 'Manual (Maximum upload size is limited to 40MB)',
                'Youtube' => 'Youtube unlisted video link',
            ]),

            File::make('Course Video', 'video_path')
                ->hide()
                ->disk('public')
                ->dependsOn(
                    ['video_type'],
                    function (File $field, NovaRequest $request, FormData $formData) {
                        if ($formData->video_type == 'Manual') {
                            $field->show()->rules(['required']);
                        }
                    }
                )
                ->path('/assets/course_contents/videos')
                ->acceptedTypes('video/*'),

            Text::make('Youtube Link', 'youtube_link')
                ->hide()
                ->hideFromIndex()
                ->sortable()
                ->dependsOn(
                    ['video_type'],
                    function (Text $field, NovaRequest $request, FormData $formData) {
                        if ($formData->video_type == 'Youtube') {
                            $field->show()->rules(['required']);
                        }
                    }
                ),

            File::make('PDF Resources', 'pdf_path')
                ->disk('public')
                ->path('/assets/course_contents/docs')
                ->acceptedTypes('.pdf'),


            Stack::make('Created By', [
                Line::make('Created By', function ($model) {
                    if ($model->createdBy?->name == null) {
                        return '-';
                    } else {
                        return '<a class="link-default" href="' . Nova::url('/resources/' . User::uriKey() . '/' . $model->created_by) . '">' . $model->createdBy->name . '</a>';
                    }
                })
                    ->asHeading()
                    ->asHtml(),
                Line::make('Created Time', function ($model) {
                    return Carbon::parse($model->created_at)?->diffForHumans() ?? '-';
                })->asSmall()
            ])->canSee(function () use ($request) {
                return $request->user()->isAdmin() || $request->user()->hasPermissionTo('view user');
            }),

            Stack::make('Updated By', [
                Line::make('Updated By', function ($model) {
                    if ($model->updatedBy?->name == null) {
                        return '-';
                    } else {
                        return '<a class="link-default" href="' . Nova::url('/resources/' . User::uriKey() . '/' . $model->updated_by) . '">' . $model->updatedBy->name . '</a>';
                    }
                })
                    ->asHeading()
                    ->asHtml(),
                Line::make('Updated Time', function ($model) {
                    return Carbon::parse($model->updated_at)?->diffForHumans() ?? '-';
                })->asSmall(),
            ])->hideFromIndex()->canSee(function () use ($request) {
                return $request->user()->isAdmin() || $request->user()->hasPermissionTo('view user');
            }),
        ];
    }

    /**
     * Get the menu that should represent the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Nova\Menu\MenuItem
     */
    public function menu(Request $request)
    {
        return parent::menu($request)->withBadge(function () {
            return static::$model::count();
        });
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            ExportAsCsv::make(),
        ];
    }
}
