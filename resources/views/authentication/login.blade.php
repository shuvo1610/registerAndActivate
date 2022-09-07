<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel title"  style="color: black">User Login</h3>
				</div>
				<div class="panel-body">
					<form action="login-user" method="POST">@csrf
						<div class="form-group">
							<div class="input-group">
								<samp class="input-group-addon">
									<i class="fa fa-envelope"></i></samp>
									<input type="email" name="email" class="from-control" placeholder="ex@gmail.com" required>
							</div>
						</div>	
						<div class="form-group">
							<div class="input-group">
								<samp class="input-group-addon">
								<i class="fa fa-lock"></i></samp>
								<input type="password" name="password" class="from-control" placeholder="password" required>
							</div>
						</div>
						<div class="form-group">	
							<div class="input-group">
								<input type="submit" value="Login" class="btn btn-success">
							</div>
						</div>		

							
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>