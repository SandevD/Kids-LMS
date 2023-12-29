<?php

namespace App\Providers;

use App\Nova\Content;
use App\Nova\Dashboards\Main;
use App\Nova\Grade;
use App\Nova\Lesson;
use App\Nova\Progress;
use App\Nova\Role;
use App\Nova\School;
use App\Nova\SchoolBranch;
use App\Nova\Subject;
use App\Nova\User;
use Bolechen\NovaActivitylog\Resources\Activitylog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    public static $model = 'App\\Models\\User';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::sortResourcesBy(function ($resource) {
            return $resource::$priority ?? 9999;
        });

        Nova::withBreadcrumbs();

        Nova::footer(function ($request) {
            return Blade::render('
                <center>Copyright &copy; ' . now()->year . ' Lyceum International Schools (Pvt) Ltd. All Rights Reserved.<br/>Lyceum Primary LMS Backend. Created by Zuse Technologies (Pvt) Ltd.</center>
            ');
        });

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class, 'Dashboard')->icon('chart-bar'),

                MenuSection::make('Manage LMS', [
                    MenuItem::resource(Subject::class),
                    MenuItem::resource(Lesson::class),
                    MenuItem::resource(Content::class),
                    MenuItem::resource(Progress::class),
                ])->icon('academic-cap')->collapsable(),

                MenuSection::make('Manage Schools', [
                    MenuItem::resource(School::class),
                    MenuItem::resource(SchoolBranch::class),
                ])->icon('tag')->collapsable(),

                MenuSection::make('Manage Users', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Role::class),
                    MenuItem::resource(Grade::class),
                ])->icon('user-group')->collapsable(),

                MenuSection::resource(Activitylog::class)->icon('tag'),
            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \Pktharindu\NovaPermissions\NovaPermissions::make()
                ->roleResource(Role::class),
            new \Bolechen\NovaActivitylog\NovaActivitylog(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
