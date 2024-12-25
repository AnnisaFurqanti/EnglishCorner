<?php 
    session_start();
    include '../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../login.php?msg=Please log in first to access this website!'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Panel User</title>
	    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="bg-light">

        <!-- navbar -->
        <div class="navbar">

        	<div class="container">

        		<!-- navbar brand -->
        		<h2 class="nav-brand float-left"><a href="index.php">NISA'S ENGLISH CORNER</a></h2>
        		
                <!-- navbar menu -->
                <ul class="nav-menu float-left">
                	<li><a href="index.php">Dashboard</a></li>

                    <?php if ($_SESSION['user'] == 'admin'){ ?>

                	    <li><a href="user.php">User</a></li>

                    <?php }elseif ($_SESSION['user'] == 'visitor'){ ?>

                	   <li><a href="vocab.php">Vocabulary</a></li>
                       <li><a href="grammar.php">Grammar</a></li>
                       <li><a href="English-story.php">English Story</a></li>
                    
                    <?php } ?>

                    <li>
                    	<a href="#">Account <i class="fa fa-caret-down"></i></a>

                    	<!-- sub menu -->
                         <ul class="dropdown">
                         	<li><a href="change-password.php">Change Password</a></li>
                         	<li><a href="logout.php">Logout</a></li>
                         </ul>

                    </li>
                </ul>

        	</div>
        	
        </div>