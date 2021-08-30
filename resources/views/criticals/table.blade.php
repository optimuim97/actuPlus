<div class="table-responsive">
    <table class="table" id="criticals-table">
        <thead>
            <tr>
                <th>#ID de Publication</th>
                <th>Utilisateur</th>
                <th>Contenu</th>
                <th>Titre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($criticals as $critical)
            <tr>
                       <td>{{ $critical->post_id }}</td>
            <td>{{ $critical->user_id }}</td>
            <td>{{ $critical->content }}</td>
            <td>{{ $critical->title }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['criticals.destroy', $critical->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('criticals.show', [$critical->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('criticals.edit', [$critical->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
