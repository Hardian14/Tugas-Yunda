<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&family=Dancing+Script:wght@700&family=Indie+Flower&family=Licorice&family=Moon+Dance&family=Neonderthaw&family=PT+Serif&family=Permanent+Marker&family=Poppins:wght@100;300&family=Quintessential&family=Shadows+Into+Light&family=Short+Stack&family=Supermercado+One&family=Syne+Tactile&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <title>LATIHAN PORTOFOLIO I</title>

    <style>
    html {
        scroll-behavior: smooth;
    }

    body {
      font-family: 'PT Serif', serif;

    }

    /* .bulet1 {
        height : 200px;
        width : 200px;
        background-color : pink;
        border-radius : 50%;
        margin : auto;
    } */
    
    #gradasi1 {
    background-image: linear-gradient(#EAD6EE, #A0F1EA);
    width : 100%;
    }

    /* css ini digunakan untuk mengubah list menjadi horizontal */
    #inline {
      margin: 15px auto;
      padding: 0;
    }   

    #inline li {
      display: inline;
      margin-left: 15px;
      margin-right: 15px;
    }

    .icon > a {
      text-decoration : none;
    }

    /* a { 
        text-decoration : none;
    } */

    @media only screen and (min-width : 400px) and (max-width:600px){
  
      .objek1 > h1 {
          font-size : 20px; 
      }
      
      .objek2 > h3 {
        font-size : 15px;
      }
    
      .gambar1 > img {
        width : 50%;
        height : 50%;
      }

      .gambar2 {
        width : 200px;
        height : 100x;
        margin : auto;
      }

      .icon {
        font-size : 10px;
      }
    }

    @media only screen and (min-width : 601px) and (max-width:800px){
  
      .objek1 > h1 {
          font-size : 35px; 
      }
      
      .objek2 > h3 {
        font-size : 20px;
      }

      .gambar1 > img {
        width : 50%;
        height : 50%;
      }

      .gambar2 {
        width : 250px;
        height : 100x;
        margin : auto;
      }

      .icon {
        font-size : 10px;
      }
    }

    @media only screen and (min-width : 801px) {

    }


    </style>


  </head>
  <body>
    <div class="container">
        <div class="row">
        <!-- NAVIGASI -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top ">
          <a class="navbar-brand" href="#section1">My Portofolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#section1">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#section2">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#section3">Our Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#section4">Contact Us</a>
                </li>
                
              </ul>
            </div>
        </nav>

        </div>
        

        <!-- untuk membuat id klik # -->
        <div class="row" >
          <div id="section1"> 
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                  <ol class="carousel-indicators" >
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="images/bg.jpeg" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <div class="bulet1">
                              <img src="images/img.jpg " style = "width : 100px; height : 100px; border-radius : 50px; margin: auto; margin-bottom: 50px" >
                            </div>
                          
                              <h3>Selamat Datang di PT. RHY Amerta Development</h3>
                              <a class="btn btn-primary" href="#section3" role="button" >Lebih Lanjut</a>
                          </div>
                        </div>

                        <div class="carousel-item">
                          <img class="d-block w-100" src="images/computer1.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                              <div class="bulet1">
                                <img src="images/img.jpg " style = "width : 100px; height : 100px; border-radius : 50px; margin: auto; margin-bottom: 50px" >
                              </div>
                          
                              <h3>Selamat Datang di PT. RHY Amerta Development</h3>
                              <a class="btn btn-primary" href="#section3" role="button">Lebih Lanjut</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                          <img class="d-block w-100" src="images/home-bg.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                              <div class="bulet1">
                                <img src="images/img.jpg " style = "width : 100px; height : 100px; border-radius : 50px; margin: auto; margin-bottom: 50px" >
                              </div>
                          
                              <h3>Selamat Datang di PT. RHY Amerta Development</h3>
                              <a class="btn btn-primary" href="#section3" role="button">Lebih Lanjut</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                          <img class="d-block w-100" src="images/gambar.jpg" alt="Fourth slide">
                            <div class="carousel-caption d-none d-md-block">
                              <div class="bulet1">
                              <img src="images/img.jpg " style = "width : 100px; height : 100px; border-radius : 50px; margin: auto; margin-bottom: 50px" >
                              </div>
                          
                              <h3>Selamat Datang di PT. RHY Amerta Development</h3>
                              <a class="btn btn-primary" href="#section3" role="button">Lebih Lanjut</a>
                            </div>
                        </div>
                      
                      <!-- div caraousel inner -->
                      </div>

                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>

              <!-- div craousel slide-->
              </div>
            
          <!-- div section 1 -->
          </div>

        <!-- div class row -->
        </div> 

        <br> <br> <br>
        <div id="section2">

          <div class="row">
              <div class="col-md-12 text-center" > 
                <div class="objek1">
                  <h1>PROFILE </h1> <hr style= "widht : 50px; color: black; "> 
                </div>
              </div>
          </div> <br> 

          <div class="row" >   
          
              <div class="col-md-6">
                <div class="objek2" style = "text-align: center;">
                  <h3>Saat ini saya bekerja pada salah satu perusahaan ternama di Indonesia yaitu PT. RHY Amerta Development. Disini saya bekerja sebagai staff Finance dan Administration lainnya. Pada dunia programing saya mengusai bahasa pemrograman PHP, CSS dan HTML, untuk database yang saya kuasai yaitu MYSql. </h3>      
                </div>
              </div>

              <div class="col-md-6">
                <div class="gambar1">
                  <img src ="images/img.jpg" style = "widht : 100px; height : 200px; margin: auto; display: block; border-radius : 50px;">
                </div>
              </div>                       
          </div>
        </div>
        <br> <br> <br> <br> <br> <br>
        
        <div class="row">
          <div class="col-md-12 text-center" > 
            <div class="objek1">
              <h1>OUR PRODUCT </h1> <hr style= "widht : 50px; color: black;"> 
            </div>    
          </div>    
        </div> <br> 

        <div id="section3" > 
            <div class="row">
              <div class="col-md-4" >
                <div class="gambar2 text-center">
                  <img src="images/idea ind.jpeg" style = "width : 100%; height : 250px; margin : auto; display : block; border-style: solid;" >
                </div>
              </div>
            
            <div class="col-md-4" >
              <div class="gambar2 text-center">
                <img src="images/idea ind.jpeg" style = "width : 100%; height : 250px; margin : auto; display : block; border-style: solid;" >
              </div>
            </div>

            <div class="col-md-4" >
              <div class="gambar2 text-center">
                <img src="images/idea ind.jpeg" style = "width : 100%; height : 250px; margin : auto; display : block; border-style: solid;" >
              </div>
            </div>
            
            </div>
        </div>
        <br> <br> <br> <br> <br> <br> <br>

