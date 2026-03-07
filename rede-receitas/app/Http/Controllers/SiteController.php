<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;

class SiteController extends Controller
{
    public function index()
    {
        $ultimasReceitas = Receita::with('user')
            ->withCount('favoritos')
            ->latest()
            ->take(10)
            ->get();

        $maisFavoritados = Receita::with('user')
            ->withCount('favoritos')
            ->orderByDesc('favoritos_count')
            ->take(10)
            ->get();
        
        $receitasRapidas = Receita::with('user')
            ->withCount('favoritos')
            ->orderBy('tempo_preparo')
            ->take(8)
            ->get(); 

        return view('pages.home', compact('ultimasReceitas', 'maisFavoritados', 'receitasRapidas'));
    }

    public function lista_receitas()
    {
        $receitas = Receita::with('user')
            ->withCount('favoritos')
            ->latest()
            ->paginate(12);

        return view('pages.lista_receitas', compact('receitas'));
    }
}
