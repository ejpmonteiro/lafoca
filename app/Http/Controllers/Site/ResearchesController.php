<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Research;

class ResearchesController extends Controller
{
    private $totalPage = 5;
    
    public function index() {
        $researches = Research::paginate($this->totalPage);
        return view('site.pages.pesquisas', compact('researches'));
    }

    public function getResearch($id_research) {
        $research = Research::find($id_research);
        return view('site.pages.visualizar_pesquisa', compact('research'));
    }
     
}
