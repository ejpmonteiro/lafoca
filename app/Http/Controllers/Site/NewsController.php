<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;


class NewsController extends Controller
{
    public function __construct(News $news) {
        $this->news = $news;
    }

    public function index() {
        $news = $this->news->getNews();
        return view('site.pages.noticias', compact('news'));
    }

    public function getNews($id_news) {
        $news = News::find($id_news);
        return view('site.pages.noticia_completa', compact('news'));
    }
}
