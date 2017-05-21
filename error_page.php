<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>JMR</title>
	<meta name="description" content="Portfolio">
	<meta name="author" content="Roco, John Mark S.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel='shortcut icon' href='assets/img/favicon.ico' type='image/x-icon'/ >
</head>
<style>
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
</style>

<body>
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
					<?php if(isset($_GET['msg'])){
						echo "Email Erro".$_GET['msg'];
					} ?>
                </div>
                <div class="error-actions">
                    <a href="index.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><!--a href="support.php" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a-->
                </div>
            </div>
        </div>
    </div>
</div>
</body>	
</html>