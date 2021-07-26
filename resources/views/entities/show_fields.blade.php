<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $entity->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $entity->description }}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{{ $entity->logo }}</p>
</div>

<!-- Photo Url Field -->
<div class="form-group">
    {!! Form::label('photo_url', 'Photo Url:') !!}
    <p>{{ $entity->photo_url }}</p>
</div>

<!-- Photo Url Field -->
<div class="form-group">
    {!! Form::label('photo_url', 'Photo Url:') !!}
    <p>{{ $entity->photo_url }}</p>
</div>

<!-- Entity Type Idl Field -->
<div class="form-group">
    {!! Form::label('entity_type_idl', 'Entity Type Idl:') !!}
    <p>{{ $entity->entity_type_idl }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $entity->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $entity->updated_at }}</p>
</div>

