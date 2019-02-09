<?php echo
	include 'header.php';
?>
  <section id="content">
    <div class="wrapper">
      <article class="col1">
        <h2>About Us</h2>
        <div class="pad_left1 pad_bot1">
          <div id="slider">
            <div id="for_img">
              <div id="nivo_slider"><img src="images/images0.jpg" width="342" height="203"><img src="images/download (1).jpeg" width="275" height="183"><img src="PASPORT1.jpg" width="101" height="91"><img src="images/index4.jpg" width="259" height="194"><img src="images/images7.jpg" width="322" height="179"> </div>
            </div>
          </div>
          <div class="pad">
            <p><strong>AZA</strong >-tech</p>
           <p> We are technology based consultant platform, We help our clients make the best decission in establishing their IT based instituition or businesses. We have some areas of specialization which alot of our clients have succeeded in their carrier goals, these include:<br>Solar Accessories & technology</br><br>Computer Accessories</br>
           <br>Inverters Company/Store</br>
           <br>Consultancy & Carrier Goal</br></p>
          </div>
        </div>
        <h2><span>Our Solutions</span></h2>
        <div class="pad_left1">
          <div class="pad_left1">
            <div class="wrapper pad_top1">
              <div class="col3">
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page1_img3.png" alt=""></figure>
                  <p class="cols"><strong class="font1">Development</strong><br>
                  Helping clients to develop their ideas & showing them new approach in tackling IT related issues</p>
                </div>
              </div>
              <div class="col3 pad_left2">
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page1_img5.png" alt=""></figure>
                  <p class="cols"><strong class="font1">Creative Design</strong><br>
                  More also we entise our clients with the best of designs ideas and skills to help them attract customers for their businesses</p>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="col3">
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page1_img4.png" alt=""></figure>
                  <div class="cols"><strong class="font1">Planning</strong><br>
                  <tex class="tex1" >we have committee of expert inplace to help you reach a decission in both small & large scale business.<br> there also provide you detailed analysis in setting up instituition/shop.</tex></div>
                </div>
              </div>
              <div class="col3 pad_left2">
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page1_img6.png" alt=""></figure>
                  <div class="cols"><strong class="font1">Effective Strategies</strong><br>
               <tex class="tex1" >Every successfull business needs an effective plan & strategy to survive in a competitive market and thats what we offer to our clients. 
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <article class="col2">
        <h3>Latest Works</h3>
        <ul class="ul_works">
          <li><a href="#"><img src="images/page1_img1.png" alt=""></a></li>
          <li><a href="#"><img src="images/page1_img2.png" alt=""></a></li>
        </ul>
        <h4>Recent Tweets</h4>
        <div class="tweets">
          <p>
          <a href="#">20 days ago</a></p>
          <p>No business can succeed without proper consultaion of expert and those in the field <br>
            <a href="#">36 days ago</a></p>
          <p>HOW TO BECOME A HIGHLY PAID IT CONSULTANT!!!<br>
            <a href="#">54 days ago</a></p>
        </div>
      </article>
    </div>
  </section>
  <footer>
    <div class="wrapper">
      <article class="col">
        <h5>Why Us</h5>
        <ul class="list1">
          <li><a href="#">IT Consultant Premium</a></li>
          <li><a href="#">Business Ideas</a></li>
        </ul>
      </article>
      <article class="col pad_left2">
        <h5>Links</h5>
        <ul class="list1">
          <li><a href="#">Audantium, totam</a></li>
          <li><a href="#">Remaperiam, eaque</a></li>
       </li>
          <li><a href="#">Quasi architecto </a></li>
        </ul>
      </article>
      <article class="col pad_left2">
        <h5>Follow Us</h5>
        <ul class="icons">
          <li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
          <li><a href="#"><img src="images/icon2.jpg" alt="">Stumleupon</a></li>
          <li><a href="#"><img src="images/icon3.jpg" alt="">Twitter</a></li>
        </ul>
      </article>
      <article id="newsletter">
        <h5>Newsletter</h5>
        <form id="newsletter_form" action="#">
          <div class="wrapper">
            <input class="input" type="text" value="Enter your email here" onBlur="if(this.value=='') this.value='Enter your email here'" onFocus="if(this.value =='Enter your email here' ) this.value=''" >
          </div>
          <a href="#">Subscribe</a>
        </form>
      </article>
    </div>
    <article class="privacy">
     <?php echo
	include 'footer.php';
	?>
    </footer>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function() {
	$('#nivo_slider').nivoSlider({
		effect:'fold', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
		slices:7,
		animSpeed:500,
		pauseTime:6000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1, //Universal caption opacity
		beforeChange:function(){},
		afterChange:function(){},
		slideshowEnd:function(){} //Triggers after all slides have been shown
	});
});
</script>
<!-- END PAGE SOURCE -->
</body>
</html>