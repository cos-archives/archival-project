<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title_for_layout; ?></title>

		<!--[if lt IE 9]>
      		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    	<![endif]-->


		<?php
		if(!Configure::read('debug')):
		?>
			<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
			<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
		<?php
		else:
		?>
			<script src="<?php echo $this->webroot; ?>js/vendor/jquery-1.9.1.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/bootstrap.min.css" />
	        <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/font-awesome.min.css">
			<script src="<?php echo $this->webroot; ?>js/vendor/bootstrap.min.js"></script>
		<?php
		endif;
		?>
		<script src="<?php echo $this->webroot; ?>js/vendor/jquery.scrollTo.min.js"></script>
		<script src="<?php echo $this->webroot; ?>js/vendor/bootstrap-switch.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/select2.css" />
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/bootstrap-switch.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/font-awesome-ie7.min.css">
		<![endif]-->
        <script src="<?php echo $this->webroot; ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo $this->webroot; ?>js/vendor/js-webshim/minified/polyfiller.js"></script>

		<script type="text/javascript" src="<?php echo $this->webroot; ?>js/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->webroot; ?>js/vendor/jquery.bootstrap.confirm.popover.js"></script>
		<script type="text/javascript" src="<?php echo $this->webroot; ?>js/main.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/main.css" />

		<?php echo $this->Js->writeBuffer(); ?>

    	<?php
			echo $this->fetch('meta');
    	?>

	</head>
	<body>
	<div class="bigouterbox">
	    <div class="navbar-whiter navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <a href='/' class='brand'><img alt="COS Archival" src="/img/cos-archival.png"></a>
	          <div class="container nav-collapse">
	            <ul class="nav">
	                <li><?php echo $this->Html->link('Getting involved', '/pages/getting_involved'); ?></li>

<?php if(AuthComponent::user() !== NULL){ ?>
                    <li><a href='/pages/contact'>Contact</a></li>
                    <li><a href='/interactive_tutorial/#/'>Interactive Tutorial</a></li>
<?php } ?>

                </ul>



	            <div class='nav pull-right btn-group' style='position:relative;top:13px'>

<?php if(AuthComponent::user() !== NULL){ ?>
                    <a href='/papers/index' class='btn btn-warning'>My Dashboard</a>
                    <a href='/users/logout' class='btn btn-warning'>Log out</a>
<?php } else { ?>
                    <a href='/users/register' class='btn btn-warning'>Register</a>
                    <a href='/users/login' class='btn btn-warning'>Log in</a>
<?php } ?>
                </div>


<?php if(AuthComponent::user('Group.name')=='admin'): ?>
				<div class='nav pull-right btn-group' style='position:relative;top:13px;margin-right:10px;'>
					<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></button>
					<ul class="dropdown-menu">

		                <li><a href='/users/index'>List users</a></li>
		                <li><a href='/papers/add'>Add paper</a></li>
		                <li><a href='/codedpapers/index_mine'>List my coded papers</a></li>
		                <li><a href='/codedpapers/index'>List all coded papers</a></li>
		                <li><a href='/joinedCodedpapers/export/CSV'>Export CSV</a></li>
		                <li><a href='/joinedCodedpapers/export/TSV'>Export TSV</a></li>
		                <li><a href='/joinedCodedpapers/export/excel'>Export Excel</a></li>
		            </ul>
		        </div>
<?php endif; ?>

				<?php echo $this->fetch('more_nav'); ?>
			</ul>

				<?php echo $this->fetch('sub_nav'); ?>
	          </div><!--/.nav-collapse -->

	        </div>

	      </div>

	    </div>



	  <div class="container">
            <div class="row">
                <?php echo $this->fetch('sidebar'); ?>

	           	<div id="main-content">

					<?php
					    echo $this->Session->flash();
					    echo $this->Session->flash('auth');
					?>

					<?php echo $this->fetch('content'); ?>

	            </div><!--/span-->

	        </div><!--/row-->

	    </div> <!-- /container -->
	</div>
	

	<script type="text/javascript">
	  var _paq = _paq || [];
	  <?php if($uid): ?>
	  	_paq.push(["setCustomVariable", 1, "User ID", "<?php echo $uid['id']; ?>", "visit"]);
	  	_paq.push(["setCustomVariable", 2, "User Name", "<?php echo $uid['username']; ?>", "visit"]);
	  <?php endif; ?>
	  _paq.push(["trackPageView"]);
	  _paq.push(["enableLinkTracking"]);

	  (function() {
	    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://162.243.104.66/piwik/";
	    _paq.push(["setTrackerUrl", u+"piwik.php"]);
	    _paq.push(["setSiteId", "6"]);
	    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
	    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
	  })();
	</script>

	</body>
</html>