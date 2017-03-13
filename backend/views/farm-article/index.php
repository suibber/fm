<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.banner.revolution.min.js"></script>
<script type="text/javascript" src="js/banner.js"></script>
<div id="wrapper">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="3dcurtain-horizontal" data-slotamount="15" data-masterspeed="300">
                    <img src="images/slides/slide3.jpg" alt="" />
                </li>
                <li data-transition="3dcurtain-vertical" data-slotamount="15" data-masterspeed="300" data-link="#">
                    <img src="images/slides/slide5.jpg" alt="" />
                </li>
                <li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-link="#">
                    <img src="images/slides/slide2.jpg" alt="" />
                </li>
                <li data-transition="turnoff" data-slotamount="15" data-masterspeed="300">
                    <img src="images/slides/slide1.jpg" alt="" />
                </li>
                <li data-transition="flyin" data-slotamount="15" data-masterspeed="300">
                    <img src="images/slides/slide6.jpg" alt="" /> 
                </li>
            </ul>
        </div>
    </div>
</div>

<div style="text-align:center;clear:both;">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>

<div class="container">
    <section>
        <?php foreach ($articles as $article) {?>
            <div class="list-div">
                <a href='/farm-article/view?id=<?=$article['id']?>'>
                    [<?=$article['type_label']?>] 
                    <?=$article['title']?>
                </a>
            </div>
        <?php } ?>
    </section>
</div>
