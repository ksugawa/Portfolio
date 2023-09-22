

<form action="<?php echo esc_url(home_url('/')); ?>thanks/" method="post">
    <label>
        <input type="text" size="40" placeholder="お名前" name="name" value="" required />
    </label>
    <label>
        <input type="email" size="40" placeholder="メールアドレス" name="email" value="" required />
    </label>
    <label>
        <textarea cols="40" rows="8" placeholder="お問い合わせ内容" name="message"></textarea>
    </label>
    <button type="submit" class="formbtn type1">
        <span class="btn-txt">送信する</span>
    </button>
</form>