<?php
include('menu.php');
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