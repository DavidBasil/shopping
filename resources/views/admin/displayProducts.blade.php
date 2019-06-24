@extends('layouts.admin')

@section('body')
<div class="table-responsive">

  <table class="table-striped">
    
    <thead>
      <tr>
        <th>#id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Type</th>
        <th>Edit Image</th>
        <th>Edit</th>
        <th>Remove</th>
      </tr>
    </thead>

    <tbody>
    @foreach($products as $product)
      <tr>
        <td>{{ $product['id'] }}</td>
        <td><img src="{{ Storage::disk('local')->url('product_images/'.$product['image']) }}" alt="" width="100"></td>
        <td>{{ $product['name'] }}</td>
        <td>{{ $product['description'] }}</td>
        <td>{{ $product['price'] }}</td>
        <td>{{ $product['type'] }}</td>
        <td>
          <a 
            {{-- href="{{ route('admin.products.editImageForm', ['id'=>$product['id']]) }}" --}}
            class="btn btn-primary">Edit Image
          </a>
        </td>
        <td>
          <a 
            {{-- href="{{ route('admin.products.editForm', ['id'=>$product['id']]) }}" --}}
            class="btn btn-primary">Edit
          </a>
        </td>
        <td>
          <a 
            {{-- href="{{ route('admin.products.delete', ['id'=>$product['id']]) }}" --}}
            class="btn btn-warning">Remove
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>

  </table>

</div>
@endsection
