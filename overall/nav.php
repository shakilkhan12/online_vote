  <div class="top-bar c-top-bar">
<!--       <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <span class="menu-icon dark" data-toggle></span>
    </span> -->
  <!-- <div id="responsive-menu"> -->
    <div class="top-bar-left">
     <ul class="dropdown menu" data-dropdown-menu>
       <li><a href="index.php" class="item">Home</a></li>
       <li><a href="registration.php" class="item">Registration</a></li>
      <li><a href="result.php" class="item">Result</a></li>
       <li><a href="about.php" class="item">About Us</a></li>
       <li><a href="contact.php" class="item">Contact Us</a></li>
       <?php
        session_start();
        if(isset($_SESSION['email']))
       {
        echo "<li><a href='admain/admin_view.php' class='item'>".$_SESSION['email']."</a></li>";
        }
        else if(isset($_SESSION['username']))
        {
          echo "<li><a href='admain/local/local_dashboard.php' class='item'>".$_SESSION['username']."</a></li>";
        }
         else
         {
            echo "<li><a href='admain/login_page.php' class='item'>Login</a></li>";
         }
         ?>


     </ul>
    </div>

  <!-- </div> -->
  </div><!--close top-bar-->