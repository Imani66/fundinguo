<?php
$_POST = array_map('strip_tags', $_POST);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>FUNDI NGUO NA MIMI</title>

  <link href="css/style.default.css" rel="stylesheet"> 


 <link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
  <link rel="stylesheet" href="css/jquery.tagsinput.css" />
  <link rel="stylesheet" href="css/colorpicker.css" />
  <link rel="stylesheet" href="css/dropzone.css" />
  <script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>
<!------------------------Chat JS Files ------------------------------------------------------>
<script type="text/javascript" src="js/Chart.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
 

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

    

 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

 <script>
$(function() {
$( "#datepicker1" ).datepicker();
});
</script>

 <script>
$(function() {
$( "#datepicker2" ).datepicker();
});
</script>
<style>
.page-header {
    border-bottom: 0px solid #FFF;
	color: #1D2939;
	
}
h1 {
  text-transform: uppercase;
}
</style>

 
</head>

<body>



<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<?php   
		$pdo->exec("set names utf8");
		$dd = $pdo->query("SELECT currency, sitename FROM general_setting WHERE id='1'");
		$dd = $dd->fetch(PDO::FETCH_ASSOC);
		$currency = $dd['currency'];
 ?>
<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1>FUNDI NGUO NA MIMI</h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">

            <h5 class="sidebartitle actitle">Akaunti</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Mpangilio wa akaunti</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Toka/Sign Out</span></a></li>
            </ul>
        </div>

      <h5 class="sidebartitle">Machaguo</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
	  
	  
	   
	  
        <li><a href="home.php"><i class="fa fa-home"></i> <span>Nyumbani</span></a></li>

        <li><a href="customeradd.php"><i class="fa fa-user"></i><span>Ongeza Mteja</span></a></li>
    	<li><a href="orderadd.php"><i class="fa fa-shopping-cart"></i><span>Ongeza Maagizo</span></a></li>
        <li><a href="orderlist.php"><i class="fa fa-shopping-cart"></i><span>Angalia/Hariri Maagizo</span></a></li>
        <li><a href="customerview.php"><i class="fa fa-user"></i><span>Angalia/Hariri Mteja</span></a></li>
        <li><a href="subilisms.html"><i class="fa fa-envelope-o"></i><span>TUMA UJUMBE</span></a></li>
		<li><a href="subilisms.html"><i class="fa fa-envelope"></i><span>TUMA BARUA PEPE</span></a></li>
        
        <li class="nav-parent"><a href="#"><i class="fa fa-th-list"></i> <span>Usimamizi wa wafanyakazi</span></a>
          <ul class="children">
            <li><a href="staffadd.php"><i class="fa fa-caret-right"></i>Ongeza mfanyakazi</a></li>
            <li><a href="staffview.php"><i class="fa fa-caret-right"></i>Angalia/Hariri mfanyakazi</a></li>
            <li><a href="paysalary.php"><i class="fa fa-caret-right"></i> Lipa Mshahala</a></li>
            <li><a href="staffcatadd.php"><i class="fa fa-caret-right"></i>Ongeza idara</a></li>
            <li><a href="staffcatview.php"><i class="fa fa-caret-right"></i>Angalia/Hariri idara</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-th-list"></i> <span>Usimamizi wa matumizi</span></a>
          <ul class="children">
            <li><a href="expadd.php"><i class="fa fa-caret-right"></i>Ongeza matumizi</a></li>
            <li><a href="expview.php"><i class="fa fa-caret-right"></i>Angalia/Hariri Matumizi</a></li>
            <li><a href="expcatadd.php"><i class="fa fa-caret-right"></i>Ongeza aina ya matumizi</a></li>
            <li><a href="expcatview.php"><i class="fa fa-caret-right"></i>Angalia/Hariri aina ya Matumizi</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-th-list"></i> <span>Usimamizi wa mapato</span></a>
          <ul class="children">
          	<li><a href="incadd.php"><i class="fa fa-caret-right"></i>Ongeza mapato</a></li>
            <li><a href="incview.php"><i class="fa fa-caret-right"></i>Angalia/Hariri Mapato</a></li>
            <li><a href="inccatadd.php"><i class="fa fa-caret-right"></i>Ongeza aina ya Mapato</a></li>
            <li><a href="inccatview.php"><i class="fa fa-caret-right"></i>Angalia/Hariri aina ya mapato</a></li>
          </ul>
        </li>
        
        <li class="nav-parent"><a href="#"><i class="fa fa-th-list"></i> <span>Usimamizi wa vipimo</span></a>
          <ul class="children">
          <li><a href="typeadd.php"><i class="fa fa-caret-right"></i>Ongeza Aina ya Kitamba</a></li>
            <li><a href="typeview.php"><i class="fa fa-caret-right"></i>Angalia/hariri Aina ya Kitamba</a></li>
            <li><a href="partadd.php"><i class="fa fa-caret-right"></i>Ongeza Aina Kipimo</a></li>
            <li><a href="partview.php"><i class="fa fa-caret-right"></i>Angalia/hariri Vipimo</a></li>
          </ul>
        </li>
        
        <li class="nav-parent"><a href="#"><i class="fa fa-cog"></i> <span> Setting/Mpangilio wa jumla</span></a>
          <ul class="children">
            <li><a href="setgeneral.php"><i class="fa fa-caret-right"></i> Setting/Mpangilio</a></li>
            <li><a href="setlogo.php"><i class="fa fa-caret-right"></i> NEMBO</a></li>
            <li><a href="document.php"><i class="fa fa-caret-right"></i>Document/Hati Rasimi</a></li>
			<li><a href="subilisms.html"><i class="fa fa-caret-right"></i>Ongeza kielelezo cha UJUMBE/BARUA PEPE</a></li>
            <li><a href="subilisms.html"><i class="fa fa-caret-right"></i>Angalia kielelezo cha UJUMBE/BARUA PEPE</a></li>


          </ul>
        </li>




      </ul>

      

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>

        
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

<?php
echo "<img src='images/user.png' alt='' />";
echo " $user";
?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->


    <div class="contentpanel">