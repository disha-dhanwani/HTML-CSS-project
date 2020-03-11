<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basquiat | Contact </title>
    <link a href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Jean-Michel Basquiat</h1>
			<p class="sub-heading">The famous contemporary artist of our time</p>
    </header>
    <nav>
      <ul class="lists">
        <li><a href="../main-home.html" title="Go to the Home page">Home</a></li>
        <li><a href="../webpages/about.html" title="Go to the About page">About</a>
          <ul>
            <li> <a href="../webpages/biography.html" title="Go to the Biography page"> Biography </a> </li>
            <li> <a href="../webpages/quotes.html" title="Go to the Quotes page"> Quotes </a> </li>
            <li> <a href="../webpages/videos.html" title="Go to the Videos page"> Videos </a> </li>
          </ul> </li>
        <li><a href="../webpages/artworks.html" title="Go to the Artworks page">Artworks</a></li>
        <li><a href="../webpages/shop-online.html" title="Go to the Shop Online page">Shop Prints</a></li>
        <li><a href="../webpages/contact.html" title="Go to the Contact page">Contact</a></li>
      </ul>
    </nav>
		<main>
			<div class="banner">
				<h3>Your delivery is confirmed!</h3>
			</div>
				<?php
				    /* All form elements must be checked - that required information is present and that all form data
				    is in the correct format. Security checks must also be made before database queries are made */
					$fname = $_GET['fname'];
					$lname = $_GET['lname'];
					// Output a friendly message to confirm that everything went well
					echo('<p class="message">Thank You, '.$fname.'&nbsp;'.$lname.', your settings have been saved.</p>');
				?>
		</main>
		<footer>
      <small>
        <p class="footer"> © All content created by Disha Dhanwani - 200434069  |
          <a href="#" title="Go to the Privacy Policy page"> Privacy Policy</a>
        </p>
      </small>
    </footer>
	</body>
</html>
