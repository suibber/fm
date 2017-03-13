<div class="container">
    <section>
        <div class="article">
            <div class="title">
                <?=$model->type_label?> 
                <?=$model->title?>
            </div>
            <div class="content"><?=$model->content?></div>
        </div>
    </section>
</div>

<style>
.article {
 background-color: #fff;
 font-size: .34rem;
 padding: .3rem;
}
.title {
  font-size: .48rem;
}
.content {
  margin-top: .5rem;
  line-height: 2;
}
</style>
