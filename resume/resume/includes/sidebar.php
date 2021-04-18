<?php include 'includes/connection.php'; ?>
<!DOCTYPE html>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
 
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://www.w3schools.com/w3images/avatar_hat.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Jane Doe</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b><a href="add.php"><i class="fa fa-plus fa-fw w3-right w3-large w3-text-teal"></i></a></p>
<?php 
$sql="SELECT * FROM `skills`"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - Name: " . $row["skillname"]. " " . $row["skilllevel"]. "<br>";
		?>
    
          <p><?php echo $row["skillname"]; ?>
		  <a href="edit.php?edit=<?php echo $row["id"]; ?>">
			<i class="fa fa-edit fa-fw w3-right w3-large w3-text-teal"></i>
		  </a>	
		  <a href="index.php?del=<?php echo $row["id"]; ?>">
			<i class="fa fa-remove fa-fw w3-right w3-large w3-text-teal"></i>
		  </a>
			</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row["skilllevel"]; ?>%"><?php echo $row["skilllevel"]; ?>%</div>
          </div>
	
	<?php }
	
	
	if(isset($_GET['del'])){
		$del_id=$_GET['del'];
		$sql="DELETE FROM `skills` WHERE id=$del_id";
		if(mysqli_query($conn,$sql)){
			echo "<script>window.location='index.php'; </script>";	
		}
		
	}


?>
        
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>