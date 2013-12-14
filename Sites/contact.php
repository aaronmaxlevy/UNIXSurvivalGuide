<?php 
    $page='Contact';
    include('assets/inc/header.php'); 
    include('assets/inc/nav.php');
?>
<div id="main">
    <div id="content">
		<div id="guestbookDiv">
		<?php include 'assets/inc/guestbook.php'; ?>
		</div>
		
		<div id="contactDiv">
        <h1>Contact the Team</h1>
        <?php 
            $action=$_REQUEST['action']; 
            if ($action=="")    /* display the contact form */ 
                { 
                ?> 
                    <form  action="#" method="POST" enctype="multipart/form-data"> 
                    <input type="hidden" name="action" value="submit"> 
                    Your name:<br> 
                    <input name="name" type="text" value="" size="30"/><br> 
                    Your email:<br> 
                    <input name="email" type="text" value="" size="30"/><br> 
                    Your message:<br> 
                    <textarea name="message" rows="7" cols="30"></textarea><br> 
                    <input type="submit" value="Send email"/> 
                    </form> 
                <?php 
                }  
            else                /* send the submitted data */ 
                { 
                    $name=$_REQUEST['name']; 
                    $email=$_REQUEST['email']; 
                    $message=$_REQUEST['message']; 
                if (($name=="")||($email=="")||($message=="")) 
                { 
                    echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
                } 
                else{         
                    $from="From: $name<$email>\r\nReturn-path: $email"; 
                    $subject="Message sent using your contact form"; 
                    mail("jdn1582@rit.edu", $subject, $message, $from); 
                    echo "Email sent!<br>"; 
                } 
            }   
        ?> 
		</div>

<?php 
    include ('assets/inc/footer.php'); 
?>

