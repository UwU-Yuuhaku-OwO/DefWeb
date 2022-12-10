<!DOCTYPE html>
<html>
<head>
    <title>Marches Special Woodst</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/shopping.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
<body>

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">Woodcase<span>.</span></a>
        <nav class="navbar">
            <a href="HomePage">home</a>
            <a href="Product-add">products</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="{{ url('product-add') }}" class="fas fa-shopping-cart"></a>
            <a href="user/profile.html" class="fas fa-user"></a>
        </div>

    </header>

    <div class="title">
        <div class="picture-title">
            <h1 class="text-title" style="text-shadow: 2px 2px 4px black;">Phone wood case</h1>
        </div>
    </div>

    <section class="products" id="products">

        <h1 class="heading"> Our <span>Products</span> </h1>

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
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $product )


                            {{-- <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <a href="#">
                                    <img src="ProductImg\{{$product->img}}"
                                    alt="No Img"  height="120px" width="160px"
                                    title="{{ $product->productDetails }}">
                                    </a>
                                </td> --}}

                                <div class="box-container">
                                    <div class="box">
                                            <div class="image">
                                                <img src="ProductImg\{{$product->img}}" alt="No Img" title="{{ $product->productDetails }}">
                                                <div class="icons">
                                                    <a href="https://youtu.be/dQw4w9WgXcQ" class="cart-btn">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3>{{$product->product}}</h3>
                                                <div class="price"> ${{$product->price}} </div>
                                            </div>
                                        </div>
                                </div>
                                <td>
                                    <a href="{{ 'product-edit/'. $product->id }}" class="btn btn-primary" > Edit </a> |
                                    <a href="{{ 'product-delete/'. $product->id }}" class="btn btn-danger" > Delete </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        </div>

        </div>

    </section>

    <section class="footer">

        <div class="box-container">


            <div class="box">
                <h3>About Us</h3>
                <a href="https://youtu.be/dQw4w9WgXcQ">Marches WoodShell Company (MWS)</a>
                <a href="https://youtu.be/dQw4w9WgXcQ">CEO: Pham Quoc Tuan</a>
                <a href="https://youtu.be/dQw4w9WgXcQ">Website Management: Pham Quoc Tuan</a>
            </div>


             <div class="box">
                <h3>contact info</h3>
                <a href="https://youtu.be/dQw4w9WgXcQ">+123-456-7890</a>
                <a href="https://youtu.be/dQw4w9WgXcQ">tuanpqgcs210491@fpt.edu.vn</a>
                <a href="https://youtu.be/dQw4w9WgXcQ">University of Greenwich, 20-Republic Street</a>
            </div>

        </div>

        <div class="credit"> OwO | created by <span> WhoTillBunReal </span> | OwO </div>

    </section>

</body>
</html>



<!-- card one -->
<section class="products" id="products">
    <div class="container" style="margin-top:20px;">
        <div class="row">
                <table class="table table-hover">
                    <tbody>
                        @foreach ($data as $product )
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img src="assets\ProductImg\{{$product->img}}" alt="">
                                    <div class="img-cap">
                                        <span>Add to cart</span>
                                    </div>
                                    <div class="favorit-items">
                                        <span class="flaticon-heart"></span>
                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><a href="product_details.html">{{$product->product}}</a></h3>
                                    <span>$ {{$product->price}}</span>
                                </div>
                            </div>
                        </div>

                            {{-- <div class="box">
                                <div class="image">
                                    <img src="assets\ProductImg\{{$product->img}}" alt="No Img">
                                    <div class="icons">
                                        <a href="https://youtu.be/dQw4w9WgXcQ" class="cart-btn">add to cart</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>{{$product->product}}</h3>
                                    <div class="price"> ${{$product->price}} </div>
                                </div>
                            </div> --}}



                        @endforeach
                    </tbody>
                </table>

        </div>
    </div>
    </div>
    </div>

</section>
