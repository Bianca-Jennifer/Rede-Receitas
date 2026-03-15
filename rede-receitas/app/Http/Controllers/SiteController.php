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

    public function lista_receitas(Request $request)
    {
        $receitas = Receita::with('user')
            ->withCount('favoritos')
            ->latest();
        if ($request->categoria) {
            $receitas->where('categoria', $request->categoria);
        }

        if ($request->tempo) {
            $receitas->where('tempo_preparo', '<=', $request->tempo);
        }

        if ($request->busca) {
        $busca = $request->busca;

        $receitas->where(function ($query) use ($busca) {
            $query->where('titulo', 'like', "%{$busca}%")
                  ->orWhereHas('user', function ($q) use ($busca) {
                      $q->where('name', 'like', "%{$busca}%");
                    });
            });
        }


        $receitas = $receitas->paginate(12)->withQueryString();

        return view('pages.lista_receitas', compact('receitas'));
    }

    public function details($slug){
        $receita = Receita::with('user')
            ->withCount('favoritos')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pages.details', compact('receita'));
    }
}
