<?
  require_once 'config.php';
  $title = "Home Page"; // this is for <title>
  $page_title = "This is the home page"; //this is for breadcrumbs if I want a custom title other than the default
  $addCSS = ""; //custom CSS for this page only
  include_once('includes/head.php');
?>
	<div class="container">
  <?php 
    include 'includes/masthead.php';
    include 'includes/navigation.php';
  ?>
		
	<section class="home">
		<hgroup>
      <h1>Welcome</h1>
      <h2>This is the beginning of something truely amazing!</h2>
  	</hgroup>
	</section>

	<?php include 'includes/hero.php'; ?>

  <article>
    <h3>Test embedding a GitHub gist</h3>
    <p>Check out my bash profile gist</p>
    <script src="https://gist.github.com/capitalJT/04c8300224c319dc1ccb.js"></script> 
  </article>

<?php include 'includes/feet.php';?>
