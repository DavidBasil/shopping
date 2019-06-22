<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

@foreach ($products as $product)
  <h2>{{ $product->name }}</h2>
  <p>{{ $product->type }}</p>
  <p>{{ $product->description }}</p>
  <p>{{ $product->price }}</p>
@endforeach
