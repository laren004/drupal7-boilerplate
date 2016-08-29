<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix row"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
// We hide the comments and links now so that we can render them later.
    hide($content['comments']);

    hide($content['links']);    
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6"> <?php print render($content['field_image']);?> </div>
        <div class="col-md-6"> <?php print render($content['body']);?>
          <div class="col-md-6"> <?php print render($content['field_body_2']);?> </div>
          <div class="col-md-6"> <?php print render($content['field_image_2']);?> </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6" align="center"> <?php print render($content['field_mfdemo_taxonomy']);?> </div>
        <div class="col-md-6" align="center"> &nbsp; </div>

      </div>
    </div>
    
    <div class="col-md-12">
    <hr />
    
    
    
    <!--Begin Modal -->
    
    
    <!-- Button trigger modal -->
<button class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#myModal">
  Launch Pure Awesomeness!
</button>
<br /><br /><br />

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Drupal 7 Theming and Content Types</h4>
      </div>
      <div class="modal-body">
        <?php print render($content['field_body_3']);?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    
    <!-- End modal -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    </div>
    
    
    <!-- Print view -->
     <div align="center"><?php print views_embed_view('print_to_theme_demo', 'my_block'); ?></div>
    <!-- end print view -->
    
    
    
    
    
    
  </div>
  <!--closes content --> 
  
</div>
<!-- closes node id -->