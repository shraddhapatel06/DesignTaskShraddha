<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds & Blokes</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-menu">
                        <img src="https://ipdata.co/flags/us.png" alt="US Flag"> $ US <i class="fa-solid fa-caret-down"></i> | ABOUT US
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="brand-name">
                        <div class="logo">
                            <!-- <img src="{{asset('images/logo.png')}}" alt=""> -->
                            Birds & Blokes
                        </div>
                        <div class="search-bar">
                            <input class="form-control" type="text" placeholder="What can we help you find?" aria-label="default input example">
                            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        </div>
                        <div class="menu">
                            <div class="row">
                                <div class="col-md-3">
                                    What's New
                                </div>
                                <div class="col-md-3">
                                    Shop
                                </div>
                                <div class="col-md-3">
                                    Learn
                                </div>
                                <div class="col-md-3">
                                    About
                                </div>
                                <div class="col-md-3">
                                    Contact
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="left-menu">
                        LOGIN | SIGNUP <i class="fa-solid fa-bag-shopping" style="padding-left: 80px;"></i>
                    </div>
                </div> 
            </div>
        </div>
        <div class="rectangle1">
            <img src="{{asset('images/bg-image1.jpg')}}" alt="" style="height: 1021px;width: 1498px;">
        </div>
        <div class="grids">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('images/grid-image1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Men's & Women's <br><b>Time for giving</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('images/grid-image2.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Men's & Women's <br><b>Time for giving</b></p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="slider1">
            <i class="fa-regular fa-circle-play"></i>
        </div>
        <div class="rectangle2">
            <img src="{{asset('images/bg-image2.jpg')}}" alt="" style="height: 848px;width: 1389px;">
        </div>
        <div class="rectangel2-text text-center">
            <p class="text1" style="font-size: xx-large;">Never Pay Retail Again!</p>
            <p class="text2"><b>Give Her a Symbol of Your Never-Ending Love</b></p>
            <p class="text3">We transparently build high-quality minimal watches from the finest components and materials.</p>
        </div>
        <div class="cards">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/bg-image1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Movado Men's Watch in Stainless Steel</p>
                            <p style="color: rgba(238, 183, 142, 1);">155.00$ - 200.00$</p>
                            <a href="#" class="btn btn-options btn-dark">Select Options</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/grid-image2.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Movado Men's Watch in Stainless Steel</p>
                            <p style="color: rgba(238, 183, 142, 1);">155.00$ - 200.00$</p>
                            <a href="#" class="btn btn-options btn-dark">Select Options</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/bg-image1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Movado Men's Watch in Stainless Steel</p>
                            <p style="color: rgba(238, 183, 142, 1);">155.00$ - 200.00$</p>
                            <a href="#" class="btn btn-options btn-dark">Select Options</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/grid-image2.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Movado Men's Watch in Stainless Steel</p>
                            <p style="color: rgba(238, 183, 142, 1);">155.00$ - 200.00$</p>
                            <a href="#" class="btn btn-options btn-dark">Select Options</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rectangle3">
            <div class="header2" style="background-color: rgba(238, 183, 142, 1);">
                <div class="row rect3-text">
                    <div class="col-md-8 text-center">
                        <p style="font-size: xx-large;">SWINNING FOR SWIM SEASON</p>
                        <P>Celebrate a chapter (or two) from the story of her life.</P>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-light btn-more">VIEW MORE <i class="fa-regular fa-circle-right"></i></button>
                    </div>
                </div>
            </div>
            <img src="{{asset('images/bg-image3.jpg')}}" alt="" style="height: 793px;width: 1397px;">
        </div>
        <div class="rectangle4">
            <div class="newsletter">
                <div class="row">
                    <div class="col-md-6">
                        <p style="font-size: xx-large;"><b></b>SIGN UP NEWSLATTER</p>
                        <p>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY</p>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control inputEmail" type="email" placeholder="Your Email Address">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>