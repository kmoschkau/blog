    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
	<a class="navbar-brand" href="index">Welcome
<?php echo $_SESSION['login_user'] ?>
</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tips">Latest Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
	    </li>
            <li class="nav-item"> 
<?php if(isset($_SESSION['login_user'])){ ?>
	 	<a class="nav-link" href="logout">Logout</a>
<?php } else { ?>
		<a class="nav-link" href="login">Login</a>
<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
