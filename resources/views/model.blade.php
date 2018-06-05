<!doctype html>
<html lang="{{ app()->getLocale()}}">
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport">
    <title>U</title>
    
   
</head>
<body>
    <table class="table" style="width:50%">
       <thead class="thead-inverse">
    	   <tr>
    		  <td>Имя</td>
              <td>Фамилия</td>
              <td>Участок</td>
    	   <tr>
        </thead> 
        <tbody>
            @foreach($flights as $user)  
        <tr>  
              <td>{{$user->name}}</td>
              <td>{{$user->surname}}</td>
        	  <td>{{$user->sector}}</td>
        	  <td style="width:15%"><a href = "{{route('edit', $user->id)}}"><button type="button" class="btn btn-outline-primary">Изменить</button></a></td>
              <td style="width:15%"><a href = "{{route('delete', $user->id)}}"><button type="button" class="btn btn-outline-danger">Удалить</button></a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
    <a href = "add" ><button type="button" class="btn btn-outline-success">Добавить</button>
</body>

   
  </html>