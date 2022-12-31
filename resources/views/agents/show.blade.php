@extends('layouts.app')
@section('title')
    Details | Agent
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Details | Agent</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('agents.index') }}"
                 class="btn btn-primary form-btn float-right">Retour</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('agents.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
