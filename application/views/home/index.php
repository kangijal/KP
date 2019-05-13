<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <script src="<?=base_url('assets/jquery-3.2.0.min.js');?>"></script>
  <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?=base_url();?>">Beranda</a></li>
          <li><a href="<?=site_url('profil');?>">Profil</a></li>
          <li><a href="<?=site_url('kontak');?>">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Sidebar / Left Menu -->
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-3 sidenav">
      <h3 style="margin-bottom: 30px;"><b>Form Login</b></h3>
      
        <form action="<?php site_url('auth');?>" method="POST">
          <div class="form-group">
            <label for="email">Username</label>
            <input type="text" name="username" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" name="password" class="form-control" id="pwd">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>

      <div class="col-sm-8 text-left"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indikator -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li> 
                <li data-target="#myCarousel" data-slide-to="4"></li> 
                <li data-target="#myCarousel" data-slide-to="5"></li>   
              </ol>

              <!-- deklarasi carousel -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/1.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 1</h3>
                    <p>Ini slide 1</p>
                  </div>
                </div>
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/2.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 2</h3>
                    <p>Ini slide 2</p>
                  </div>
                </div>
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/3.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Ini slide 3</p>
                  </div>
                </div>
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/4.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Ini slide 3</p>
                  </div>
                </div>
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/5.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Ini slide 3</p>
                  </div>
                </div>
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/6.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Ini slide 3</p>
                  </div>
                </div> 
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/7.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Ini slide 3</p>
                  </div>
                </div> 
                <div class="item">
                  <img style="width: 100%;" src="<?=base_url('assets/sekolah/8.jpeg');?>" alt="...">
                  <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Ini slide 3</p>
                  </div>
                </div>    
              </div>

              <!-- membuat panah next dan previous -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
      </div>

    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>Footer Text</p>
  </footer>

</body>
</html>