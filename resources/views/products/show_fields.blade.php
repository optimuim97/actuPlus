<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Sku Field -->
<div class="form-group">
    {!! Form::label('sku', 'Sku:') !!}
    <p>{{ $product->sku }}</p>
</div>

<!-- Image Url Field -->
<div class="form-group">
    {!! Form::label('image_url', 'Image:') !!}
     <img src="{{ $product->image_url }}" alt="{{ $product->image_url }}">
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Prix:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Display Price Field -->
<div class="form-group">
    {!! Form::label('display_price', 'Prix Exposée:') !!}
    <p>{{ $product->display_price }}</p>
</div>

<!-- Pourcentage Field -->
<div class="form-group">
    {!! Form::label('pourcentage', 'Pourcentage:') !!}
    <p>{{ $product->pourcentage }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Date de Création :') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Date de la derniere modification:') !!}
    <p>{{ $product->updated_at }}</p>
</div>

