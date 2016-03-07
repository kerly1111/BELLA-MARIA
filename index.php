<?php include 'cabecera.php' ?>
<?php include 'panelNoticias.php' ?>
<?php 
if(isset($_SESSION["logeo"])){
unset($_SESSION["logeo"]);
}
?>

    <link rel="stylesheet" href="css/jquery.bxslider.css"> 
    <link rel="stylesheet" href="css/font-awesome.css"> 
    <link rel="stylesheet" href="css/animate.min.css">  
    <script src="js/jquery.bxslider.min.js"></script>


<ul class="bxslider">
    <li>
        <img src="http://placehold.it/800x250/5E7074/FFFFFF&text=Slide-One" />
    </li>
    <li>
        <img src="http://placehold.it/800x250/5E7074/FFFFFF&text=Slide-Two" />
    </li>
    <li>
        <img src="http://placehold.it/800x250/5E7074/FFFFFF&text=Slide-Three" />
    </li>
    <li>
        <img src="http://placehold.it/800x250/5E7074/FFFFFF&text=Slide-Four" />
    </li>
</ul>
<a href="#" class="pager-prev"><i class="icon-chevron-left"></i></a>

<a href="#" class="pager-next"><i class="icon-chevron-right"></i></a>

<div id="bx-pager">
    <ul>
        <li> <a data-slide-index="0" href="">Slide One</a>
        </li>
        <li> <a data-slide-index="1" href="">Slide Two</a>
        </li>
        <li> <a data-slide-index="2" href="">Slide Three</a>
        </li>
        <li> <a data-slide-index="3" href="">Slide Four</a>
        </li>
    </ul>
</div>

<script type="text/javascript">
	var slider = $('.bxslider').bxSlider({
    pagerCustom: '#bx-pager'
});

$('a.pager-prev').click(function () {
    var current = slider.getCurrentSlide();
    slider.goToPrevSlide(current) - 1;
});
$('a.pager-next').click(function () {
    var current = slider.getCurrentSlide();
    slider.goToNextSlide(current) + 1;
});
</script>


<script type="text/javascript">
    $(function(){
    $('#bxslides1').bxSlider({
        prev_image: 'dreamcodes/carousel_hor/images/btn_arrow_left.jpg',
        next_image: 'dreamcodes/carousel_hor/images/btn_arrow_right.jpg',
        wrapper_class: 'bxslides1_wrap',
        margin: 70,
        auto: true,
        auto_controls: true
    });
});
</script>
  <div id="bxcontent">
    <div id="bxcontent_inner">
      <ul id="bxslides1">
        <li> <img src="http://pimg.co/p/209x140" width="209" height="140" />
          <div class="bxcontent">
            <h3>Integrity</h3>
            <h4>Inspired by vision</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dictum, justo in feugiat vulputate, ante ante commodo libero, ut dignissim urna est sit amet est. In lacinia ultricies lectus quis tempus.</p>
          </div>
          <div class="clear"></div>
        </li>
        <li> <img src="http://pimg.co/p/209x140" width="209" height="140" />
          <div class="bxcontent">
            <h3>Relentless</h3>
            <h4>Pursuit of perfection</h4>
            <p>Cras facilisis euismod sapien, vitae ornare nunc vulputate ut. In ac nulla quis metus egestas imperdiet ac non lacus. Duis tincidunt, orci a dapibus lobortis, risus magna auctor velit.</p>
          </div>
          <div class="clear"></div>
        </li>
        <li> <img src="http://pimg.co/p/209x140" width="209" height="140" />
          <div class="bxcontent">
            <h3>Visionary</h3>
            <h4>Next generation</h4>
            <p>Integer semper ultrices arcu, et porta dui condimentum vitae. Phasellus et urna ut lectus varius molestie at nec augue. Praesent at imperdiet quam. Ut posuere metus et orci auctor consectetur.</p>
          </div>
          <div class="clear"></div>
        </li>
        <li> <img src="http://pimg.co/p/209x140" width="209" height="140" />
          <div class="bxcontent">
            <h3>Devotion</h3>
            <h4>Unparalleled</h4>
            <p>In facilisis urna quis ante sollicitudin ut consequat lectus dignissim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
          <div class="clear"></div>
        </li>
      </ul>
    </div>
  </div>
<div class="tsc_clear"></div> <!-- line break/clear line -->