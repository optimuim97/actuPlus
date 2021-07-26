<!-- Post Id Field -->
<div class="form-group">
    {!! Form::label('post_id', 'Post Id:') !!}
    <p>{{ $media->post_id }}</p>
</div>

<!-- Photo Url Field -->
<div class="form-group">
    {!! Form::label('photo_url', 'Photo Url:') !!}
    <p>{{ $media->photo_url }}</p>
</div>

<!-- Post Title Field -->
<div class="form-group">
    {!! Form::label('post_title', 'Post Title:') !!}
    <p>{{ $media->post_title }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $media->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $media->updated_at }}</p>
</div>

