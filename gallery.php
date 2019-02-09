<?php echo
	include 'header.php';
?>
  <section id="content">
    <div class="wrapper">
      <article class="col1">
        <h2>Gallery</h2>
        <div class="pad_left1">
          <div class="wrapper pad_bot1">
            <div class="cols"> <a href="images/big_img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" title="Pellentesque quis"><img src="images/page3_img1.png" alt=""></a>
              <p><strong class="font1">Pellentesque quis</strong>Lorem ipsudolor amet consectetur adipiscing elit enean facilisis...<br>
                <a href="#" class="link1">Read more</a></p>
            </div>
            <div class="cols pad_left1"> <a href="images/big_img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" title="Nullam augue"><img src="images/page3_img2.png" alt=""></a>
              <p><strong class="font1">Nullam augue</strong>Suspendisse eu adipiscing turpied rhoncus aliquam est...<br>
                <a href="#" class="link1">Read more</a></p>
            </div>
          </div>
          <div class="wrapper pad_bot1">
            <div class="cols"> <a href="images/big_img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" title="Pellentesque quis"><img src="images/page3_img3.png" alt=""></a>
              <p><strong class="font1">Pellentesque quis</strong>Lorem ipsudolor amet consectetur adipiscing elit enean facilisis...<br>
                <a href="#" class="link1">Read more</a></p>
            </div>
            <div class="cols pad_left1"> <a href="images/big_img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" title="Nullam augue"><img src="images/page3_img4.png" alt=""></a>
              <p><strong class="font1">Nullam augue</strong>Suspendisse eu adipiscing turpied rhoncus aliquam est...<br>
                <a href="#" class="link1">Read more</a></p>
            </div>
          </div>
          <div class="wrapper pad_bot1">
            <div class="cols"> <a href="images/big_img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" title="Pellentesque quis"><img src="images/page3_img5.png" alt=""></a>
              <p><strong class="font1">Pellentesque quis</strong>Lorem ipsudolor amet consectetur adipiscing elit enean facilisis...<br>
                <a href="#" class="link1">Read more</a></p>
            </div>
            <div class="cols pad_left1"> <a href="images/big_img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" title="Nullam augue"><img src="images/page3_img6.png" alt=""></a>
              <p><strong class="font1">Nullam augue</strong>Suspendisse eu adipiscing turpied rhoncus aliquam est...<br>
                <a href="#" class="link1">Read more</a></p>
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
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.<br>
            <a href="#">20 days ago</a></p>
          <p>Accusantium doloremque laudatium, totam rem aperiam, eaque ipsa.<br>
            <a href="#">36 days ago</a></p>
          <p>Nemo enim ipsam voluptatem quia voluptas.<br>
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
          <li><a href="#">Sedut perspiciatis</a></li>
          <li><a href="#">Unde omnis iste</a></li>
          <li><a href="#">Natus error sit </a></li>
          <li><a href="#">Volupttem accus</a></li>
          <li><a href="#">Ntium doloremque </a></li>
        </ul>
      </article>
      <article class="col pad_left2">
        <h5>Links</h5>
        <ul class="list1">
          <li><a href="#">Audantium, totam</a></li>
          <li><a href="#">Remaperiam, eaque</a></li>
          <li><a href="#">Ipsa quae abillo</a></li>
          <li><a href="#">Inventore veritatis et </a></li>
          <li><a href="#">Quasi architecto </a></li>
        </ul>
      </article>
      <article class="col pad_left2">
        <h5>Follow Us</h5>
        <ul class="icons">
          <li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
          <li><a href="#"><img src="images/icon2.jpg" alt="">Stumleupon</a></li>
          <li><a href="#"><img src="images/icon3.jpg" alt="">Twitter</a></li>
          <li><a href="#"><img src="images/icon4.jpg" alt="">Digg</a></li>
          <li><a href="#"><img src="images/icon5.jpg" alt="">RSS Feed</a></li>
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
$(document).ready(function () {
    if ($("a[rel^='prettyPhoto']").length) {
        $(document).ready(function () {
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'facebook'
            });
            $(".code a.code-icon").toggle(function () {
                $(this).addClass("minus").next("p").slideDown();
            }, function () {
                $(this).removeClass("minus").next("p").slideUp();
            })
        });
    }
});
</script>
<!-- END PAGE SOURCE -->
</body>
</html>