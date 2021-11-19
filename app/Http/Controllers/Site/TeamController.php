<?php

namespace App\Http\Controllers\Site;
use App\Professional;
use App\Pesquisa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index() {
        $professionals = Professional::all();
        return view('site.pages.equipe', compact('professionals'));
    }
}
