<?php
    if (!empty($_GET['logout'])) {
        foreach ($_COOKIE['cart'] as $product => $quantity) {
            setcookie("cart[$product]", null, -1);
        }
        unset($_SESSION['loginname']);
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Cookie Factory</title>
    <link rel="icon" href="../img/favicon.ico" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous"
    >
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" 
                            class="navbar-toggle collapsed" 
                            data-toggle="collapse" 
                            data-target="#bs-example-navbar-collapse-1" 
                            aria-expanded="false"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/" >
                        <img class="pull-left" src="img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                        <h1>The Cookies Factory</h1>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Chocolates chips</a></li>
                        <li><a href="#">Nuts</a></li>
                        <li><a href="#">Gluten full</a></li>
                        <li>
                            <a href="/cart.php" class="btn btn-warning navbar-btn">
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                Cart
                                <?php
                                if (isset($_COOKIE['cart']) && sizeof($_COOKIE['cart']) != 0) {
                                    $total = 0;
                                    foreach ($_COOKIE['cart'] as $product => $quantity) {
                                        $total += $quantity;
                                    }
                                    echo '(' . $total .')';
                                }
                                ?>
                            </a>
                        </li>
                        <?php if (isset($_SESSION['loginname'])) : ?>
                        <li>
                            <a href="?logout=1" class="btn btn-danger navbar-btn">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                Logout
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid text-right">
            <?php if (isset($_SESSION['loginname'])) : ?>
                <strong><?= 'Hello ' . $_SESSION['loginname'] . '!'; ?></strong>
            <?php else : ?>
                <strong><?= 'Hello Wilder !'; ?></strong>
            <?php endif; ?>
        </div>
    </header>
