<div id="checkout_content">
  <div class="cc_content" id="Table_">
    <div class="header"></div>
    <div class="subtitle">
      <span>Secure Checkout -</span>
      <img alt="" src="/<?php echo $theme_path; ?>/images/options_header_cc.jpg">
      <div class="clear_left"></div>
    </div>
    <div class="main_content" style="border:none;">
      <div class="left">
        <div class="title">Review Order</div>
        <div class="delivery_info">
          <br/>
          You're Almost Done
          <br/>
          <br/>

          Delivered To:
          <span>
            <?php echo $stored_values['last_name']; ?>, <?php echo $stored_values['first_name']; ?>
          </span>
          <br/>

          Delivered
          <span>
            2-4 weeks from date ordered
          </span>
        </div>
        <!-- Step 1 -->
        <div class="step">
          <div class="step_header"><img src="/<?php echo $theme_path; ?>/images/c_01.jpg" alt="Confirm Your Information"/></div>
          <div class="title_step">
            Confirm Your Information
          </div>
          <div class="information">
            <?php echo $stored_values['last_name']; ?>, <?php echo $stored_values['first_name']; ?>
            <br>
            <?php echo $stored_values['address']; ?>
            <br>
            <?php echo $stored_values['city']; ?>,<?php echo $stored_values['state']; ?>,<?php echo $stored_values['zip']; ?>
            <br>
            <?php echo $stored_values['email']; ?>
            <br>
            <?php echo $stored_values['phone']; ?>
            <div class="button">
              <?php print drupal_render($form['actions']['prev']); ?>	
            </div>
            <div class="clear_right"></div>
          </div>
        </div>
        <!-- text error -->
        <div>
        </div>
        <!-- Step 2 -->
        <div class="step">
          <div class="step_header"><img src="/<?php echo $theme_path; ?>/images/c_02.jpg" alt="Payment Information"/></div>
          <div class="title_step">
            Payment Information
          </div>
          <div class="information">
            <?php print drupal_render_children($form); ?>				
            <div class="clear_right"></div>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="step">
          <div class="step_header"><img src="/<?php echo $theme_path; ?>/images/c_03.jpg" alt="Confirm Your Information"/></div>
          <div class="information bonus_gift">
            <b>**BONUS GIFT</b>
            <input name="free_30_day" type="hidden" id="free_30_day" value="1" checked >
            <br>
            Included with your NFL Alumni Licensed Merchandise is a Risk Free 30 days as an Associate Member of the NFL Alumni.
            <br>
            + Please refer to the Offer and Billing Details below* 
          </div>
        </div>
      </div>
      <!-- Column Right -->
      <div class="right">
        <div class="merchandise_box">
          <div class="title">Merchandise</div>
          <div class="order">
            <div class="merchandise">
              <br>
              <img alt="" width="117" height="118" src="<?php echo $theme_path . '/images/' . str_replace(' ', '_', $stored_values['product']) . '.jpg' ?>">
              <br>
              <?php echo $stored_values['product']; ?>
              <br/>
              <br/>
              <br/>
              <div class="total">Order Total</div>
              <br/>
              <table style="margin: auto" cellspacing="5">
                <tr align="left">
                  <td class="payment"><?php echo $stored_values['product']; ?></td>
                  <td class="payment">$0.00</td>
                </tr>
                <tr align="left">
                  <td class="payment">**BONUS GIFT</td>
                  <td class="payment">$0.00</td>
                </tr>
                <tr align="left">
                  <td class="payment">Standard Shipping</td>
                  <td class="payment">$1.95</td>
                </tr>
                <tr align="left">
                  <td class="payment">Total</td>
                  <td class="payment">$1.95</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="safe_secure">
          <img border="0" src="/<?php echo $theme_path; ?>/images/veriSignSecured.jpg">
          <br>
          Your order is safe and secure.
          <br>
          <div style="font-size: 12px;font-weight: normal;">
            All transactions with this web site are secure indicated by the
            <br>
            icon in your browser window. <a href="http://www.rapidssl.com/index_ssl.htm" target="blank">Click here for more details.</a>
          </div>
        </div>
      </div>
      <!-- end Right -->
      <div class="clear_left"></div>
      <!-- end main main_conten -->
    </div>

  </div>
  <div class="footer">
    <div class="footer_text">
      <?php print $cc_footer; ?>
    </div>
  </div>
</div>
