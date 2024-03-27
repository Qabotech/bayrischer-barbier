<?php
include("./inc/head.php");
$img = array(
    //first image
    'https://lh5.googleusercontent.com/p/AF1QipMjn8bQH7BL52FF6me7vekJhexHxRJNVVZ4gSj8=s387-k-no',
    //second image hor
    'https://lh5.googleusercontent.com/p/AF1QipMGPFpZRF37oC91viCqe-I0yUO8kRLQovFNwxES=s508-k-no',
    //third image hor
    'https://lh5.googleusercontent.com/p/AF1QipN-jyCObA5nM7Bed8nOck8_7mLsZF3tFkYuzCfc=s338-k-no',
    //forth image
    'https://lh5.googleusercontent.com/p/AF1QipN-iAJCdtwlHfAyOfAAaHM2VtwmPKF4fCvJeW-H=w203-h377-k-no',
    //fifth image hor
    'https://lh5.googleusercontent.com/p/AF1QipPOuA7Ji0Dk8BfbJU0jtr7GSFOZZL7QHlvNKa3n=s406-k-no',
    //sixth image 
    'https://lh3.ggpht.com/p/AF1QipPrIrmwAvV8ky2YNqMapngspS5vsWrgnLlTXNyy=s1536',
    //seventh image
    'https://lh5.googleusercontent.com/p/AF1QipNglttS1NOurv2kzGPSdZ1_KR3qTowX3T6J1sIL=w203-h394-k-no',
    //eighth image hor
    'https://lh5.googleusercontent.com/p/AF1QipPPrb9RlG0B3UWzYVwSnaLLfuo0haU0CBAgR8A7=s406-k-no'
);
$img2 = array(
    //first image
    'https://lh5.googleusercontent.com/p/AF1QipMNjjNzkwlvLdiFMpXglmv92GZwESSND9Wf6fXw=w203-h360-k-no',
    //second image hor
    'https://lh5.googleusercontent.com/p/AF1QipNQ6qK0cGWaM5b03tQZpyNST3batM6uIZEmkEjo=s387-k-no',
    //third image hor
    'https://lh5.googleusercontent.com/p/AF1QipNkIvJlCzV_0tQWIeub-6U2XA1MjSQ4EaNpRcWt=s451-k-no',
    //forth image
    'https://lh5.googleusercontent.com/p/AF1QipOGl6F-lJZwPTA98WhianK3PN5ZQRpRdT_q46bm=s677-k-no',
    //fifth image hor
    'https://lh5.googleusercontent.com/p/AF1QipP95EXKGO9qThmOKtZXeIeMC7vYmpz1OneGavuu=s508-k-no',
    //sixth image 
    'https://lh5.googleusercontent.com/p/AF1QipPoYvXPDHWc7zpr0dacHTfWbVtOZendCuWbflNv=w203-h270-k-no',
    //seventh image
    'https://lh5.googleusercontent.com/p/AF1QipN-iAJCdtwlHfAyOfAAaHM2VtwmPKF4fCvJeW-H=w203-h377-k-no',
    //eighth image hor
    'https://lh5.googleusercontent.com/p/AF1QipN-jyCObA5nM7Bed8nOck8_7mLsZF3tFkYuzCfc=s338-k-no'
);

