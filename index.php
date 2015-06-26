<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<title>Web Project</title>
		<link href='http://fonts.googleapis.com/css?family=Gudea|Old+Standard+TT' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Capital J</h1>
				<h2>Creating Truly Awesome Shit</h2>
			</header>
			<nav>
				<li><a href="#" alt="" title="" target="">Link 1</a></li>
				<li><a href="#" alt="" title="" target="">Link 2</a></li>
				<li><a href="#" alt="" title="" target="">Link 3</a></li>
				<li><a href="#" alt="" title="" target="">Link 4</a></li>
				<li><a href="#" alt="" title="" target="">Link 5</a></li>
			</nav>
			<div class="hero">
				<img src="http://placehold.it/640x360&text=16:9" alt="Image Title">
			</div>
			<section>
				<hgroup>
					<h1>FORMS</h1>
					<h2>Sub headline</h2>
				</hgroup>
				<article>
					
					<p>I think it would be a good idea to make this a journal style web project. Type out my crazy thoughts and treat them as issues that need to be resolved. Gotta remember to take it one step at a time. That's the only way that I'm going to see progress here</p>
					<p>This should be my project that I blog about. I should keep track of updates and changes</p>
					
					<form method="post" action="acknowledge.php">
						<label for="name">Name:</label>
					  <input type="text" name="name" id="name">


					  <label for="email">Email:</label>
					  <input type="email" name="email" id="email">


					  <label for="comments">Comments:</label>
					  <textarea name="comments" id="comments"></textarea>

						<input type="submit" name="send" value="Send Message" class="button">
					</form>

					<ul>
						<li>Site needs to be mobile friendly</li>
						<li>Needs to load really fast</li>
						<li>It should make this like a style tile.</li>
						<li>Integration with a database.</li>
						<li>This site should combine the best of all of my projects</li>
					</ul>

					<button class="btn-med warning">Primary Button</button>
					<button class="btn-med success">Secondary Button</button>
					<button class="btn-med info">Secondary Button</button>
					<footer>
						<span>This is the footer</span>
					</footer>
				</article>
			</section>
			<section class="swatches">
				<hgroup>
					<h1>SWATCHES</h1>
					<h2>Sub headline</h2>
				</hgroup>
				<ul>
					<li class="warning">Color 1</li>
					<li class="success">Color 2</li>
					<li class="info">Color 3</li>
					<li>Color 4</li>
					<li>Color 5</li>
				</ul>
			</section>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
				$('button').click(function(){
					console.log("yolo");
				});
		</script>
	</body>

</html>
