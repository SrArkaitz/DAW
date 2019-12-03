<?php
// Analize session
require_once('utils/SessionUtils.php');
// Redirects to login page in public views or private views

if (isset($_POST['user'])) {
    SessionUtils::startSessionIfNotStarted();
    SessionUtils::setSession($_POST['user']);
}

if(SessionUtils::loggedIn())
{
    // User has already been logged
    header("Location: app/private/views/index.php");
}
else
{
    // Not logged yet, anonimous access
    header("Location: app/public/views/index.php");
}
?>
