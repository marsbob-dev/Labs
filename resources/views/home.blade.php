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
                    <h2 class="">Welcome in the BackOffice!</h2>
                    @can('isWebmaster')
                        <p>Here you can modify all of your website content. On the left menu, you'll find two categories as well as a button to go back to your website.</p>
                        <p class="ml-3"><strong>Content Change</strong>: find all the parts of your website waiting for you to modify them!</p>
                        <p class="ml-3"><strong>Account Setting</strong>: find your pending users, a complete list of the team's users, the different jobs, roles and a list of your newsletter's subscribers.</p>
                    @elsecan('isRedactor')
                        <p>Here you can modify your profile as well as the articles you wrote.</p>
                        <p>You can see the list of all the articles on the website but you can only modify or delete yours.</p>
                    @elsecan('isMember')
                        <p>Here you can modify your profile</p>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@stop
