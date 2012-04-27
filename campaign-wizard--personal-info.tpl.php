<div class="content" id="Table_">
  <div class="header"></div>
  <div class="main_content">
    <div class="left">
      <div class="products"></div>
    </div>
    <div class="right">
      <div class="form_landing">
        <div class="form_top"></div>
        <div class="form_middle">
          <?php print drupal_render_children($form); ?>
        </div>
        <div class="form_bottom"></div>
      </div>
    </div>
    <div class="clear_left"></div>
  </div>
</div>
<div class="footer">
  <?php print $landing_footer; ?>
</div>