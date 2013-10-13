<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title>CodeIgniterStrap Examples</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/twitterbootstrap/css/bootstrap.css" rel="stylesheet">

	<style type="text/css" rel="stylesheet">
	body {
		padding: 30px;
	}

	.navbar {
		margin-bottom: 30px;
	}
	</style>
</head>
<body>

    <div class="container">
	
<!-- Navbar dengan menggunakan CIStrap -->	
<?php echo Tb::navbar(array(
    'brandLabel' => 'Project Name',
    'brandUrl' => '#',
    'items' => array(
        array(
            'items' => array(
                array('label' => 'Link', 'url' => site_url()),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Dropdown', 'items' => array(
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    '-',
					array('header' => true, 'label' => 'Nav Header'),
                    array('label' => 'Separate link', 'url' => '#'),
                ))
            )
        )
    )
)); ?> 
	
<!-- Jumbotron dan button dengan menggunakan CIStrap -->
<?php echo Tb::jumbotron('CodeIgniterStrap Example', 
	'<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>'.
	'<p>'. 
		Tb::button('Learn more', array(
			'type' => Tb::BUTTON_TYPE_LINK, 
			'url' => 'http://didanurwanda.github.io/CodeIgniterStrap/',
			'color' => Tb::BUTTON_COLOR_PRIMARY
		)).'</p>'
); ?>

    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/jquery.js"></script>
    <script src="./assets/twitterbootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
