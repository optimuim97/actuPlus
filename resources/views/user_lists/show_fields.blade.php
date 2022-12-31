<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    <p>{{ $userList->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $userList->email }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $userList->image }}</p>
</div>

<!-- User Type Field -->
<div class="form-group">
    {!! Form::label('user_type', 'Type de l\'utilisateur:') !!}
    <p>{{ $userList->user_type }}</p>
</div>

<!-- Password Field -->
{{-- <div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $userList->password }}</p>
</div> --}}

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Date de creation:') !!}
    <p>{{ $userList->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Date de la derniere modification:') !!}
    <p>{{ $userList->updated_at }}</p>
</div>

