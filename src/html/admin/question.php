<div>
        <div class="form-group">
            <label for="question">Question:</label>
            <textarea class="form-control" rows="5" id="question"></textarea>
        </div>

        <div class="form-group">
            <label for="question">Points:</label>
            <input type="number">
        </div>

        <div class="form-group">
            <label for="choix">Type dereponse:</label>
            <select id="choix" name="choix" >
            <option value="texte">--choix---</option>
                <option value="texte">choix texte</option>
                <option value="simple">choix simple</option>
                <option value="multiple">choix multiple</option>
            </select> 
            <div class="inputs">

            </div>
            <button class="add_field_button">Add More Fields</button>
            <div class="input_fields_wrap">
               
               <!-- <div><input type="text" name="mytext[]"></div>-->
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
      $('#choix').change(function (e) { 
        e.preventDefault();
            $('.ajout').remove(); 
                
      });
    
     $('.add_field_button').click(function (e) { 
       
      
       let choix=$('#choix').val()
      var wrapper=$('.input_fields_wrap')
       e.preventDefault();
       if(choix==="simple")
      {
        
        $(wrapper).append('<div class="ajout"><input type="text" name="mytext[]"/><input type="radio"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
      else if(choix==="multiple"){
        
        $(wrapper).append('<div  class="ajout"><input type="text" name="mytext[]"/> <input type="checkbox"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
      else {
        $(wrapper).append('<div  class="ajout"><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
       
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); 
	  })
     });

     	
	// $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	// 	e.preventDefault(); $(this).parent('div').remove(); 
	//  })

  //    $('.remove_field').each(function(e){
  //       alert(e)})
    //  $('.remove_field').each(function(e) {
    //    alert(el)
    //     $(this).click((e) => {
    //       e.preventDefault();
    //       alert('click'+ $(this).html())
    //         $(this).parent().remove();
    //     });
    // });
     
    });
    /////////////
   
    
    


  </script>

</div>