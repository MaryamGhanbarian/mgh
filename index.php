<?php
//include("consts.php");
$_SESSION["PAGE"]="&#1589;&#1601;&#1581;&#1607; &#1575;&#1589;&#1604;&#1740;";
$_SESSION["PAGECODE"]="index";
//include("manage/class/common.php");
//$db=new common();
include("header.php");
include("manage/class/products.php");
$mdlpro = new products($db);
$products = $mdlpro->display_site();
?>
<div class="content">
	
	<div class="cnt-main btm">
		<div class="section group">
		<?php 
		if(!empty($products))
		{
			foreach($products as $item)
			{
		?>
		<div class="grid_1_of_3 images_1_of_3">
			 <a href="<?php echo 'details.php?id='.$item["productId"];?>"><img src="<?php echo $item["proLogo1"];?>" alt=""/></a>
			 <a href="<?php echo 'details.php?id='.$item["productId"];?>"><h3><?php echo $item["proTitle"];?></h3></a>
			<div class="cart-b">
				<span class="price left" >
				<sup style="direction:rtl;text-align:right;font-size:0.7em;">
					<?php 
					if(!empty($item["amount"]))
						echo number_format($item["amount"]).' ریال';
					?>
				</sup><sub></sub></span>
			    <div class="btn top-right right"><a href="<?php echo 'details.php?id='.$item["productId"];?>">ثبت سفارش</a></div>
			    <div class="clear"></div>
			</div>
		</div>
		<?php 
			}
		}
		?>		
		</div>
	</div>
</div>
<br>

<?
include("footer.php");

?>