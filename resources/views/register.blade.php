<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
@csrf
<div class="container">
    <div class="p-5">
        <h1>註冊頁</h1>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">姓名</label>
                <input type="text" class="form-control" id="user_name" aria-describedby="user_name_Help">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">帳號</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">確認密碼</label>
                <input type="password" class="form-control" id="password_confirmation">
            </div>
            {!! htmlScriptTagJsApi(config('recaptcha')) !!}
            {!! htmlFormSnippet() !!}
            <div>
                <a href="javascript:void(0)" id = "btn" >submit</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<script>
    $('#btn').click(function () {

        if ($('#user_name').val() == "") {
            alert('請輸入姓名');
            return ;
        }

        if ($('#email').val() == "") {
            alert('請輸入帳號(email)');
            return ;
        }

        if ($('#password').val() == "") {
            alert('請輸入密碼');
            return ;
        }

        if ($('#password').val() != $('#password_confirmation').val()) {
            alert('密碼輸入不正確');
            return ;
        }

        if (grecaptcha.getResponse() == "") {
            alert('請勾選機器人驗證')
            return ;
        }

        $.ajax({
            url: "{{route('register')}}",
            type: 'POST',
            data: {'_token': $("input[name='_token']").val(), 'name': $('#user_name').val(), 'email': $('#email').val(), 'password': $('#password').val(), 'password_confirmation': $('#password_confirmation').val(), 'recaptcha-response' : grecaptcha.getResponse()},

            success: function (r) {
                alert(r.msg);
            },
            error: function () {
                alert('註冊失敗');
            }
        });
    })
</script>
