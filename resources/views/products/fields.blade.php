<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_url', 'Image:') !!}
    {!! Form::file('image_url') !!}
</div>
<div class="clearfix"></div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Prix:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Display Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('display_price', 'Prix Exposée:') !!}
    {!! Form::text('display_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Pourcentage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pourcentage', 'Pourcentage:') !!}
    {!! Form::number('pourcentage', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregister', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-light">Annuler</a>
</div>
