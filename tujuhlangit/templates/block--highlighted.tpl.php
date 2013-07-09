<?php
	global $theme;
	$path_to_theme = drupal_get_path('theme',$theme);
      /*
      drupal_add_js(base_path() . $path_to_theme . '/js/hamburger.js',array('type' => 'external'));
      drupal_add_css(base_path() . $path_to_theme . '/css/hamburger.css',array('type' => 'external'));
      drupal_add_js('http://code.jquery.com/jquery-1.9.1.min.js', file);
      drupal_add_js('http://code.jquery.com/ui/1.10.3/jquery-ui.js', file);
      */
?>




	<div class="insearch" data-role="none">
  		<form action="<?php echo $GLOBALS['base_url']; ?>/search" method="post" id="search-block-form" accept-charset="UTF-8">
          <div class="searchboxa" id="searchto">
          <input data-role="none" autocomplete="off"  placeholder="Search Apps..." title="Enter the terms you wish to search for." type="text" id="searchapp" name="searchapp" value="<?php if($_POST){ $sa = $_POST['searchapp']; echo $sa; } ?>">
           <button data-role="none" id="gbqfb" aria-label="7Langit Apps Search" class="go" name="btn7">
           <span class="srcicon"></span>
          </div>
        </form>
	</div>
	<button class="browsebtn toggle-menu menu-right push-body browseit">BROWSE</button>