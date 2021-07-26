<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Nom </th>
                <th>Unique Id</th>
                <th>Image</th>
                <th>Prix</th>
                <th>Prix Exposé</th>
                <th>Pourcentage</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                       <td>{{ $product->name }}</td>
            <td>{{ $product->sku }}</td>
            <td>
                 <img src="{{ $product->image_url }}" alt="product-image" srcset="{{ $product->image_url }}" width="100" height="100">
            </td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->display_price }}</td>
            <td>{{ $product->pourcentage }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
