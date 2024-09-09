<!DOCTYPE html>
<html>
	<head>
		<title>My Blog</title>	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/stylekoto.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootsrap.min.js"></script>
	</head>

    <body style="background:silver;">
		<nav class="navbar navbar-custom">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">The BLOG</a>
				</div>

				<div class="nav navbar-nav form-inline navbar-right" style="padding: 10px;">
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="post.php">Post</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</nav>

		<header style="background: url(images/header.jpg);">
			<div class="text-center">
				<h1>The Blog</h1>
				<div class="lead">Welcome to My Blog</div>
			</div>
		</header>

        <div class="container">
            <div class="page-header">
                <h2 class="text-center">Contact Me</h2>
            </div>

            <form action="#" method="post" class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text" name="name" required/>
                </div>
    
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your E-mail" type="email" name="email" required/>
                </div>
    
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text" name="subject" required/>
                </div>
    
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Comments" name="comments" required></textarea>
                </div>
    
                <div class="form-group">
                    <input class="btn btn-success btn-block" type="submit" value="Submit"/>
                </div>
            </form>
        </div>
    </body>
</html>