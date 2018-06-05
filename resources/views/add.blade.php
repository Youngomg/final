<!doctype html>
<html lang="{{ app()->getLocale()}}">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport">
    <title>U</title>
    
   
</head>
<body>
    <form method="post" action="{{ route('addpost') }}">
        {{ csrf_field()}}
        <div class="form-group">
            <label for="name" >Имя:</label>
            <input type="text" name="name" value="" class="form-control" style="width:20%">
        </div>
        <div>
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" value="" class="form-control" style="width:20%">
        </div>
        <div>
            <label for="sector">Сектор:</label>
            <input type="text" name="sector" value="" class="form-control" style="width:20%">
        </div>
        <br>
    <input class="btn btn-outline-success" type="submit" name="submit" valute="add">
</form>


</body>

   
  </html>