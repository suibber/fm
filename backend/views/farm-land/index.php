<div class="container">
    <img src="../images/head_01.jpg" alt="图片">
    <section class="list">
        <?php foreach ($farmlands as $farmland) { ?>
            <div onclick="window.location.href='/farm-land/view?id=<?=$farmland['id']?>'">
                <p>
                    农场：<?=$farmland['title']?>
                    <?php if ($farmland['status']==1) { ?>
                        <button disabled="true">已售出</button> 
                    <?php } else { ?>
                        <button>可购买</button>
                    <?php } ?>
                </p>
                <p>位置：<?=$farmland['location'].$farmland['land_parent'].$farmland['land_name']?></p>
                <?php if ($farmland['status']==1) { ?>
                    <p>主人：<a href="#"><?=$farmland['owner_name']?></a></p>
                <?php } else { ?>
                    <p>价钱：<?=$farmland['price']?>元 / 20平米</p>
                <?php } ?>
            </div>
        <?php } ?>
    </section>
</div>
