<?php include "includes/sidebar.php" ?>

    <!-- Right Column -->
		<?php 
			if(isset($_GET['edit'])){
		$edit_id=$_GET['edit'];

			}
		?>
    <div class="w3-twothird">
	<?php 
	if(isset($_POST['updateskill'])){
	$name=$_POST['sname'];
	$level=$_POST['level'];
	
	$sql="UPDATE `skills` SET `skillname` = '$name', `skilllevel` = '$level' WHERE `skills`.`id` = $edit_id";
	
	if(mysqli_query($conn,$sql)){
			echo "<script>window.location='index.php'; </script>";
		
	}
	
	}
	
	$sql="SELECT * FROM `skills` WHERE id=$edit_id"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
			
	?>
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Edit Skill</h2>
			<form class="w3-container w3-card-4" action="" method="Post">
			  <h2 class="w3-text-blue">Edit Form</h2>
			  <p>      
			  <label class="w3-text-blue"><b>Skill Name</b></label>
			  <input class="w3-input w3-border" name="sname" type="text" value="<?php echo $row['skillname'];?>"></p>
			  <p>      
			  <label class="w3-text-blue"><b>Skill Level</b></label>
			  <input class="w3-input w3-border" name="level" value="<?php echo $row['skilllevel'];?>" type="number"></p>
			  <p>      
			  <button class="w3-btn w3-blue" name='updateskill'>UPDATE</button></p>
			</form>
      </div>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<?php include "includes/footer.php" ?>