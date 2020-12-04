
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
    <div class="container">
        <div class="p-5">
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
                    <label for="exampleInputPassword1">密碼</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">確認密碼</label>
                    <input type="password" class="form-control" id="confirm_password">
                </div>
{{--                <div class="form-group form-check">--}}
{{--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                </div>--}}
                {!! htmlScriptTagJsApi(config('recaptcha')) !!}
                {!! htmlFormSnippet() !!}
                <a href="javascript:void(0)" class="btn btn-info" role="button">submit</a>
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

        if ($('#confirm_password').val() != $('#password')) {
            alert('密碼輸入不正確');
            return ;
        }
    })
</script>
