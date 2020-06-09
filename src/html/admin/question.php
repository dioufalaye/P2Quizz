
<div>
        <div class="form-group">
            <label for="question">Question:</label>
            <textarea class="form-control" rows="5" id="question"></textarea>
        </div>

        <div class="form-group">
            <label for="question">Question:</label>
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
            <div class="input_fields_wrap">
                <button class="add_field_button">Add More Fields</button>
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
      alert("laye")
      
      $('#choix').change(function () { 
      
       choix = $('#choix').val()
       var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID

	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    
		if(x < max_fields){ //max input box allowed
      x++; //text box increment
      if(choix==="simple")
      {
        alert(choix)
        $(wrapper).append('<div><input type="text" name="mytext[]"/><input type="radio"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
      else if(choix==="multiple"){
        alert(choix)
        $(wrapper).append('<div><input type="text" name="mytext[]"/> <input type="checkbox"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
      else {
        $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
      }
		
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
       
       
        
      });
     
    });
    /////////////
   
    
    


  </script>

</div>