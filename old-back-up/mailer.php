<?php
/* Set e-mail recipient */
$myemail = "questions@nextlevelwebstudio.co.uk";
$subject = "New message from web studio site";

/* Check all form inputs using check_input function */
$name = check_input($_POST['full-name'], "Enter your full name.");
$email = check_input($_POST['email'], "Enter your email address.");
$custmessage = check_input($_POST['message'], "Enter your message.");

/* If e-mail is not valid show error message */
/*if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))*/
/*{*/
/*show_error("E-mail address not valid");*/
/*}*/

/* Let's prepare the message for the e-mail */
$message = "
Customer Information
=================
Full Name: $name
Email address: $email
Message:
$custmessage
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: http://www.nextlevelwebstudio.co.uk/index.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Next Level Web Studio</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
    </head>
    <body>
        
    <!--  NAV -->
    <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Next Level Web Studio</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav  pull-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="package.html">Packages</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--  NAV END  -->
        
    <!--  JUMBO  -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="logo-replacement">Next Level Tech Studio</h1>
        </div>
    </div>
    <!--  JUMBO END  -->
    
        <!--  CONTENT START     -->
    <div class="container">
        <div class="page-header"><!-- PAGE HEADER -->
            <div class="row">
                <div class="col-md-12">
                    <h2>An error was encountered with the web site.</h2>
                    <p class="lead">The site has encountered a technical issue, try to submit another message. If you continue to get this error then telephone or email Next Level Tech Help and say that you encountered an error mail1.</p>
                    <p>Thank you for your time and help with this and we appologise for any inconvenience.</p>
                    <a href="https://www.facebook.com/nextlevelwebstudio" class="btn btn-primary" target="_blank">Our Facebook Page</a>
                </div>
            </div>
        </div><!-- PAGE HEADER END -->

    </div>
    <!--  CONTENT END       -->    

    <!--  FOOTER  -->
        <div class="well well-foot">
            <p>© 2014 by Next Level Web Studio. Professionally insured through <a href="https://www.policybee.co.uk/">PolicyBee</a>.</p>
            <p>Listed with: Directory of Cardiff Web Designers on <a href="http://www.cardiff.co.uk/web-designers/">Cardiff.co.uk</a></p>
        </div>
    <!--  FOOTER END  -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>

<?php
exit();  
}
?>