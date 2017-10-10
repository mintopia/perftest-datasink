<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Upload Sink</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style>
            h1 {
                margin-bottom: 4rem;
            }
        </style>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
    			<h1 class="display-3">Data Upload Sink</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<h2>Server Config</h2>

				<dl class="row">
					<dt class="col-md-2">Max Upload Size</dt>
					<dd class="col-md-10"><?php echo htmlentities(ini_get('upload_max_filesize')); ?></dd>

					<dt class="col-md-2">Max POST Size</dt>
					<dd class="col-md-10"><?php echo htmlentities(ini_get('post_max_size')); ?></dd>
				</dl>

				<h2>How to Upload</h2>

				<p>
					You can upload in a number of ways:
				</p>

				<ol>
					<li>POST to <code>/sink</code> with a parameter of <code>data=foobar</code>.</li>
					<li>GET to <code>/sink</code> with a query string of <code>data=foobar</code>.</li>
					<li>POST to <code>/sink</code> as <code>multipart/form-data</code> with a file with a name of <code>data</code>.</li>
				</ol>

				<h2>Quick Upload</h2>

				<p>
					This will quickly upload the file via the <code>multipart/form-data</code> file upload process. The file will not persisted.
				</p>

				<form action="/sink/" method="post" enctype="multipart/form-data">
					<div class="form-group">
					    <label for="data">File</label>
					    <input type="file" class="form-control-file" id="data" name="data">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>