<script type="text/javascript">
jQuery(document).ready(function($){
$("#tb-megamenu-column-12").addClass("commun-infrast");
$("#edit-submit-1--3").val(">");
$(".seach-menu-block a").removeAttr('href');	
});
</script>
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ MAIN _______________________ -->
  <div class="wrapper">
    <div id="main" class="clearfix container">

  <!-- ______________________ HEADER _______________________ -->
  <?php
      include 'page.header.inc';
  ?>
      <section id="content">

          <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
            <div id="content-header">

              <?php //print $breadcrumb; ?>

              <?php if ($page['highlighted']): ?>
                <div id="highlighted"><?php print render($page['highlighted']) ?></div>
              <?php endif; ?>

              <?php print render($title_prefix); ?>

              <?php print render($title_suffix); ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
              <?php endif; ?>

              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php
            $includeTitleNodeTypes = array( 'blog' ); // Add node types as needed.
            if ($title && isset($node) && in_array( $node->type , $includeTitleNodeTypes ) ) {
                print '<div class="content-area-title">'.PHP_EOL;
                if ( isset($node) && $node->type == 'blog' ) {
                    print '<div class="created"><span>'.format_date($node->created, 'date').'</span></div>'.PHP_EOL;
                }
                print '<div class="title"><h1>'.$title.'</h1></div>'.PHP_EOL;
                print '</div>'.PHP_EOL;
            }
		if(isset($node) && $node->type == 'webform'){
print '<div class="page-title">'.$title.'</div>';
}
            print render($page['content']);
            ?>
          </div>

          <?php print $feed_icons; ?>

      </section> <!-- /content-inner /content -->

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first" class="column sidebar first">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?> <!-- /sidebar-first -->

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" class="column sidebar second">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?> <!-- /sidebar-second -->

    </div> <!-- /main -->
  </div>


  <!-- ______________________ FOOTER _______________________ -->
  <?php
      include 'page.footer.inc';
  ?>

</div> <!-- /page -->
