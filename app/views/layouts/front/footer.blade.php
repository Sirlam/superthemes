<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
          <h2>About Us </h2>
          <p>
            "Superthemes is a market place that brings theme designers and sellers
            together.
            <br>
            <br>similique sunt in culpa qui officia
            deserunt mollitia animi,</p>
        </div>
        <div class="span3 contact">
          <h2>Contact Us </h2>
          <ul>
            <li class="phone">+123 456 7890, +123 456 7890, <br>+123 456 7890</li>
            <li class="mobile">+123 456 7890, +123 456 7890, <br>+123 456 7890</li>
            <li class="email">info@superthemes.com <br>help@superthemes.com</li>
          </ul>
        </div>
        <div class="span3 twitter">
          <h2>Quick Links</h2>
          <ul class="nav-list categories">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('cart/index')}}">Shopping Cart </a></li>
            <li><a href="{{URL::route('getAccount')}}">Account</a></li>
            <li><a href="{{url('contact')}}">Contact </a></li>
            <li><a href="{{URL::route('getWishlist')}}">Wishlist</a></li>
          </ul>
        </div>
        <div class="span3 newsletter">
          <h2>Get in touch </h2>
          <p><small>Track the latest collections and offers at Super Themes.</small></p>
          <p><strong>Sign up for our newsletter and get a free Voucher!</strong></p>
          <div class="fl">
          <div class="control-group">
            <form class="form-horizontal">
              <div class="">
                <div class="input-prepend">
                  <input type="text" placeholder="Subscribe to Newsletter" id="inputIcon">
                  <button value="Subscribe" class="btn btn-success" type="submit">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
          <div id="footersocial"> 
            <a href="#" title="Facebook" class="facebook">Facebook</a>
            <a href="#" title="Twitter" class="twitter">Twitter</a>
            <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
            <a href="#" title="rss" class="rss">rss</a>
            <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
            <a href="#" title="Skype" class="skype">Skype</a>
            <a href="#" title="Flickr" class="flickr">Flickr</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6">All rights are copyright to Super Themes.</div>
        <div class="span6 textright">Designed &amp; Developed by Super Themes.</div>
   	 </div>
    </div>
  </section> 
        <a id="gotop" href="#">Back to top</a>
</footer>

  <!-- Placed at the end of the document so the pages load faster -->
  {{HTML::script("js/jquery.js")}}
  {{HTML::script("js/google-code-prettify/prettify.js")}}
  {{HTML::script("js/bootstrap-transition.js")}}
  {{HTML::script("js/bootstrap-alert.js")}}
  {{HTML::script("js/bootstrap-modal.js")}}
  {{HTML::script("js/bootstrap-dropdown.js")}}
  {{HTML::script("js/bootstrap-scrollspy.js")}}
  {{HTML::script("js/bootstrap-tab.js")}}
  {{HTML::script("js/bootstrap-tooltip.js")}}
  {{HTML::script("js/bootstrap-popover.js")}}
  {{HTML::script("js/bootstrap-button.js")}}
  {{HTML::script("js/bootstrap-collapse.js")}}
  {{HTML::script("js/bootstrap-carousel.js")}}
  {{HTML::script("js/bootstrap-typeahead.js")}}
  {{HTML::script("js/bootstrap-affix.js")}}
  {{HTML::script("js/application.js")}}
  {{HTML::script("js/respond.min.js")}}
  {{HTML::script("js/cloud-zoom.1.0.2.js")}}
  {{HTML::script("js/jquery.nivo.slider.js")}}
  {{HTML::script("js/app.js")}}


  <script defer src="js/custom.js"></script>
  <script type="text/javascript">
  $(window).load(function () {
    $('#slider').nivoSlider();
  });
  </script>