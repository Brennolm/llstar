@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tabler funcionando 🎉</h3>
                    <p class="text-secondary">Se esse card está com bordas arredondadas, ícone e cores do Tabler, o bundle admin.css/admin.js carregou certo.</p>
                    <button class="btn btn-primary">Botão de teste</button>
                    <div class="alert alert-success mt-3" role="alert">
                        Layout do painel instalado com sucesso.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection