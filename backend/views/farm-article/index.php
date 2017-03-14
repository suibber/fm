<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.banner.revolution.min.js"></script>
<script type="text/javascript" src="js/banner.js"></script>
<div id="wrapper">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="3dcurtain-horizontal" data-slotamount="15" data-masterspeed="100">
                    <img src="images/slides/slide3.jpg" alt="" />
                </li>
                <li data-transition="papercut" data-slotamount="15" data-masterspeed="100" data-link="#">
                    <img src="images/slides/slide2.jpg" alt="" />
                </li>
                <li data-transition="turnoff" data-slotamount="15" data-masterspeed="100">
                    <img src="images/slides/slide1.jpg" alt="" />
                </li>
            </ul>
        </div>
    </div>
</div>

<div style="text-align:center;clear:both;">
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
