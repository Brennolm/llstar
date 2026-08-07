@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    @if(auth()->user()->isAdmin())
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Painel do Administrador</h3>
                        <p class="text-secondary">Conteúdo exclusivo do admin.</p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Painel do Usuário</h3>
                        <p class="text-secondary">Conteúdo exclusivo do usuário.</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection