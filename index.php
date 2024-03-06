<?php
include('menu.php');

$portFolder = 'assets/images/portfolio/';


$carousel_personal = array(
  'CodeGeass Website' => array(
    'p' => 'A personal website I made for my favorite anime',
    'img' => $portFolder.'codegeass.us.jpg',
    'github' => 'https://github.com/TheJadeEmperor/CodeGeass.us'
  ),
  'CodeGeass Website v2' => array(
    'p' => 'A personal website I made for my favorite anime',
    'img' => $portFolder.'codegeass1.jpg'
  ),
  'CodeGeass Forum 1' => array(
    'p' => 'A PHP forum run using SimpleMachines',
    'img' => $portFolder.'codegeass.forum1.jpg'
  ),
  'CodeGeass Forum 2' => array(
    'p' => 'Version 2 of the Forum',
    'img' => $portFolder.'codegeass.forum2.jpg'
  ),
);

$carousel_pro = array(
  'Partnership for DrugFree Kids' => array(
    'p' => 'A national non-profit org, website run on Wordpress and Rackspace',
    'img' => $portFolder.'drugfree.org.jpg'
  ),
  'Center to End Addiction' => array(
    'p' => 'A national non-profit org, website run on Wordpress and AWS',
    'img' => $portFolder.'COA.jpg'
  ),
  'Style Edit' => array(
    'p' => 'A magazine owned by Mana Products. Photoshop files were given as specs and everything was coded based on specs',
    'img' => $portFolder.'styleedit.jpg'
  ),
  'TGI Office Automation' => array(
    'p' => 'A national printing company that supplies printers, copiers, etc. to their clients',
    'img' => $portFolder.'tgioa.com.jpg'
  ),
);

$carousel_client = array(
    'Best Paying Sites' => array(
      'p' => 'A client wanted to make a sales page to sell ebooks. Integrated with Paypal IPN (Instant Payment Notification) API',
      'img' => $portFolder.'bestpayingsites.jpg',
      'github' => 'https://github.com/TheJadeEmperor/BestPayingSites'
    ),
    'Neobux Ultimate Strategy' => array(
      'p' => 'A sales page and membership site run in PHP and MySQL',
      'img' => $portFolder.'nus.jpg',
      'github' => 'https://github.com/TheJadeEmperor/NeobuxUltimateStrategy'
    ),
    'PXOrigins' => array(
      'p' => 'A client wanted a video game blog without using a cms. I developed a blog cms using only PHP and MySQL and HTML templates',
      'img' => $portFolder.'pxo.jpg',
      'github' => 'https://github.com/TheJadeEmperor/PXOrigin'
    ),
    'World Wide Video' => array(
      'p' => 'Made for a client who sells security cameras',
      'img' => $portFolder.'wwv.jpg'
    ),
    'Anime Favorite' => array(
      'p' => 'An anime site made for a client',
      'img' => $portFolder.'animefavorite.jpg'
    ),
    'Anime Fanservice' => array(
      'p' => 'An anime site made for fun. Warning: NSFW',
      'img' => $portFolder.'animefanservice.jpg',
      'github' => 'https://github.com/TheJadeEmperor/AnimeFanservice.org'
    ),
    'Pengea' => array(
      'p' => 'A client wanted a minimalist site to spread awareness about climate change',
      'img' => $portFolder.'pengea_1.png',
    )
  );


?>
 <!--header-->
 <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Benjamin Louie</em> 4 NY</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#home">Home</a></li>

        <li><a href="#platform">Platform</a></li>

        <li><a href="#why_us">Volunteer</a></li>
       
        <li><a href="resume.php" class="external">Donate</a></li>
 
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="home">
      <img src="assets/images/ga_group_3.jpg" />

      <div class="video-overlay header-text">
          <div class="caption">
             
          <h6>The voice of the silent majority</h6>
              <h2>A <em>Real</em> Republican</h2>
              

              <div class="main-button">
                  <div class="scroll-to-section"><a href="#">Donate Now</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

 
  <section class="section why-us" data-section="platform">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Platforms</h2>
          </div>
        </div>
        <div class="col-md-12">

          <div class="col-md-6">
            <img src="assets/images/ga_patrol_1.jpg" />
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="port_personal">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Personal Portfolio</h2>
          </div>
        </div>

        <div class="owl-carousel owl-theme">

        <?php
        foreach($carousel_personal as $h4 => $val) {
          echo '<div class="item">
            <a href="'.$val['img'].'" class="external" target="_BLANK"><img src="'.$val['img'].'" alt="'.$h4.'"></a>
            <div class="down-content">
            <h4>'.$h4.'</h4>
            <p>'.$val['p'].'</p>';

            echo '
          </div>
          </div>';
        }
        ?>
         
        </div>
      </div>
    </div>
  </section>
  

  <section class="section courses" data-section="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Professional Portfolio</h2>
          </div>
        </div>

        <div class="owl-carousel owl-theme">

        <?php
        foreach($carousel_pro as $h4 => $val) {
          echo '<div class="item">
            <a href="'.$val['img'].'" class="external" target="_BLANK"><img src="'.$val['img'].'" alt="'.$h4.'"></a>
            <div class="down-content">
            <h4>'.$h4.'</h4>
            <p>'.$val['p'].'</p>';

            echo '
          </div>
          </div>';
        }
        ?>
         
        </div>
      </div>
    </div>
  </section>
  
  <section class="section courses" data-section="port_client">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Client Portfolio</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">

        <?php
        foreach($carousel_client as $h4 => $val) {
          echo '<div class="item">
            <a href="'.$val['img'].'" class="external" target="_BLANK"><img src="'.$val['img'].'" alt="'.$h4.'"></a>
            <div class="down-content">
            <h4>'.$h4.'</h4>
            <p>'.$val['p'].'</p>';
            
            if($val['github']) {
              echo '<p><a href="'.$val['github'].'" class="external" target="_BLANK">Github</a></p>';
            }

            echo '
          </div>
          </div>';
        }
        ?>
   
        </div>
      </div>
    </div>
  </section>

<?php 
include('footer.html');
?>