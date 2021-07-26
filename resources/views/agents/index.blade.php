@extends('layouts.app')
@section('title')
    Agents 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Agents</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('agents.create')}}" class="btn btn-primary form-btn">Agent <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('agents.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

