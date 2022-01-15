<?php 
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db ="pets";
	$conn = new mysqli($host,$user,$pwd,$db);

	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	

function search($conn){
	$search = $_POST['searchinput'];
	$qry = mysqli_query($conn, "SELECT * from pet_items where i_title LIKE '{$search}%' GROUP BY i_id");
     return $qry;
}

function adddata($conn){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$qty = $_POST['qty'];



			$target_dir = "images/productimages/";
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];

            if (move_uploaded_file($file_tmp, $target_dir . $file_name)) {
                
            } else {
               
            }
            $imagepath = $target_dir.$file_name;
   
   	mysqli_query($conn,"INSERT INTO `pet_items` (`i_id`, `i_title`, `i_description`, `i_price`, `i_size`, `i_quantity`, `i_image`) VALUES (NULL, '".$title."', '".$description."', '".$price."', '".$size."', '".$qty."', '".$imagepath."')"); 
}

function getAllProducts($conn){
	$qry = mysqli_query($conn, "SELECT * from pet_items");
	 return $qry;
}
function getselectedProduct($conn,$productid){
	$qry = mysqli_query($conn, "SELECT * from pet_items where i_id='$productid'");
	return mysqli_fetch_array($qry);
	  
}
function getProductsingle($conn,$productid){
	$qry = mysqli_query($conn, "SELECT * from pet_items where i_id='$productid'");
	return $qry;
}

function controlMySessions(){
    ob_start();
    if(!isset($_SESSION)){ session_start(); }
    if(!isset($_SESSION['cart'])) { $_SESSION['cart']=array(); }
}
function login($conn){
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	$result = mysqli_query($conn, "SELECT * from login where username='$username' AND password='$pwd'");
	 if($result->num_rows > 0){
	 	header("Location: insert.php");
		die();
	 }else{
	 	header("Location: index.php");
	 	die();
	 }
}

?>