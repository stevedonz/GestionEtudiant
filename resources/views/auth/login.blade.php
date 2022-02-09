<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

     <link rel="stylesheet" href="{{ asset('Bootstrap v3.1.1/css/boostrap.min.css') }}">
  </head>



  <style type="text/css">
.exemple{ opacity: 0.4;
  color: black;
 }
.background-size-cover{ background-size : cover;
  opacity: 0.5;
 }




.exemple-background-clip{
 background-clip : content-box; 
 padding : 10px; 

}

.exemple,.exemple-background-size{
 width:300px; height:100px; margin-bottom:10px; padding:10px; border:1px; 
 background-image : url(/img/style_css/background.jpg)
 opacity: 0.5;
}


}
</style>

  <body >
    <div class="exemple"><br><img src="{{ asset('Bootstrap v3.1.1/images/d.jpg') }}" alt="image de fond"></div>
    
<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Login | Authentification</h4><hr>
           <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Sign In</button>
              <br>
              <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
           </form>
      </div>
   </div>
</div>
   
  </body>
</html>