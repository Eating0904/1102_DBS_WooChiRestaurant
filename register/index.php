<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div>
            <h3>歡迎加入WooChi餐廳會員</h3>
        </div>
        <form>
            <div class="form-group">
                <h5>帳號密碼</h5>
                帳號 : <input type="text" class="form-control" placeholder="請輸入帳號">
                密碼 : <input type="password" class="form-control" placeholder="請輸入密碼">
            </div>
            <hr>
            <div class="form-group">
                <h5>基本資料</h5>
                姓名 : <input type="text" class="form-control" placeholder="請輸入姓名">
                聯絡電話 : <input type="text" class="form-control" placeholder="請輸入聯絡電話">
                聯絡信箱 : <input type="text" class="form-control" placeholder="請輸入聯絡信箱">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">加入</button>
        </form>
        <div>
            已經是會員了嗎?
            <a href="../login">立即登入</a>
        </div>
    </div>
</body>
</html>