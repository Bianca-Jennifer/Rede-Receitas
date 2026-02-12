<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;

class SiteController extends Controller
{
    public function index()
    {
        $receitas = Receita::with('user')
        ->withCount('favoritos')
        ->latest()
        ->get();
        return view('pages.home', compact('receitas'));
    }
}
