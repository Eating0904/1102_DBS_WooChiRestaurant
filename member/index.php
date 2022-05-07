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

    <script src="/DBS_WooChi_Restaurant/static/js/member.js"></script>
    <style>
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #000 !important;
            background-color: #e0e0e0 !important;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-2">
            <h2>會員專區</h2>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-member-tab" data-toggle="pill" href="#v-pills-member" role="tab" aria-controls="v-pills-member" aria-selected="true">基本資料</a>
            <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">我的帳號</a>
            <a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false">訂單紀綠</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <!--基本資料-->
                <div class="tab-pane fade show active" id="v-pills-member" role="tabpanel" aria-labelledby="v-pills-member-tab">
                    <h3>基本資料</h3>
                    <form action="" id="member">
                        <button>儲存變更</button>
                    </form>    
                </div>
                <!--我的帳號-->
                <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                    <h3>我的帳號</h3>
                        <form action="" id="account"></form>
                        <button>儲存變更</button>
                </div>
                <!--訂單紀錄-->
                <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                    <h3>訂單紀錄</h3>
                    <div>
                        <form action="" id="searchdate">
                            編號 : <input type="text" placeholder="請輸入訂單編號">
                            <img type="button" src="/DBS_WooChi_Restaurant/icon_search.png" width="30" height="30" alt="">
                        </form>
                    </div>
    
                    <div>
                        <form action="" id="searchdate">
                            日期 : <input type="text" placeholder="請輸入日期">
                            <img type="button" src="/DBS_WooChi_Restaurant/icon_search.png" width="30" height="30" alt=""><br>
                            <small class="text-muted"> 格式 : YYYY-MM-DD (ex:2022-05-05)</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- <div class="container-fluid">
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
                基本資料
                <div>
                    <h3>基本資料</h3>
                    <form action="" id="member">
                        <button>儲存變更</button>
                    </form>
                </div>

                我的帳號
                <div>
                    <h3>我的帳號</h3>
                    <form action="" id="account"></form>
                    <button>儲存變更</button>
                </div>

                訂單紀錄
                <div>
                    <h3>訂單紀錄</h3>
                    <div>
                        <form action="" id="searchdate">
                            編號 : <input type="text" placeholder="請輸入訂單編號">
                            <img type="button" src="/DBS_WooChi_Restaurant/icon_search.png" width="30" height="30" alt="">
                        </form>
                    </div>

                    <div>
                        <form action="" id="searchdate">
                            日期 : <input type="text" placeholder="請輸入日期">
                            <img type="button" src="/DBS_WooChi_Restaurant/icon_search.png" width="30" height="30" alt=""><br>
                            <small class="text-muted"> 格式 : YYYY-MM-DD (ex:2022-05-05)</small>
                        </form>
                    </div>
                </div>

            <div> 
        </div>
    </div> -->
</body>
</html>