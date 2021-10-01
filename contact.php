<?php require_once('include/header.php') ?>
<div class="page_title">
  <div class="container">
    <div class="title"><h1>Contact Us</h1></div>
    <div class="pagenation">&nbsp;<a href="index-2.html">Home</a> <i>/</i> <a href="#">Pages</a> <i>/</i>Contact Us</div>
  </div>
</div>
<div class="container">
  <div class="border_box11">
    <div class="one_half">
      <form  id="contact_form" method="POST" name="contact_form"
        action="">
        <p>
          <label for='message'>Company Name:</label> <br>
          <input class="contact_wide" type="text" name="companyname" value='' id="fcname">
           <p id="error-fcname" style="color: red;"></p>
        </p>
        <p>
          <label for='name'>Name: </label><br>
          <input class="contact_wide" type="text" name="username" value='' id="fname">
          <p id="error-fname" style="color: red;"></p>
        </p>
        <p>
          <label for='email'>Email: </label><br>
          <input class="contact_wide" type="text" name="email" value='' id="e-mail">
            <p id="error-e-mail" style="color: red;"></p>
        </p>
        <p>
          <label for='message'>Phone No:</label> <br>
        <input class="contact_wide" type="text" name="mobile" value='' id="phone">
        <p id="error-phone" style="color: red;"></p>
      </p>
        <p>
          <label for='message'>Message:</label> <br>
          <textarea class="contact_wide" name="message" rows=8 cols=25 id="msg"></textarea>
          <p id="error-message" style="color: red;"></p>
        </p>
        <div class="contact-button">
          <input type="button" value="Submit" name='submit' id="btn_submit">
        </div>
      </form>
      
      
      
      
    </div>
    <div class="one_half last">
      <div class="contact_icon">
        <h2><strong>Contact Us</strong></h2>
        <div>
        <ul class="footer-contact-info">
                    <li>
                        <div class="text-holder">
                            <h5><i class="fa fa-home"></i>&nbsp;&nbsp; <span>Address:</span> G1-404 Kumar Park Infinia Phursungi Pune 412308. India</h5>
                            
                        </div>
                    </li>
                    <li>
                        <div class="text-holder">
                            <h5> <i class="fa fa-phone"></i>&nbsp;&nbsp;<span>Phone:</span><a href="tel:+917019984269">+91-7019984269</a></h5>
                             <h5> <i class="fa fa-phone"></i>&nbsp;&nbsp;<span>Phone:</span><a href="tel:919021944283">+91-9021944283</a></h5>
                        </div>
                    </li>
                    <li>
                        <div class="text-holder">
                            <h5>  <i class="fa fa-envelope"></i>&nbsp;&nbsp;<span>Email:</span><a href="mailto:reachus@sonanishimpex.com">reachus@sonanishimpex.com</a></h5>
                        </div>
                   </li> 
                </ul>
         </div>
        </div>
        
        
        
        
      </div>
    </div>
  </div>
  <div class="container">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.936630901038!2d73.95743171436828!3d18.486529375040575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e9e734008161%3A0x1ad7791edf7da96a!2sG1%20Building!5e0!3m2!1sen!2sin!4v1581071452173!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="mar_top5"></div>
  <?php require_once('include/footer.php') ?>