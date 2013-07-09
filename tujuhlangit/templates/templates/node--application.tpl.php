<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */

?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
      print render($content['field_category']);


      echo "<div class='lefto'>";
      //print render($content['field_app_main_image']);

      /*
      print render($content['field_screenshot1']);
      print render($content['field_screenshot2']);
      print render($content['field_screenshot3']);
      print render($content['field_screenshot4']);
      print render($content['field_screenshot5']);
      print render($content['field_screenshot6']);
      print render($content['field_screenshot7']);
      */
      
      drupal_add_css(base_path() . path_to_theme() . '/css/royalslider.css',array('type' => 'external'));
      drupal_add_css(base_path() . path_to_theme() . '/css/royalslider-preview.css',array('type' => 'external'));
      drupal_add_css(base_path() . path_to_theme() . '/css/royalslider-skins/default/default.css',array('type' => 'external'));
      drupal_add_css(base_path() . path_to_theme() . '/css/royalslider-skins/iskin/iskin.css',array('type' => 'external'));

      drupal_add_js(base_path() . path_to_theme() . '/js/jquery-1.6.2.min.js',array('type' => 'external'));
      drupal_add_js(base_path() . path_to_theme() . '/js/jquery.easing.1.3.min.js',array('type' => 'external'));
      drupal_add_js(base_path() . path_to_theme() . '/js/royal-slider-8.1.min.js',array('type' => 'external'));

      
      ?>
        <!-- SLIDERS -->
        <div id="content-slider" class="royalSlider iskin">                
          <ul class="royalSlidesContainer">     
              <li class="royalSlide"> 
                <div class="centeredSlide">
                    <img src="<?php print image_style_url('asli', render($content['field_app_main_image']['#items'][0]['uri'])) ?>" />
                </div>
              </li>
              <?php if (!empty($content['field_screenshot1'])) { ?>
              <li class="royalSlide"> 
                <div class="centeredSlide">
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot1']['#items'][0]['uri'])) ?>" width="195" height="240"/>
                    <?php if (!empty($content['field_screenshot2'])) { ?>
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot2']['#items'][0]['uri'])) ?>" height="240"/>
                    <?php } ?>
                    <?php if (!empty($content['field_screenshot3'])) { ?>
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot3']['#items'][0]['uri'])) ?>" width="197" height="240"/>
                    <?php } ?>
                  </div>
              </li>
              <?php } ?>

              <?php if (!empty($content['field_screenshot4'])) { ?>
              <li class="royalSlide"> 
                <div class="centeredSlide">
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot4']['#items'][0]['uri'])) ?>" width="195" height="240"/>
                    <?php if (!empty($content['field_screenshot5'])) { ?>
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot5']['#items'][0]['uri'])) ?>" height="240"/>
                    <?php } ?>
                    <?php if (!empty($content['field_screenshot6'])) { ?>
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot6']['#items'][0]['uri'])) ?>" width="197" height="240"/>
                    <?php } ?>
                  </div>
              </li> 
              <?php } ?>

              <?php if (!empty($content['field_screenshot7'])) { ?>
              <li class="royalSlide"> 
                <div class="centeredSlide">
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot7']['#items'][0]['uri'])) ?>" width="195" height="240"/>
                    <?php if (!empty($content['field_screenshot8'])) { ?>
                    <img class="imageItem" src="<?php print image_style_url('asli', render($content['field_screenshot8']['#items'][0]['uri'])) ?>" height="240"/>
                    <?php } ?>
                  </div>
              </li>
              <?php } ?>    
          </ul>   
        </div>
        <!-- END SLIDERS -->

        <?php
        print render($content['body']);
        ?>

        </div>

        <div class="righto" >
          <div class="download">
            <h3>Download :</h3>
             <?php if (!empty($content['field_android_link'])) { ?>
             <div><a href="<?php print render($content['field_android_link']); ?>" class="androidlink" target="_blank">Android <span>&nbsp;</span></a>
              
             </div>
             <?php } ?>
             <?php if (!empty($content['field_bb_link'])) { ?>
             <div>
              <a href="<?php print render($content['field_bb_link']); ?>" class="bblink" target="_blank">Blackberry <span>&nbsp;</span></a>
             </div>
             <?php } ?>
             <?php if (!empty($content['field_ios_link'])) { ?>
             <div>
              <a href="<?php print render($content['field_ios_link']); ?>" class="ioslink" target="_blank">iOS <span>&nbsp;</span></a>
             </div>
             <?php } ?>
          </div>
        </div>



        <script type="text/javascript">
        var $j = jQuery.noConflict(); 
        $j(document).ready(function() {
          var sliderInstance = $j('#content-slider').royalSlider({
              directionNavEnabled: true,
            directionNavAutoHide: false,
            welcomeScreenEnabled:false,
            imageAlignCenter:true,
            slideTransitionType: "move",
            slideTransitionSpeed: 600,              
            slideTransitionEasing: "easeInOutSine",
            slideshowEnabled: true,           
            slideshowDelay: 3000  
            }).data('royalSlider');           
          $j("#button-id").click(function() {
            sliderInstance.next();
          });
        });

        </script>


        
  </div>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>



