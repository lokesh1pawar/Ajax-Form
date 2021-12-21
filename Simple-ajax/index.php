<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ajax-form!</title>
  </head>
  <body>



                <!-- Form  -->

  <div class="container mt-3">
 <h1>Ajax-Php-Mysql</h1>


<p id="show_message" style="display: none">Form data sent. </p>
<span id="error" style="display: none"></span>
     <form action="javascript:void(0)" id="ajax-form" method="POST">
         <div class="mb-3">
             <label for="name" class="form-label">Name</label>
             <input type="text" name="name" class="form-control" id="name">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>      
        
    </div>




   <!-- Custom Js   -->
   
   <script type="text/javascript">
    $(document).ready(function($){
    // hide messages 
    $("#error").hide();
    $("#show_message").hide();
    // on submit...
    $('#ajax-form').submit(function(e){
    e.preventDefault();
    $("#error").hide();
    //name required
    var name = $("input#name").val();
    if(name == ""){
    $("#error").fadeIn().text("Name required.");
    $("input#name").focus();
    return false;
    }
    // email required
    var email = $("input#email").val();
    if(email == ""){
    $("#error").fadeIn().text("Email required");
    $("input#email").focus();
    return false;
    }
    
    // ajax

    $.ajax({
    type:"POST",
    url: "submit.php",
    data: $(this).serialize(), // get all form field value in serialize form
    success: function(){
    $("#show_message").fadeIn();
    //$("#ajax-form").fadeOut();
    }
    });
    });  
    return false;
    });
    </script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    



