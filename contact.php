<?php 
  $title = "Contact Us";
  $section = "contact";
  include('includes/header.php');  
?>
    <div id="wrapper">
      <section id="primary">
        <h3>General Information</h3>
        <p>We are ready to start delivering amazing indian food right now so give us a call at your earliest convenience.</p>
        <p>You can always leave comments below.</p>

        <form class ="contact-form" method="post">
          <label for ="name">Name </label>
          <input type = "text" name="name" id="name"><br>
                
          <label for ="email">Email</label>    
          <input type = "email" name="email" id="email"><br>                
                  
          <label for ="message">Message</label>
          <textarea name="message" id="message"></textarea><br>
                
          <input type="submit" value="Send">
        </form>         
        
      </section>


      <section id="secondary">
        <h3>Contact Details</h3>
        <ul class="contact-info">
          <li class="phone"><a href="tel:408-300-0014">408-300-0014</a></li>
          <li class="mail"><a href="mailto:kothapalli1960@yahoo.com">kothapalli1960@yahoo.com</a></li>
          <li class="twitter"><a href="http://twitter.com/intent/tweet?screen_name=shakotha">@shakotha</a></li>
        </ul>
      </section>
      


<?php include('includes/footer.php'); ?>