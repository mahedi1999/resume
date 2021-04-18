 <?php include "includes/sidebar.php" ?>
    <!-- Right Column -->
    <div class="w3-twothird">
	<?php 
	if(isset($_POST['addskill'])){
	$name=$_POST['sname'];
	$level=$_POST['level'];
	
	$sql="INSERT INTO `skills` (`id`, `skillname`, `skilllevel`) VALUES (NULL, '$name', '$level')";
	
	if(mysqli_query($conn,$sql)){
			echo "<script>window.location='index.php'; </script>";
		
	}
	
	}
		//print_r($_POST);
	?>
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Add Skills</h2>
			<form class="w3-container w3-card-4" action="" method="Post">
			  <h2 class="w3-text-blue">Add Skill</h2>
			  <p>      
			  <label class="w3-text-blue"><b>Skill Name</b></label>
			  <input class="w3-input w3-border" name="sname" type="text"></p>
			  <p>      
			  <label class="w3-text-blue"><b>Skill Level</b></label>
			  <input class="w3-input w3-border" name="level" type="number"></p>
			  <p>      
			  <button class="w3-btn w3-blue" name='addskill'>Add</button></p>
			</form>
      </div>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<?php include "includes/footer.php" ?>