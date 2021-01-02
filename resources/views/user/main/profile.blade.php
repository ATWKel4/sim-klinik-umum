<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Klinik Sehat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!--Logo -->
    <link href="assets/img/logo-klinik-sehat.png" rel="icon">
  
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ asset('./assets/css/profile.css') }}" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://lh3.googleusercontent.com/proxy/aaMvYpLxY84lzvjVTtLKhwnIZl5b635yQFRN4LnqdBxBwX1RwIWdc2DRN_q2nytQ155Nr3jMlJkIp1erL3Z8eI_w_dp9zGFeZbA7IrtKbmwlJXrmaMaxWZUWHBg" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Ubah Gambar
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{ Auth::guard('user')->user()->nama }}
                            </h5>
                            <h6>
                                Member
                            </h6>
                            <p class="proile-rating">Member since <br><span>{{ Auth::guard('user')->user()->created_at }}</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Detail</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profil"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>No. HP</p>
                    <a href="">-</a><br/>
                    <a href=""></a><br/>
                    
                    <p>Email</p>
                    <a href="">-</a><br/>
                    <a href=""></a><br/>
                    
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::guard('user')->user()->id }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::guard('user')->user()->nama }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::guard('user')->user()->tanggal_lahir }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::guard('user')->user()->alamat }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::guard('user')->user()->jenis_kelamin }}</p>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>