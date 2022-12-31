<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<!-- User Type Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('user_type', 'Type d\'utilisateur:') !!}
    {!! Form::text('user_type', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Password Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregister', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('userLists.index') }}" class="btn btn-light">Annuler</a>
</div>
