<div class="table-responsive">
    <table class="table" id="likes-table">
        <thead>
            <tr>
                <th>Post Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($likes as $like)
            <tr>
                       <td>{{ $like->post_id }}</td>
            <td>{{ $like->user_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['likes.destroy', $like->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('likes.show', [$like->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('likes.edit', [$like->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
