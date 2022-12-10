<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="public\assets\css\profile.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>User Profile</title>
</head>
<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t39.30808-6/240668925_1236485373446100_5372994894629625240_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=YSJvWqSvK9oAX9MG3qd&_nc_ht=scontent.fsgn2-6.fna&oh=00_AT-XWztm6ofRQD5Xhejt7qWWDvF-nXG1WhLYrciXCRexUA&oe=631947E3" alt=""/>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                    PHAM QUOC TUAN
                                </h5>
                                <h6>
                                    Student of University of Greenwich
                                </h6>
                                <p class="proile-rating">USER RANK: <span> Admin</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" href='project/shopping.php' value="Home" ></input>

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
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>GCS210491</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>PHAM QUOC TUAN</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>tuanpqgcs210491@fpt.edu.vn</p>
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
