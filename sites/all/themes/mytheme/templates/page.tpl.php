<head>
<!--/ You can use the head in here if you want to, but we will use the html.tpl.php for it when we get there -->
</head>
<!--/Begin - Contact Info / Social Icons -->

<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if ($page['call_us']): ?>
        <?php print render($page['call_us']); ?>
        <?php endif; ?>
      </div>
      <div class="col-md-6">
        <?php if ($page['social_icons']): ?>
        <?php print render($page['social_icons']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!--/End - Contact Info / Social Icons --> 

<!--/Begin LOGO AND SUCH -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
      <?php if ($site_slogan): ?>
      <?php print $site_slogan; ?>
      <?php endif; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php if ($page['logo_col_first']): ?>
      <?php print render($page['logo_col_first']); ?>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php if ($page['logo_col_second']): ?>
      <?php print render($page['logo_col_second']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- /Close Logo and regions --> 

<!--/Open Menu -->

<div class="main-nav-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if ($page['menu_nav']): ?>
        <?php print render($page['menu_nav']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!--/Close Menu --> 

<!--/Begin Banner Region -->

<div class="row">
  <div class="col-md-12">
    <div class="slider-adjust">
      <?php if ($page['banner']): ?>
      <?php print render($page['banner']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<!--/End Banner Region --> 

<!--/Begin Call To Action -->
<?php if ($page['call_to_action']): ?>
<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <?php print render($page['call_to_action']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!--/End Call To Action --> 

<!--/Begin Top Columns  -->

<?php if ($page['top_first']): ?>
<?php if ($page['top_second']): ?>
<?php if ($page['top_third']): ?>
<div class="top-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4"> <?php print render($page['top_first']); ?> </div>
      <?php endif; ?>
      <div class="col-md-4"> <?php print render($page['top_second']); ?> </div>
      <?php endif; ?>
      <div class="col-md-4"> <?php print render($page['top_third']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/End Top Columns--> 

<!--/Begin Content and Side Bar -->
<div class="container">
  <div class="row"> 
    
    <!--/Content -->
    <div class="<?php if ($page['right_sidebar']) { echo "col-md-9";} else { echo "col-md-12"; } ?>"> <a id="main-content"></a> <?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
      <div class="tabs"> <?php print render($tabs); ?> </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php /*?><?php print $feed_icons; ?><?php */?>
    </div>
    <!--/End Content --> 
    
    <!--/Right Sidebar if populated -->
    <?php if ($page['right_sidebar']): ?>
    <div class="col-md-3"> <?php print render($page['right_sidebar']); ?> </div>
    <?php endif; ?>
    <!--/End Right Side Bar --> 
  </div>
</div>
<!--/End Content and Side Bar --> 

<!--/Begin Feature 1  -->
<?php if ($page['feature_first']): ?>
<div class="feature-1-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <?php print render($page['feature_first']); ?> </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--/End Feature 1--> 
<!--/Begin Feature 2  -->
<?php if ($page['feature_second']): ?>
<div class="feature-2-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <?php print render($page['feature_second']); ?> </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--/End Feature 2--> 
<!--/Begin Feature 3  -->
<?php if ($page['feature_third']): ?>
<div class="feature-3-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <?php print render($page['feature_third']); ?> </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--/End Feature 3--> 

<!--/Begin Content Bottom Regions  -->
<?php if ($page['content_bottom_top']): ?>
<div class="content-bottom-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <?php print render($page['content_bottom_top']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php if ($page['content_bottom_first']): ?>
<?php if ($page['content_bottom_second']): ?>
<?php if ($page['content_bottom_third']): ?>
<?php if ($page['content_bottom_fourth']): ?>
<div class="content-bottom-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> <?php print render($page['content_bottom_first']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['content_bottom_second']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['content_bottom_third']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['content_bottom_fourth']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/End Content Bottom Regions--> 

<!--/Begin Promotion 1,2,3 Columns  -->

<?php if ($page['promotion_first']): ?>
<?php if ($page['promotion_second']): ?>
<?php if ($page['promotion_third']): ?>
<div class="promotion-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> <?php print render($page['promotion_first']); ?> </div>
      <?php endif; ?>
      <div class="col-md-6"> <?php print render($page['promotion_second']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['promotion_third']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/End Promotion 1,2,3 Columns--> 

<!--/Begin view Columns  -->

<?php if ($page['view_first']): ?>
<?php if ($page['view_second']): ?>
<div class="view-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 view-section-padding"> <?php print render($page['view_first']); ?> </div>
      <?php endif; ?>
      <div class="col-md-6 view-section-padding"> <?php print render($page['view_second']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/End view Columns--> 

<!--/Begin Footer Columns  -->

<?php if ($page['footer_first']): ?>
<?php if ($page['footer_second']): ?>
<?php if ($page['footer_third']): ?>
<?php if ($page['footer_fourth']): ?>
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> <?php print render($page['footer_first']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['footer_second']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['footer_third']); ?> </div>
      <?php endif; ?>
      <div class="col-md-3"> <?php print render($page['footer_fourth']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/End Footer Columns--> 

<!--/Begin Footer Columns  -->
<?php if ($page['footer_bottom']): ?>
<div class="footer-4-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <?php print render($page['footer_bottom']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/End Footer Columns--> 