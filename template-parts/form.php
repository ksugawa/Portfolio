<?php
//操作アクションを取得
$act = isset($_POST["act"]) ? intval($_POST["act"]) : 1;

if ($act == 1) {
    // セッションデータクリア
    $contact_data = array();
    // 初期値セット
    $err_msg = array();
    $name = '';
    $email = '';
    $message = '';
} elseif ($act == 2) { // 確認ボタンを押下された場合
    // POSTデータをセッションに格納
    $_SESSION["contact_data"] = isset($_POST["contact_data"]) ? $_POST["contact_data"] : array();
    // セッションデータを配列にセット
    $contact_data = $_SESSION["contact_data"];
    // 各項目データをセット
    $name = isset($contact_data["name"]) ? $contact_data["name"] : "";
    $email = isset($contact_data["email"]) ? $contact_data["email"] : "";
    $message = isset($contact_data["message"]) ? $contact_data["message"] : "";
    // 入力チェック
    $err_msg = checkInputData($contact_data);
    if (!$err_msg) {
        header("Location: https://ksugawa.wp.xdomain.jp/thanks/");
        exit();
    }
} else {
    // セッションデータ取得
    $contact_data = isset($_SESSION["contact_data"]) ? $_SESSION["contact_data"] : array();
    // 各項目データをセット
    $name = isset($contact_data["name"]) ? $contact_data["name"] : "";
    $email = isset($contact_data["email"]) ? $contact_data["email"] : "";
    $message = isset($contact_data["message"]) ? $contact_data["message"] : "";
}
?>

<?php if (count($err_msg) > 0) { ?>
    <div>
        <ul class="error">
            <?php foreach ($err_msg as $msg) { ?>
                <li><?php echo $msg; ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>

<form action="" method="post">
    <label>
        <input type="text" size="40" placeholder="お名前" name="contact_data[name]" value="<?php echo ($name); ?>">
    </label>
    <label>
        <input type="email" size="40" placeholder="メールアドレス" name="contact_data[email]" value="<?php echo ($email); ?>">
    </label>
    <label>
        <textarea cols="40" rows="10" placeholder="お問い合わせ内容" name="contact_data[message]"><?php echo ($message); ?></textarea>
    </label>
    <input type="submit" name="btnSubmit" value="送信する">
    <input type="hidden" name="act" value="2">
</form>