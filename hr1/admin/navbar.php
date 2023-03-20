
<style>
</style>
<?php 
// include "visible_user.php";
?>
<nav id="sidebar" class='mx-lt-5 'style="background-color:white" >
	<div style="display:flex !important">
                <div>
                    <img src="<?php  echo "./assets/img/logo.png" ?>" alt="logo" style="width:auto;height:100px; border-radius: 9999px; !important">
                </div>
                <div class="ml-3">
                    <h1 style="font-size:22px;color:#6366f1">FREIGHT</h1>
                    <p class="font-size:11px; color:#6366f1 !important">Human Resource </p>
                </div>
            </div>
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=applications" class="nav-item nav-applications"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Applications</a>	
				<a href="index.php?page=vacancy" class="nav-item nav-vacancy"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Vacancy</a>	
				<a href="#"   class="nav-item "><span class='icon-field'><i class="fa fa-book"></i></span> Learning and training</a>
				<a href="#"   class="nav-item "><span class='icon-field'><i class="fa fa-chart-bar"></i></span> View performance</a>
				<a href="#"   class="nav-item "><span class='icon-field'><i class="fa fa-list"></i></span> Sucession planning</a>
				<a href="#"   class="nav-item "><span class='icon-field'><i class="fa fa-chart-bar"></i></span> Social Recognition</a>
				<a href="index.php?page=recruitment_status" class="nav-item nav-recruitment_status"><span class='icon-field'><i class="fa fa-th-list"></i></span> Status Category</a>		
				<?php if($_SESSION['user']['position_id'] != 1): ?>
				<a href="/fms/admin/administrative/user-management/accounts.php" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Settings</a>
			
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>


