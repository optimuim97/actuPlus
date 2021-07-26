@extends('layouts.app')
@section('title')
    Comment Type Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Comment Type Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('commentTypes.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('comment_types.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
