<?php

use Illuminate\Support\Facades\Route;
use App\Models\Agendamento;
use Illuminate\Http\Request;

Route::POST('/', function(Request $informacoes) {
    Agendamento::create([
        'Nome' => $informacoes->nome,
        'Telefone' => $informacoes->telefone,
        'Origem' => $informacoes->origem,
        'Observacao' => $informacoes->observacao,
        'Data_contato' => $informacoes->data_contato
    ]);

    return view('index');
});

Route::get('/consulta', function () {
    $agendamento = new Agendamento();
    $agendamentos = $agendamento::all();
    return view('consulta', compact('agendamentos'));
});

Route::get('/', function () {
    return view('index');
});
