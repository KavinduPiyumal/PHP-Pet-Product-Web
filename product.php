<?php include 'include/inc.header.php'; ?>
<section class="insertback">
<img src="images/bone.jpg" id="insertp" alt="insert" width="100%" height="600">
  <div class="text-block">
    <h1>“Until one has loved an animal, a part of one's soul remains unawakened.”</h1>
    <h4> Anatole France</h4>
  </div>
  </section>
<section class="pr wrapper">
	<h1> Products </h1>

</section>

<section class="products wrapper">
  
<?php
if ($searchresult->num_rows > 0) {  
 $product = $searchresult;
  
}else{
  $product = getAllProducts($conn);
}
?>



<?php 
while($row = $product->fetch_assoc()) { ?>
   
    
    <div class="item">
    <div class="wrap">
    <img src="<?php echo $row["i_image"]; ?>" alt="img" >
    <h4><?php echo $row["i_title"];?></h4>
    <p class="price">$<?php echo $row["i_price"]; ?></p>
    <a href="productdetails.php?id=<?php echo $row["i_id"];?>">View Details</a>
    </div>
    </div>



 <?php } ?>
 







</section>

<?php include 'include/inc.footer.php'; ?>