<div id="wrap">
    <div class="container">
        <!-- #navigation -->
        <header id="navigation" class="sixteen columns clearfix">
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
                
                <div class="region-content nomargin">
                <h4 class="title" id="page-title">search result for <span><?php if($_POST){ $sa = $_POST['searchapp']; echo "'" . $sa . "'"; }?></span> :</h4>
                </div>
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