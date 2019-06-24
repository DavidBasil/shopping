@extends('layouts.admin')

@section('body')

  <form action="/admin/update/{{ $product->id }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input 
        type="text" 
        name="name" 
        class="form-control" 
        id="name" 
        placeholder="Product Name" 
        value="{{ $product->name }}" 
        required>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input 
        type="text" 
        name="description" 
        class="form-control" 
        id="description" 
        placeholder="Descripition" 
        value="{{ $product->description }}" 
        required>
    </div>

    <div class="form-group">
      <label for="type">Type</label>
      <input 
        type="text" 
        name="type" 
        class="form-control" 
        id="type" 
        placeholder="Type" 
        value="{{ $product->type }}" 
        required>
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input 
        type="text" 
        name="price" 
        class="form-control" 
        id="price" 
        placeholder="Price" 
        value="{{ $product->price }}" 
        required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>

  </form>

@endsection
