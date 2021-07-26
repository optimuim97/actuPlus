@extends('layouts.app')
@section('title')
    Likes 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Likes</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('likes.create')}}" class="btn btn-primary form-btn">Like <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('likes.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

