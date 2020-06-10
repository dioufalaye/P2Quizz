<div>
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
        var_dump($statement);
       
        
        
            $output='
            <table class="table table-striped table-bordered" >
                <tr>
                    <th width="40%">Prenom </th>
                    <th width="40%">nom </th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>


            </table>';
        if($total_row> 0)
        {
            foreach ($result as $row)
            {
                 $output .='
                <table class="table-striped table-bordered " >
                    <tr >
                        <td width="40%" >'.$row['PRENOM'].' </td>
                        <td width="40%">'.$row['NOM'].' </td>
                        <td width="10%"><button class="btn btn-primary btn-xs edit type="button">Modify</button> </td>
                        <td width="10%"><button class="btn btn-primary btn-xs edit" type="button">Suprimer</button> </td>
                        
                    </tr>
  
    
                </table>';

               
            }
        }else{
            $output .='
             <tr>
             <td colspan="4 align="center"" >
             </td>
             </tr>';
        }
        $output .='</table>';
        echo $output;


      
            
      /*  if($result>0){ 
            while($row <$result){
                $postID = $row*["id"];
        ?>
            <div class="list-item"><h4><?php echo $row['userlogin']; ?></h4></div>
        <?php } ?>
            <div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
              plus  <img src="loading.gif"/>
            </div>
        <?php } ?>
        </div>*/
        ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
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
    });
});
</script>