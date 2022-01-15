<?php include 'include/inc.header.php'; ?>
 <?php
  if(isset($_POST['login'])){
    login($conn);
  }
?>
<section class="login">
	<div class="wrapper">
	<form method="post" action="" id="contact-form">
		                         <h2> LOGIN </h2>
								<input class="" name="username" type="text" placeholder="Username"> <br>
								<input class="" name="pwd" type="password" placeholder="Password"> <br>
					<button class="btn" type="submit" name="login" value="Submit">Log In</button> 
			
								</form>
								</div>
</section>
<?php include 'include/inc.footer.php'; ?>