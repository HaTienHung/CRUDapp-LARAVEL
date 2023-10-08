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
  <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <table>
      <tr>
        <th>Name</th>
        <td>
          <input type="text" name="name" placeholder="Name">
        </td>
      </tr>
      <tr>
        <th>Qty</th>
        <td>
          <input type="text" name="qty" placeholder="Quantity">
        </td>
      </tr>
      <tr>
        <th>Price</th>
        <td>
          <input type="text" name="price" placeholder="Price">
        </td>
      </tr>
      <tr>
        <th>Description</th>
        <td>
          <input type="text" name="description" placeholder="Description">
        </td>
      </tr>
    </table>
    <input type="submit" value="save a new Product">
  </form>
</body>

</html>