<?php if(isset($_POST['name'])) {
//echo "Thanks, {$_POST['name']}";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];
$honeypot = $_POST['phone'];
$direct = "thankyou.php";
//sendMessage($name,$email,$company,$msg,$direct);
if($honeypot==="") {
//echo "Email sent";
sendMessage($name,$email,$subject,$msg,$direct);
} else {
echo "This is contact form is not for robots.";
}
} else {
//echo "Don't be lazy, fill out the form";
}
?>
<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<section id="contact">
    <h2 class="hidden">Because a Donor Website - Contact Us</h2>
    <div class="row">
        <div class="col-xs-12 col-sm-offset-0 col-md-6 col-md-offset-3">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="col-xs-12 col-sm-offset-11 col-md-1">
                    <a href="javascript:history.go(-1)"><i class="fa fa-times fa-2x white" aria-hidden="true"></i></a>
                </div>
                <h3>Contact Us</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Smith" required="required" />
                        </div>
                        <div class="hidden">
                            <label for="name">Phone:</label>
                            <input type="phone" name="phone" placeholder="519..." />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="johnsmith@gmail.com" required="required" /></div>
                            <div class="form-group">
                                <!-- <label for="subject">I'm contacting regarding:</label> -->
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">I'm contacting regarding:</option>
                                    <option value="question">Question/Comment</option>
                                    <option value="story">Regarding my story (edit or remove your story)</option>
                                    <option value="donation">I'd like to make a donation to BecauseADonor</option>
                                    <option value="website">Found an issue with the website</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Message:</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-7">
                            <button type="submit" class="btnB3" id="btnContactUs">
                            Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>