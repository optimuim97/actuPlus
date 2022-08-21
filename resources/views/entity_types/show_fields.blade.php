<div class="row">

    <!-- Name Field -->
    <div class="col-md-6">
        {!! Form::label('name', 'Nom:') !!}
        <p>{{ $entityType->name }}</p>
    </div>

    <!-- Description Field -->
    <div class="col-md-6">
        {!! Form::label('description', 'Description:') !!}
        <p>{{ $entityType->description }}</p>
    </div>

    <!-- Created At Field -->
    <div class="col-md-6">
        {!! Form::label('created_at', 'Date de creation:') !!}
        <p>{{ $entityType->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="col-md-6">
        {!! Form::label('updated_at', 'Date de la derniere modification:') !!}
        <p>{{ $entityType->updated_at }}</p>
    </div>
</div>


