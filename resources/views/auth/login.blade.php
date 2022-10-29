@extends('layouts.app')

@section('content')
{{--  Aqui faz uma requisição do tipo POST, ou seja, envia as informações em um 'corpo'  --}}
<form method="post" action="{{ route('login') }}"> {{-- a "ação" ou action é uma rota com o nome 'login', o nome e não o link --}}
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" name="email" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    <a class="btn-block text-center" href="{{ route('register') }}">Register</a>
</form>
@endsection
