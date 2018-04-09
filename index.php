<?php
/**
* Home Page for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/
include_once('header.php'); ?>


<main role="main" class="container">

         <div class="row">
           <div class="col-lg-12">
             <div class="jumbotron">
               <h1 class="display-4">Hello, world!</h1>
               <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
               <hr class="my-4">
               <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
               <p class="lead">
                 <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
               </p>
             </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <?php
            if (isset($_SESSION['icarey']['email'])) :
            	print_r($_SESSION['icarey']['email']);
              print_r($_SESSION['icarey']['token']);
            endif;
           ?><br />
           <?php
           $first = "The quick brown fox";
           $second = " jumped over the lazy dog.";

           $third = $first;
           $third .= $second;
           echo $third;

           ?>
           <br />
           <p class="icarey-orange">Lowercase:<?php echo strtolower($third); ?><br />
           Uppercase: <?php echo strtoupper($third); ?><br />
           Uppercase first: <?php echo ucfirst($third); ?><br />
           Uppercase words: <?php echo ucwords($third); ?><br />
           <br />
           Length: <?php echo strlen($third); ?><br />
           Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
           Find: <?php echo strstr($third, "brown"); ?><br />
           Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
           <br />
           Repeat: <?php echo str_repeat($third, 2); ?><br />
           Make substring: <?php echo substr($third, 5, 10); ?><br />
           Find position: <?php echo strpos($third, "brown"); ?><br />
           Find character: <?php echo strchr($third, "z"); ?><br /></p>
         </div>
        </div>
</main>

<?php include_once('footer.php'); ?>
