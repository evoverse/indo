<?php
      //drupal_add_js(base_path() . path_to_theme() . '/js/jquery.easing.1.3.min.js',array('type' => 'external'));
      //drupal_add_js(base_path() . path_to_theme() . '/js/royal-slider-8.1.min.js',array('type' => 'external'));

      //drupal_add_css(base_path() . path_to_theme() . '/css/jquery.mobile-1.3.1.css', 'external');
      //drupal_add_js(base_path() . path_to_theme() . '/js/jquery.mobile-1.3.1.min.js', 'external');
        global $theme;
        $path_to_theme = drupal_get_path('theme',$theme);
        
        drupal_add_css(base_path() . $path_to_theme . '/css/jPushMenu.css',array('type' => 'external'));

        drupal_add_js(base_path() . $path_to_theme . '/js/categ.js',array('type' => 'external'));
        drupal_add_js(base_path() . $path_to_theme . '/js/jPushMenu.js',array('type' => 'external'));
        drupal_add_js('jQuery(document).ready(function($) { $(".toggle-menu").jPushMenu(); });', 'inline');
        drupal_add_js('function iframeLoaded() { window.frames["fancybox-frame"].sembunyi(); }', 'inline');
?>


        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
            <div class="text_separator"><div class="sidetitle"><h2>APPS CATEGORIES</h2></div></div>
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


        </nav>

<div id="wrap" data-role="content" >
    <div class="container" >
        <!-- #navigation -->
        <header id="navigation" class="sixteen columns clearfix">
            <?php /*
            <span class="wrapo">
            <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
            */ ?>
            <div class="headwrap">
            <div id="logo7"><a href="<?php echo $GLOBALS['base_url'] ?>"><img src="<?php echo base_path() . path_to_theme() . "/images/logo7langit.png" ; ?>" /></a></div>
                <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>
            </div>
                
            <?php print drupal_render($page['header']); ?>
            

            <?php /* </div>
            </span> */ ?>
        </header><!-- /#navigation -->
        
        <?php if ($page['sidebar_first']) { ?>
        <div id="content" class="eleven columns">
        <?php } else { ?>
        <div id="content" class="sixteen columns clearfix">
        <?php } ?>
        
            <?php if ($messages): ?>
                <div id="messages">
                  <?php print $messages; ?>
                </div><!-- /#messages -->
            <?php endif; ?>
        
            <?php if ($breadcrumb): ?>
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>
            
            <div id="main">
                
                
                <?php print render($title_prefix); ?>
                
                <?php if ($title): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>
                
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                
                
                <?php if ($page['sidebar_first']): ?>
                <!-- #sidebar-first -->
                <div id="sidebar" class="five columns">
                    <?php print render($page['sidebar_first']); ?>
                </div><!-- /#sidebar-first -->
                <?php endif; ?>
                
                <?php print render($page['content']); ?>

                
            </div>


        
        </div><!-- /#content -->
        
        
        
        <div class="clear"></div>
        
        <?php if ($page['featured_left'] || $page['featured_right']): ?>
        <!-- #featured -->
        <div id="featured" class="sixteen columns clearfix">
            
            <?php if ($page['featured_left'] && $page['featured_right']) { ?>
            <div class="one_half">
            <?php print render($page['featured_left']); ?>
            </div>
            
            <div class="one_half last">
            <?php print render($page['featured_right']); ?>
            </div>
            <?php } else { ?>
                
            <?php print render($page['featured_left']); ?>
            <?php print render($page['featured_right']); ?>
            
            <?php } ?>
            
        </div><!-- /#featured -->
        <?php endif; ?>
        
        <div class="clear"></div>
        <div class="divider bawah"></div>
        <div id="footer" class="sixteen columns clearfix">
        
            <div class="one_third">
            <?php if ($page['footer_first']): ?><?php print render($page['footer_first']); ?><?php endif; ?>
            </div>
            
            <div class="one_third">
            <?php if ($page['footer_second']): ?><?php print render($page['footer_second']); ?><?php endif; ?>
            </div>
            
            <div class="one_third last">
            <?php if ($page['footer_third']): ?><?php print render($page['footer_third']); ?><?php endif; ?>
            </div>
    
            <div class="clear"></div>

            
            <?php if ($page['footer']): print render($page['footer']); endif; ?>
            
            <div class="clear"></div>
            
            <div id="credits">
            copyright &copy; <?php print(date('Y') . ' ');?>
            <?php if (!empty($site_name)):?>
            <?php print $site_name;?>
            <?php endif;?>
            </div>
        
        </div>
    </div>
</div> <!-- /#wrap -->
