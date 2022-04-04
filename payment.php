
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles2.css">
	<title>Payment page</title>
	<style type="text/css">
		/*.table{
			text-align: center;
			color: cadetblue;
			margin-top: 50px;
		}*/
		.buttons{
			padding: 10px;
			margin-top: 95px;
            padding: 10px;
		}
		.buttons button a{
			padding: 15px;
			color: green;
			text-decoration: none;
		}
		.navigations{
			margin-top: 20px;
		}
		.payment{
			margin-top: 10px;
			margin-bottom: 30px;
			width: auto;
            height: 40vh;
            padding-left: 70vh;
        }
     .payment h1{
     	font-size: 21px;
     	color: blueviolet;
         }
     .payment li{
     	    list-style: none;
            padding: 5px;
         }
         .contacts{
         	margin-top: 200px;
         	/*padding-top: 10px;*/
         }
         .payment button{
         	padding: 6px;
         	background: green;
         	color: white;
         }
          .inputs li{
              list-style: none;
              text-align: center;
              margin-left: 0;
              font-size: 17px;
              color: ;
          }
          .inputs input[type="text"]{
          	color: red;
          }
	</style>

</head>
<body>

	<div class="second-header"> 
        <div class="logo"><p>RacyBen GiftsShop</p></div>
        <div class="search-bar"><input type="search" placeholder="What are you shopping for"> <button>SEARCH</button></div>
        <div class="number">
            <div class="cart"><p><a href="cart.php"><i class="bi bi-cart-plus-fill"></i>CART</a></p></div>
        </div>
        <div class="userInfo">
            Logged in as:
            <?php
            if (isset($_SESSION['success'])) : ?>
                <div class="users">
                    <?php 
                    echo $_SESSION['username']; ?>
                </div>  
       <?php endif ?>  
        </div>
        <!-- <div class="login"><a href="logout.php"> LOGOUT</a><i class="bi bi-box-arrow-right"></i></div> -->
    </div>

    <div class="buttons" style="background-color: seagreen; padding-left: 10px;  text-align: center;">
	<button style="margin-left: 20px;"> <a href="index.php">Go back to shopping</a></button>
	<button style="margin-left: 20px;"> <a href="cart.php">Go back to Cart</a></button>
</div>
  <div class="payment">
  	
      <form>
      	<h1>Select mode of payment</h1>
      	<li><input type="radio" name="">MPESA <br> PayBill <span style="font-weight: 900; color: green;font-size: 23px;">7892555</span></li>
      <li><input type="radio" name="">VISA </li>
      <li><input type="radio" name="">EQUITY <br> Acc.No <span style="font-weight: bolder; color: green; font-size: 23px;">0922645738490</span></li>
      <li><input type="radio" name="">Family Bank</li>
      <button type="submit" name="submit_payment">Submit</button>
      </form>
  </div>
  <div id="contacts">
        <div class="contacts-header">
            <h1>GET IN TOUCH</h1>
            <p>Contact us</p>
        </div>
        <div class="contact-wrapper">
            <div class="openings">
                <h1>Opening Hours</h1>
                <h3>Monday to Friday 0800HRS - 1730HRS</h3>
                <h3>Saturday and Sunday 1130HRS - 1600HRS</h3>
            </div>
            <div class="call">
                <ul>
                    <li><a href="#"><img src="images/finalinsta.jpg" height="30" width="30" alt="">wailerbenson</a></li>
                    <li><a href="#"><img src="images/call-icon.png" height="30" width="30" alt="">0794161135</a></li>
                    <li><a href="#"><img src="images/FB.png" height="30" width="30" alt="">benyybenn</a></li> 
                </ul>
            </div>
        </div>

        <div class="socials">
            <ul>
                    <a href="#"><img src="images/FB.png" alt="" height="30" width="30"></a>
                    <a href="#"><img src="images/gmail.png" height="30" width="30" alt=""></a>
                    <a href="#"><img src="images/finalinsta.jpg" alt="" height="30" width="30">
                    <a href="#"><img src="images/twitter-icon.jpg" height="30" width="30" alt="">
        </div>
    </div>
  
    <section id="copyright">
        <div class="copyright">
            Copyright &copy Sneakers Cartel & Apparel-254 All Rights Reserved <br>Designer Copyright &copy Kogi 2021.
        </div>
    </section> 
</body>
</html>