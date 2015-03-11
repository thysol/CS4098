<html>
<head>
        <link href="http://necolas.github.io/normalize.css/3.0.2/normalize.css" rel="stylesheet" type="text/css"/>

        <link href="css/stylesheets/popup.css" rel="stylesheet" type="text/css" />
        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-sanitize.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.js"></script>
        <script src="js/main.js"></script>
        <script src="js/emrinjection.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/patientPathway.js"></script>

<?php
        require_once('openemr/interface/globals.php');
        require_once("$srcdir/formdata.inc.php");
?>

<script language='JavaScript'>
<?php require($GLOBALS['srcdir'] . "/restoreSession.php"); ?>
</script>
</head>
<body>
        <div ng-app="popupApp"> <!-- ng-controller="injection_controller">-->

        <div popup-dialog="test"></div>
        </div>
        <iframe src="openemr/interface/main/main_screen.php" width="100%" height="100%" frameborder="0" name="injectedframe"></iframe>

</body>

</html>