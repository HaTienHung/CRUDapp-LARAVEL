<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Create product</h1>
  <div>
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
  </div>
  <form method="post" action="{{route('product.update',['product'=>$product])}}">
    @csrf
    @method('put')
    <table>
      <tr>
        <th>Name</th>
        <td>
          <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </td>
      </tr>
      <tr>
        <th>Qty</th>
        <td>
          <input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
        </td>
      </tr>
      <tr>
        <th>Price</th>
        <td>
          <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </td>
      </tr>
      <tr>
        <th>Description</th>
        <td>
          <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </td>
      </tr>
    </table>
    <input type="submit" value="save a new Product">
  </form>
</body>

</html>