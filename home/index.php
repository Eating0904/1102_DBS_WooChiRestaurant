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
    
    <script src="../static/js/home.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../home">
            <img src="../logo.png" width="30" height="30" alt="Image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../home">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../menu">守則&菜單</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pets">店內寵物</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../rate">關於評價</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../order">我要訂位</a>
                </li>
                <!-- if顧客未登入 -->
                <li class="nav-item">
                    <a class="nav-link" href="../register">
                        <button class="btn btn-primary btn-sm" type="submit" >加入會員</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login">
                        <button class="btn btn-primary btn-sm" type="submit" >登入</button>
                    </a>
                </li>
                <!-- if顧客已登入 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        會員專區
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../member">會員帳號</a>
                        <a class="dropdown-item" href="../membercontact">聯繫客服</a>
                        <div class="dropdown-divider"></div>
                        <button class="btn btn-primary btn-sm" type="submit">登出</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- 餐廳簡介+LOGO照片 -->
        <div class="card mb-3">
            <img src="logo_tmp.jpg" class="card-img-top" alt="Image" height="300">
            <div class="card-body">
                <h4 class="card-title">WooChi Restaurant</h4>
                <p class="card-text" id="description"></p>
            </div>
        </div>
        <!-- 餐廳基本資訊 -->
        <div>
            <h4>基本資料</h4>
            <div id="restaurant">
                <span></span> <br>
                <span>地址 : </span> <br>
                <span>連絡電話 : </span> <br>
                <span>聯絡信箱 : </span> <br>
                <span>營業時間 : </span> <br>
            </div>
        </div>
        <hr>
        <!-- 餐廳最新消息 -->
        <div>
            <h4>最新消息</h4>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">內容</th>
                        <th scope="col">發布日期</th>
                    </tr>
                </thead>
                <tbody id="news"></tbody>
        </div>
    </div>


</body>


</html>