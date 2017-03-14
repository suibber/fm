<div class="container">
    <form method="get" action="/message/create">
    <div class="form-div">
        <h2>
            请填写以下信息，我们将尽快与您联系~
        </h2>
        <input type="hidden" value="<?=$land_id?>" name="land_id">
        <p>
            <label>称呼</label>
            <input type="text" name="username"/>
        </p>
        <p>
            <label>电话</label>
            <input type="text" name="tel"/>
        </p>
        <p>
            <label>意向</label>
            <select name="attention">
                <option>求租农场</option>
                <option>购买绿色蔬菜</option>
                <option>农家乐</option>
                <option>其它咨询</option>
            </select>
        </p>
        <p>
            <label>补充</label>
            <textarea rows="4" style="height:100px;" name="textarea"></textarea>
        </p>
        <div style="height:60px;">
            <button class="buy">提交</button>
        </div>
    </div>
    </form>
</div>
