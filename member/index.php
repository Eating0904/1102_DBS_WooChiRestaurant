<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/DBS_WooChi_Restaurant/static/css/w3.css">
    <script src="/DBS_WooChi_Restaurant/static/js/member.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="w3-sidebar w3-light-grey w3-bar-block">
                    <h2 class="w3-bar-item">會員專區</h2>
                    <a href="#" class="w3-bar-item w3-button"><label>基本資料</label></a>
                    <a href="#" class="w3-bar-item w3-button"><label>我的帳號</label></a>
                    <a href="#" class="w3-bar-item w3-button"><label>訂單紀錄</label></a>
                </div>
            </div>
            <div class="col-sm-10">
                <!--基本資料-->
                <div>
                    <h3>基本資料</h3>
                    <form action="" id="member"></form>
                    <button>儲存變更</button>
                </div>

                <!--我的帳號-->
                <div>
                    <h3>我的帳號</h3>
                    <form action="" id="account"></form>
                    <button>儲存變更</button>
                </div>

                <!--訂單紀錄-->
                <div>
                    <h3>訂單紀錄</h3>
                    <div>
                        <form action="" id="o_id">
                            編號 : <input type="text" placeholder="請輸入訂單編號">
                            <button>查詢</button>
                        </form>
                    </div>

                    <div>
                        <form action="" id="o_id">
                            日期 : <input type="text" placeholder="請輸入日期">
                            <button>查詢</button><br>
                            <small class="text-muted"> 格式 : YYYY-MM-DD (ex:2022-05-05)</small>
                        </form>
                    </div>
                </div>

            <div> 
        </div>
    </div>
</body>
</html>