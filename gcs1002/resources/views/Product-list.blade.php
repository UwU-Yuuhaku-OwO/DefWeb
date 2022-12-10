<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-mid-12">
                <table class="table table-hover">
                    <caption align="top"><h2>Product List</h2></caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Products</th>
                            <th>Prices</th>
                            <th>Img</th>
                            <th>Category</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $product )


                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a href="#">
                                <img src="assets\ProductImg\{{$product->img}}"
                                alt="No Img"  height="120px" width="160px">
                                </a>
                            </td>
                            <td>{{ $product->cat_name }}</td>

                            <td>
                                <a href="{{ route('update_product', $product->id) }}" class="btn btn-primary" > Edit </a> |
                                <a href="{{ 'product-delete/'. $product->id }}" class="btn btn-danger" > Delete </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
