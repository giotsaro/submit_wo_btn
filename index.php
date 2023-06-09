
<!DOCTYPE html>
<html>
<head>
  <title>AJAX Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
		<div class="col-md-4">
			<label>sku</label>
			<input type="text"  name='sku' class="form-control" id='sku'>
			 <div class="invalid-feedback"  >sku already exist</div>
		</div>
  <script>
   $(document).ready(function() {
  $('#sku').keyup(function() {
    var sku = $('#sku').val();
    $.ajax({
      type: 'POST',
      url: 'back.php',  // replace with your PHP script file
      data: { text: sku},
      success: function(response) {
       // console.log(response);
        //if response is arrey check length, print value of cheking 1 or 0 
       // var len = response.length;
       // console.log(len);
      //  console.log(response[3]);
        var x= response[3];
        if(x==='1'){
          $('#sku').addClass("is-invalid ");
          $('.invalid-feedback').show();
         // console.log(x);
        }
        else{
        $('.form-control').removeClass("is-invalid");
        $('.invalid-feedback').hide();
          //console.log(x);
        }  
      }
    });
  });
});
  </script>
</body>
</html>
 