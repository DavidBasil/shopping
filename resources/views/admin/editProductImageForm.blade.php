@extends('layouts.admin')

@section('body')

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        <li>{{ $errors->all() }}</li>
      </ul>
    </div>
  @endif

  <h3>Current Image</h3>
  <div>
    <img src="{{ asset('storage') }}/product_images/{{$product['image']}}" alt="">
  </div>

  <form 
    action="/admin/updateProductImage/{{ $product->id }}" 
    method="post" 
    enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="description">Update Image</label>
      <input 
        type="file" 
        name="image" 
        placeholder="image" 
        value="{{ $product->image }}"
        required>
    </div>

    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>

@endsection
