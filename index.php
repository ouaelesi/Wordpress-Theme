<!-- Header -->
<?php get_header();?>
<div>
    <div class="page-title mt-5">
      <div class="blogs-title">
        <div class="text-center"><h1 class="text-light">BLOGS</h1></div>
        <div class="row">
        <div class="col-md-4 d-none d-md-block">
              <div class="icon text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/business-icon.png" alt="bussiness-icon" />
                <h2 class="icon-title mt-4"><strong>BUSINESS</strong></h2>
               
              </div>
        </div>
        <div class="col-4 d-none d-md-block">     <div class="icon text-center">
          <img src="<?php echo get_template_directory_uri() ?>/assets/icons/teq-icon.png" alt="technologhy-icon" />
          <h2 class="icon-title mt-3"><strong>TECHNOLOGY</strong></h2>
          
        </div></div>
        <div class="col-4 d-none d-md-block">     <div class="icon text-center">
          <img src="<?php echo get_template_directory_uri() ?>/assets/icons/humamdev-icon.png" alt="human-icon" />
          <h2 class="icon-title"><strong>HUMAN DEV</strong></h2>
        </div>
      </div>
      <div class="col-4 d-block d-md-none mt-5 icon-btn"> <button class="btn btn-primary">BUSINESS</button></div>
      <div class="col-4 d-block d-md-none mt-5 icon-btn"> <button class="btn btn-primary">BUSINESS</button></div>
      <div class="col-4 d-block d-md-none mt-5 icon-btn"> <button class="btn btn-primary">BUSINESS</button></div>
      </div>
    </div> 
    </div>
    <div class="mail-box">
      <div class="row px-2 px-md-5">
        <div class="col-12 col-md-5 px-5">
          <div
          class=" px-2 contact my-5 text-center"
          id="contact"
        >
          <div>
            <img
              src="<?php echo get_template_directory_uri()?>/assets/icons/mail-icon.png"
              alt="emailicon"
              class="emailicon"
            /><br /><br />
          </div>
          <form class="form">
            <h4>
              Get free Business plans, helpful courses and guided books
              delivered directly to your inbox
            </h4>
            <div class="form-group input">
              <input type="email" class="" placeholder="Email" />
            </div>
            <button type="submit" class="btn subscribe">
              <strong>SUBSCRIBE</strong>
            </button>
          </form>
        </div>
        </div>
      </div>
    </div>

    <!-- blogs  -->
    <div class="container-fluid">
    <!-- serch -->
    <div class="row py-3"> <div class="col-1 col-md-4"></div><div class="col-0 col-md-4"></div>
         <div class="col-11 col-md-4 d-flex search-form "><input type="search" placeholder="Search">
          <i class="fa fa-search fa-2x"></i>
        </div>   
     </div>
     <!-- path_page -->
     <div class="row mt-5">
          <div class="col-9">
        <h5><strong><a href="../index.html" class="text-dark">HOME</a>  > <b-link href="" class="text-success">BLOGS</b-link></strong></h5>    
          </div>
        </div> 
        <hr>
        <!-- display blogs -->
        <div class="row">
           <?php 
            while( have_posts(  )){
                the_post(  );
            ?>
                 <div class="col-12 col-md-6 col-xl-4 mt-5">
                 <div class="card ">
                   <div class="card-img">
                     <div class="img-container"></div>
                     <div class="type text-center"><strong>BUSINESS</strong></div>
                     <div class="type-title text-center"><i class="fa fa-star fa-2x mt-1"></i></div>
                   </div>
                 
                   <div class="card-body">
                     <h5 class="card-title"><strong> <?php echo the_title() ?></strong></h5>
                     <p class="card-text"> <?php echo the_excerpt(  ) ?></p>
                     <a href="<?php echo the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
                   </div>
                 </div>   
                </div>
          <?php  
            }
           ?> 
        </div> 
    </div>
<!-- Footer -->
<?php get_footer();?>