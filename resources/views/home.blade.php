@extends('layouts.app')


@section('title')
    Tableau de Bord
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
      .card-counter{
        box-shadow: 2px 2px 10px #DADADA;
        margin: 5px;
        padding: 20px 10px;
        background-color: #fff;
        height: 100px;
        border-radius: 5px;
        transition: .3s linear all;
      }

      .card-counter:hover{
        box-shadow: 4px 4px 20px #DADADA;
        transition: .3s linear all;
      }

      .card-counter.primary{
        background-color: #007bff;
        color: #FFF;
      }

      .card-counter.danger{
        background-color: #ef5350;
        color: #FFF;
      }

      .card-counter.success{
        background-color: #66bb6a;
        color: #FFF;
      }

      .card-counter.info{
        background-color: #26c6da;
        color: #FFF;
      }

      .card-counter i{
        font-size: 5em;
        opacity: 0.2;
      }

      .card-counter .count-numbers{
        position: absolute;
        right: 35px;
        top: 20px;
        font-size: 32px;
        display: block;
      }

      .card-counter .count-name{
        position: absolute;
        right: 35px;
        top: 65px;
        font-style: italic;
        text-transform: capitalize;
        opacity: 0.5;
        display: block;
        font-size: 18px;
      }
    </style>


    {{-- @dd(Auth::user()) --}}

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tableau de Bord</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h3 class="text-center"></h3> --}}

                            <div class="container">
                                <div class="row">
                                <div class="col-md-3">
                                  <div class="card-counter primary">
                                    <i class="fa fa-code-fork"></i>
                                    <span class="count-numbers">{{ App\Models\Post::count() }}</span>
                                    <span class="count-name">Nombre de Posts</span>
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="card-counter danger">
                                    <i class="fa fa-ticket"></i>
                                    <span class="count-numbers">{{ App\Models\Entity::count() }}</span>
                                    <span class="count-name">Entités</span>
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="card-counter success">
                                    <i class="fa fa-database"></i>
                                    <span class="count-numbers">{{ App\Models\EntityType::count() }}</span>
                                    <span class="count-name">Type d'entités</span>
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="card-counter info">
                                    <i class="fa fa-users"></i>
                                    <span class="count-numbers">{{ App\Models\Agent::count() }}</span>
                                    <span class="count-name">Nombre d'agents</span>
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="card-counter info">
                                    <i class="fa fa-users"></i>
                                    <span class="count-numbers">{{ App\Models\User::count() }}</span>
                                    <span class="count-name">Nombre d'Utilisateurs</span>
                                  </div>
                                </div>
                              </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

