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
            <div class="form-group">
                <label for="exampleInputEmail1">標題</label>
                <input type="text" class="form-control" id="title" >
            </div>
            <div class="form-group">
                <label for="password">內容</label>
                <input type="text" class="form-control" id="content">
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

        if ($('#title').val() == "") {
            alert('請輸入標題');
            return;
        }

        if ($('#content').val() == "") {
            alert('請輸入內容');
            return;
        }

        $.ajax({
            url:"{{route('creatContentPages')}}",
            type:'POST',
            data:{'_token': $("input[name='_token']").val(), 'title': $('#title').val(), 'content': $('#content').val()},

            success: function () {
                alert('新增成功')
            },

            error: function () {
                alert('新增失敗')
            }
        })
    })
</script>
