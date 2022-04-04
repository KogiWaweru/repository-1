


<?php
session_start();
//Check if the session variable has already been initialized in the login page
if(!isset($_SESSION['username'])){
   $_SESSION['msg'] = "You must login first";
   header("Location: login.php");
}
?>
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"shopping-cart");

 if (isset($_POST['add_to_cart'])) {
   if (isset($_SESSION['cart'])) {
    //get the session array id
    $session_array_id = array_column($_SESSION['cart'], 'id');
    if (!in_array($_GET['id'],$session_array_id )) {
        $session_array = array(
      'id' => $_GET['id'],
      'product_name' => $_POST['product_name'],
      'product_price' => $_POST['product_price'],
      'quantity' => $_POST['quantity']
    );

   $_SESSION['cart'][] = $session_array; 
    }
   }else{

    $session_array = array(
      'id' => $_GET['id'],
      'product_name' => $_POST['product_name'],
      'product_price' => $_POST['product_price'],
      'quantity' => $_POST['quantity']
    );

    $_SESSION['cart'][] = $session_array; 
   }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Gideon+Roman&family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Index page</title>
    <style>
        form, .content{
            width: auto;
            height: auto;
            border: 1px solid blanchedalmond;
            padding: 5px;
        }
        button{
            background: green;
            padding: 7px;
            margin-top: 10px;
        }
        .image-container{
            display: flex;
            flex-wrap: wrap;
            padding: 5px;
        }
        .input{
            padding-top: 10px;
        }
        .users{
            color: red;
        }
        .table{
            text-align: center;
            color: green;
            font-size: 15px;
            /*height: 450px;*/
            /*border: 1px solid red;*/
        }
        .table table{
            border: 2;
        }
    </style>
</head>
<body>
   
<!-- Headern with the search-bar,navigation to login/register,logo etc...... -->
    <div class="second-header">
        
        <div class="logo"><p>Wailers GiftsShop</p></div>
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
        <div class="login"><a href="logout.php"> LOGOUT

        <?php
         
         ?>       
          </a></div>

        
    </div>
<!-- Navigation links linking to different pages of the website -->
    <div class="navigation">
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

    </div>
    
    <div class="below-header">
      <h1></h1>
    </div>

    <div class="my-wrapper">
        <div class="navigations">
         <div class="image-container">
             <div class="input">
                 <img src="image/shoe-6.jpg" height="200px" width="200px">
                 <div class="desc"> 
                    <p>Timberland Black</p>
                    <p>Price: Ksh 4500</p>
                 </div>
             </div>
             <div class="input">
                 <img src="image/shoe5.jpg" height="200px" width="200px">
                 <div class="desc"> 
                    <p>AirForce Stripped</p>
                    <p>Price: Ksh 2400</p>
                 </div>
             </div>
             
         
          <div class="input">
                 <img src="image/nature1.jpg" height="200px" width="200px">
                 <div class="desc"> 
                    <p>Converse Blue</p>
                    <p>Price: Ksh 3400</p>
                 </div>
             </div>
              <div class="input">
                 <img src="image/shoe2-2.jpg" height="200px" width="200px">
                 <div class="desc"> 
                    <p>Long Sleeved</h3p>
                    <p>Price: Ksh 2400</p>
                 </div>
             </div>
             <div class="input">
                 <img src="images/shoe2-2.jpg" height="200px" width="200px">
                 <div class="desc"> 
                    <p>Leather Brown</p>
                    <p>Price: Ksh 2400</p>
                 </div>
             </div>
             </div>
        </div>
        <div class="images">
            <div class="header-text">
                <h2>Wailers giftShop</h2>
                <p>
                    Brandable corporate gifts are available at Pablo Gift Shop. We can custom-make beautiful business gift hampers to meet your company requirements. We also offer customizations and branding with corporate logos, slogans, etc. <br>
                   Whether it’s corporate giveaways, client appreciation gift hampers, end-of-year gifts, or product launch giveaways, we have just the perfect package for you.Contact us if you want a custom-made package <br>
                    Many options including branded notebooks, calendars, umbrellas, flasks, diaries amongst others available. Talk to us
                </p>
            </div>
            <div class="sorting">
                <h1 style="font-size: 20px; color: blue; padding: 5px; text-align: center;">Designed by Ben</h1>
            </div>
            <!-- images for this web page -->
            <div class="img-wrapper">

                 <?php 
                    $servername = "localhost";
                    $dbuser = "root";
                    $passdb = "";

                    $conn2 = mysqli_connect($servername,$dbuser,$passdb);
                    mysqli_select_db($conn2,"shopping-cart");

                    if (!$conn2) {
                        die();
                    }

                    $prod_query = "SELECT * FROM cart";
                    $ress = mysqli_query($conn2,$prod_query);
                    if ($ress) {
                        while ($rows = mysqli_fetch_array($ress)) { ?>
                <div class="image-input">
                   
                    <form action="index.php?id=<?=$rows['id']; ?>" method="POST">
                    <img src="<?= $rows['product_image']; ?>" width="250" height="250" alt="<?= $rows['product_name']; ?>">
                   <p> Name: <?= $rows['product_name']; ?> <br>
                    <p> Price: <?= $rows['product_price']; ?> <br>
                    <p> InStock: <?= $rows['availability']; ?> <br>
                    <input type="hidden" name="product_name" value="<?= $rows['product_name'] ?>">
                    <input type="hidden" name="product_price" value="<?= $rows['product_price'] ?>">
                    <input type="number" value="1" class="form-control" name="quantity"> <br>
                    <button type="submit" class="btn btn-warning btn-block my-1"  name="add_to_cart">Add To Cart</button>
                </form>
                </div>
                <?php
                        }
                    }
                    ?>
            </div>
        </div>
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