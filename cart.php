

<?php session_start();?>
<?php
if (empty($_SESSION['cart']) ){
    header('index.php');
    echo '<script> confirm("Your cart is empty")
     </script>';
    }
    

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Cart</title>
	<link rel="stylesheet" href="styles2.css">
	<style type="text/css">
		.table{
			text-align: center;
			color: cadetblue;
			margin-top: 50px;
		}
		.buttons{
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
	</style>
</head>
<body>

	<!-- Headern with the search-bar,navigation to login/register,logo etc...... -->
    <div class="second-header"> 
        <div class="logo"><p>RacyBen GiftsShop</p></div>
        <div class="search-bar"><input type="search" placeholder="What are you shopping for"> <button>SEARCH</button></div>
        <div class="number">
            <div class="cart"><p><a href="cart.php"><i class="bi bi-cart-plus-fill"></i>CART 
            </a></p></div>
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
        <div class="login"><a href="logout.php"> LOGOUT</a><i class="bi bi-box-arrow-right"></i></div>
    </div>
<!-- Navigation links linking to different pages of the website -->
<!--     <div class="navigation">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">FOOT-WEAR</a></li>
          <li><i class="bi bi-alarm"></i><a href="#">GIFTS FOR HIM</a></li>
          <li><a href="#">GIFTS FOR HER</a></li>
          <li><a href="#">WATCHES</a></li>
          <li><a href="#">ELECTRONICS</a></li>
          <li><a href="#">FLOWERS</a></li>
          <li><a href="#">T-SHIRTS</a></li>
          <li><a href="#">HOODIES</a></li>
          <li><a href="#">JACKETS</a></li>
          <li><a href="#">CONTACTS</a></li>
        </ul>
    </div> -->


 <div class="table">
        <h3>Items selected</h3>
                    <?php 
                    $total = 0;
                    $output = "";
                    $output .= "
                    <table class ='table table-border table-striped'>
                    <tr>
                    <th> ID </th>
                    <th> Item Name </th>
                    <th> Item price </th>
                    <th> Item Quantity </th>
                    <th> Total Price </th>
                    <th> Action </th>
                    </tr>
                    ";

                    if (!empty($_SESSION['cart'])) {

                        foreach ($_SESSION['cart'] as $key => $value) {
                            $output .= "
                            <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['product_name']."</td>
                            <td>".$value['product_price']."</td>
                            <td>".$value['quantity']."</td>
                            <td> Ksh.".number_format($value['product_price'] * $value['quantity'],2)."</td>
                            <td>
                            <a href = 'index.php?action=remove&id=".$value['id']."'> 
                            <button  class = 'btn btn-danger btn-block'>Remove </button>
                            </a></td>
                             </tr>
                            ";
                            $total = $total + $value['quantity'] * $value['product_price'];
                        }
                        $output .= "
                        <tr>
                        <td colspan = '3'> </td>
                        <td><b>Price: </b> </td>
                        <td>".number_format($total,2)."</td>
                        <td> 
                        <a href = 'index.php?action=clearall'> 
                        <button class = 'btn btn-warning btn-block'>Clear</button>
                        </a>
                        </td>
                        ";
                    }
                    echo $output;
                     
                    


if (isset($_GET['action'])) {

    if ($_GET['action'] == "clearall"){
        unset($_SESSION['cart']);
        // header('Location: login.php');
    }
    if ($_GET['action'] == "remove") {
    
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['id'] == $_GET['id']) {
            unset($_SESSION['cart'][$key]);
        }
    }
}
}


?>
<div class="buttons" style="background-color: seagreen; padding: 10px;">
	<button> <a href="index.php">Go back to shopping</a></button>
	<button> <a href="payment.php">Continue to Payment</a></button>
</div>
</body>
</html>