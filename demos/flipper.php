<?php
  $title = "Demo Index file"; // this is for <title>
  $page_title = "This is the demo index file"; //this is for breadcrumbs if I want a custom title other than the default
  $custom_class = "demo-page"; //custom CSS for this page only
  require_once '../config.php';
  include_once('../includes/head.php');
?>
  <div class="container">
  
  <?php 
    include '../includes/masthead.php';
    include '../includes/navigation.php';
  ?>

  <section class="js-fun">
    <hgroup>
      <h1>Hand coded "flipper"</h1>
      <h2>Carousel, flipper, whatever!</h2>
    </hgroup>
    <article>
      <h3>Note:</h3>

      <p>Note: The "flipper" fails to reload if you refresh the browser quickly. Maybe I've got a problem with constantly refreshing the browser</p>

      <p>This button is needed for the flipper</p>
      <button id="action-button" class="btn">CLICK ME</button>
    </article>
    
  </section>

  <div id="wrapper" class="example-container">
    <img class="slide" src="<?php echo $url; ?>/images/janky-carousel-img/placholder-1.png" alt="Image 1">
    <img class="slide" src="<?php echo $url; ?>/images/janky-carousel-img/placholder-2.png" alt="Image 2">
    <img class="slide" src="<?php echo $url; ?>/images/janky-carousel-img/placholder-3.png" alt="Image 3">
    <img class="slide" src="<?php echo $url; ?>/images/janky-carousel-img/placholder-4.png" alt="Image 4">
    <img class="slide" src="<?php echo $url; ?>/images/janky-carousel-img/placholder-5.png" alt="Image 5">
  </div>

  <script>
    var Tooltips = {
      init: function(){

        // wrap links in spans
        // setup even listeners
        // run showTip in response to mouseover events
        // run hideTip in response to mouseout events
        // run showTip in response to focus evens
        // run hideTip in response to blur evens
      },
      showTip: function(){
        // insert rich tooltip after the link
      },
      hideTip: function(){
        // remove rich tooltips after the link
      }
    };

    Tooltips.init();

    var AddBorder = {
      init: function(){

        // for (i = 0; i < links.length; i++){
        //   links[i].className = "border";
        // }

        var links = document.getElementsByTagName('img');
        var wrapper = document.getElementById('wrapper')
        var wrapperHeight = wrapper.offsetHeight;
        var imageHeight = links[0].offsetHeight;

        wrapper.style.height = "" + imageHeight + "px";

        AddBorder.makeActive();

        var actionBtn = document.getElementById('action-button');
        actionBtn.addEventListener("click", AddBorder.moveImage);

        AddBorder.autom8();
      },
      makeActive: function(){
        var firstImage = wrapper.firstElementChild;
        firstImage.classList.add("active");
      },
      moveImage: function(){

        var firstImage = wrapper.firstElementChild;
        var nextImage = firstImage.nextElementSibling.classList.add("active");

        firstImage.parentNode.appendChild(firstImage);
        setTimeout(firstImage.classList.remove("active"),1000);
      },
      autom8: function(){
        var links = document.getElementsByTagName('img');
        var i = 0;
        var callback = function () {
          if (i < links.length) {
            AddBorder.moveImage();
            ++i;
            setTimeout(callback, 1000);
          }
        };
        setTimeout(callback, 1000);

        // var callback = function () {
        //   var links = document.getElementsByTagName('img');
        //   for (var i = 0; i < links.length; i++){
        //     console.log([i])
        //     setTimeout(AddBorder.moveImage, 1000);
        //   }
        // };
        // setTimeout(callback, 1000);
      }
    };
    AddBorder.init();
  </script>
<?php include '../includes/feet.php';?>