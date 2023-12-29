<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('lessons')->whereHas('lessons', function ($query) {
            $query->where('grade_id', auth()->user()->grade_id)->groupBy('subject_id');
        })->get();
        return view('student.subjects', compact('subjects'));
    }
}
