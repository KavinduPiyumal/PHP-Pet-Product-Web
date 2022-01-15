<?php include 'include/inc.header.php'; ?>
<div class="mainvisual">
	<ul>
		<li class="one"><div class="caption"><div class="aa"><h2>“Scratch a dog and you’ll find a permanent job.”</h2></div></div></li>
		<li class="two"><div class="caption"><div><h2>“Pets have more love and compassion in them than most humans.” </h2></div></div></li>
		<li class="three"><div class="caption"><div><h2> “There is no psychiatrist in the world like a puppy licking your face.”</h2></div></div></li>
	</ul>
</div>
<section class="maincontent">
	<div class="wrapper">
	<h1>Pets R Us</h1>
	</div>
</section>
<section class="products wrapper">
<?php
if ($searchresult) {	
while($row = $searchresult->fetch_assoc()) { ?>
     <div class="item">
    <div class="wrap">
    <img src="<?php echo $row["i_image"]; ?>" alt="img" >
    <h4><?php echo $row["i_title"];?></h4>
    <p class="price">$<?php echo $row["i_price"]; ?></p>
    <a href="productdetails.php?id=<?php echo $row["i_id"];?>">View Details</a>
    </div>
    </div>
<?php }
}
?>

</section>
<section class="indexdetails">
    <div class="index_l">
        <div class="wrap">
        <img src="images/dogfood.jpg" id="dogfood" alt="indexd" width="100%" height="auto">
        </div>
    </div>
    <div class="index_r">
        <div class="wrap">
            <p>“Dogs don’t make judgments about physical appearance or abilities, and they don’t care how big your house is or what you do for a living. They care about the quality of your character and your capacity to love.” </p>
        </div>
        
        
    </div>

</section>

<?php include 'include/inc.footer.php'; ?>