  <div class="top-bar">
      <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <span class="menu-icon dark" data-toggle></span>
    </span>
  <div id="responsive-menu">
    <div class="top-bar-left">
     <ul class="dropdown menu" data-dropdown-menu>
       <li><a href="../../index.php" class="item">Home</a></li>

       </li>

     </ul>
    </div>
         <div class="top-bar-right">
         <ul class="menu">
         <?php 
          if(isset($_SESSION['username']))
      {
        echo "<li><a href='logout.php' class='button success hollow' role='button'>Logout</a><li>";
      }


          ?>
      
         
       </ul>
     </div>
  </div>
  </div><!--close top-bar-->