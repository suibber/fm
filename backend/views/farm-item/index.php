<div class="container">
    <section class="list">
        <?php foreach ($farmitems as $item) { ?>
            <div onclick="window.location.href='/farm-item/view?id=<?=$item['id']?>'">
                <img src="<?=$item['icon']?>" />
                <p style="color:#394043;font-size:16px;">
                    <?=$item['title']?>
                </p>
                <p style="height:35px;line-height:30px;">
                    <span style="color: #fa5741;font-weight: 600;"><?=$item['sale_price']?> / 20m²</span>
                    <span style="color: #9c9fa1;">原价<?=$item['real_price']?></span>
                    <span style="color: #9c9fa1;"> (已售<?=$item['sold_num']?>/<?=$item['store_num']?>) </span>
                    <?php if ($item['store_num']==$item['sold_num']) { ?>
                        <button disabled="true" style="margin:0">已售光</button> 
                    <?php } else { ?>
                        <button style="margin:0">可购买</button>
                    <?php } ?>
                </p>
            </div>
        <?php } ?>
    </section>
</div>