?>
<style>
.main-content::-webkit-scrollbar {
    display: none;
}
</style>
<div class="main-content">
    <section id="welcome" class="D-F">
        <div class="logo-w D-F" style="display: none;">
            <img src="./media/logo.png" alt="Bayrischer+Barbier+logo" id="logo">
        </div>
        <div class="text D-F-C">
            <h1>
                brauchen Sie <br> <b id="changing"></b> ?
            </h1>
            <h3>
                Bei uns Bayrischer Barbier bekommen sie den Besten Service, mit auch ohne Termin für ideale Preise.
            </h3>
            <a href="https://maps.app.goo.gl/HFrCwxAnKinAJvPa9">
                <h4><i class="fa-solid fa-location-dot"></i> Maingasse 1, 97084 Würzburg</h4>
            </a>
        </div>
        <div class="img D-F">
            <img src="https://i.ibb.co/MgX1C2F/background.png" alt="background-welcome">
            <img src="https://i.ibb.co/pK4dmKw/foreground.png" alt="foreground-welcome">
        </div>
        <div class="circle-arrow D-G">
            <i class="fa-solid fa-arrow-down"></i>
        </div>
    </section>
    <section id="our-services">
        <div class="overlay">
            <div class="text D-F-C">
                <h2 style="text-align: center;">unsere <br> Dienstleistungen</h2>
                <div class="wrapper D-F">
                    <div class="slider D-F">
                        <div class="sliding-card first-card">
                            <div class="slide D-F-C">
                                <?php include('./media/skincare.php') ?>
                                <h4 class="word">skincare</h4>
                                <h6>Naturlisch schnell und sauber</h6>
                                <h6 style="cursor: pointer;" onclick="window.location.href = '#appointment'">Termin
                                    machen</h6>
                            </div>
                        </div>
                        <div class="sliding-card before-current">
                            <div class="slide D-F-C">
                                <?php include('./media/styling.php') ?>
                                <h4 class="word">style</h4>
                                <h6>Modern , Schön , Preiswert und Schnell</h6>
                                <h6 style="cursor: pointer;" onclick="window.location.href = '#appointment'">Termin
                                    machen</h6>
                            </div>
                        </div>
                        <div class="sliding-card current">
                            <div class="slide D-F-C">
                                <?php include('./media/shave.php') ?>
                                <h4 class="word">Rasur</h4>
                                <h6>Profizionale Rasur die dich wieder erfrischt </h6>
                                <h6 style="cursor: pointer;" onclick="window.location.href = '#appointment'">Termin
                                    machen</h6>
                            </div>
                        </div>

                        <div class="sliding-card after-current">
                            <div class="slide D-F-C ">
                                <?php include('./media/haircut.php') ?>
                                <h4 class="word">Frisur</h4>
                                <h6>Mit oder ohne Termin bekommen sie einen preiswertigen Frisur</h6>
                                <h6 style="cursor: pointer;" onclick="window.location.href = '#appointment'">Termin
                                    machen</h6>
                            </div>

                        </div>
                        <div class="sliding-card last-card">
                            <div class="slide D-F-C">
                                <?php include('./media/trim.php') ?>
                                <h4 class="word">trimmen</h4>
                                <h6></h6>
                                <h6 style="cursor: pointer;" onclick="window.location.href = '#appointment'">Termin
                                    machen</h6>
                            </div>
                        </div>




                        <i class="fa-solid fa-chevron-left"></i>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="circle-arrow D-G">
            <i class="fa-solid fa-arrow-down"></i>
        </div>
    </section>
    <section id="gallery" class="D-F-C">
        <h2>Galerie</h2>

        <div class="row D-F first">
            <?php
            $imgCount = count($img);
            for ($i = 0; $i < $imgCount; $i++) {
                echo '<div class="img">';
                echo "<img src='" . $img[$i] . "' >";
                echo '</div>';
            }
            ?>

        </div>
        <div class="row D-F second">
            <?php
            $imgCount2 = count($img2);
            for ($i = 0; $i < $imgCount2; $i++) {
                echo '<div class="img">';
                echo "<img src='" . $img2[$i] . "' >";
                echo '</div>';
            }
            ?>
        </div>
        <div class="phone">

            <div class="box D-G">
                <?php
                for ($i = 0; $i < $imgCount; $i++) {
                    echo "<img class='image' src='" . $img[$i] . "' >";
                }
                for ($i = 0; $i < $imgCount2; $i++) {
                    echo "<img class='image' src='" . $img2[$i] . "' >";
                }
                ?>
                <i class="fa-solid fa-chevron-left"></i>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
        <div class="circle-arrow D-G">
            <i class="fa-solid fa-arrow-down"></i>
        </div>
    </section>
    <section id="price-list" class="D-F-C">
        <h2>Preisliste</h2>
        <div class="wrap D-F">
            <div class="price-box D-F">
                <div class="row">
                    <h5>Haarschnitt</h5>
                    <h5>Bart</h5>
                    <h5>Augenbrauen zupfen</h5>
                    <h5>Haar waschen & trocknen</h5>
                    <h5>Natur gesichtsmaske</h5>
                    <h5>Gesicht Kompressen pflege</h5>
                    <h5>Black Gesichtsmaske</h5>
                    <h5>Nasenhaare entfernen</h5>
                    <h5>Ohrkerzen innernreinigung</h5>
                </div>
                <div class="row">
                    <h5>18€</h5>
                    <h5>13€</h5>
                    <h5>7€</h5>
                    <h5>5€</h5>
                    <h5>5€</h5>
                    <h5>5€</h5>
                    <h5>5€</h5>
                    <h5>5€</h5>
                    <h5>10€</h5>
                </div>
            </div>
        </div>
        <div class="circle-arrow D-G">
            <i class="fa-solid fa-arrow-down"></i>
        </div>
    </section>
    <section id="appointment" class="D-F" style="display: none;">
        <form action="./inc/appointment.php" method="post">
            <h2>machen sie <br>einen termin</h2>
            <br>
            <input type="text" placeholder="Name" name="Kunde">
            <br>
            <input type="text" placeholder="E-mail" name="Email">
            <br>
            <input type="tel" placeholder="Handy Nummer" name="Handy">
            <br>
            <input id="party" type="datetime-local" name="datum">
            <br>
            <input type="submit" value="senden" name="senden">
        </form>
        <div class="circle-arrow D-G">
            <i class="fa-solid fa-arrow-down"></i>
        </div>
    </section>

    <script>
    function arrowScroll() {
        $('.circle-arrow').click(function() {
            $('.main-content').animate({
                scrollTop: '+=690'
            });
        });
    }
    arrowScroll();

    function gallery() {
        //first
        $('.first .img:nth-child(1)').after('<div class="wrap w1"></div>');
        $('.first .img:nth-child(5)').after('<div class="wrap w2"></div>');
        $('.first div:nth-child(2),.first div:nth-child(6)').append('<div class="img"><img></div>');
        $('.first div:nth-child(2),.first div:nth-child(6)').append('<div class="img"><img></div>');
        $('.first .img:nth-child(10), .first .img:nth-child(3),.first .img:nth-child(4),.first .img:nth-child(7)')
            .remove();
        //second
        $('.second .img:nth-child(1)').after('<div class="wrap w1"></div>');
        $('.second .img:nth-child(5)').after('<div class="wrap w2"></div>');
        $('.second div:nth-child(2),.second div:nth-child(6)').append('<div class="img"><img></div>');
        $('.second div:nth-child(2),.second div:nth-child(6)').append('<div class="img"><img></div>');
        $('.second .img:nth-child(10), .second .img:nth-child(3),.second .img:nth-child(4),.second .img:nth-child(7)')
            .remove();
        //add overlay to gallery 
        $('.img').append('<div class="overlays"></div>')
        $('.w1 .img:nth-child(1) img').attr('src', '<?php echo $img[1]; ?>');
        $('.w1 .img:nth-child(2) img').attr('src', '<?php echo $img[2]; ?>');
        $('.w2 .img:nth-child(1) img').attr('src', '<?php echo $img[4]; ?>');
        $('.w2 .img:nth-child(2) img').attr('src', '<?php echo $img[7]; ?>');
        $('.w3 .img:nth-child(1) img').attr('src', '<?php echo $img[1]; ?>');
        $('.w3 .img:nth-child(2) img').attr('src', '<?php echo $img[2]; ?>');
        $('.w4 .img:nth-child(1) img').attr('src', '<?php echo $img[4]; ?>');
        $('.w4 .img:nth-child(2) img').attr('src', '<?php echo $img[7]; ?>');
        $('.second .w1 .img:nth-child(1) img').attr('src', '<?php echo $img2[1]; ?>');
        $('.second .w1 .img:nth-child(2) img').attr('src', '<?php echo $img2[2]; ?>');
        $('.second .w2 .img:nth-child(1) img').attr('src', '<?php echo $img2[4]; ?>');
        $('.second .w2 .img:nth-child(2) img').attr('src', '<?php echo $img2[7]; ?>');
        $('.second .w3 .img:nth-child(1) img').attr('src', '<?php echo $img2[1]; ?>');
        $('.second .w3 .img:nth-child(2) img').attr('src', '<?php echo $img2[2]; ?>');
        $('.second .w4 .img:nth-child(1) img').attr('src', '<?php echo $img2[4]; ?>');
        $('.second .w4 .img:nth-child(2) img').attr('src', '<?php echo $img2[7]; ?>');
    }
    gallery();
    </script>
    <?php
    include("./inc/footer.php");
    ?>