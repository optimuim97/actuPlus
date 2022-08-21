@extends('layouts.app')
@section('title')
    Type d'entités
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Type d'entités</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('entityTypes.create')}}" class="btn btn-primary form-btn">Type d'entités <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('entity_types.table')
            </div>
       </div>
   </div>

    </section>
@endsection

