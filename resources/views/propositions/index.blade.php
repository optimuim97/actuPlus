@extends('layouts.app')
@section('title')
    Propositions
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Propositions</h1>
            {{-- <div class="section-header-breadcrumb">
                <a href="{{ route('propositions.create')}}" class="btn btn-primary form-btn">Proposition <i class="fas fa-plus"></i></a>
            </div> --}}
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('propositions.table')
            </div>
       </div>
   </div>

    </section>
@endsection

