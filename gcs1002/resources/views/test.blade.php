<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing HTML</title>

    {{-- <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet"> --}}

    <!-- CSS here -->
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\assets\css\owl.carousel.min.css">
    <link rel="stylesheet" href="..\assets\css\flaticon.css">
    <link rel="stylesheet" href="..\assets\css\slicknav.css">
    <link rel="stylesheet" href="..\assets\css\animate.min.css">
    <link rel="stylesheet" href="..\assets\css\magnific-popup.css">
    <link rel="stylesheet" href="..\assets\css\fontawesome-all.min.css">
    <link rel="stylesheet" href="..\assets\css\themify-icons.css">
    <link rel="stylesheet" href="..\assets\css\slick.css">
    <link rel="stylesheet" href="..\assets\css\nice-select.css">
    <link rel="stylesheet" href="..\assets\css\style.css">

</head>

<body>

<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="HomePage"><img src="../public/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="HomePage">Home</a></li>
                                    <li><a href="ShoppingPage">shop</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li class="hot"><a href="#">Latest</a>
                                        <ul class="submenu">
                                            <li><a href="AddPage"> Product list</a></li>
                                            <li><a href="{{ url('product-list') }}"> Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ShoppingPage">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="AddPage">Blog</a></li>
                                            <li><a href="EditPage">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="LoginPage">User</a></li>
                                            <li><a href="AdLogPage">Admin</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                            <li><a href="confirmation.html">Confirmation</a></li>
                                            <li><a href="checkout.html">Product Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>

                                @if (Session::has('username') )
                                <li>Hello  {{ Session::get('username') }}  </li>
                                <br>
                                <li>Hello  {{ Session::get('id') }}  </li>
                                <br>
                                <li></li>
                                <li><a class="text-primary" href="{{route('logout')}}">  Logout</a></li>
                                @else
                                <li> <a href="LoginPage"><span class="flaticon-user"></span></a></li>
                                @endif

                                <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
</header>


<div class="container emp-profile">
    <form action="" method="get">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t39.30808-6/277247854_1583441705368679_4637151383326825226_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=eGp3crK5VJkAX-90fNk&tn=7Xnk8W1LlwG7kGqu&_nc_ht=scontent.fsgn2-4.fna&oh=00_AfChyVisgRhYb4PD8Mr5CwWZ9604oRyLYAeQT7HSQv7LQA&oe=63A4C595" alt="No Img"/>

                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                Test
                            </h5>
                            <h6>
                                Member of TimeZone
                            </h6>
                            <p class="proile-rating">USER RANK: <span> User</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">


                <input type="submit" class="profile-edit-btn" name="btnAddMore"  value="Edit" > </input>
                {{-- <a href="{{ route('update_user', $data->id) }}" class="btn btn-primary">
                    Edit </a> --}}



            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Information</p>
                    <a href="https://youtu.be/dQw4w9WgXcQ">Location</a><br/>
                    <a href="https://youtu.be/dQw4w9WgXcQ">Bank linked</a><br/>
                    <a href="https://youtu.be/dQw4w9WgXcQ">Favorite Item</a><br/>
                    <a href="https://youtu.be/dQw4w9WgXcQ">Voucher</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>123</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>test</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>test123</p>
                                    </div>
                                </div>


                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
