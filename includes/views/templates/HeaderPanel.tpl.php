<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><?php echo __SM_APP_NAME__; ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/index.php">Home</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php echo $this->strUserMsg; ?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>