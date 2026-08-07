@extends('layouts.admin')

@section('title', 'Meu Perfil')

@section('content')
    <div class="row row-deck row-cards">

        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Informações do Perfil</h3>

                    @if (session('status') === 'profile-updated')
                        <div class="alert alert-success">Perfil atualizado com sucesso.</div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="phone" data-phone-mask class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Alterar Senha</h3>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label">Senha Atual</label>
                            <input type="password" name="current_password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror">
                            @error('current_password', 'updatePassword')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nova Senha</label>
                            <input type="password" name="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror">
                            @error('password', 'updatePassword')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirmar Nova Senha</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Atualizar Senha</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection