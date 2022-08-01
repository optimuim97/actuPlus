@extends('layouts.app')

@section('title')
    Bienvenue
@endsection

@section('content')
    <div class="container">
        <div class="wrapper">
            <a href="{{ url('/login/admin') }}" >
                <div class="wrapper-item">
                    Se Connecter en tant que ADMIN
                </div>
            </a>

            <a href="{{ url('/login/entity') }}">
                <div class="wrapper-item">
                    Se Connecter en tant que ENTITÉ
                </div>
            </a>
        </div>
    </div>

    <style>
        .wrapper{
            margin-top: 20%;
            display:flex;
            justify-content: space-between;
            justify-items: center;
        }

        .wrapper-item{
            width: auto;
            padding: 20%;
            background-color: rgb(161, 160, 160);
            border-radius: 10%;
            color: #FFF;
            font-weight: 900;
            font-size: 20px;
        }
    </style>
@endsection