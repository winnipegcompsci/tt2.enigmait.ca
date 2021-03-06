<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TT2.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->Url->build('/'); ?>bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->Url->build('/'); ?>bower_components/metisMenu/dist/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->Url->build('/'); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->Url->build('/'); ?>bower_components/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
		
		<!-- ONLY INCLUDE IF LOGGED IN? -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
			<?php
				$user = $this->Session->read('Auth.User');						
			
			//		if(!empty($user)) {
				echo $this->element('header'); 
				echo $this->element('sidebar'); 
			//		} 
			?>
			
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="padding: 15px">
							<?php echo $this->Flash->render(); ?>
							<p class="text-danger">
								<?php echo $this->fetch('content'); ?> 
							</p> 
					</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
