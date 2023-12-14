<?php
    if (!preg_match( "/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $_GET["phone"])){
        print( "<p class = 'error'>Invalid phone number</p>
            <p>A valid phone number must be in the form 
            (555) 555-5555</p><p>Click the Back button, 
            enter a valid phone number and resubmit.</p>
            <p>Thank You.</p></body></html>" );
        die(); // terminate script execution
    }
?>
