<?php include 'include/inc.header.php'; ?>
<section class="insertback">
<img src="images/insertp.jpg" id="insertp" alt="insert" width="100%" height="600">
  <div class="text-block">
    <h1>“Pets are humanizing. They remind us we have an obligation and responsibility to preserve and nurture and care for all life."</h1>
    <h4>James Cromwell, American Actor</h4>
  </div>
  </section>
<section class="inst wrapper">
	<?php
		 if(isset($_POST['add-btn'])){
    			$result = adddata($conn);

  			}
	?>
              					<form method="post" action="" id="contact-form" enctype = "multipart/form-data" required><br>
              						<h2>Insert </h2> <br>
								<input class="" name="title" type="text" placeholder="Item Title" required><br>
								<input class="" name="description" type="text" placeholder="Item Description" required><br>
								<input class="" name="price" type="text" placeholder="Item Price" required><br>
								<input class="" name="size" type="text" placeholder="Item Size" required><br>
                                <input type="number" min="1" max="100" name="qty" placeholder="Quantity" required>
							
								<br>

								  
                                  <input type="file" id="img" name="image" placeholder="Image" required>
                                  
								<div class="sub-button  text-uppercase">
                                   <div class="form-group">
                                      </div>
									<button class="btn" type="submit" name="add-btn" value="Submit">ADD</button> 
								</div> 
								</form>
					



	



</section>


<?php include 'include/inc.footer.php'; ?>