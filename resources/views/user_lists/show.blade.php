@extends('layouts.app')

@section('title')
    Details | Utilisateur
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Details | Utilisateur</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('userLists.index') }}"
                 class="btn btn-primary form-btn float-right">Retour</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('user_lists.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
