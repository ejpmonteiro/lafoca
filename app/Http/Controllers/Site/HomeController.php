<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Research;
use App\Professional;
use App\News;
use App\Course;

class HomeController extends Controller
{
    public function index() {
        $totalCourses = Course::count();
        $totalResearch = Research::count();
        $totalProfessional = Professional::count();
        $totalNews = News::count();

        $noticia = new News();
        $noticias = $noticia->getNewsHome();

        $course = new Course();
        $courses = $course->getCoursesHome();

        return view('site.pages.index', compact('totalCourses', 'totalResearch', 'totalProfessional', 'totalNews', 'noticias', 'courses'));
    }
}
