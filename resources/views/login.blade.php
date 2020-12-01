<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
@csrf
<div class="container">
    <div class="p-5">
        <form>
            <h1>登入頁</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">帳號</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div>
                <a href="javascript:void(0)" id = "btn" >submit</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<script>
    $('#btn').click(function (){

        if ($('#email').val() == "") {
            alert('帳號不得為空');
            return;
        }

        if ($('#password').val() == "") {
            alert('密碼不得為空');
            return;
        }

        $.ajax({
            url:"{{route('memberLogin')}}",
            type:'POST',
            data:{'_token': $("input[name='_token']").val(), 'email': $('#email').val(), 'password': $('#password').val()},

            success: function (r) {
                alert(r.msg);
            },

            error: function () {
                alert('登入失敗')
            }
        })
    })
</script>
