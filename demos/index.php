<?php // Demos page ?>

<?php include '../includes/head.php';?> 

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
        echo "Disp : " . $doc_uri . "<br>";
        echo "Base URL: " . $base_url . "<br>";
        echo "Port: " . $port . "<br>";
        echo "URL I created: " . $url . "<br>";
      ?>  
    </div>
  
  </section>
<?php include '../includes/feet.php';?>