<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="navbar-header">
<!--
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
-->
        <a class="navbar-brand title_ap animated pulse" href="">Saladura Travels - Admin Panel</a>
    </div>

	<div class="pull-right navbar-header " style="margin-right:5%;"><span class="title_ap navbar-brand animated pulse">User : <?php echo $_SESSION["username"]  ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<div class="pull-right"><form action = "AdminPanel/functions/logout.php">			
			<button type="submit" class="logout animated pulse">Logout</button>
 			  </form>
		</div>
			
			
			
			</div>
<!--
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-nav-custom navbar-right">
            <li><a href="index.php">USER : </a></li>
            <li><a href="gallery.php">Shashika</a></li>            
        </ul>
    </div>
-->
</nav>

