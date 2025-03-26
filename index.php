<!DOCTYPE html>
<!-- saved from url=(0058)file:///C:/Users/Class1-PC12/Desktop/PHP-1/project/1.html# -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>غذا پزی سگ پز</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/VazirFD" rel="stylesheet">
    <style>
        *{font-family: Vazir FD, sans-serif}
    </style>
    <style>
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }
        
        .switch input { 
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        input:checked + .slider {
          background-color: #2196F3;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }
        
        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }
        
        .slider.round:before {
          border-radius: 50%;
        }
        </style>
</head>

<body dir="rtl" id="bdy" style="background-image: url(http://sagpaz.is-great.net/img/day-bg.jpg);background-repeat: no-repeat;background-size: cover;">
    <center>
        <!-- nav for debug spaces -->
        <br><br>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="nav">
            <a class="navbar-brand" href="http://sagpaz.is-great.net/"><img src="https://parspng.com/wp-content/uploads/2022/08/kebabpng.parspng.com_.png"
                    alt="غذا پزی سگ پز" width="50">غذا پزی سگ پز</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://sagpaz.is-great.net/support/"><span class="sr-only"><img id="sp-img" src="https://cdn-icons-png.flaticon.com/512/1884/1884190.png" alt="" width="25"> </span>پشتیبانی</a>
                    </li>
                    <div class="dropdown">
                        <button type="button" class="btn" data-bs-toggle="dropdown">
                            <span id="txt-menu" class="sr-only"><img id='menu-img' src="https://cdn-icons-png.flaticon.com/512/1046/1046849.png" alt="" width="25"> منو غذا</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><h5 class="dropdown-header">کباب ها</h5></li>
                            <li><hr class="dropdown-divider"></hr></li>
                            <li><a class="dropdown-item" href="http://sagpaz.is-great.net/kebbab/">کوبیده مرغ</a></li>
                            <li><a class="dropdown-item" href="http://sagpaz.is-great.net/kebbab/">کباب لقمه</a></li>
                            <br><br>
                            <li><h5 class="dropdown-header">سالاد ها</h5></li>
                            <li><hr class="dropdown-divider"></hr></li>
                            <li><a class="dropdown-item" href="http://sagpaz.is-great.net/salad/">سالاد سزار</a></li>
                            <li><a class="dropdown-item" href="http://sagpaz.is-great.net/salad/">سالاد شیرازی</a></li>
                        </ul>
                      </div>
                    <li class="nav-item active" style="cursor: pointer;">
                        <img id="day" width="100" src="http://sagpaz.is-great.net/img/day.png" alt="light" onclick="document.getElementById('txt-menu').className='sr-only text-light';document.getElementById('nav').className='bg-dark text-light navbar navbar-expand-lg navbar-dark fixed-top';document.getElementById('night').style='display: block';document.getElementById('day').style='display: none';document.getElementById('sp-img').src='http://sagpaz.is-great.net/img/support2.png';document.getElementById('menu-img').src='http://sagpaz.is-great.net/img/menu2.png';document.getElementById('foot').className='bg-dark text-center text-light p-5';document.getElementById('bdy').style='background-image: url(http://sagpaz.is-great.net/img/night-bg.jpg);background-repeat: no-repeat;background-size: cover';document.getElementById('bdy').className='text-light bg-dark'">
                        <img id="night" width="100" style="display: none;" src="http://sagpaz.is-great.net/img/night.png" alt="light" onclick="document.getElementById('txt-menu').className='sr-only text-dark';document.getElementById('nav').className='bg-light text-dark navbar navbar-expand-lg navbar-light fixed-top';document.getElementById('day').style='display: block';document.getElementById('night').style='display: none';document.getElementById('sp-img').src='https://cdn-icons-png.flaticon.com/512/1884/1884190.png';document.getElementById('menu-img').src='https://cdn-icons-png.flaticon.com/512/1046/1046849.png';document.getElementById('foot').className='bg-light text-center text-dark p-5';document.getElementById('bdy').style='background-image: url(http://sagpaz.is-great.net/img/day-bg.jpg);background-repeat: no-repeat;background-size: cover;';document.getElementById('bdy').className='text-dark bg-light'">
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container p-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card w-75">
                        <img class="card-img-top" src="img/kebbab.jpg" alt="kebab" width="5">
                        <div class="card-body">
                            <h5 class="card-title">کباب ها</h5>
                            <p class="card-text">خوشمزه و خواستنی</p>
                            <h6 class="card-footer btn btn-success"
                                onclick="document.location.replace('http://sagpaz.is-great.net/kebbab')">امنو امروز
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card w-75">
                        <img class="card-img-top" src="img/salad.jpg" alt="kebab" width="5">
                        <div class="card-body">
                            <h5 class="card-title">سالاد ها</h5>
                            <p class="card-text">غذا با چی میچسبه؟</p>
                            <h6 class="card-footer btn btn-success"
                                onclick="document.location.replace('http://sagpaz.is-great.net/salad')">منو امروز
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>
          
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/hamid.png" alt="حمید" class="d-block w-50">
              </div>
              <div class="carousel-item">
                <img src="img/farhad.png" alt="فرهاد" class="d-block w-50">
              </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
    </center>

    <footer id="foot" class="bg-light text-center text-dark p-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <br><br><br>
                    <h3>
                        چرا ما؟
                    </h3>
                    <h6>
                        ما اولین غذا پزی ای با منو و غذای نامرئی هستیم که در جهان فعالیت میکند و غذا هایمان نه طعم و نه بو دارند! پس کافی است یک بار امتحان کنید تا مشتریمان شوید!
                    </h6>
                </div>
                <div class="col-sm-4">
                    <h1>
                        <a class="navbar-brand"><img src="https://parspng.com/wp-content/uploads/2022/08/kebabpng.parspng.com_.png"
                            alt="غذا پزی سگ پز" width="150"><br>غذا پزی سگ پز</a>
                    </h1>
                        <h4>رضایت شما اعتماد ماست</h6>
                </div>
                <div class="col-sm-4">
                    <br><br><br>
                    <h3>
                        چرا سگ پز؟
                    </h3>
                    <h6>
                        این غذا پزی به دلیل فرمول خاص و شیوه ای نوین در صنعت غذاپزی، نام خود را به فرمول خود اختصاص داده و این نام را جهانی نموده است!
                    </h6>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>