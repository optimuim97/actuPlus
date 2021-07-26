<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Titre:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $post->description }}</p>
</div>

<!-- Publisher Name Field -->
{{-- <div class="form-group">
    {!! Form::label('publisher_name', 'Publisher Name:') !!}
    <p>{{ $post->publisher_name }}</p>
</div> --}}

<!-- Publisher Id Field -->
{{-- <div class="form-group">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    <p>{{ $post->publisher_id }}</p>
</div> --}}

<!-- Is Publish Field -->
<div class="form-group">
    {!! Form::label('is_publish', 'Publié ? :') !!}
    <p>{{ $post->is_publish == true ? "Oui" : 'Non'}}</p>
</div>


<!-- Is Draft Field -->
<div class="form-group">
    {!! Form::label('is_draft', 'Is Draft:') !!}
    <p>{{ $post->is_draft == true ? "Oui" : 'Non'}}</p>
</div>


<!-- Is Visible By User Field -->
{{-- <div class="form-group">
    {!! Form::label('is_visible_by_user', 'Is Visible By User:') !!}
    <p>{{ $post->is_visible_by_user }}</p>
</div> --}}

<!-- Is Visible By Agent Field -->
{{-- <div class="form-group">
    {!! Form::label('is_visible_by_agent', 'Is Visible By Agent:') !!}
    <p>{{ $post->is_visible_by_agent }}</p>
</div> --}}

<!-- Expiration Date Field -->
<div class="form-group">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    <p>{{ $post->expiration_date }}</p>
</div>

<!-- Medias Field -->
{{-- <div class="form-group">
    {!! Form::label('medias', 'Medias:') !!}
    <p>{{ $post->medias }}</p>
</div> --}}

<!-- Cover Field -->
<div class="form-group">
    {!! Form::label('cover', 'Image:') !!}
    <img src="{{ $post->cover }}" alt="{{ $post->cover }}" srcset="">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $post->updated_at }}</p>
</div>

