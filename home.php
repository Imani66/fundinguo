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
 
$customerr = $pdo->query("SELECT COUNT(*) as sum FROM customer"); 
$orderr = $pdo->query("SELECT COUNT(*) as sum FROM `order`");
$incomee = $pdo->query("SELECT sum(amount) as sum FROM `income` WHERE date > DATE_SUB(NOW(), INTERVAL 30 DAY)");
$expensee = $pdo->query("SELECT sum(amount) as sum FROM `expense` WHERE date > DATE_SUB(NOW(), INTERVAL 30 DAY)");

$customer = $customerr->fetch(PDO::FETCH_ASSOC); 
$order = $orderr->fetch(PDO::FETCH_ASSOC);
$income = $incomee->fetch(PDO::FETCH_ASSOC);
$expense = $expensee->fetch(PDO::FETCH_ASSOC);

include ('header.php');
?>


    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <marquee behavior="" direction=""><h1 class="page-header">KARIBU FUNDI NGUO NA MIMI</h1></marquee>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $customer['sum'] ?></div>
                                    <div>Jumla ya wateja!</div>
                                </div>
                            </div>
                        </div>
                        <a href="customerview.php">
                            <div class="panel-footer">
                                <span class="pull-left">Angalia</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $order['sum'] ?></div>
                                    <div>Jumla ya Maagizo!</div>
                                </div>
                            </div>
                        </div>
                        <a href="orderlist.php">
                            <div class="panel-footer">
                            	<span class="pull-left">Angalia</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">‎<?php echo $currency.$income['sum'] ?></div>
                                    <div>Mapato ya siku 30 zilizo pita!</div>
                                </div>
                            </div>
                        </div>
                        <a href="incview.php">
                            <div class="panel-footer">
                                <span class="pull-left">Angalia</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $currency.$expense['sum'] ?></div>
                                    <div>Matumizi ya siku 30 zilizo pita!</div>
                                </div>
                            </div>
                        </div>
                        <a href="expview.php">
                            <div class="panel-footer">
                                <span class="pull-left">Angalia</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
            </div>

            <!-- /.row -->
            
<script>
//current year income / expense	
var barChartData3 = {
		labels : [<?php echo $dates; ?>],
		datasets : [
			{
				label: "Expenses",
				fillColor : "rgba(220,0,0,0.2)",
				strokeColor : "rgba(220,0,0,1)",
				pointColor : "rgba(220,0,0,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [<?php echo $expenses; ?>]
			} ,
			{
				label: "Income",
				fillColor : "rgba(0,120,0,0.2)",
				strokeColor : "rgba(0,120,0,1)",
				pointColor : "rgba(0,320,0,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [<?php echo $income; ?>]
			} ,
			{
				label: "Profit",
				fillColor : "rgba(13, 31, 162,0.2)",
				strokeColor : "rgba(13, 31, 162,1)",
				pointColor : "rgba(13, 31, 162,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [<?php echo $profit; ?>]
			} 
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("myChart").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData3, {
			responsive : true
		});
	}	 

	
</script>
<?php
 include ('footer.php');
 ?>