<!-- div container -->
</div>

        <div id="section4" >

          <div id="gradasi1">

            <div class="row">
              <div class="col-md-12 text-center" > 
                <div class="objek1">
                  <h1> Contact Us </h1>  <h4> Place To tack With Me </h4><hr style= "widht : 50px; color: black;"> 
                </div>
              </div> 
            </div> <br> 

          <div class="container"></div>
            <div class="row">
                
              <div class="col-md-offset-1 col-md-10 col-sm-12" style = "margin : auto;">

                <form action="kirim.php" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
                    <div class="col-md-6 col-sm-6">
                      <input name="nama" type="text" class="form-control" id="name" placeholder="Name">
                    </div> <br>
                    <div class="col-md-6 col-sm-6">
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    </div> <br>
                    <div class="col-md-12 col-sm-12">
                      <input name="judul" type="text" class="form-control" id="judul" placeholder="Subject">
                    </div> <br>
                    <div class="col-md-12 col-sm-12">
                      <textarea name="pesan" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                    </div> <br>

                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                      <a class="btn btn-primary" href="#" role="button"> <i class="bi bi-send-fill"></i> Send Message</a>
                    </div>
                </form>

              </div>

              <br> <br>
              <div class="col-md-12 text-center">
                <div class="icon">  
                  <ul style = "font-size : 30px; " id = "inline" >

                    <li style= "list-style-type: none"> <a href="#"><i class="bi bi-youtube " style = "color : #b01328"></i> </a> </li>
                    <li style= "list-style-type: none"> <a href="#"><i class="fab fa-telegram " style = "color : #1e7dbd"></i> </a> </li> 
                    <li style= "list-style-type: none"> <a href="#"><i class="fab fa-whatsapp " style = "color : #11ed14"></i> </a> </li>
                    <li style= "list-style-type: none"> <a href="#"><i class="fab fa-github " style = "color : #423d70"></i> </a> </li>
                    
                  </ul>

                    <p class="wow fadeInUp"  data-wow-delay="1s" style = "text-align: center">Copyright &copy; 2022 | Design by Wahyunda Dianti </p>
                
                </div>
                <!-- div icon -->

              </div>
              <!-- div col-md-12 -->

            </div> 
            <!-- div row -->

          </div>
          <!-- container II-->

          </div>
          <!-- div gradasi -->

        </div>
        <!-- div section 4 -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>