<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titre:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entity_id', 'Type d\'entité :') !!}
    <select name="entity_id" id="entity_id" class="form-control">
        <option value="">Choisir une entités si votre post est lié a une entité</option>
        @foreach ($entities as $entity)
            <option value="{{ $entity->id }}">{{ $entity->name }}</option>
        @endforeach
    </select>
</div


<!-- description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Publisher Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('publisher_name', 'Publisher Name:') !!}
    {!! Form::text('publisher_name', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Publisher Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    {!! Form::number('publisher_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Is Publish Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('is_publish', 'Is Publish:') !!}
    {!! Form::text('is_publish', null, ['class' => 'form-control']) !!}
</div> --}}



<!-- Expiration Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    {!! Form::date('expiration_date', null, ['class' => 'form-control','id'=>'expiration_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expiration_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush



<!-- Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover', 'Image de couverture:') !!}
    {!! Form::file('cover') !!}
</div>
<div class="clearfix"></div>

<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_draft', 'Brouillon ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_draft', 0) !!}
        {!! Form::checkbox('is_draft', '1', null) !!}
    </label>
</div>


<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_publish', 'Publié ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_publish', 0) !!}
        {!! Form::checkbox('is_publish', '1', null) !!}
    </label>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-light">Annuler</a>
</div>
