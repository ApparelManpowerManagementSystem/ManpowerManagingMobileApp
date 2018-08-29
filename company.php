<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $comID = $_POST['comID'];
	$comName = $_POST['comName'];
    $comPhone = $_POST['comPhone'];
    $comAddress = $_POST['comAddress'];
    $comEmail = $_POST['comEmail'];
    
	
$query = "INSERT INTO company(comID,comName,comPhone,comAddress,comEmail) VALUES ('$comID','$comName','$comPhone','$comAddress','$comEmail')";
if(mysqli_query($connection,$query))
{
 echo "Data Inserted successfully...!!";
}
else{
 echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

<!DOCTYPE html>
<html>
 <head>  
     
<title> Company Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Company Registration</h2>
<form method="POST" action="company.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        <label for="comID">Company ID:</label>
            <input type="text" class="form-control" id="comID" placeholder="Enter Company ID" name="comID">
    </div>
    
    <div class="form-group">
        <label for="comName">Company Name:</label>
            <input type="text" class="form-control" id="comName" placeholder="Enter Company Name" name="comName">
    </div>
    
     <div class="form-group">
        <label for="comPhone">Company Amount:</label>
            <input type="text" class="form-control" id="comPhone" placeholder="Enter Company Phone" name="comPhone">
    </div>
     <div class="form-group">
        <label for="comAddress">Job Period:</label>
            <input type="text" class="form-control" id="comAddress" placeholder="Enter Company Address" name="comAddress">
    </div>
    <div class="form-group">
        <label for="comEmail">Job Price:</label>
            <input type="text" class="form-control" id="comEmail" placeholder="Enter Company Email" name="comEmail">
    </div>
       
    
    
       <div class="form-row text-right">
           
        <div class="col-12">
         <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" name="save" id="save" class="btn btn-success">Submit</button>
       </div>
    </div>
 </div>
        
   
 
</form>
   
        </div>
        
    </body>
</html>
