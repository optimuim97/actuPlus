<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titre:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- Is Draft Field -->
@php
    $user = Auth::user();
    $user_type = $user->user_type;
@endphp

<div class="form-group col-sm-6">
    {!! Form::label('entity_id', 'Entité :') !!}
    <select name="entity_id" id="entity_id" class="form-control">
                <option 
                    @if ($user_type == 'entity')
                        @php
                            $entity = \App\Models\Entity::where('email', $user->email)->first();
                        @endphp
                        value="{{ $entity->id }}"
                    @else
                        value=""
                    @endif
                >
                    {{ $user_type == 'entity' ? $user->name  : 'Choisir une entités si votre post est lié a une entité'}}
                </option>

                @if ($user_type !='entity')
                @foreach ($entities as $entity)
                <option value="{{ $entity->id }}">
                    {{ $entity->name }}
                </option>   
                @endforeach
                @endif  
    </select>
</div>


<!-- description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
</div>


<!-- Publisher Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('publisher_name', 'Publisher Name:') !!}
    {!! Form::text('publisher_name', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Publisher Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    {!! Form::number('publisher_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Is Publish Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('is_publish', 'Is Publish:') !!}
    {!! Form::text('is_publish', null, ['class' => 'form-control']) !!}
</div> --}}



<!-- Expiration Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    {!! Form::date('expiration_date', null, ['class' => 'form-control','id'=>'expiration_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expiration_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush



<!-- Cover Field -->


<div class="form-group col-sm-6">
    {!! Form::label('cover', 'Image de couverture:') !!}
    {!! Form::file('cover') !!}

    <div>
        @isset($post)      
            @if ($post->cover != null)
                <img src="{{$post->cover}}" width="90" height="90" alt="{{$post->cover}}">
            @endif
        @endisset
    </div>
</div>

<div class="clearfix"></div>

<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_draft', 'Brouillon ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_draft', 0) !!}
        {!! Form::checkbox('is_draft', '1', null) !!}
    </label>
</div>


<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_publish', 'Publié ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_publish', 0) !!}
        {!! Form::checkbox('is_publish', '1', null) !!}
    </label>
</div>

<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_publish', ' Masqué au utilisateur ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_visible_by_user', 0) !!}
        {!! Form::checkbox('is_visible_by_user', '1', false) !!}
    </label>
</div>

<!-- Is Draft Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('is_publish', 'Publié ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_visible_by_agent', 0) !!}
        {!! Form::checkbox('is_visible_by_agent', '1', null) !!}
    </label>
</div> --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-light">Annuler</a>
</div>
