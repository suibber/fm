<div class="container">
    <div class="detail">
        <p><?=$model->title?></p>
        <p>位置：<?=$model->location.$model->land_parent.$model->land_name?></p>
        <p>价钱：<?=$model->price?>元 / 20平米</p>
        <p><?=$model->intra?></p>
    </div>
    <div style="clear: both;">
        <a class="buy" href="/message">购买</a>
    </div>
</div>
