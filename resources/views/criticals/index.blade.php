@extends('layouts.app')
@section('title')
    Criticals 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Criticals</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('criticals.create')}}" class="btn btn-primary form-btn">Critical <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('criticals.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

