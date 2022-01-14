<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['send'])) {
    // getting all user entered data
    $name = $_POST['name'];
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    // $from = 'lisonhaldar001@gmail.com';
    // $header = "From : $from";

    require_once 'PHPMailer/PHPMailer.php';
    require_once 'PHPMailer/SMTP.php';
    require_once 'PHPMailer/Exception.php';

    $mail = new PHPMailer();

    // smtp settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lisonhaldar001@gmail.com';
    $mail->Password = '2021r@han44558';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';

    // email setting
    $mail->isHTML(true);
    $mail->setFrom('$to', '$name', 'CodexWorld');
    $mail->addReplyTo('$to', 'CodexWorld');
    $mail->addAddress('lisonhaldar001@gmail.com');
    $mail->Subject = $subject;
    $mail->Body = $body;

    // use leave empty field among one of them
    if (empty($name) || empty($to) || empty($subject) || empty($body)) { ?>
        <!-- display an alert message if one of them field is empty -->
        <div class="alert alert-danger text-center">
            <?php echo 'All input fields are required!'; ?>
        </div>
        <?php } else {// php function to send mail
        if ($mail->send()) { ?>
                <!-- display a success message if once mail send successfully -->
                    <?php echo '<script>alert("Your mail sent successfully.")</script>'; ?>
                <?php } else { ?>
                    <?php echo '<script>alert("Failed while sending your mail!")</script>'; ?>
                <?php }}
}

?>
