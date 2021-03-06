<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header id="header">
        <div class="container">
    
          <div id="logo" class="pull-left">
            <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="index.html">Header 1</a></h1>-->
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="index.html">Home</a></li>
              <li><a href="/aboutedit">About Us</a></li>
              <li><a href="/serviceedit">Services</a></li>
              <li><a href="/portfolioedit">Portfolio</a></li>
              <li><a href="/teamedit">Team</a></li>
              <li><a href="/testimonialedit">Testimonials</a></li>
         
    
               
              </li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </nav>
          <!-- #nav-menu-container -->
        </div>
      </header><!-- End Header --> 
      
      

<h1 class="admin  text-uppercase mt-5">Team edit</h1>
    <div class="text-center">
        <a href="/teamedit/create" class="btn btn-warning mb-5">Create</a>
    </div>
    <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
  
        <div class="row">
          <th scope="col">ID:</th>
            <th scope="col">Titre:</th>
            <th scope="col">Description:</th>
            <th scope="col">Action:</th>
            </tr>
          </div>
        </div>
          </thead>
      </table>
    @foreach ($team as $team)

<section>
    <div class="container mt-2">
        <div class="row">
            <div class="col-2">
                <div class="text-center">
                    <p>{{$team->id}}</p>
                </div>
            </div>

            <div class="col-2">
                <p>{{$team->img_name}}</p>
            </div>

            <div class="col-2">
                <p>{{$team->img_desc}}</p>
            </div>

            <div class="col-2">
                <p>{{$team->img_path}}</p>
            </div>
            <div class="col-4">
                <a href="/teamedit/{{$team->id}}/edit" class="btn btn-outline-success">Update</a>
                <a href="/teamedit/{{$team->id}}/destroy" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
</section>


@endforeach

