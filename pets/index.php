<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    
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
        <div>
            <p>
                <button type="button" class="btn btn-outline-secondary">Dogs</button>
                <button type="button" class="btn btn-outline-secondary">Cats</button>
            </p>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/DBS_WooChi_Restaurant/logo.png" alt="Image">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">PET NAME</h5>
                                <p class="card-text">
                                    品種 : <br>
                                    體型 : <br>
                                    性別 : <br>
                                    年齡 : <br>
                                    個性 : <br>    
                                    <small class="text-muted"> 晶片y 結紮y </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/DBS_WooChi_Restaurant/logo.png" alt="Image">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">PET NAME</h5>
                                <p class="card-text">
                                    品種 : <br>
                                    體型 : <br>
                                    性別 : <br>
                                    年齡 : <br>
                                    個性 : <br>    
                                    <small class="text-muted"> 晶片y 結紮y </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>