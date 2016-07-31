<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
          <h2>About Us </h2>
          <p>
            "At vero eos et accusamus et iusto
            odio dignissimos ducimus qui
            blanditiis praesentium voluptatum
            deleniti atque corrupti quos
            dolores et quas molestias excepturi
            sint occaecati cupiditate non
            provident,
            <br>
            <br>similique sunt in culpa qui officia
            deserunt mollitia animi,</p>
        </div>
        <div class="span3 contact">
          <h2>Contact Us </h2>
          <ul>
            <li class="phone">+123 456 7890, +123 456 7890, <br>+123 456 7890</li>
            <li class="mobile">+123 456 7890, +123 456 7890, <br>+123 456 7890</li>
            <li class="email">test@test.com <br>test@test.com</li>
          </ul>
        </div>
        <div class="span3 twitter">
          <h2>Quick Links</h2>
          <ul class="nav-list categories">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('cart')}}">Shopping Cart </a></li>
            <li><a href="{{url('account')}}">Account</a></li>
            <li><a href="{{url('contact')}}">Contact </a></li>
            <li><a href="{{url('blog')}}">Blog</a></li>
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
<!--<div aria-hidden="false" aria-labelledby="myModalLabel"
role="dialog" tabindex="-1" class="modal hide fade in"
id="myModal">
  <div class="modal-header">
    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
    <h3 id="myModalLabel">My Cart</h3>
  </div>
  <div class="modal-body">

    <table class="table table-striped">
      <tbody>
        <tr>
          <th class="image">Image</th>
          <th class="name">Product Name</th>
          <th class="Category">Category</th>
          <th class="price">Unit Price</th>
          <!--<th class="total">Total</th>
          <th class="quantity">&nbsp;</th>
        </tr>
        $cart = Count::content();
        <tr>
          <!--<td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}"  alt="product" title="product"></a>
          <td class="name"><a href="#">ice cream</a></td>
          <td class="Category"><a href="#">kola nut
          <td class="price"> insert </td>
          <!--<td class="total">$120.68</td>
          <td class="quantity"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
        </tr>
        <!--<tr>
          <td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
          <td class="name"><a href="#">T-Shirt</a></td>
          <td class="quantity"><input type="text" class="span1" name="quantity[40]" value="1" size="1"></td>
          <td class="price">$120.68</td>
          <td class="total">$120.68</td>
          <td class="quantity"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
        </tr>
        <tr>
          <td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
          <td class="name"><a href="#">T-Shirt</a></td>
          <td class="quantity"><input type="text" class="span1" name="quantity[40]" value="1" size="1"></td>
          <td class="price">$120.68</td>
          <td class="total">$120.68</td>
          <td class="quantity"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
        </tr>
        <tr>
          <td class="image" colspan="6"><h4 class="pull-right margin-none">Total: $2358</h4></td>
        </tr>-->
      </tbody>
    </table>
  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn">Continue Shoping</button>
    <a href="{{url('checkout')}}"> <button class="btn btn-primary">Checkout</button></a>
  </div>
  </div>

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


  <script defer src="js/custom.js"></script>
  <script type="text/javascript">
  $(window).load(function () {
    $('#slider').nivoSlider();
  });
  </script>