<div class="table-responsive">
    <table class="table" id="media-table">
        <thead>
            <tr>
                <th>Post Id</th>
        <th>Photo Url</th>
        <th>Post Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($media as $media)
            <tr>
                       <td>{{ $media->post_id }}</td>
            <td>{{ $media->photo_url }}</td>
            <td>{{ $media->post_title }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['media.destroy', $media->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('media.show', [$media->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('media.edit', [$media->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
