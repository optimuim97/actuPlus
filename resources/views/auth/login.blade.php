@extends('layouts.auth_app')
@section('title')
    Connexion
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Connexion</h4></div>

        <div class="card-body">
            <form 
                method="POST" 

                @if (isset($role))
                    {{-- @dump($role) --}}
                    @if ($role == "admin")
                        action="{{ route('login') }}"
                    @else
                        action="{{ url('login-entity') }}" method="POST"
                    @endif

                @else
                        action="{{ route('login') }}"
                @endif
            >
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="email">Email</label>
                    <input aria-describedby="emailHelpBlock" id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           placeholder="Enter Votre Email" tabindex="1"
                           value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                           required>
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Mot de passe</label>
                        <div class="float-right">
                            <a href="{{ route('password.request') }}" class="text-small">
                                Mot de passe oublié ?
                            </a>
                        </div>
                    </div>
                    <input aria-describedby="passwordHelpBlock" id="password" type="password"
                           value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                           placeholder="Enter le mot de passe"
                           class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password"
                           tabindex="2" required>
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                               id="remember"{{ (Cookie::get('remember') !== null) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Se Souvenir de moi</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Se Connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
