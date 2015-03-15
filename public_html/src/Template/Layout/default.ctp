<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>
  <?php __('Sistema - '); ?>
  <?php echo $title_for_layout; ?>
  </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

echo $this->Html->css('bootstrap.min');
echo $this->Html->css('plugins/metisMenu/metisMenu.min');
echo $this->Html->css('plugins/dataTables.bootstrap');
echo $this->Html->css('sb-admin-2');
echo $this->Html->css('font-awesome-4.1.0/css/font-awesome.min');



echo $this->Html->script('jquery-1.11.0.min');
echo $this->Html->script('plugins/dataTables/dataTables.bootstrap');
echo $this->Html->script('bootstrap.min');
echo $this->Html->script('plugins/metisMenu/metisMenu.min');

echo $this->Html->script('sb-admin-2');

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
                <a class="navbar-brand" href="index.html">Sistema </a>
            </div>
            <!-- /.navbar-header -->
            <?php echo $this->element('header'); ?> 
            <?php echo $this->element('sidebar'); ?>    
        </nav>

        <div id="page-wrapper">
        <div id="content">

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>

        </div>

    </div>

    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabla').dataTable();
    });
    </script>
</body>
<ol>