<div class="table-responsive">
    <table class="table" id="commentTypes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Slug</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($commentTypes as $commentType)
            <tr>
                       <td>{{ $commentType->name }}</td>
            <td>{{ $commentType->description }}</td>
            <td>{{ $commentType->slug }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['commentTypes.destroy', $commentType->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('commentTypes.show', [$commentType->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('commentTypes.edit', [$commentType->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
