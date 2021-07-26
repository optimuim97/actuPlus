<!-- Post Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_id', 'Post Id:') !!}
    {!! Form::number('post_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_url', 'Photo Url:') !!}
    {!! Form::text('photo_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_title', 'Post Title:') !!}
    {!! Form::text('post_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('media.index') }}" class="btn btn-light">Cancel</a>
</div>
