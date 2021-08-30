<div class="row">
        <!-- Title Field -->
        <div class="col-md-6">
            {!! Form::label('title', 'Titre:') !!}
            <p>{{ $post->title }}</p>
        </div>

        <!-- description Field -->
        <div class="col-md-6 card">
            {!! Form::label('description', 'Description:') !!}
            <p>{!! $post->description !!}</p>
        </div>

        <!-- Publisher Name Field -->
        {{-- <div class="col-md-6">
            {!! Form::label('publisher_name', 'Publisher Name:') !!}
            <p>{{ $post->publisher_name }}</p>
        </div> --}}

        <!-- Publisher Id Field -->
        {{-- <div class="col-md-6">
            {!! Form::label('publisher_id', 'Publisher Id:') !!}
            <p>{{ $post->publisher_id }}</p>
        </div> --}}

        <!-- Is Publish Field -->
        <div class="col-md-6">
            {!! Form::label('is_publish', 'Publié ? :') !!}
            <p>{{ $post->is_publish == true ? "Oui" : 'Non'}}</p>
        </div>


        <!-- Is Draft Field -->
        <div class="col-md-6">
            {!! Form::label('is_draft', ' Brouillon ?:') !!}
            <p>{{ $post->is_draft == true ? "Oui" : 'Non'}}</p>
        </div>


        <!-- Is Visible By User Field -->
        <div class="col-md-6">
            {!! Form::label('is_visible_by_user', 'Rendre visible au utilisateur ?:') !!}
            <p>{{ $post->is_visible_by_user == true ? "Oui" : "Non" }}</p>
        </div>

        <!-- Is Visible By Agent Field -->
        {{-- <div class="col-md-6">
            {!! Form::label('is_visible_by_agent', 'Is Visible By Agent:') !!}
            <p>{{ $post->is_visible_by_agent }}</p>
        </div> --}}

        <!-- Expiration Date Field -->
        <div class="col-md-6">
            {!! Form::label('expiration_date', 'Expiration Date:') !!}
            <p>{{ $post->expiration_date }}</p>
        </div>

        <!-- Medias Field -->
        {{-- <div class="col-md-6">
            {!! Form::label('medias', 'Medias:') !!}
            <p>{{ $post->medias }}</p>
        </div> --}}

        <!-- Cover Field -->
        <div class="col-md-6">
            {!! Form::label('cover', 'Image:') !!}
            <br>
            <img src="{{ $post->cover }}" class="rounded float-end mb-2" alt="{{ $post->cover }}" srcset="" width="100" height="100">
        </div>

        <!-- Created At Field -->
        <div class="col-md-6">
            {!! Form::label('created_at', 'Date de création :') !!}

            <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>

        <!-- Updated At Field -->
        <div class="col-md-6">
            {!! Form::label('updated_at', 'Date de la dernière:') !!}
            <p>{{ $post->updated_at->diffForHumans() }}</p>
        </div>


</div>


