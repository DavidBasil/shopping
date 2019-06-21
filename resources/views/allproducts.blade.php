@foreach ($products as $product)
  <h2>{{ $product['name'] }}</h2>
  <p>{{ $product['category'] }}</p>
  <p>{{ $product['price'] }}</p>
@endforeach
