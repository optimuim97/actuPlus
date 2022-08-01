<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom :') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email :') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot De Passe :') !!}
    {!! Form::text('password', null, ['class' => 'form-control', 'type'=> 'password']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo :') !!}
    {!! Form::file('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_url', 'Image :') !!}
    {!! Form::file('photo_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Description -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Descritpion :') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>


<!-- Entity Type Idl Field -->
<div class="form-group col-sm-12 col-lg-12">
    @php
        $entities = \App\Models\EntityType::all();
    @endphp

    <select name="entity_type_id" id="entity_type_id" class="form-control">
        @foreach ($entities as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('entities.index') }}" class="btn btn-light">Cancel</a>
</div>
