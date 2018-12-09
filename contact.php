<?php include 'includes/config.php'?>
<?php get_header()?>

<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <form id="form1" name="form1" method="post" action="includes/sendmail.php">
          <form name="sentMessage" id="contactForm" novalidate> 
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" required="" placeholder="Name" id="Name" name="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" required="" placeholder="Email Address" id="Email" name="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" required="" placeholder="Phone Number" id="Phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" required="" placeholder="Message" id="Message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" type="submit"  id="Submit">Send</button>
              <button type="reset"  class="btn btn-primary" type="reset"   id="Clear" >Clear</button>
            </div>
          </form>
            </form>
        </div>
      </div>
    </div>

    <hr>

<?php get_footer()?>