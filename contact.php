<?php include 'include/inc.header.php'; ?>
<section class="pr wrapper">
	<h1> Contact Us </h1>

</section>

<section class="products wrapper">

 <?php
  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

        $to='example@gmail.com'; // Receiver Email ID, Replace with your email ID
        $subject='Form Submission';
        $message="Name :".$name."\n"."Email :".$email;
        $headers="From: ".$email;
        

        if(mail($to, $subject, $message,$headers)){
      $output = '<div class="alert">
                  <h5 style="background-color:green;padding:10px 0;text-align:center;color:white;border-radius:10px;">Thank you! for contacting us, We\'ll get back to you soon!</h5>
                </div>';
    } else {
      $output = '<div class="alert alert-danger">
                  <h5>Message not sent</h5>
                </div>';
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pets R Us</title>
<style type="text/css">

#webform {
  position: absolute;
  top: calc(90% - 230px);
  left: calc(50% - 230px);
  overflow: hidden;
  box-shadow: none;
  opacity: 1;
  border: 4px red dashed;
  padding: 5px;
  z-index: -1;
  margin-bottom: 100px;
}
#message {
  align-items: center;
  background-color: #0da7ff;
  width: 428px;
  height: 114px;
  top: 15px;
}
.text-content {
  position: relative;
  font-size: 25px;
  font-weight: bold;
  line-height: 1.2;
  text-align: center;
  color: white;
  top: 20%;
}
form {
  text-align: center;
}
.container {
  padding: 10px 50px;
}
.row {
  width: 100%;
  height: 10%;
  margin: 10px auto;
}
.container input {
  width: 90%;
  border: none;
  border-bottom: 1px solid;
  outline: none;
  font-size: 1rem;
  padding: 10px;
}
.row label {
  display: none;
}
.button {
  height: 52px;
  opacity: 1;
  background: #f89009;
  border-radius: 52px;
  color: white;
  border: none;
  outline: none;
  cursor: pointer;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-size: 1.5rem;
  width: 100%;
  margin-top: 10px;
}
.button:hover {
  opacity: 0.7;
}
@media only screen and (max-width: 768px) {
  #webform {
    top: calc(80% - 200px);
    left: 0;
    right: 0;
    background-size: cover;
  }
  #message {
    text-align: center;
    width: 100%;
  }
  .text-content {
    font-size: 24px;
  }
}

</style>
</head>
<body>
     
<div id="webform">
  <form action="#" method="post" name="form">
    <div>
      <div id="message">
        <div class="text-content">Talk directly to Pets R Us<br>By Filling The Fields Below</div>
      </div>
      <div>
        <div class="container">
          <div class="aaaa">
            <?= $output; ?>
          </div>
          <div class="row">
            <label for="name">Name</label><br>
            <input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
          </div>
          <div class="row">
            <label for="email">Email ID</label><br>
            <input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
          </div>

          <div class="row"><button class="button" type="submit" name="submit" tabindex="3"><span>Submit</span></button></div>
        </div>
  </form>
  <div> &#128274;We respect & protect your privacy</div>
</div>
<br>	<br>	
</body>
</html> 
<?php include 'include/inc.footer.php'; ?>