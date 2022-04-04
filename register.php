
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="project.css">
    <style type="text/css">
        .second-header a{
            color: blue;
        }
        .number p{
            color: lightblue;
        }
        .navigations{
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="second-header">
        
        <div class="logo"><p>RacyBen GiftsShop</p></div>
        <div class="search-bar"><input type="search" placeholder="What are you shopping for"> <button>SEARCH</button></div>

        <div class="number">
            <p>Contact Number <br> <span style="font-weight: bolder; ">0794161135</span></p>
        </div>
        <div class="login"><a href="#">Login <br> Register</a></div>

        <div class="cart"><p><a href="#">My Cart</a></p></div>
    </div>

   

    
         <div class="form-wrapper">
          <form action="register.php" method="POST">
            <h1>Registration</h1>
           <?php include('errors.php'); ?>
           <div class="input-group">
            <label>Full Names:</label>
            <input type="text" name="fullnames" value=" <?php echo $username ?>">
          </div>
          <div class="input-group">
            <label>Username:</label>
            <input type="text" name="username" value=" <?php echo $username ?>">
          </div>
          <div class="input-group">
            <label>Email:</label>
            <input type="email" name="email" value=" <?php echo $email ?>">
          </div>
          <div class="input-group">
            <label>Phone:</label>
            <input type="phone" name="phone" value=" <?php echo $phone ?>" >
          </div>
          <div class="input-group">
            <label>Adress:</label>
            <input type="text" name="address" value=" <?php echo $address ?>" >
          </div>
          <div class="input-group">
            <label>County:</label>
            <input type="text" name="county" value=" <?php echo $county ?>" >
          </div>
          <div class="input-group">
            <label>File:</label>
            <input type="file" name="uploadfile" required >
          </div>
          <div class="input-group">
            <label>Password:</label>
            <input type="password" name="password_1" >
          </div>
          <div class="input-group">
            <label>Confirm Password:</label>
            <input type="password" name="password_2" >
          </div>
          <div class="input-group">
        
              <button type="submit" class="btn" name="reg_user">Register</button>
          </div>
          <p>
        
            Already a member? <a href="login.php">Sign in</a>
          </p>
        </form>
         </div>
        
      </div>
      <div id="contacts" style="margin-top: 5px;">
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