<div class="table-responsive">
    <table class="table" id="entities-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Logo</th>
                <th>Photo</th>
                <th>Type d'entité</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td>{{ $entity->name }}</td>
                    <td>{!! $entity->description !!}</td>
                    <td> <img src="{{ $entity->logo }}" alt="{{ $entity->logo }}" srcset="" width="100" height="100"></td>
                    <td> <img src="{{ $entity->photo_url }}" alt="{{ $entity->photo_url }}" srcset="" width="100" height="100"></td>
                    <td>{{ $entity->entity_type_id }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['entities.destroy', $entity->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('entities.show', [$entity->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                            <a href="{!! route('entities.edit', [$entity->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
