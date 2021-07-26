@extends('layouts.app')
@section('title')
    Media 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Media</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('media.create')}}" class="btn btn-primary form-btn">Media <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('media.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

