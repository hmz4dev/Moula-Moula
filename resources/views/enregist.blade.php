@extends('layouts.master')

@section('title', 'Sign ')
    
@section('content')
   
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
<div class="col-md-8 col-md-offset-4">
                    <div class=class="col-md-6 col-md-offset-3">
                      <form class="form-signin" method="Post" action="/regist">
        <h2 class="form-signin-heading">Registration </h2>
        
        <label for="name" class="sr-only">User name</label>
        <input type="name" id="name" class="form-control" placeholder="Username" required autofocus>

        <br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>

         <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        
          
       <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
                    
                    </div>
     
      
  </div>
</body>
</html>
@stop