<html>
	<head>
		<title>shareNride | Trusted ride</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- js-->
			<script src="js/jquery-1.11.1.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
<div class="page-header">
  <h3 class="text-center">Mail Sending Example using SendGrid in laravel </h3>
</div>
      <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title">Mail</h1>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" method="post" action="sendMail">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mail To : </label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Text : </label>
                    <div class="col-sm-10">
                      <textarea name="text" rows="4" class="form-control" id="inputPassword3" placeholder="Enter Text Here..." required></textarea>
                    </div>
                  </div>

              </div>
              <div class="panel-footer">
                <div class="form-group ">
                    <button type="submit" class="btn btn-success form-control">Send</button>
                </div>
                </form>
              </div>
          </div>
          @if(Session::has('message'))
          <div class="alert alert-success" role="alert">
            Your Mail has been sent.
          </div>

          @endif
        </div>
      </div>
  </body>
</html>
