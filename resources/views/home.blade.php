@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="">Bienvenue dans le BackOffice</h2>
                    @can('isWebmaster')
                        <p>Vous pouvez modifier ici tous les aspects de votre site.</p>
                        <p class="ml-3"><strong>Contenu</strong>: Modifiez ici le contenu de vos pages</p>
                        <p class="ml-3"><strong>Utiilisateurs</strong>: Gérez vos utilisateurs</p>
                    @elsecan('isRedactor')
                        <p>Vous pouvez modifier ici vos articles ainsi que votre profil</p>
                        <p>Vous pouvez également voir tous les articles du site</p>
                    @elsecan('isMember')
                        <p>Ici, vous pouvez modifier votre profil</p>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@stop
