<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <style>
    /* belajar media Query */
    @media only screen and (max-width : 1000px) and (min-width : 1000px) {
      .paragraf1 {
        font-size : 50;
        color : aqua;
      }

      .paragraf2 {
        font-size : 60;
        color : blue;
      }
    }
      
    @media only screen and (max-width:800px) and (min-width:601px){
      .paragraf1 {
          font-size : 30;
          color : red;
        }

        .paragraf2 {
          font-size : 30;
          color : green;
        }
    }   
    
    @media only screen and (max-width:600px) and (min-width:401px){
      .paragraf1 {
          font-size : 10;
          color : salmon;
        }

      .paragraf2 {
         font-size : 10;
         color : greenyellow;
      } 
    }
    
    @media only screen and (max-width:400px) {
      .paragraf1 {
          font-size : 10;
          color : pink;
        }

      .paragraf2 {
         font-size : 10;
         color : #4f7566;
      } 
    }
  

    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="bi bi-whatsapp" style = "color : green">Hello, world!</h1> <br>
    
    <div class="paragraf1">
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sapiente ex eaque nulla quasi, commodi eum error reiciendis voluptates perferendis, voluptatem eius voluptas suscipit sit magnam, assumenda beatae tempora optio.</h1>
    </div>
    <br>

    <div class="paragraf2">  
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia rem tempore, maxime ex obcaecati, quisquam explicabo asperiores eos delectus tempora quo reprehenderit quibusdam, modi dolores ipsum ipsa repudiandae eius molestiae.</p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
