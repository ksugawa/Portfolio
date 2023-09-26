<form action="<?php echo esc_url(home_url('/')); ?>thanks/" method="post" id="form">
    <div class="form-control">
        <label for="username"></label>
        <input type="text" id="username" size="40" placeholder="お名前" name="name" value="" autocomplete="name" required />
        <small>Error message</small>
    </div>
    <div class="form-control">
        <label for="email" class="form-control"></label>
        <input type="email" id="email" size="40" placeholder="メールアドレス" name="email" value="" autocomplete="email" required />
        <small>Error message</small>
    </div>
    <div class="form-control">
        <label for="message" class="form-control"></label>
        <textarea cols="40" rows="8" id="message" placeholder="お問い合わせ内容" name="message"></textarea>

    </div>
    <button type="submit" class="formbtn type1">
        <span class="btn-txt">送信する</span>
    </button>
</form>