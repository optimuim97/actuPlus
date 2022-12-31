<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom :') !!}
    <p>{{ $agent->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $agent->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Numéro de téléphone:') !!}
    <p>{{ $agent->phone }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Mot de passe:') !!}
    <p>{{ $agent->password }}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <img src="{{ $agent->photo }}" alt="{{ $agent->photo }}"> 
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $agent->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Date de la derniere modification:') !!}
    <p>{{ $agent->updated_at }}</p>
</div>

