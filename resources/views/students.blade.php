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
         
                   <h4>LISTE DES ETUDIANTS </h4><hr>
                   <table  class="table table-striped table-condensed" id="tblData">
                     <thead>
                 <tr>
             
                
                         <th> <h4 style="color: chocolate;">Name </h4></th>
                         <th> <h4 style="color: chocolate;">Email  </h4></th>
                         <th> <h4 style="color: chocolate;">Contact  </h4></th>
                         <th> <h4 style="color: chocolate;">Action  </h4></th>
                       <td></td> 

                   </tr>
                </thead>

                <tbody>
                    @foreach($students as $student)
                        

                         <tr>
                             <td>{{ $student->name }} </td>
                             <td> {{ $student->email }}</td>
                             <td> {{ $student->Phone_number }}</td>

                         </tr>
                    @endforeach

                   </table>

            
            </div>
         </div>
    </div>


   
    
   

</div>
 
</body>
</html>



</body>
</html>




