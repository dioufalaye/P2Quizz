
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!----------Cssmine ----------->
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    
     <div class="bg">
       <!------header----->
       <div class="jumbotron jumbotron-fluid py-0 " id="entete" style="background:rgba(148, 199, 169, 0.6);">
         <div class=" d-flex justify-content-between">
           <h1 class="col-2 display-5 px-5 d-flex align-items-center text-light text-white" id="kayfoo">
             kayffoo
           </h1>
          <div class="row">
          <div class="col-2 ">
            <img src="asset\img\Images\logo-QuizzSA.png" class="img-fluid" alt="Responsive image">
          </div>
          </div>
         </div>
       </div>
        <!----------------------------Contenu-->
        <div class="container-fluid" >
          <div class="row">
              
          </div>
          <div class="row"  style="background:rgba(148, 199, 169, 0.6);">
          <div class="col-4">
                 <img src="" class="  py-5  rounded-circle bg-white   " alt="Cinque Terre">
           </div>
           <div class="col-4 card bg-success">
            <h1 class=" display-5  float-left text-light text-white " id="kayfoo">
              score
            </h1>
            <h1 class=" display-5  float-left text-light text-white " id="kayfoo">
              59888
            </h1>
                
           </div>
           <div class="col-4" >
           <h1 class=" display-5  float-left text-light text-white bg-secondary" id="kayfoo">
             Abdou diop
           </h1>
            
              <button type="submit" id="disconnect" class="btn btn-danger">Deconnecter</button>
            </div>
           </div>
          </div>
          <div class="card-columns">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first card</p>
    </div>
  </div>
          
        </div>

       <!--------------------Fin--------Contenu-->
        <div class="card-footer text-center align-self-end fixed-bottom py-0 text" style="background-color:#94C7A9" id="footer" >
            <h1 class="  w-25 py-0 mx-auto text-align-center display-5 d-inline-block d-flex align-items-center text-light text-white text-center">@dioufalayeDataDev</h1>
         </div>
      
     </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
     $(document).ready(function () {
       alert("yes")
      $('#disconnect').submit(function (e) { 
       alert("laye")
        $.ajax({
          type: "get",
          url: "../../src/php/logout.php",
          data: {},
          //dataType: "dataType",
          success: function (response) {
            $('html').html(response)
            
          }
        });
        
      });
     });

    </script>
  </body>
</html>
