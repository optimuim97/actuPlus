<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $proposition->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $proposition->description }}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <p>{{ $proposition->images }}</p>
</div>

<!-- Video Url Field -->
<div class="form-group">
    {!! Form::label('video_url', 'Video Url:') !!}
    <p>{{ $proposition->video_url }}</p>
</div>

<!-- Image Urls Field -->
<div class="form-group">
    {!! Form::label('image_urls', 'Image Urls:') !!}
    <p>{{ $proposition->image_urls }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $proposition->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $proposition->updated_at }}</p>
</div>

