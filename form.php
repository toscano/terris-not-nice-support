<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/png" href="http://placehold.it/50x50"/> <!--------------UPDATE IMAGE HERE----------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width" />
    <title>Tech Solution</title>
    <!--MY CSS-->
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
<?php
if(isset($_GET['submit'])) {

	/* Start  Mail Function */

	$to      = 'mail@yourmail.com';            /*  Enter Your Email address where you want to recieve all your mail from this site your */
	$subject = 'Tech Solutions - ' . $_GET['name'];
	$headers = 'From: ' . $_GET['name'] . " ";
	$headers .= 'Reply-To: ' . $_GET['email'] . ' <' . $to . '>';
	$headers .= 'Content-Type: text/html: charset=UTF-8';
	$value   = mail( $to, $subject, $_GET['message'], $headers );

	echo $output="<div id=\"position\">
		<div id=\"form-loader\" class=\"text-center spin\"><i id=\"abc\" class=\"fa fa-spinner\"></i></div>
		</div>"."<h2 class='text-center'>Please Wait</h2>";

	if ( $value ) {
		echo '<div id="success" class="result"><div class="table"><div class="table-cell text-center">Successfully Sent Message</div></div></div>';

	} else {
		echo '<div id="failed" class="result"><div class="table"><div  class="table-cell text-center">Sorry, it seems that mail server is not responding. Please try again later</div></div></div>';
	}

	/* End  Mail Function */
	?>
    <script>
        setTimeout(function () {
            window.history.go(-1);
        },2000);
    </script>
	<?php
}
else{
	echo "<h1 class='text-center'>404 Not Found</h1>"."<hr>";
}
?>
</body>
<!--JQUERY-->
<script src="assets/js/jquery-latest.js"></script>