<div class="container">
    <img src="../images/head_01.jpg" alt="图片">
    <section class="list">
        <?php foreach ($farmlands as $farmland) { ?>
            <!--div onclick="window.location.href='/farm-land/view?id=<?=$farmland['id']?>'"-->
            <div>
                <p>
                    农场：<?=$farmland['title']?>
                </p>
                <p>
                    位置：<?=$farmland['location'].$farmland['land_parent'].$farmland['land_name']?>
                </p>
                <p>
                    主人：<a href="#"><?=$farmland['owner_name']?$farmland['owner_name']:'地主'?></a>
                </p>
            </div>
        <?php } ?>
    </section>
</div>
