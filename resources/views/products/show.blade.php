@extends('layouts.app')
@section('title')
    Details | Produit
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Details | Produit</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('products.index') }}"
                 class="btn btn-primary form-btn float-right">Retour</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('products.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
