@foreach ($cartItems->items as $item)
  <td class="active">{{ $item['data']['name'] }}</td>
  <td class="active">
    <img 
      src="{{ Storage::disk('local')->url('product_images/'.$item['data']['image']) }}">
  </td>
  <td class="active">{{ $item['data']['description'] }}</td>
  <td class="active">{{ $item['data']['type'] }}</td>
  <td class="active">{{ $item['data']['price'] }}</td>
@endforeach
