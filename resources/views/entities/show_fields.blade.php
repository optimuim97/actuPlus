<div class="row">
    <!-- Name Field -->
    <div class="col-md-6">
        {!! Form::label('name', ' Nom :') !!}
        <p>{{ $entity->name }}</p>
    </div>

    <!-- Description Field -->
    <div class="col-md-6">
        {!! Form::label('description', 'Description:') !!}
        <p>{{ $entity->description }}</p>
    </div>

    <!-- Logo Field -->
    <div class="col-md-6">
        {!! Form::label('logo', 'Logo:') !!}
        <img src="{{ $entity->logo }}" alt="{{ $entity->logo }}"
        srcset="{{ $entity->logo }}" width="100" height="100">
    </div>

    <!-- Photo Url Field -->
    <div class="col-md-6">
        {!! Form::label('photo_url', 'Photo:') !!}
        <img src="{{ $entity->photo_url }}" alt="{{ $entity->photo_url }}"
        srcset="{{ $entity->photo_url }}" width="100" height="100">

    </div>


    <!-- Entity Type Idl Field -->
    <div class="col-md-6">
        {!! Form::label('entity_type_id', 'Entity Type Id:') !!}
        <p>{{ $entity->name }}</p>
    </div>

    <!-- Created At Field -->
    <div class="col-md-6">
        {!! Form::label('created_at', 'Date de creation :') !!}
        <p>{{ $entity->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="col-md-6">
        {!! Form::label('updated_at', 'Date de dernière modification :') !!}
        <p>{{ $entity->updated_at }}</p>
    </div>

    <div class="col-md-12">
        <h3>Liste des posts</h3>

        @php
             $posts = \App\Models\Post::where('entity_id', $entity->id)->get();
        @endphp

        @include('posts.table')
    </div>

</div>

