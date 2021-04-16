
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta
			name="description"
			content="Personal website of a  Full Stack Web Developer Elena Ivankina"
		/>
		<meta name="author" content="Elena Ivankina" />
		<meta
			name="keywords"
			content="HTML, HTML5, CSS, SCC3, JavaScript, Web Design, Web Development, Web"
		/>

		<link rel="stylesheet" href="timeline.css" />
		<link rel="stylesheet" href="circles.css" />
		<link rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Open+Sans:wght@300;400;700&display=swap"
			rel="stylesheet"
		/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/3bc313c99f.js" crossorigin="anonymous"></script>

		<title>Elena Ivankina - Web Developer</title>
	</head>

	<body>



		<header>
			<a href="index.html">
				<img class="logo" src="img/Logo_transparent.svg" alt="Logo by Elena Ivankina" />
			</a>
			<nav>
				<button id="mobileButton"><span class="material-icons">menu</span></button>
				<ul>
					<li><a href="#aboutMe">ABOUT ME</a></li>
					<li><a href="#skills">SKILLS</a></li>
					<li><a href="#work">PROJECTS</a></li>
					<li><a href="#experience">HISTORY</a></li>
					<li><a href="#hire">HIRE ME</a></li>
					<li><a href="#contact">CONTACTS</a></li>
					<li><a href="gallery.html">GALLERY</a></li>
				</ul>
			</nav>
		</header>

		<main>

        <div class="content">
				<div class="colored-section">
					<section class="content-container" id="sent-message">

                    <?php

header("Access-Control-Allow-Origin: *");

$to = 'elena@ivankina.fi, test-ff0ebojxl@srv1.mail-tester.com';
$subject = 'Message from Portfolio';
$message = "The phone number of the sender is: " . $_POST['phone'] . " and the message is:  " . $_POST['message'];
$headers = array(
    'From' => $_POST['email'],
    'Reply-To' => $_POST['email'],
	'X-Mailer' => 'PHP/' . phpversion()
    
);

$send_status = mail($to, $subject, $message, $headers);

if ($send_status) {
    echo "<h2>Thank you, your message was sent!</h2>";
} else {
    echo "<h2>Sorry, an error has appeared</h2>";
}

?>

<a href="index.html">Go back to the front page</a>
						
					</section>
				</div>
            </div>

		</main>

		
		<script src="main.js"></script>
	</body>
</html>








