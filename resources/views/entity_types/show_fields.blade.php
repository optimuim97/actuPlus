<div class="row">

    <!-- Name Field -->
    <div class="col-md-6">
        {!! Form::label('name', 'Name:') !!}
        <p>{{ $entityType->name }}</p>
    </div>

    <!-- Description Field -->
    <div class="col-md-6">
        {!! Form::label('description', 'Description:') !!}
        <p>{{ $entityType->description }}</p>
    </div>

    <!-- Created At Field -->
    <div class="col-md-6">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $entityType->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="col-md-6">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $entityType->updated_at }}</p>
    </div>
</div>


