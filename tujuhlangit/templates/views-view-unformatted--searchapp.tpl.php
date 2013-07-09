<?php

if($_POST){
  $sa = $_POST['searchapp'];
  $arapp = array();
  $i=0;
  $result = db_query('SELECT nid,title FROM {node} WHERE type=\'application\' AND status=1 AND title LIKE :title ORDER BY nid',array(':title'=>"%".$sa."%"));

  foreach ($result as $record) {
    $nid = $record->nid;
    $title = $record->title;
    echo "<strong>$title</strong>";

    //echo "<strong>$nid</strong><br/>";
    $arapp[$i] = $nid;
    $i++;
    
    /*
    $path = $GLOBALS['base_url']."/content/".$nid."?width=960&height=600";
    echo "title: ".$title."<br>";
    echo "link app image: ".$link_app_main_image."<br>";
    echo "category: ".$category."<br>";
    echo "link android: ".$link_android."<br>";
    echo "link ios: ".$link_ios."<br>";
    echo "link path: ".$path."<br>";
    echo "link bb: ".$link_bb."<br><br><br>";
    */
  }
?>


<?php } ?>

