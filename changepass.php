<?php
require_once('function.php');
dbconnect();
session_start();

if (!is_user()) {
	redirect('index.php');
}

?>


<?php
 $user = $_SESSION['username'];
$usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
$usid = $usid->fetch(PDO::FETCH_ASSOC);
 $uid = $usid['id'];
 include ('header.php');
 ?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Badilisha neno Siri</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
			
			

		<?php

if($_POST)
{

$oldword = $_POST["oldword"];
$newword = $_POST["newword"];
$newwword = $_POST["newwword"];

$oldmd = MD5($oldword);

$cpass = $pdo->query("SELECT password FROM users WHERE id='".$uid."'");
$cpass = $cpass->fetch(PDO::FETCH_ASSOC);

$err1=0;$err2=0;$err3=0;$err4=0;


if ($newword!=$newwword){
$err2=1;
}


 if(trim($newword)=="")
      {
$err3=1;
}

 if(strlen($newword)<=3)
      {
$err4=1;
}

if(isset($err1))
 $error = $err1;+$err2+$err3+$err4;


if (!isset($error) || $error == 0){
$passmd = MD5($newword);
$res = $pdo->exec("UPDATE users SET password='".$passmd."' WHERE id='".$uid."'");
if($res){
	echo "<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Neno siri limebadilishwa kikamilifu!

</div>";
}else{
	echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Tatizo limejitokeza, Tafadhali jalibu tena. 

</div>";
}
} else {
	
if (!isset($err1) || $err1 == 1){
echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Neno siri lako la sasa halifanani,Tafadhali Jalibu tena.

</div>";
}		
if ($err2 == 1){
	echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Umeingiza nenosiri tofauti katika sehemu mbili. Tafadhali ingiza nenosiri sawa katika sehemu zote mbili
</div>";

}		
if ($err3 == 1){
echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Neno siri haliwezi kuwa tupu!!!

</div>";
echo"<h1></h1>";
}		
if ($err4 == 1){
	echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Nenosiri lazima liwe na herufi nne au zaidi.

</div>";
}	

	
}



} 
	?>
			
			
			
			
			
			
			
			
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
				<form action="changepass.php" method="post">
		
                    <div class="form-group">
                        <input class="form-control" placeholder="Nenosiri la sasa" name="oldword" type="password">
                        <input class="form-control" placeholder="Nenosiri mpya" name="newword" type="password">
                        <input class="form-control" placeholder="Nenosiri mpya" name="newwword" type="password">
                    </div>
					<input type="submit" class="btn btn-lg btn-success btn-block" value="Badili">
				</form>
                </div>
                
                
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<?php
 include ('footer.php');
 ?>