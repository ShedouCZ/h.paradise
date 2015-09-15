<?php
	$version = Configure::read('css.version.string');
	$language = Configure::read('Config.language');
	$locale = Configure::read('Config.locale');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo __($title_for_layout); ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

  	<!-- Latest compiled and minified CSS -->
  	<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->

    <link rel="stylesheet" href="<?php echo "/css/site.css?$version" ?>" type="text/css" media="screen">
	<script src="<?php echo "/js/site-pre.js?$version"; ?>" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	body{ padding: 70px 0px; }
    </style>

  </head>

  <body>

    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

	<script src="<?php echo "/js/site-post.js?$version"; ?>" type="text/javascript"></script>
  </body>
</html>
