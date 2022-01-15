<?php include '../include/dbconnection.php'; ?>
<?php	
if(isset($_POST['pid'])){
	controlMySessions();
	array_push($_SESSION['cart'],$_POST['pid']);

	echo count($_SESSION['cart']);

	$result = getselectedProduct($conn,$_POST['pid']);
	?>
<script type="text/javascript">
	$(".cartitem ul").append('<li><img src="<?php echo $result["i_image"];?>" alt="" width="35px" height="auto"><a href=""><i class="icofont-ui-delete delete"></i></a><h3><?php echo $result["i_title"];?></h3></li>');
</script>		

<?php 

}
?>