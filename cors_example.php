<?php
	if (isset($_GET["access_control_allow_origin"])) {
		header("Access-Control-Allow-Origin: " . $_GET["access_control_allow_origin"]);
	} else {
		header("Access-Control-Allow-Origin: *");
	}
	header("Access-Control-Expose-Headers: *");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CORS example</title>
	</head>
	<body>
			<p>
				Hello! <b>This website demonstrates Cross-Origin Resource Sharing (CORS).</b><br/>
				Feel free to use it as an example or for non-malicious testing purposes.<br/>
				Its source code can be found on <a href="https://github.com/k-gruenberg/same-origin-policy.com">GitHub</a>.
			</p>
			<p>
				By default, this site sends the following HTTP response headers:
				<ul>
					<li><tt>Access-Control-Allow-Origin: *</tt></li>
					<li><tt>Access-Control-Expose-Headers: *</tt></li>
				</ul>
				This allows any website to retrieve the content of this site using an <tt>XMLHttpRequest</tt> (and even to read all response headers).
			</p>
			<p>
				When you want to play around with CORS, you can also change the allowed origin returned using a GET parameter (note that only a single origin is allowed, as specified by the standard):<br/>
				<tt>http://same-origin-policy.com/cors_example.php?access_control_allow_origin=http%3A%2F%2Fexample.com</tt>
			</p>
	</body>
</html>
