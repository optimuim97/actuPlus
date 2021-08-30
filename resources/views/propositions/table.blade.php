<div class="table-responsive">
    <table class="table" id="propositions-table">
        <thead>
            <tr>
                <th>Nom </th>
                <th>Description</th>
                <th>Images</th>
                <th>Video Url</th>
                <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propositions as $proposition)
            <tr>
                       <td>{{ $proposition->name }}</td>
            <td>{{ $proposition->description }}</td>
            <td>{{ $proposition->images }}</td>
            <td>{{ $proposition->video_url }}</td>
            <td>{{ $proposition->image_urls }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['propositions.destroy', $proposition->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('propositions.show', [$proposition->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('propositions.edit', [$proposition->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
