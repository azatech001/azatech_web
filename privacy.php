<?php echo
	include 'header.php';
?>
  <section id="content">
    <div class="wrapper">
      <article class="col1">
        <h2>Privacy Policy</h2>
        <div class="pad">
          <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing</strong> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conseculpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
          <p><strong>Nemo enim ipsam voluptatem</strong> quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. </p>
          <p><strong>Quis autem vel eum iure reprehenderit qui</strong> in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
          <p><strong>Nam libero tempore</strong>, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
          <strong>Lorem ipsum dolor sit amet, consectetur adipisicing</strong> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
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
</body>
</html>