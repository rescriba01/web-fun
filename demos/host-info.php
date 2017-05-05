<?php 
  $title = "Host information"; // this is for <title>
  $custom_css = "host-info"; //custom CSS for this page only
  include '../includes/head.php';
?> 
  <div class="container">
  
  <?php 
    include '../includes/masthead.php';
    include '../includes/navigation.php';
  ?>

  <section class="<?php echo $custom_css; ?>"> 
    <hgroup>
      <h1>Host information</h1>
      <h2>Give me the nerdy details</h2>
    </hgroup>
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

<?php include '../includes/feet.php';?>