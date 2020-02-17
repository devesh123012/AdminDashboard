
<?php include "header.php";?>
<?php include "menu.php";?>

<!-- ==================Top Bar================= -->
<div class="card pl-5 px-5 front-container">
	<div class="row p-2">
		<div class="col-sm-9 topnav">
			<div class="row">
			   <!--  <div class="col-sm-2">
					<i class="fas fa-search"></i>
				</div>
 -->			<div class="col-sm-10">
					&nbsp;<input class="textcol" type="text" placeholder="Search for something...">
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<span class="dot"><i class="far fa-bell px-2 pt-2 text-white"></i></span><!-- <span class="dot1"></span> -->
			<span class="dot"><i class="far fa-envelope px-2 pt-2 text-white"></i></span>
		<!-- 	<span class="dot1"></span> -->

			<label class="text-white px-3">John Doe</label>
			<img id="octagon" src="img/Profilepic.jpeg" alt="Avatar" class="avatar"> 
		</div>
	</div>

	<?php include "firstrow.php";?>
	<?php include "secondrow.php";?>
	<?php include "thirdrow.php";?>
</div>

<?php include "footer.php";?>