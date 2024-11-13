<?php

use Illuminate\Support\Facades\Route;

Route::get('/perfil/{nome}', function($nome) {
    return view('home', [
        'nome'=> 'Luiza',
        'profissao'=> 'Data Engineer',
    ]);
});