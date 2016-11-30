<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

    <title>Visualizer</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        

                        <li>
                            <a href="<?php echo site_url('visual/CATEGORY')?>"><i class="fa fa-table fa-fw"></i> CATEGORY  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/CUSTOMERS')?>"><i class="fa fa-table fa-fw"></i> CUSTOMERS  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/ORDERS')?>"><i class="fa fa-table fa-fw"></i> ORDERS  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/ORDER_DETAILS')?>"><i class="fa fa-table fa-fw"></i> ORDER_DETAILS  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/PAYMENT')?>"><i class="fa fa-table fa-fw"></i> PAYMENT  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/PRODUCTS')?>"><i class="fa fa-table fa-fw"></i> PRODUCTS  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/SHIPPERS')?>"><i class="fa fa-table fa-fw"></i> SHIPPERS  </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('visual/SUPPLIER')?>"><i class="fa fa-table fa-fw"></i> SUPPLIER  </a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Visualize
                        </div>
                        <div class="panel-body">
                            
                                <div style="overflow-x:scroll;padding:20px;">
		<?php echo $output; ?>
    </div>


                        </div>
                        
                    </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>




