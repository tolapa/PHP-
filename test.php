
<html>
<head>
	<title>Convert</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/panel.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</head>
<body>
	
	<div class="container" style="padding: 50px;">
		<div class="row">
			<div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="panel panel-default" >
					<div class="panel-heading">
						<h3 class="panel-title">Convert Number To Word</h3>
					</div>
					<div class="panel-body">
						<form role="form" action="" method="post">
							<div class="form-group">
								<label>Input Number:</label>
								<input type="text" name="number" class="form-control" >
							</div>
							<input type="submit" name="convert" value="Convert Number To Word" class="btn btn-success">
							<div class="form-group">
								<label>Result:</label>
								    <?php
                                        if(isset($_POST['convert'])){
                                            $num = $_POST['number'];
                                            $result = "";
                                            $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                                            $result = $f->format($num);

                                        }

                                    ?>
								
								<input style="font-family:Area;color:red;" type="text" name="result" class="form-control" value="<?php print $result; ?>" readonly>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>