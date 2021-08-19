<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WeCare</title>
    <!-- bootstraps -->
    <?php include 'bootstrap.php' ?>
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- icon -->
    <?php include 'icon.php' ?>
    <!-- google font -->
    <?php include 'font/font.php' ?>
    <!-- favicon.io -->
    <?php include 'favicon.php' ?>

</head>

<body>
    <!-- nav bar inside menu.php -->
    <?php include 'navbar.php' ?>

    <!-- section intro -->
    <section class="my-5" id="main">
        <!-- grid main content -->
        <div class="container-fluid">
            <div class="row">
                <!-- left col -->
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="img/covid.jpg" alt="Doc" height="auto" width="100%" />
                </div>
                <!-- right col -->
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="text-center h1 pt-4">WeCare Foundation</div>
                    <p class="py-3 lead text-center" style="font-size: 25px;">
                        We are a non-profit organization fighting poverty, disease, inequity around the world.<br>
                    <div class="jumbotron bg-dark text-light lead">
                        <h2>Covid-19:</h2> This fund is aimed at strengthening the fight against <b>COVID-19</b>. We urge people from all walks of life to contribute to this WeCare <b>COVID-19</b> fund. Together let's solve challenges of the present and protect the future. We believe, there is no such thing as a national solution to a global crisis. All countries must work together to end the pandemic and begin rebuilding economies.
                        <hr>
                        <div>
                        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Hml2oyI9wNLeOL" async> </script> </form>
                        </div>
                        <!-- <div class="text-center"><a href="https://rzp.io/l/Spr1XfKxn" class="btn btn-light">Donate</a></div> -->
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section><hr>

    <!-- our work section -->
    <?php include 'ourwork.php' ?><hr>

    <!-- about section -->
    <?php include 'about.php' ?><hr>

    <!-- join us section -->
    <?php include 'join.php' ?><hr>

    <!-- contact us section -->
    <?php include 'contact.php' ?>
</body>

</html>