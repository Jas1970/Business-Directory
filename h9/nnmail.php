    <?php
	$useraddr = $_POST["username"];
    $recipient = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $sent = $_POST["sent"];
    if ($sent == "") 
		{
		    // The Form Wasn't Send
		    echo "";
    	} 
		elseif ($useraddr == "") 
		{
    		// No Null Sender Address Allowed
		    echo "No Null Sender Address Allowed";
    	} 
		elseif ($recipient == "") 
		{
    		// Can't Send To Empty Recipient
    		echo "Cannot Send To Empty Recipient";
    	} 
		elseif ($message == "") 
		{
		    // Can't Send Empty Message Buffer
		    echo "No Buffer To Send";
    	} 
		elseif ($subject == "") 
		{
		    // No Subject
		    echo "Cannot Send Without Subject";
    	} 
		else 
		{
    		// All Is Ok, Send It And Notice User
		    mail($recipient, $subject, $message);
    		echo "Thank you for using BWM v1.0<BR>";
		    echo "Your email has been sent";
	    }
    ?>
