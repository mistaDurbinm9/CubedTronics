<?php

  function compose_repair_option(){
    <div class="repair_opt">
      <label class="container"> HDD Repair - $99.99
        <input type="checkbox" name="repair_type[]" value="XboxOneS_hdd_repair" data-id="0">
        <span class="checkmark"></span>
      </label><br></br>
      <i class="more-info-icon" name="hdd_modal"></i>
    </div>
  }

  function compose_repair_form($product, $repair_){
    <form class="contact-form" action="../includes/send.mail.inc.php" method="post">
      <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
      compose_repair_option($product);
      <p id="total">Total: $0.00</p>
      <input type="text" name="name" maxlength="50" placeholder="Your Name" required>
      <input type="email" name="uid-email" maxlength="50" placeholder="Your Email Address" required>
      <textarea id="message" name="message" maxlength="1000" cols="25" rows="6" placeholder="Message..." required></textarea><br>
      <button type="submit" name="submit-form">Submit</button>
    </form>
  }

 ?>
