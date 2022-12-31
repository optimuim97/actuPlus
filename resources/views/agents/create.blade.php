@extends('layouts.app')
@section('title')
    Creation | Agent 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">Creation | Agent </h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('agents.index') }}" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'agents.store', 'files' => true]) !!}
                                    <div class="row">
                                        @include('agents.fields')
                                    </div>
                                {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
