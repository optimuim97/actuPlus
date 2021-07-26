@extends('layouts.app')
@section('title')
    Details - Publication
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1> Details - Publication</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('posts.index') }}"
                 class="btn btn-primary form-btn float-right">Retour</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('posts.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
