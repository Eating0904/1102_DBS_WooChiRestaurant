<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- <script src="/DBS_WooChi_Restaurant/static/js/home.js"></script> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/DBS_WooChi_Restaurant/home">
            <img src="/DBS_WooChi_Restaurant/logo.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/DBS_WooChi_Restaurant/menu">菜單&守則</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/DBS_WooChi_Restaurant/pets">店內寵物</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/DBS_WooChi_Restaurant/rate">評價</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/DBS_WooChi_Restaurant/order">訂位</a>
            </li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                我的帳號
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">會員專區</button>
                <button class="dropdown-item" type="button">聯繫客服</button>
                <button class="dropdown-item" type="button">登出</button>
            </div>
        </div>
    </nav>


    <div class="container">
        <h2>店內守則&菜單</h2>
        <div class="row">
            <div class="col-12">
                <!-- <form action="/DBS_WooChi_Restaurant/static/js/menu.js" id="menu"></form> -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/DBS_WooChi_Restaurant/logo.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/DBS_WooChi_Restaurant/logo2.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/DBS_WooChi_Restaurant/logo3.png" class="d-block w-50" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>