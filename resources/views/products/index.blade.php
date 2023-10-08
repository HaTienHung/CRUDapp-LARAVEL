<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color:antiquewhite;">
  <div style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align:center">
    <h1>Products</h1>
    <div>
      @if(session()->has('success'))
      <div>
        {{session('success')}}
      </div>
      @endif
    </div>
    <a href="{{route('product.create')}}" style="text-decoration: none;font-size:large">
      Create Product
    </a>
    <div>
      <table border="1" style="width: 700px;height: auto;font-size:26px">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->qty}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->description}}</td>
          <td>
            <a href="{{route('product.edit',['product'=>$product])}}" style="text-decoration: none;color:green !important">Edit</a>
          </td>
          <td>
            <form method="post" action="{{route('product.delete',['product'=>@$product])}}">
              @csrf
              @method('delete')
              <input type="submit" value="delete" style="width: 100%;color:green">
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</body>

</html>