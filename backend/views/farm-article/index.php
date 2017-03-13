<div class="container">
    <img src="../images/head_01.jpg" alt="图片">
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
