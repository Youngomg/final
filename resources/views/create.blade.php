<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>U</title>
    
   
</head>

    <div>   
        <h3>Пользователи</h3>
      
        
      <form action="users" method="post">
        <label for="name">name</label>
        <input type="text" name="name">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="submit" value="Submit">
      </form>
  </div>


   
  