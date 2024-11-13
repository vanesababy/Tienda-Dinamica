<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{

    private $temas = [
        'anime' => [
            'titulo' => 'Mundo Anime',
            'descripcion' => 'Descubre nuestra colección de productos anime',
            'color_fondo' => 'bg-dark',
            'color_texto' => 'text-light',
            'estilo' => 'anime'
        ],
        'mascotas' => [
            'titulo' => 'Accesorios para Mascotas',
            'descripcion' => 'Todo para consentir a tus amigos peludos',
            'color_fondo' => 'bg-light',
            'color_texto' => 'text-dark',
            'estilo' => 'mascotas'
        ],
        'casual' => [
            'titulo' => 'Estilo Casual Elegante',
            'descripcion' => 'Elegancia y comodidad en cada prenda',
            'color_fondo' => 'bg-secondary',
            'color_texto' => 'text-white',
            'estilo' => 'casual'
        ],
        'TuTienda' => [
            'titulo' => 'Catehorias',
            'descripcion' => 'Elegancia y comodidad en cada prenda',
            'color_fondo' => 'bg-secondary',
            'color_texto' => 'text-white',
            'estilo' => 'TuTienda'
        ]
    ];

    public function inicio()
    {
        return view('welcome', ['temas' => $this->temas]);
    }

    public function mostrarLogin($tema = null)
    {
        $temaSeleccionado = isset($this->temas[$tema]) ? $this->temas[$tema] : $this->temas['categorias'];
        return view('auth.login', ['tema' => $temaSeleccionado]);
    }

    public function mostrarRegister($tema = null)
    {
        if (isset($this->temas[$tema])) {
            $temaSeleccionado = $this->temas[$tema];
        } else {
            $temaSeleccionado = $this->temas['TuTienda'];
        }

        return view('auth.register', ['tema' => $temaSeleccionado]);
    }

}