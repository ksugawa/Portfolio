<?php get_header(); ?>

<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$name = $_POST['name'];
$email = $_POST['email'];
$to =  "sugawakumiko.biz@gmail.com";
$inquiry = $_POST['message'];

// メール本文
$message = "お問い合わせがありました。\n";
$message .= "\n";
$message .= "以下お問い合わせ内容です。\n";
$message .= "-----------------------------------------------------\n";
$message .= "お名前：$name\n";
$message .= "メールアドレス: $email\n";
$message .= "お問い合わせ内容:\n";
$message .= "$inquiry\n";
$message .= "-----------------------------------------------------\n";


// メール本文　ユーザー
$message_user = "※このメールは自動的に返信されたメールです。\n";
$message_user .= "\n";
$message_user .= "この度はお問い合せ頂き誠にありがとうございました。\n";
$message_user .= "改めてご連絡をさせていただきます。\n";
$message_user .= "\n";
$message_user .= "以下お問い合わせ内容です。\n";
$message_user .= "-----------------------------------------------------\n";
$message_user .= "お名前：$name\n";
$message_user .= "メールアドレス: $email\n";
$message_user .= "お問い合わせ内容:\n";
$message_user .= "$inquiry\n";
$message_user .= "-----------------------------------------------------\n";

$headers = array('From' => 'sugawakumiko.biz@gmail.com');

mb_send_mail($to, '件名', $message_user, $headers);

?>

<?php if (mb_send_mail($email, '件名', $message, $headers)) : ?>

    <div class="thanks-container">
        <div class="thanks-container_inner">
            <div class="contents">
                <div class="thanks-heading">
                    <h1>お問い合わせ</h1>
                </div>
                <div class="thanks-heading_line"></div>
                <div class="thanks-description">
                    <p>送信が完了しました。</p>
                    <p>ご連絡させていただきます。</p>
                </div>
                <div>
                    <a href="<?php echo home_url(); ?>">
                        <div id="return-btn">
                            <b class="bpo btn">戻る</b>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>