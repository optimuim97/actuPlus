<div class="table-responsive">
    <table class="table" id="userLists-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Image</th>
                <th>Type d'Utilisateur</th>
                {{-- <th>Password</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userLists as $userList)
                <tr>
                    <td>{{ $userList->name }}</td>
                    <td>{{ $userList->email }}</td>
                    <td>{{ $userList->image }}</td>
                    <td>{{ $userList->user_type }}</td>
                    {{-- <td>{{ $userList->password }}</td> --}}
                    <td class=" text-center">
                        {!! Form::open(['route' => ['userLists.destroy', $userList->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('userLists.show', [$userList->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                            <a href="{!! route('userLists.edit', [$userList->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
