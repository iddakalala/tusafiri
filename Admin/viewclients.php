<?php
session_start();
require 'auth.php';
require '../functions.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>TUSAFIRI|Adminstrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header" style="background-color:7F7F7F;">
            <a class="navbar-brand" href="#">Adminstrator</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-dashboard fa-fw"></i>TUSAFIRI</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                     <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    
                    <li class="divider"></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['firstname'].'&nbsp;'.$_SESSION['middlename'].'&nbsp;'.$_SESSION['lastname']; ?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
            
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
             <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li >
                        <a  style="background-color:#1351A0;" class="active btn btn-primary" href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"> Manage staffs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                
                                <a href="viewstaff.php">View staff</a>
                            </li>
                        
                        </ul>
                    </li>
                        <li>
                        <a href="#"> Manage clients<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="viewclients.php">View clients</a>
                            </li>
                        
                        </ul>
                    </li>
                        <li>
                        <a href="#">News<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addNews.php">post news</a>
                               <a href="viewnews.php">View news</a>
                            </li>
                        
                        </ul>
                    </li>
                        <li>
                        <a href="#">comments<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="viewcomments.php">View all comments</a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                   <div class="panel-heading">
                   <h3>CLIENTS</h3>
                   </div>
                   <div class="panel-body">
                            <table class="table table-striped">
                        <thead>
                                        <th>No</th>
                                        <th><strong>CUSTOMER</strong></th>
                                        <th><strong>PHONE NUMBER</strong></th>
                                        <th><strong>PAYMENT ID</strong></th>
                                        <th>Assign ID</th>
                                        
                                   
                        </thead>
                        <tbody>
                            <?php 
                             $query="SELECT * FROM register";
                             $qrun=mysql_query($query) or die(mysql_error());
                              $index=1;
                              while($row=mysql_fetch_array(($qrun))){
                              $id=$row['customer_phonenumber'];
                                echo '<tr>';
                                echo '<td>'.$index.'</td>';
                                    echo '<td>'.$row['username'].'</td>';
                                    echo '<td>'.$row[ 'customer_phonenumber'].'</td>';
                                     echo '<td>'.$row[ 'customer_id'].'</td>';
                                    echo "<td><a href='assignId.php?id=".$id."'>click</a></td>";    
                                echo '</tr>';
                                ++$index;
                              }

                    if(@$_GET['success']=='successifully')
                    {
                     echo "<strong><span style='color:green'>Updated Successifully.....!</span></strong>";   
                    }else if(@$_GET['success']=='fail'){
                       echo "<strong><span style='color:red'>Failed</span></strong>";
                    }
                    ?>
                        </tbody>
                        </table>  
                   </div>
                   </div>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>
	<?php include 'footer.php' ; ?>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
