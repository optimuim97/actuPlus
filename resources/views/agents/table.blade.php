<div class="table-responsive">
    <table class="table" id="agents-table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Numéro</th>
                <th>Mot de passe</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agents as $agent)
            <tr>
                <td>
                    <img src="{{ $agent->photo }}" alt="{{ $agent->photo }}" width="100" height="100">
                </td>
                <td>{{ $agent->name }}</td>
                <td>{{ $agent->email }}</td>
                <td>{{ $agent->phone }}</td>
                <td>{{ $agent->password }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('agents.show', [$agent->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                        <a href="{!! route('agents.edit', [$agent->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
