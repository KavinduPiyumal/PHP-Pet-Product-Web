<?php include 'include/inc.header.php'; ?>
<section class="insertback">
<img src="images/woman.jpg" id="insertp" alt="insert" width="100%" height="600">
  <div class="text-block">
    <h1>“I care not for a man's religion whose dog and cat are not the better for it.”</h1>
    <h4> Abraham Lincoln</h4>
  </div>
  </section>

<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
	$productdetail = getselectedProduct($conn,$_GET['id']);
}else{
	header("Location: product.php");
	die();
}


?>
<section class="details wrapper">
	
<div class="details-left">
	<div class="wrap">
	<img src="<?php echo $productdetail['i_image']; ?>" alt="img" >
</div>
</div>

<div class="details-right">
	<div class="wrap">
	
	<h2><?php echo $productdetail['i_title']; ?></h2> <br>
	<p><?php echo $productdetail['i_description']; ?> </p> <br>
	<hr>
	<label for="size">Size:</label> 
     <label for="si"><?php echo $productdetail['i_size']; ?></label>
   <div class="qty" >
   <label for="quantity">Qty:</label> 
<input type="number" id="<?php echo $productdetail['i_id']; ?>" value="1" data-qt="<?php echo $productdetail['i_id']; ?>" class="qty" min="1" max="100" placeholder="99">
</div> <br>
<h2 style="font-size:xx-large">Price : $ <input type="number" style="border: none; color: red;font-size: smaller; font-weight: 500;" id="pri_<?php echo $productdetail['i_id']; ?>" value="<?php echo $productdetail['i_price']; ?>" readonly></h2> <br>

<div class="tt" style="background-color:yellow; padding-left: 57px; ">
<label for="Total" style="color: red;font-size: x-large; font-weight: 500;">Total: $</label>

<span class="total" style="color: red; font-size: x-large; font-weight: 500;"></span>
</div>

<br>
<button class="btn addcart" data-pid="<?php  echo $productdetail['i_id']; ?>" class="addcart">Add to Cart</button>


	
</div>
</div>

</section>


<?php include 'include/inc.footer.php'; ?>