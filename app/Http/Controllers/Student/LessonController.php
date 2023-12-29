<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index($id)
    {
        $lessons = Lesson::with('contents')->where('subject_id', $id)->get();
        return view('student.lessons', compact('lessons'));
    }

    public function content($id) {
        $content = Content::where('id', $id)->first();
        return view('student.lesson-content', compact('content'));
    }
}
