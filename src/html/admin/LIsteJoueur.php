

<div id="postList">
    <?php
        // Include the database configuration file
        require '../../php/connectDatabase.php';
        var_dump($db);

        // Get records from the database
        $query="SELECT * FROM utilisateur ORDER BY id DESC LIMIT 5";
        $statement=$pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        $total_row=$statement->rowCount();
        var_dump($statement);?>
       <div class="modication">
           <!------------------>
            
           <!---------------------->
      
       </div>

       
       
        <?php
        
            $output='
            <table id="myTab" class="table table-striped table-bordered" >
                <tr>
                  
                    <th width="40%">Prenom </th>
                    <th width="40%">nom </th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>';


          
        if($total_row> 0)
        {
            foreach ($result as $row)
            {
                 $output .='
               
                    <tr id ="trDelete">
                      <!--  <td width="5%" ></td>-->
                        <td width="40%" >'.$row['PRENOM'].' </td>
                        <td width="40%">'.$row['NOM'].' </td>
                        <td width="10%"><button class="modify" id="mod_'.$row['id'].'"   type="button">Modifier</button> </td>
                        <td width="10%"><button class="delete" id="del_'.$row['id'].'"  type="button">Remove</button> </td>
                    </tr>';
  
             

               
            }
        }
        else{
            $output .='
             <tr>
             <td colspan="4 align="center"" >
             </td>
             </tr>';
        }
        $output .='</table>';
        echo $output;
        echo '<div class="modal-body">
        <form>
            <div class="form-group">
                <label for="fn">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="form-group">
                <label for="ln">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </form>
    </div>';
   echo '<div class="modal-footer">
        <button type="button"  class="btn btn-info modifier" id="M_'.$row["id"].'">Modify</button>

    </div>';


      
            
    ?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
$(document).ready(function(){
    
 /*   $(window).scroll(function(){
        var lastID = $('.load-more').attr('lastID');
        if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastID != 0)){
            $.ajax({
                type:'POST',
                url:'getData.php',
                data:'id='+lastID,
                beforeSend:function(){
                    $('.load-more').show();
                },
                success:function(html){
                    $('.load-more').remove();
                    $('#postList').append(html);
                }
            });
        }
    });*/
    // Delete 
$('tr').on('click','.delete',function(){
     var identifiant =$(this).attr('id')
    //console.log(id);

  // var el = this;
 
   var splitid = identifiant.split("_");
   console.log(splitid);
   var id =splitid[1];

   // Delete id
   var deleteid = splitid[1];
  // alert("suprimeu la beuggg")
   // AJAX Request
   $.ajax({
     url: 'http://localhost/SAQuizzLaye/src/html/admin/suppressionJoueur.php',
     type: 'POST',
     data: { id:id },
     dataType:'text',
     success: function(response){
        
       if(response == 1){
        console.log("supprimé avec success")
	 // Remove row from HTML Table
	 $(el).closest('tr').css('background','tomato');
	 $(el).closest('tr').fadeOut(800,function(){
	    $(this).remove();
	 });
      }else{
	 alert('Invalid ID.');
      }

    }
   });

 
});

});
$('tr').on('click','.modify', function() {
              
              let firstname= $(this).parents('tr').find('td').eq(0).html();
              let lastname= $(this).parents('tr').find('td').eq(1).html();
              $('#firstname').attr('value',firstname);
              $('#lastname').attr('value',lastname);


          });
$(document).on("click",'.modifier', function() {

 //////modifier
   


     var identifiant =$(this).attr('id')
     let firstname=$('#firstname').val();
    let lastname=$('#lastname').val();
    //console.log(id);

  // var el = this;
 
   var splitid = identifiant.split("_");
   console.log(splitid);
   var id =splitid[1];

   // Delete id
   var deleteid = splitid[1];
   alert("modif la beuggg")
   // AJAX Request
   $.ajax({
url: 'http://localhost/SAQuizzLaye/src/html/admin/modifier.php',
type:'post',
data:{
     firstname:firstname,
     lastname:lastname,
     id:id
    },
    dataType:'html',
    success:function (data) {
        if (data=="ok") {
            alert('Modification carried out successfully');
            
        }
        else{
            alert('error');
        }
    
    
    }
    });

          })
      
</script>
</div>


