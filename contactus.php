<?php

$errors = '';
$name = '';
$email = '';
$message = '';
$subject = '';

if (isset($_POST['submit'])) {
    $subject = $_POST['SUBJECT'];
    $name = $_POST["NAME"];
    $message = $_POST["MESSAGE"];
    $email = $_POST["EMAIL"];

    if (empty($errors)) {
        //send the email
        sendEmails();

        echo '<script type="text/javascript">';
        echo 'alert("Thank you for your feedback")';
        echo '</script>';
    }
}

function sendEmails()
{
    $subject = '[CLAMP]'.$_POST['SUBJECT'];

    $to = 'jingqi.wang@uth.tmc.edu,Ergin.Soysal@uth.tmc.edu,Min.Jiang@uth.tmc.edu,Anupama.E.Gururaj@uth.tmc.edu';

    $message = 'CLAMP Feedback
	----------------------------------------
	NAME: ' . $_POST["NAME"] . '
	EMAIL: ' . $_POST["EMAIL"]. '
	MESSAGE: ' . $_POST["MESSAGE"];

    $headers = 'From: '. $_POST["EMAIL"] . "\r\n" .
        'Reply-To: '.$_POST["EMAIL"] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

?>

<?php include dirname(__FILE__) . '/templates/header.php'; ?>
    <div class="container" style="margin-top: 50px;margin-bottom: 150px">

        <div class="section-header">
            <!-- SECTION TITLE -->
            <h2 class="white-text">Contact Us</h2>
        </div>

        <div class="about_box" style="background-color:white">

            <div id='contact_form_errorloc' class='err'></div>
            <form method="POST" name="contact_form"
                  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="about_style"
                  data-toggle="validator">
                <div class="about_style">
                    <label for="name">Name <label style="color: red">*</label></label>
                    <input type="text" name="NAME" class="form-control" id="pwd"
                           value="<?php echo $name; ?>" required style="margin-bottom: 20px">


                    <label for="email">E-mail address <label style="color: red">*</label></label>
                    <input type="email" name="EMAIL" class="form-control" id="email"
                           value="<?php echo $email; ?>" required style="margin-bottom: 20px">

                    <div class="form-group">
                        <label for="">Subject <label style="color: red">*</label></label>
                        <input type="text" name="SUBJECT" class="form-control" id="subject"
                               value="<?php echo $subject; ?>" required style="margin-bottom: 20px">
                    </div>

                    <div class="form-group">
                        <label for="">Message <label style="color: red">*</label></label>
                        <textarea type="text" name="MESSAGE" class="form-control" id="message" rows="4"
                                  required><?php echo htmlspecialchars($message) ?></textarea>
                    </div>


                    <input type="submit" value="Submit" name='submit' class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

<?php include dirname(__FILE__) . '/templates/footer.php'; ?>