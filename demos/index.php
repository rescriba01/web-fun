<?
  $title = "Demo Index file"; // this is for <title>
  $page_title = "xxx"; //this is for breadcrumbs if I want a custom title other than the default
  $addCSS = ""; //custom CSS for this page only
  include_once('../includes/head.php');
?>

  <div class="container">
  
  <?php 
    include '../includes/masthead.php';
    include '../includes/navigation.php';
  ?>

  <section>
    <hgroup>
      <h1>Demos Page</h1>
      <h2>Sub headline</h2>
    </hgroup>
    <p>Insert web fun here</p>

    <div>
      <?php
        // echo $url; // = http://example.com/path/directory
        echo "Base dir: " . $base_dir . "<br>";
        echo "Protocol: " . $protocol . "<br>";
        echo "Domain: " . $domain . "<br>";
        echo "Doc Root: " . $doc_root . "<br>";
        echo "Base URL: " . $base_url . "<br>";
        echo "Port: " . $port . "<br>";
        echo "Created URL: " . $url . "<br>";

        echo "<p>&nbsp;</p>";

        echo "Page Title: " . $title . "<br>";
      ?>  
    </div>
  
  </section>
  <section>
    <ul>
      <li><a href="flipper.php">Flipper</a></li>
    </ul>
  </section>
<?php include '../includes/feet.php';?>