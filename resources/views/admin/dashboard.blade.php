<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap v3.1.1/css/boostrap.min.css') }}">
</head>
<body>
    
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>Dashboard</h4><hr>
                   <table class="table table-hover">
                      <thead>
                         <th> <h4 style="color: chocolate;">Name </h4></th>
                         <th> <h4 style="color: chocolate;">Email  </h4></th>
                         <th> <h4 style="color: chocolate;">Contact  </h4></th>
                       <td></td> 
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                            
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('auth.logout') }}">Logout</a></td>


                         </tr>
                      </tbody>
                   </table>

                   <ul>
                       <li><a href="/admin/dashboard">Dashboard</a></li>
                       <li><a href="{{ asset('/contact') }}">Users</a></li>
                     
                    
                   </ul>
            </div>
         </div>
    </div>
</body>
</html>