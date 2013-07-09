<?php

drupal_add_js(base_path() . path_to_theme() . '/js/masonry.pkgd.min.js',array('type' => 'external'));
   


if($_POST){
  $sa = $_POST['searchapp'];
  $result = db_query('SELECT nid,title FROM {node} WHERE type=\'application\' AND status=1 AND title LIKE :title ORDER BY nid',array(':title'=>"%".$sa."%"));

  foreach ($result as $record) {
    $nid = $record->nid;
    $title = $record->title;
    $link_app_main_image = get_imgurl(field_app_main_image($nid));
    $category = field_category_name(field_category($nid));
    $link_android = field_android_link($nid);
    $link_ios = field_ios_link($nid);
    $link_bb = field_bb_link($nid);
    $mediumimg = image_style_url('medium', node_load($nid)->field_app_main_image['und'][0]['uri']);
    //$patho = $GLOBALS['base_url']."/".drupal_lookup_path('alias',"node/".$nid);
    $patho = base_path().drupal_lookup_path('alias',"node/".$nid);

    /*
    $patho = $GLOBALS['base_url']."/".drupal_lookup_path('alias',"node/".$nid);
    echo "title: ".$title."<br>";
    echo "link app image: ".$link_app_main_image."<br>";
    echo "link thumb :".  ."<br>";
    echo "category: ".$category."<br>";
    echo "link android: ".$link_android."<br>";
    echo "link ios: ".$link_ios."<br>";
    echo "link path: ".$patho."<br>";
    echo "link bb: ".$link_bb."<br><br><br>";
    */
    ?>
      <div class="appbox grid">
          <a href="<?php echo $patho; ?>" class="fancybox fancybox.iframe" >
            <img typeof="foaf:Image" src="<?php echo $mediumimg ?>" alt="">  <span class="title"><?php echo $title ?></span>

            <span class="category"><?php echo $category ?></span>
            <div class="divider"></div>
            
              <span class="platform">
                <?php if ($link_android != "") { ?>
                 <em class="android"></em>
                 <?php } ?>
                 <?php if ($link_ios != "") { ?>
                 <em class="ios"></em>
                 <?php } ?>
                 <?php if ($link_bb != "") { ?>
                 <em class="bb"></em>
                 <?php } ?>
              </span>
            </a>
      </div>

    <?php
  }
}

function get_imgurl($fid){
    $uri = db_query('SELECT uri FROM {file_managed} WHERE fid=:fid',array(':fid'=>$fid))->fetchField();
    if($uri == FALSE){
      $uri = '';
    }else{
      $uri = file_create_url($uri);
    }
    return $uri;
  }

function field_app_main_image($nid){
  $result = db_query('SELECT field_app_main_image_fid FROM {field_data_field_app_main_image} WHERE entity_id=:nid',array(':nid'=>$nid))->fetchField();
  return $result;
}

function field_android_link($nid){
  $result = db_query('SELECT field_android_link_value FROM {field_data_field_android_link} WHERE entity_id=:nid',array(':nid'=>$nid))->fetchField();
  return $result;
}

function field_ios_link($nid){
  $result = db_query('SELECT field_ios_link_value FROM {field_data_field_ios_link} WHERE entity_id=:nid',array(':nid'=>$nid))->fetchField();
  return $result;
}

function field_bb_link($nid){
  $result = db_query('SELECT field_bb_link_value FROM {field_data_field_bb_link} WHERE entity_id=:nid',array(':nid'=>$nid))->fetchField();
  return $result;
}

function field_category($nid){
  $result = db_query('SELECT field_category_tid FROM {field_data_field_category} WHERE entity_id=:nid',array(':nid'=>$nid))->fetchField();
  return $result;
}

function field_category_name($tid){
  $result = db_query('SELECT name FROM {taxonomy_term_data} WHERE tid=:tid',array(':tid'=>$tid))->fetchField();
  return $result;
}



?>


<script type="text/javascript">
    var $ja = jQuery.noConflict(); 
    $ja(document).ready(checkWindowSize);
    $ja(window).resize(checkWindowSize);
    $ja(window).load(function(){
    var container = document.querySelector('.content');
    $ja('.content').masonry({
        itemSelector: '.grid',
        columnWidth: 300,
        gutter: 35,
        isAnimated: true, 
        animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
              } 
    });
});

    function checkWindowSize() {
    var width = $ja(window).width(),
    new_class = width > 1600 ? 'wLarge' :
                width > 1440 ? 'w1680' :
                width > 1280 ? 'w1440' :
                width > 1024 ? 'w1280' : '';

    $ja(document.body).removeClass('wLarge w1680 w1440 w1280').addClass(new_class);
}
</script>

