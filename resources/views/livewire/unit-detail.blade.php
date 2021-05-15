<div>
<style>
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/video.js@7/dist/video-js.min.css"
    rel="stylesheet"
  />
  <link
  href="https://unpkg.com/@videojs/themes@1/dist/city/index.css"
  rel="stylesheet"
/>

</style>
<br>
<br>
<br>

<div class="content" ><div class="row">
 
    
    @if(
        ($userstatus=='ADM')
    ||
    ($unit->name==$unituser->unitone)
    ||
    ($unit->name==$unituser->unittwo)
    ||
    ($unit->name==$unituser->unitthree)
    ||
    ($unit->name==$unituser->unitfour)
    ||
    ($unit->name==$unituser->unitfive)
    ||
    ($unit->name==$unituser->unitsix)
    ||
    ($unit->name==$unituser->unitseven)
    ||
    ($unit->name==$unituser->uniteight)
    ||
    ($unit->name==$unituser->unitnine)
    ||
    ($unit->name==$unituser->unitten)
    ||
    ($unit->name==$unituser->uniteleven)
    ||
    ($unit->name==$unituser->unittwelve)
    ||
    ($unit->name==$unituser->unitthriten)
    ||
    ($unit->name==$unituser->unitfourten)
    ||
    ($unit->name==$unituser->unitfiften)
    ||
    ($unit->name==$unituser->unitsixten)
   
    )
   
    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
        <div class="wrap-product-detail">
            <div class="detail-media">
                <div class="product-gallery">
                  <ul class="slides">

                    <li data-thumb="{{asset('assets/images/products')}}/{{ $unit->image}}">
                        <img src="{{ asset('storage/images') }}/{{ $unit->image }}"  alt="product thumbnail" />
                    </li>
 
                  </ul>
                </div>
            </div>
            <div class="detail-info">
                <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="#" class="count-review">(05 review)</a>
                </div>
                <h2 class="product-name">{{$unit->name}}</h2>
                <div class="short-desc">
                    <ul>
                        <li>{{$unit->short_description  }}</li>
                  
                    </ul>
                </div>
                <div class="wrap-social">
                    <a class="link-socail" href="#"><img src="{{asset('assets/images/social-list.png')}}" alt=""></a>
                </div>
                <div class="wrap-price"><span class="product-price"> $ {{$unit->regular_price}}</span></div>
              
               
                <div class="wrap-butons">
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                    <div class="wrap-btn">
                        <a href="#" class="btn btn-compare">Add Compare</a>
                        <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                    </div>
                </div>
            </div>
            <div class="advance-info">
                <div class="tab-control normal">
                    <a href="#description" class="tab-control-item active">description</a>
                    
                </div>
                <div class="tab-contents">
                    <div class="tab-content-item active" id="description">
                  
                        <p>{{ $unit->short_description }}</p>
                        <hr>
                        <h1>grammer</h1>
                     
                        <video 
                        width="100%" height="100%"
                    
                        controls controlsList="nodownload">
                            <source
                            src="{{ $unit->video_grammer }}"
                            type="video/mp4"
                          />                            </video>
           
                          <h1>words</h1>
                     
                          <video 
                          width="100%" height="100%"
                      
                          controls controlsList="nodownload">
                              <source
                              src="{{ $unit->video_words }}"
                              type="video/mp4"
                            />                            </video>
                    </div>
                    <div class="tab-content-item " id="add_infomation">
                        <table class="shop_attributes">
                            <tbody>
                                <tr>
                                    <th>Weight</th><td class="product_weight">1 kg</td>
                                </tr>
                                <tr>
                                    <th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
                                </tr>
                                <tr>
                                    <th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-content-item " id="review">
                        
                        <div class="wrap-review-form">
                            
                            <div id="comments">
                                <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
                                <ol class="commentlist">
                                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                        <div id="comment-20" class="comment_container"> 
                                            <img alt="" src="{{asset('assets/images/author-avata.jpg" height="80" width="80">
                                            <div class="comment-text">
                                                <div class="star-rating">
                                                    <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                </div>
                                                <p class="meta"> 
                                                    <strong class="woocommerce-review__author">admin</strong> 
                                                    <span class="woocommerce-review__dash">–</span>
                                                    <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
                                                </p>
                                                <div class="description">
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div><!-- #comments -->

                            <div id="review_form_wrapper">
                                <div id="review_form">
                                    <div id="respond" class="comment-respond"> 

                                        <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                            <p class="comment-notes">
                                                <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                            </p>
                                            <div class="comment-form-rating">
                                                <span>Your rating</span>
                                                <p class="stars">
                                                    
                                                    <label for="rated-1"></label>
                                                    <input type="radio" id="rated-1" name="rating" value="1">
                                                    <label for="rated-2"></label>
                                                    <input type="radio" id="rated-2" name="rating" value="2">
                                                    <label for="rated-3"></label>
                                                    <input type="radio" id="rated-3" name="rating" value="3">
                                                    <label for="rated-4"></label>
                                                    <input type="radio" id="rated-4" name="rating" value="4">
                                                    <label for="rated-5"></label>
                                                    <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                </p>
                                            </div>
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label> 
                                                <input id="author" name="author" type="text" value="">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label> 
                                                <input id="email" name="email" type="email" value="" >
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Your review <span class="required">*</span>
                                                </label>
                                                <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                            </p>
                                        </form>

                                    </div><!-- .comment-respond-->
                                </div><!-- #review_form -->
                            </div><!-- #review_form_wrapper -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
        
        <h1>you should first buy </h1>
    @endif
</div>

<script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <script type="text/javascript">
        var getVideo = document.getElementById("playVideo");
        var getSource = document.getElementById("sourceVideo");
        function changeSource(vid) {
            var geturl = vid.id;
            getSource .setAttribute("src", geturl);
            getVideo .load()
            getVideo .play();
            getVideo .volume = 0.5;
        }
    </script>
    <script>
        document.onkeydown = function(e) {
        if(event.keyCode == 123) {
           return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
           return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
           return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
           return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
           return false;
        }
      }
    </script>
    <script type="text/JavaScript">
        //courtesy of BoogieJack.com
        function killCopy(e){
        return false
        }
        function reEnable(){
        return true
        }
        document.onselectstart=new Function ("return false")
        if (window.sidebar){
        document.onmousedown=killCopy
        document.onclick=reEnable
        }
        </script>
    <script>
        function changeSource(url) {
            var video = document.getElementById('video');
            video.src = url;
            video.play();
         }    </script>
</script>
</div>
</div>