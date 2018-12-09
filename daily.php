<?php include 'includes/dailyInformation.php'?>
<?php include 'includes/config.php'?>
<?php get_header()?>

		<nav class="nav nav-pills nav-fill">
			<a class="nav-item nav-link" href="daily.php?day=Monday">Monday</a>
			<a class="nav-item nav-link" href="daily.php?day=Tuesday">Tuesday</a>
			<a class="nav-item nav-link" href="daily.php?day=Wednesday">Wednesday</a>
			<a class="nav-item nav-link" href="daily.php?day=Thursday">Thursday</a>
			<a class="nav-item nav-link" href="daily.php?day=Friday">Friday</a>
			<a class="nav-item nav-link" href="daily.php?day=Saturday">Saturday</a>
			<a class="nav-item nav-link" href="daily.php?day=Sunday">Sunday</a>
		</nav>

    <!--	<div class="tab-content" id="nav-tabContent">
  			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
  			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
		</div> -->
		
		<div class="container">
  			<p>
              	<center><h2 class="post-title"><?=$today?>'s Brunch Restaurant is <em><?=$restaurant?></em></h2></center>
          		<img class="flexible" src="<?=$config->theme_virtual?>img/<?=$img?>"  height="800" width="1100" = alt="<?=$alt?>" id="restaurant" /> <br />
				<a>By: </a><?=$alt?>
          		<h4 class="post-title">Chef's recommendation: </h4><?=$brunch?>
          		<h4 class="post-title">Address: </h4><?=$address?> 
          		<h4 class="post-title">Phone Number: </h4><?=$phone?>
          		<h4 class="post-title">Time: </h4><?=$time?>
              	<h4 class="post-title">Description: </h4><?=$description?>
		   </p>
		</div>
		
<?php get_footer()?>