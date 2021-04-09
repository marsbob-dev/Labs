<?php use App\Models\Job; $jobs=Job::all(); ?>

@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')
    <form action="{{ $register_url }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                   value="{{ old('name') }}" placeholder="{{ __('Name') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>

        {{-- Surname field --}}
        <div class="input-group mb-3">
            <input type="text" name="surname" class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}"
                   value="{{ old('surname') }}" placeholder="{{ __('Surname') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('surname'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('surname') }}</strong>
                </div>
            @endif
        </div>

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>

        {{-- Job field --}}
        <div class="input-group mb-3">
            <select class="form-control" name="job_id" id="">
                @foreach ($jobs->where('id', '!=', 1) as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-briefcase {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('job_id'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('job_id') }}</strong>
                </div>
            @endif
        </div>

       {{-- Picture field --}}
       <div class="input-group mb-3">
            <input class="form-control" type="file" name="src">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-images {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('src'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('src') }}</strong>
                </div>
            @endif
        </div> 

        {{-- Description field --}}
        <div class="input-group mb-3">
            <input type="text" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                   value="{{ old('description') }}" placeholder="{{ __('Description') }}" autofocus>
            {{-- <textarea name="description" id="" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" cols="30" rows="4" value="{{ old('description') }}" placeholder="{{ __('Description') }}"></textarea> --}}
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('description'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('description') }}</strong>
                </div>
            @endif
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password"
                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('adminlte::adminlte.password') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>

        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                   class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('adminlte::adminlte.retype_password') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
            @endif
        </div>

        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            {{ __('adminlte::adminlte.register') }}
        </button>

    </form>
@stop

@section('auth_footer')
    <p class="my-0">
        <a href="{{ $login_url }}">
            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
        </a>
    </p>
@stop
