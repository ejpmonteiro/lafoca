<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CoursesController extends Controller
{
    public function index() {
        $course = new Course;
        $courses = $course->getCourses();
        return view('site.pages.cursos', compact('courses'));
    }

    public function getCourse($id_course) {
        $course = Course::find($id_course);
        return view('site.pages.visualizar_curso', compact('course'));
    }
}
