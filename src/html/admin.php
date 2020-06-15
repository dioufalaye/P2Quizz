
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
    <link rel="stylesheet" href="..\..\asset/css/style.css">
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
            <img src="..\..\asset\img\Images\logo-QuizzSA.png" class="img-fluid" alt="Responsive image">
          </div>
          </div>
         </div>
       </div>
        <!----------------------------Contenu-->
        <div class="container-fluid" >
          <div class="row">
              
          </div>
          <div class="row"  style="background:rgba(148, 199, 169, 0.6);">
          <div class="col-2">
                 <img src="" class="  py-5  rounded-circle bg-white   " alt="Cinque Terre">
           </div>
           <div class="col-5 ">
            
      <div class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="admin/question">Add Question <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/ListQuest">Question list</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/LIsteJoueur">Gamer List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/addAdmin">Add admin</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="admin" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                advanced parametre
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <!--  <a class="dropdown-item" href="#">Remove a gamer</a>-->
                <a class="dropdown-item" href="admin/addAdmin">Add admin</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
    </div>
                
           </div>
           <div class="col-5" >
           <h1 class=" display-5  float-left text-light text-white bg-secondary" id="kayfoo">
             Abdou diop
           </h1>
            
              <button type="button" class="btn btn-danger float-right mx-auto disconnect" id="disconnect">Deconnecter</button>
            </div>
           </div>
          </div>
          <div class="">
  <div class="row w-100 bg-white" id="load" style="width:100%;height: 80vh;">
      
   
  </div>
          
        </>

       <!--------------------Fin--------Contenu
        <div class="card-footer text-center align-self-end fixed-bottom py-0 text" style="background-color:#94C7A9" id="footer" >
            <h1 class="  w-25 py-0 mx-auto text-align-center display-5 d-inline-block d-flex align-items-center text-light text-white text-center">@dioufalayeDataDev</h1>
         </div>
      
     </div>-->

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#navbar a').click(function(e){
        
        e.preventDefault()
        var input =$(this).attr('href');
        $('#load').load(input+'.php');
      })
     
      
    });

  </script>
  </body>

</html>