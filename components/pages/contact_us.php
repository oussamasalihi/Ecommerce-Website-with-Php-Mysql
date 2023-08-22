<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ecom/";


// Include config file
// $server = 'http://' . $_SERVER['SERVER_NAME'] . '/ecom/';
require_once('../../connect.php');
 
// Define variables and initialize with empty values
$name = $email = $subject = $message = "";
$errors = array('name_err' => '', 'email_err'=>'' , 'subject_err'=>'', 'message_err'=>'' );
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate name
    if(empty(trim($_POST["name"]))){
        $errors['name_err'] = "Please enter Your Full Name.";  
    } else{
        $name = trim($_POST["name"]);
    }

    // Validate Email
    if(empty(trim($_POST["email"]))){
        $errors['email_err'] = "Please enter Your Email.";     
    } else{
        $email = trim($_POST["email"]);
    }
    // Validate Subject
    if(empty(trim($_POST["subject"]))){
        $errors['subject_err'] = "Please enter a subject.";     
    } else{
        $subject = trim($_POST["subject"]);
    }
    // Validate Message
    if(empty(trim($_POST["message"]))){
        $errors['message_err'] = "Please enter your message.";     
    } else{
        $message = trim($_POST["message"]);
    }
    // Check input errors before inserting in database
    if (!array_filter($errors)) {
        // Prepare an insert statement
        $name = mysqli_real_escape_string($connection,$_POST['name']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $subject = mysqli_real_escape_string($connection,$_POST['subject']);
        $message = mysqli_real_escape_string($connection,$_POST['message']);


        $sql = "INSERT INTO contact_us(name, email,subject,message) VALUES('$name','$email','$subject','$message')";
        $res = mysqli_query($connection,$sql);
        if ($res) {
			//success
			header("location: ../../index.php");
		}else{
            $fmsg = "Failed to Send Data.";
            // print_r($res->error_list);
        }
        // Close connection
        mysqli_close($connection);
    }
}
?>


<?php require($path. 'templates/header.php')?>

<!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <h3>Contact us</h3>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- why section -->
    <section class="why_section layout_padding">
        <div class="container">
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?> 
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="full">
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                        <fieldset>
                            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <input type="text" placeholder="Enter your full name" name="name" value="<?php $name; ?>" />
                                <span class="help-block"><?php echo $errors['name_err']; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                <input type="email" placeholder="Enter your email address" name="email" value="<?php $email; ?>" />
                                <span class="help-block"><?php echo $errors['email_err']; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($subject_err)) ? 'has-error' : ''; ?>">
                                <input type="text" placeholder="Enter subject" name="subject" value="<?php $subject; ?>" />
                                <span class="help-block"><?php echo $errors['subject_err']; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>">
                                <textarea placeholder="Enter your message" name="message" value="<?php $message; ?>"></textarea>
                                <span class="help-block"><?php echo $errors['message_err']; ?></span>
                                <input type="submit" value="Submit" name="submit"  />
                            </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end why section -->

<?php require_once($path . "templates/footer2.php"); ?>
