<!DOCTYPE html>
<html>
<head>
    <title>Marches Special Woodst</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/adding.css') }}">
</head>
<body>

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">Woodcase<span>.</span></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="product/adding.php" class="fas fa-shopping-cart"></a>
            <a href="user/profile.html" class="fas fa-user"></a>
        </div>
    </header>

    <div class="login-page">
        <div class="form">
        <form action="{{ url('product-save') }}" method="post">
            @csrf
            <input type="text" class="form-control" name="product" id="product" placeholder="product" />
            <input type="text" class="form-control" name="price" id="price" placeholder="prices" />
            <input type="" class="form-control" name="categoryID" id="categoryID" placeholder="" />
                <select name="categoryID" class="form-control">
                    @foreach ( $data as $categories )
                    <option value="{{ $categories->id }}">
                    {{ $categories->cat_name }}
                    </option>
                    @endforeach
                </select>

            <input type="file" class="form-control" name="img" id="img" placeholder="Picture of product (PNG, JEPG)" />
            <button type="submit" class="form-control" name="reg-btn" >Add product</button>
            <p class="message">Go back to <a href="shopping.blade.php">Main page</a></p>


        </form>
        </div>
    </div>


</body>
</html>

