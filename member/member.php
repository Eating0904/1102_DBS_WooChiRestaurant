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

    <script src="../static/js/member.js"></script>

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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    會員帳號
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">基本資料</a>
                    <a class="dropdown-item" href="#">帳號設定</a>
                    <a class="dropdown-item" href="#">聯繫客服</a>
                    <div class="dropdown-divider"></div>
                    <button class="btn btn-primary" type="submit">登出</button>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    
    <div class="row">
        <div class="col-2">
            <h3>會員專區</h3>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">基本資料</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">帳號設定</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">訂單紀錄</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- 基本資料 -->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h4>基本資料</h4>
                    <div id="member">
                        <span>姓名 : </span><br>
                        <span>連絡電話 : </span><br>
                        <span>聯絡信箱 : </span><br>
                        <button type="button" class="btn btn-primary btn-sm">編輯</button>
                        <hr>
                        <span>會員點數 : </span><br>
                    </div>
                    <!-- 當按下編輯按鈕 -->
                    <div id="editmember">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">姓名</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">連絡電話</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">連絡信箱</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="">
                        </div>
                        <button type="button" class="btn btn-primary btn-sm">儲存變更</button>
                    </div>
                </div>
                <!-- 帳號設定 -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h4>帳號設定</h4>
                    <div id="account">
                        <span>帳號 : </span><br>
                        <span>密碼 : </span><br>
                        <button type="button" class="btn btn-primary btn-sm">編輯</button>
                    </div>
                    <!-- 當按下編輯按鈕 -->
                    <div id="editaccount">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">帳號</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">密碼</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="">
                        </div>
                        <button type="button" class="btn btn-primary btn-sm">儲存變更</button>
                    </div>
                </div>
                <!-- 訂單紀錄 -->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h4>訂單紀錄</h4>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">日期</th>
                                <th scope="col">時間</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <span><td>2022-05-08</td></span>
                                <span><td>14:00</td></span>
                                <td>
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="checkbox" checked> 詳細資料
                                        </label>
                                    </div>
                                </td>   
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div>
                                        <span>姓名 : </span><br>
                                        <span>電話 : </span><br>
                                        <span>信箱 : </span><br>
                                        <span>座位區域 : </span><br>
                                        <span>用餐人數 : </span><br>
                                        <span>領養意願 : </span><br>
                                        <span>備註 : </span><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <span><td>2022-05-09</td></span>
                                <span><td>17:00</td></span>
                                <td>
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="checkbox" checked> 詳細資料
                                        </label>
                                    </div>
                                </td>   
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div>
                                        <span>姓名 : </span><br>
                                        <span>電話 : </span><br>
                                        <span>信箱 : </span><br>
                                        <span>座位區域 : </span><br>
                                        <span>用餐人數 : </span><br>
                                        <span>領養意願 : </span><br>
                                        <span>備註 : </span><br>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>