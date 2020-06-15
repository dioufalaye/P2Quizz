showjoueur.php
<?php
        // Include the database configuration file
        require '../../php/connectDatabase.php';
        var_dump($db);

        // Get records from the database
        $query="SELECT * FROM utilisateur where role=joueur ORDER BY id DESC LIMIT 5";
        $statement=$pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        $total_row=$statement->rowCount();
        var_dump($statement);
        
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
        
?>