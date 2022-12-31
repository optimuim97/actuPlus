<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Numéro de téléphone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregister', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agents.index') }}" class="btn btn-light">Annuler</a>
</div>
