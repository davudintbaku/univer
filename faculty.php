<?php 
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "edu.az";  
  
$mysqli = mysqli_connect($host, $user, $password, $db_name); 
$sql = " SELECT  DISTINCT (username) FROM teachers ";
$result = $mysqli->query($sql);
$mysqli->close();



?>
<!doctype html>
<html lang="en">
<head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <style>
      /* Style the modal background */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.4);
      }

      /* Style the modal content */
      .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
      }

      /* Style the close button */
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-color: blue;"></div>
	  				<h3>İstifadəçi Adı</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.html"><span class="fa fa-home mr-3"></span> Əsas səhifə</a>
          </li>
          <li>
              <a href="faculty.php"><span class="faculty"><small class="d-flex align-items-center justify-content-center"></small></span> Fakultə</a>
          </li>
          <li>
          <a href="error-404.php"><span class="kafedra"></span> Kafedra</a>
          </li>
          <li>
            <a href="index.html"><span class="staff"></span> Əməkdaş</a>
          </li>
          <li>
            <a href="ixtisas.php"><span class="profession"></span> İxtisas </a>
          </li>
          <li>
            <a href="qrup.php"><span class="group"></span> Qrup</a>
          </li>
          <li>
            <a href="index.html"><span class="student"></span> Tələbə</a>
          </li>
          <li>
            <a href="index.html"><span class="fa fa-support mr-3"></span> Dəstək xidməti</a>
          </li>
          <li>
            <a href="tedris.html"><span  class="fa fa-book" aria-hidden="true"></span> Tədris</a>
          </li>
          <li>
            <a href="index.html"><span class="fa fa-sign-out mr-3"></span> Çıxış</a>
          </li>

        </ul>
    
    	</nav>
<!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">         
        <h2 class="mb-4">qrup yarat</h2>
 


   
    <title>fakulte YARAT</title>
  


    <!-- Trigger the modal with a button -->
    <button onclick="document.getElementById('myModal').style.display='block'" >Yeni fakulte yaratmaq <i class="fa fa-plus"></i></button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        orm
        <p> <!-- start -->
        <form action="faculty.php" method="post">
        <div class="input_field" style="font-size: 18px;">
            Fakultə adı : <input type="text" name="fakulteadi" style="border: none; border-radius: 10px;" >
        </div>
        <div class="input_field select_option" style="font-size: 18px;">
           Dekan  <select name="dekan">
              <option> Dekanı Seçin</option>
              <?php
              // LOOP TILL END OF DATA
              while($rows=$result->fetch_assoc())
              {
          ?>
        
           
              <option><?php echo $rows['adsoyad'];?></option>
              
              
       
          <?php
              }
          ?>
            </select>
            <div class="select_arrow"></div>
          </div>

        <div class="input_field" style="font-size: 18px;">
            Abreviatur : <input type="text" name="abreviatur" style="border: none; border-radius: 10px;" >
        </div>
        <br>
        <input type="submit" name="submit" value="YADDAŞA VER" style="background-color: #0485CD; width: 200px; border-radius: 10px; color: white;">
    </form>
</p><!-- end -->
      </div>

    </div>


















<!-- Page Content END  -->
            </div>         
                
	    </div>



       


<script src="depart.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="depart.js"></script>

  </body>
</html>