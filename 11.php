<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myjs.js"></script>
</head>
<body>

<div class="container">
  <h2>Propelrr Exam</h2>
  <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  </div>
  <form id="fupForm" name="form1" method="post">
    
    <div class="form-group">
      <label for="fname">Full Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>
    <div class="form-group">
      <label for="contact">Contact Number:</label>
      <input type="number" class="form-control" id="contact" placeholder="Enter Contact Number" name="contact"  >
    </div>
     <div class="form-group">
      <label for="bday">Birth Day:</label>
      <input type="date" class="form-control" id="bday" placeholder="Enter Birth Day" name="bday" >
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <select class="form-control" id="gender" name="gender" >
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    
   
     <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
  </form>
</div>


<script>
$(document).ready(function() {
  $('#butsave').on('click', function() {
   
    var fname = $('#fname').val();
    var email = $('#email').val();
    var contact = $('#contact').val();
    var bday = $('#bday').val();
    var gender = $('#gender').val();
   // var isValid = /^[0-9,.]*$/.test(str);
    if(fname!="" && email!="" && contact!="" && bday!="" && gender!=""){
      $.ajax({
        url: "save.php",
        type: "POST",
        data: {fname: fname,email: email, contact: contact, bday: bday, gender: gender},
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#fupForm').find('input:text').val('');
           $("#success").show();
           $('#success').html('Data added successfully !');
           // alert("Data added successfully !");            
          }
          else if(dataResult.statusCode==201){
             alert("Error occured !");
          }
          else if(dataResult.statusCode==202){
             alert("Alphabet, comma and period only !");
          }
          else if(dataResult.statusCode==203){
             alert("Use Ph format ex: 09..... !");
          }
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
  });
});
</script>
</body>
</html>