<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap v3.1.1/css/boostrap.min.css') }}">
</head>
<style>
    *,
::before,
::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background: #222;
  font-family: Raleway, Helvetica, sans-serif;
  position: relative;
}

/* New Stacking Context with Fixed */
.side-nav {
  position: fixed;
  height: 100vh;
  left: 0;
  top: 0;
  color: white;
  
}

/* To hide the sub-nav */
.wrapper {
  background: #333;
  height: 100vh;
  width: 75px;
}

.three-dots-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60px;
}
.dot {
  flex-shrink: 0;
  margin: 10px 3px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #000;
}
.d1 {background: crimson;}
.d2 {background: yellow;}
.d3 {background: lightgreen;}

.nav-bloc {
  padding: 20px 0;
  display: flex;
  justify-content: center;
  cursor: pointer;
  border-bottom: 1px solid #f2f2f21e;
}
.nav-bloc:hover {
  background: rgb(24, 24, 24);
}
.nav-bloc:hover .sub-nav {
  transform: translateX(75px);
}
.nav-bloc svg {
  width: 25px;
  fill: #f2f2f2;
  transition:  0.2s ease-in-out ;
}
.nav-bloc:hover  svg {
  fill: #50bddf;
}
.sub-nav {
  padding: 0px;
  width: 200px;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  background: #333;
  z-index: -1;
  color: white;
  /* Hidden at the left side */
  transform: translateX(-100%);
  transition: transform 0.2s ease-in-out;
  border-right: 2px solid #000;
  border-left: 2px solid #000;
}
.sub-nav h2 {
  font-family: open sans, sans-serif;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #222;
}
.sub-nav ul {
  list-style-type: none;
}
.sub-nav li {
  padding: 15px 20px;
}
.sub-nav li:hover {
  background: rgba(160, 160, 160, 0.555);
}
.sub-nav li a {
   color: #f2f2f2;
   text-decoration: none;
}

.texte{
    text-align: center;
    font-size: 17px;

}

.main-content {
  padding-left: 75px;
  color: #f3f3f3;
}
.main-content h1 {
  font-family: Open Sans, sans-serif;
  text-align: center;
  margin: 30px 0;
  font-size: 40px;
}

.main-content p {
  max-width: 780px;
  margin: 0 auto;
  padding: 0 30px;
  line-height: 1.7;
}
</style>

<nav class="side-nav">
      <div class="wrapper">
        <div class="three-dots-container">
          <div class="dot d1"></div>
          <div class="dot d2"></div>
          <div class="dot d3"></div>
        </div>
        <div class="nav-bloc n-1">
            
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="far"
            data-icon="file"
            class="svg-inline--fa fa-file fa-w-12"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 384 512"
          >
            
          </svg>
          <p class="texte">Etudiants</p>
          <div class="sub-nav">
            <h2>Etudiant</h2>
            <ul>
              <li>
                <a >Creer une classe</a>
              </li>
              <li>
                <a >Liste des classes</a>
              </li>
              <li>
                <a >Notes et Moyenne</a>
              </li>
              
            </ul>
          </div>
        </div>

        <div class="nav-bloc n-2">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="user-alt"
            class="svg-inline--fa fa-user-alt fa-w-16"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
          >
            
          </svg>
           <p class="texte">Cours</p>
          <div class="sub-nav">
            <h2>Cours</h2>
            <ul>
              <li>
                <a >Create</a>
              </li>
              <li>
                <a >List</a>
              </li>
              <li>
                <a >Cours Disponible</a>
              </li>
              
            </ul>
          </div>
        </div>

        <div class="nav-bloc n-3">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="far"
            data-icon="image"
            class="svg-inline--fa fa-image fa-w-16"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
          >
            
          </svg>
          ccccccccc
          <div class="sub-nav">
            <h2>Subtitle 3</h2>
            <ul>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="nav-bloc n-4">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="cog"
            class="svg-inline--fa fa-cog fa-w-16"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
          >
            
          </svg>
          ddddddddd
          <div class="sub-nav">
            <h2>Subtitle 4</h2>
            <ul>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
              <li>
                <a >Link</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main class="main-content">
      <h1>Main Content</h1>
     
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
    </main>
<body>
    
   
</body>
</html>