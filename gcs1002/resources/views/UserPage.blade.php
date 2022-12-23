



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link type="text/css" rel="stylesheet" href="assets/css/profile.css"> --}}
    <link href="../assets/css/profile.css"rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">



    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>User Profile</title>
</head>




<body>
    <div class="container emp-profile">
        @if ($user!==null)
        <form action="{{ url('UserEditPage/',$user->id) }}" method="get">
            @csrf
            <div class="row">

                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://i.ytimg.com/vi/Ux5cQbO_ybw/maxresdefault.jpg" alt="No Img"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                    {{ $user->name }}
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
                    <a href="{{ route('update_user', $user->id) }}" type="submit" class="btn btn-primary" name="btnAddMore" >Edit</a>
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
                                            <p>{{ $user->id }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Name:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->username }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->email }}</p>
                                        </div>
                                    </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>
            <a href="{{ url('HomePage') }}" class="btn btn-primary">
            Home </a>
            @else
            <P>User was deleted </P>
             <a href="{{route('logout')}}" class="btn btn-primary">  Home </a>
            @endif

        </div>
</body>
</html>
