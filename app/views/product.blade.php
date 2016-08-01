@extends('...layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
  <section id="product">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#">Home</a><span class="divider">/</span></li>
        <li class="active">Product</li>
      </ul>
      @foreach($products as $product)
      <!-- Product Details-->
      <div class="row">
        <div class="span5">
          <ul class="thumbnails mainimage">
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{url('images/product-1.jpg')}}">
                <img alt="" src="{{url('images/product-1.jpg')}}">
              </a>
            </li>
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{url('images/product-2.jpg')}}">
                <img alt="" src="{{url('images/product-2.jpg')}}">
              </a>
            </li>
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{url('images/product-3.jpg')}}">
                <img alt="" src="{{url('images/product-3.jpg')}}">
              </a>
            </li>
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{url('images/product-1.jpg')}}">
                <img alt="" src="{{url('images/product-1.jpg')}}">
              </a>
            </li>
          </ul>

          <ul class="thumbnails mainimage">
           <li class="producthtumb">
              <a href="#"><span><span><img width="240" src="{{url('images/product-l1.jpg')}}" alt=""></span></span> </a>
            </li>
            <li class="producthtumb">
              <a href="#"><span><span><img width="240" src="{{url('images/product-l2.jpg')}}" alt=""></span></span> </a>
            </li>
            <li class="producthtumb">
              <a href="#"><span><span><img width="240" src="{{url('images/product-l3.jpg')}}" alt=""></span></span> </a>
            </li>
            <li class="producthtumb">
              <a href="#"><span><span><img width="240" src="{{url('images/product-l1.jpg')}}" alt=""></span></span> </a>
            </li>
          </ul>

        </div>
        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="productname">Summer Offer Best Product</h1>
              <div class="productprice">
                <div class="proldprice">$150.00</div>
                <div class="prnewprice span2 margin-none">$200.00</div>
                <div class="pull-right"><span class="label label-success">Availability:</span> 30 items in stock</div>
              </div>
              <div class="quantitybox">
              	<input type="text" class="span1 selectqty" placeholder="Qty." style="float:left">
              	<select class="selectsize">
                  <option>Select Color</option>
                  <option>Red</option>
                  <option>Green</option>
                  <option>Blue</option>
                  <option>Black</option>
                </select>
                <select class="selectqty">
                  <option>Size</option>
                  <option>24</option>
                  <option>36</option>
                  <option>48</option>
                </select>
                <a class="btn btn-success pull-left" href="#">Add to Cart</a>
                <div class="links  productlinks">
                  <a class="wishlist" href="{{url('whislist')}}">wishlist</a>
                </div>
              </div>
              <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Description</a></li>
                  <li><a href="#specification">Specification</a></li>
                  <li><a href="#review">Review</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>What is Lorem Ipsum ?</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                    <br>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<br>
                    <br>
                    <ul class="listoption3">
                      <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit </li>
                      <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
                    </ul>
                  </div>
                  <div class="tab-pane " id="specification">
                    <ul class="productinfo">
                      <li>
                        <span class="productinfoleft"> Brand:</span> Lazzy </li>
                      <li>
                        <span class="productinfoleft"> Product Code:</span> LM - 504 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 20 </li>
                      <li>
                        <span class="productinfoleft"> Availability: </span> In Stock </li>
                      <li>
                        <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Brand:</span> Lazzy </li>
                      <li>
                        <span class="productinfoleft"> Product Code:</span> LM - 504 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 20 </li>
                      <li>
                        <span class="productinfoleft"> Availability: </span> In Stock </li>
                      <li>
                        <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Product Code:</span> LM - 560 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 20 </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="review">
                    <ul class="reveiw">
                      <li>
                        <h4 class="title">Lorem Ipsum <span class="date"><i class="icon-calendar"></i> August 28, 2012 </span></h4>
                        <ul class="rate">
                          <li class="on"></li>
                          <li class="on"></li>
                          <li class="on"></li>
                          <li class="off"></li>
                          <li class="off"></li>
                        </ul>
                        <span class="reveiwdetails"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                      </li>
                    </ul>
                    <h3>Write a Review</h3>
                    <form class="form-vertical">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label">Text input</label>
                          <div class="controls">
                            <input type="text" class="span3">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Textarea</label>
                          <div class="controls">
                            <textarea rows="3"  class="span3"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <input type="submit" class="btn btn-success" value="continue">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- Product Description tab & comments-->

    </div>
  </section>
  <!--  Related Products-->
  <section id="related">
    <div class="container">
      <h1 class="headingfull"><span>Related Products</span></h1>
      <section id="thumbnails">
      <div class="sidewidt" style="padding:10px;">
        <ul class="thumbnails">
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <span data-original-title="" class="sale tooltip-test">Sale</span>
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l2.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l1.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <span data-original-title="" class="offer tooltip-test">Offer</span>
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l1.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l3.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
      </ul>
        </div>
      </section>
    </div>
  </section>
</div>

@stop