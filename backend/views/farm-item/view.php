<div class="container">
    <section class="list">
            <div>
                <img src="<?=$model->icon?>" />
                <p style="color:#394043;font-size:16px;">
                    <?=$model->title?>
                </p>
                <p style="height:35px;line-height:30px;">
                    <span style="color: #fa5741;font-weight: 600;"><?=$model->sale_price?> / 20m²</span>
                    <span style="color: #9c9fa1;">原价<?=$model->real_price?></span>
                    <span style="color: #9c9fa1;"> (已售<?=$model->sold_num?>/<?=$model->store_num?>) </span>
                    <?php if ($model->store_num==$model->sold_num) { ?>
                        <button disabled="true" style="margin:0">已售光</button> 
                    <?php } else { ?>
                        <button style="margin:0" onclick="window.location.href='/message/index?id=<?=$model->id?>'">购买</button>
                    <?php } ?>
                </p>
                <p><?=$model->content?></p>
            </div>
    </section>
</div>
