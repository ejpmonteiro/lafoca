<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Publication;

class ArticlesController extends Controller
{
    public function index() {
        $publication = new Publication();
        $publications = $publication->getPublications();
        return view('site.pages.artigos', compact('publications'));
    }

    public function getPublication($id_publication) {
        $publication = Publication::find($id_publication);
        return view('site.pages.visualizar_artigo', compact('publication'));
    }
}
