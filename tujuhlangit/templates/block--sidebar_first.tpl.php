<?php
	global $theme;
	$path_to_theme = drupal_get_path('theme',$theme);
      
      drupal_add_js(base_path() . $path_to_theme . '/js/categ.js',array('type' => 'external'));
?>
<div class="text_separator"><div><h2>CATEGORIES</h2></div></div>
  <div class="divider leftlign"></div>
    <div class="cat_content" id="catmenu" style="display:none" >
          <ul>
              <li class="lnk"><a href="#booksref">Books & References</a></li>
              <li class="lnk"><a href="#business">Business</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/education">Education</a></li>
              <li class="lnk"><a href="#entertainment">Entertainment</a></li>
              <li class="lnk"><a href="#games">Games</a></li>
              <li class="lnk"><a href="#healthfit">Health & Fitness</a></li>
              <li class="lnk"><a href="#lifestyle">Lifestyle</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/social-networking">Social Networking</a></li>
              <li class="lnk"><a href="#utilities">Utilities</a></li>
            </ul>
      </div>
      
      <div class="cat_content" id="booksref" style="display:none" >
        <span class="lnk "><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Books & References</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/catalogue">Catalogue</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/news-magazine">News & Magazine</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/religion">Religion</a></li>
          </ul>
      </div>

      <div class="cat_content" id="business" style="display:none" >
        <span class="lnk"><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Business</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/finance">Finance</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/productivity">Productivity</a></li>
          </ul>
      </div>

      <div class="cat_content" id="entertainment" style="display:none" >
        <span class="lnk"><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Entertainment</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/music-audio">Music & Audio</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/photo-video">Photo & Video</a></li>
          </ul>
      </div>

      <div class="cat_content" id="games" style="display:none" >
        <span class="lnk"><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Games</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-action">Action</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-adventure">Adventure</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-arcade">Arcade</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-board">Board</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-card">Card</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-dice">Dice</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-card">Education</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-family">Family</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-kids">Kids</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-music">Music</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-puzzle">Puzzle</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-racing">Racing</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-role-playing">Role Playing</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-simulation">Simulation</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-sports">Sports</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-strategy">Strategy</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-trivia">Trivia</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/game-word">Word</a></li>
          </ul>
      </div>


      <div class="cat_content" id="healthfit" style="display:none" >
        <span class="lnk"><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Health & Fitness</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/medical">Medical</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/sports">Sports</a></li>
          </ul>
      </div>

       <div class="cat_content" id="lifestyle" style="display:none" >
        <span class="lnk"><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Lifestyle</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/travel">Travel</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/food-drink">Food & Drink</a></li>
          </ul>
      </div>

      <div class="cat_content" id="utilities" style="display:none" >
        <span class="lnk"><a href="#catmenu" class="catback typcn typcn-chevron-left">back</a></span>
        <h2>Utilities</h2>
          <ul>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/navigation">Navigation</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/weather">Weather</a></li>
              <li><a href="<?php echo $GLOBALS['base_url']; ?>/category/widget">Widget</a></li>
          </ul>
      </div>
      