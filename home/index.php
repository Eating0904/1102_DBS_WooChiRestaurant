<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="/DBS_WooChi_Restaurant/static/js/home.js"></script>
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
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="/DBS_WooChi_Restaurant/logo.png" width="30" height="30" alt="">
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/DBS_WooChi_Restaurant/member">會員專區</a>
                <a class="dropdown-item" href="#">聯繫客服</a>
                <button type="button" class="btn btn-secondary btn-sm">登出</button>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" id="restaurant"></form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" id="description"></form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" id="news">
                    <table>
                        <tr>
                            <th>內容</th>
                            <th>發布日期</th>
                        </tr>   
                    </table>
                </form>
            </div>
        </div>


</body>

</html>