@extends('layouts.app')
@section('title')
    Comment Types
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Type de Commentaires</h1>
            {{-- <div class="section-header-breadcrumb">
                <a href="{{ route('commentTypes.create')}}" class="btn btn-primary form-btn">Comment Type <i class="fas fa-plus"></i></a>
            </div> --}}
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('comment_types.table')
            </div>
       </div>
   </div>

    </section>
@endsection

