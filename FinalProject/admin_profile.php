<?php error_reporting(E_ERROR | E_PARSE);
 include('logindetails.php');
 include('index_staff.php');
 ?>
<html>
<meta charset="utf-8">
    <link href = "profile.css" rel = "stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>

.dropbtn{
    background-color:#212F3D ; 
    border: none;
    color: white;
    padding: 15px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 25px;
    cursor: pointer;
    border:2px solid black;
    width:100%;
    height:11%;
  }
  
      .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 18px;
    text-decoration: none;
    display: block;
    font-size:12px;
    text-transform:uppercase;
    border:1px solid black;
    
  }
  
  .dropdown-content a:hover {background-color: #B0B0B0}
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

</style>


<div class = "main">
<div class = "lower"></div>
<div class = "clg-name">
    <div class = "uppername">MORDERN EDUCATION SOCIETY'S</div>
     <div class = "lowername">CUSROW WADIA INSTITUTE OF TECHNOLOGY</div>
 </div> 
     
<div class = "lower"></div>
<div class = "right-side">
<div class="dropdown">
    <button class="dropbtn"><u>DEPARTMENT</u></button>
    <div class="dropdown-content"><strong>
    <a href="admin_compdept.php">Computer Department</a>
    <a href="admin_mechdept.php">Mechanical Department</a>
    <a href="admin_electdept.php">Electrical Department</a>
    <a href="admin_etcdept.php">E&tc Department</a>
    <a href="admin_civildept.php">Civil Department</a></strong>
    </div>
    </div>
<div class = "dropdown">
<button class = "dropbtn"><u>NOTICES</u></button>
<div class = "dropdown-content">
  <a href = "admin_notice.php">UPLOAD NOTICE</a>
  <a href = "notice_view.php">VIEW NOTICES</a>
</div>
</div>

    <div class="dropdown">
    <button class="dropbtn"><u>STUDENTS</u></button>
    <div class="dropdown-content"><strong>
    <a href="staff_view_comp_student.php">Computer Department</a>
    <a href=staff_view_mech_student.php>Mechanical Department</a>
    <a href=staff_view_elect_student.php>Electrical Department</a>
    <a href=staff_view_etc_student.php>E&tc Department</a>
    <a href=staff_view_civil_student.php>Civil Department</a></strong>
    </div>
    </div>
    

   
    <div class="dropdown">
    <button class="dropbtn"><u>EVENTS</u></button>
    <div class="dropdown-content">
    
    </div>
    </div>
    <br>
    <div class="dropdown">
    <button class="dropbtn"><u>OFFICE DEPT</u></button>
    <div class="dropdown-content">
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn"><u>LIBRARY</u></button>
    <div class="dropdown-content">
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn"><u>HOSTEL</u></button>
    <div class="dropdown-content">
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn"><u>SPORTS</u></button>
    <div class="dropdown-content">
    </div>
    </div><br>
    <div class="dropdown">
    <button class="dropbtn"><u>ALUMINI</u></button>
    <div class="dropdown-content">
    </div>
    </div>
<br><br><br><br>

</div></strong>
<div class = "side-bar">
<div class = "small"></div>
<div class = "profile">
</div><br>
<div class = "name">
<?php echo "$Name";?>
</div>
<div class = "middle">
</div><br>
<div class = "name">ADMIN</div>
<div class = "middle">
</div><br><br>
<div class = "socail-media">

        <div class = "fa fa-facebook"> <br><button class = "temp"></button></a> </div>
        <div class = "fa fa-twitter"><br><button class = "temp"></button></div>
        <div class = "fa fa-google-plus"><br><button class = "temp"></button></div>
        <div class = "fa fa-linkedin"><br><button class = "temp"></button></div>
    </div><br> 
      
<button class="button"><u><a href = "update_student_data.php">SETTINGS</u></a></button>
<button class="button"><u><a href = "update_student_data.php">LOGOUT</u></a></button>
</div>

</html>