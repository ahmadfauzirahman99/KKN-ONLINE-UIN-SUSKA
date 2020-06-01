<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <?= $this->tag->getTitle(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="LPPM UIN SUSKA" name="description"/>
    <meta content="LPPM UIN SUSKA" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= $this->url->get('img/logo.jpg') ?>">

    <?php
    echo $this->tag->stylesheetLink("assets/css/bootstrap.min.css");
    echo $this->tag->stylesheetLink("assets/css/icons.min.css");
    echo $this->tag->stylesheetLink("assets/css/app.min.css");

    ?>

</head>

<body class="authentication-bg">

<div class="home-btn d-none d-sm-block">
    <a href=""><i class="fas fa-home h2 text-dark"></i></a>
</div>

<div class="account-pages mt-5 mb-5">

    <?= $this->getContent() ?>
    <!-- end container -->
</div>
<!-- end page -->

<?php
echo $this->tag->javascriptInclude('assets/js/vendor.min.js');
echo $this->tag->javascriptInclude('assets/js/app.min.js');
?>


</body>
</html>