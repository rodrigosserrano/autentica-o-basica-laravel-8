@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('register') }}">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="firstname" id="form3Example1" class="form-control" />
                <label class="form-label" for="form3Example1">Primeiro nome</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="lastname" id="form3Example2" class="form-control" />
                <label class="form-label" for="form3Example2">Sobrenome</label>
            </div>
        </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" name="email" id="form3Example3" class="form-control" />
        <label class="form-label" for="form3Example3">Email</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="password" id="form3Example4" class="form-control" />
        <label class="form-label" for="form3Example4">Senha</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

</form>
    <a class="btn-block text-center" href="{{ route('login') }}">Login</a>
@endsection
