<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Sku Field -->
<div class="form-group">
    {!! Form::label('sku', 'Sku:') !!}
    <p>{{ $product->sku }}</p>
</div>

<!-- Image Url Field -->
<div class="form-group">
    {!! Form::label('image_url', 'Image Url:') !!}
    <p>{{ $product->image_url }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Display Price Field -->
<div class="form-group">
    {!! Form::label('display_price', 'Display Price:') !!}
    <p>{{ $product->display_price }}</p>
</div>

<!-- Pourcentage Field -->
<div class="form-group">
    {!! Form::label('pourcentage', 'Pourcentage:') !!}
    <p>{{ $product->pourcentage }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $product->updated_at }}</p>
</div>

