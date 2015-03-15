<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>
  <?php __('-- TT2.0 -- '); ?>
  <?php echo $title_for_layout; ?>
  </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

		echo $this->Html->css('sb-admin-2');
		echo $this->Html->css('bootstrap.min');

		echo $this->Html->css('plugins/metisMenu/metisMenu.min');
		echo $this->Html->css('plugins/dataTables.bootstrap');
		echo $this->Html->css('plugins/font-awesome/font-awesome.min');

		echo $this->Html->script('jquery-1.11.2.min');
		echo $this->Html->script('sb-admin-2');
		echo $this->Html->script('bootstrap.min');



		echo $this->Html->script('plugins/dataTables/dataTables.bootstrap');
		echo $this->Html->script('plugins/metisMenu/metisMenu.min');


?>
</head>
<body>

    <div id="wrapper">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->Url->build(["controller" => "pages", "action" => "display", "home"]);?>">TT2.0 </a>
            </div>
            <!-- /.navbar-header -->
			
             <?php // echo $this->element('header'); ?> 
            <?php // echo $this->element('sidebar'); ?>    
        </nav>

        <div id="page-wrapper">
        <div id="content">

            <?php echo $this->Flash->render(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>

        </div>

    </div>

    <script>
    $(document).ready(function() {
        $('#table').dataTable();
    });
    </script>
</body>
<ol>