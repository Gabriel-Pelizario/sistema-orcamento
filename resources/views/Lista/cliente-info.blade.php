@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Informações do Cadastro') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4 text-center">
                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="text-center">
                            <img src="{{ asset('img/user.png') }}" class="user mt-4" alt="user">
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <h5 class="card-title">{{ $cliente->nome }}</h5>
                    <p class="card-text">Informações sobre o cadastro deste cliente!</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cadastrado por:
                        {{ $userOwner['name'] . ' ' . $userOwner['last_name'] }}</li>
                    <li class="list-group-item">Data: {{ $cliente->created_at }}</li>
                    <li class="list-group-item">Email: {{$userOwner['email']}}</li>
                </ul>
            </div>

        </div>

    </div>
@endsection
