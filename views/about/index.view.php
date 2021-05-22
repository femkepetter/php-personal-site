<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <!-- OVER -->
    <section id="about" class="section scrollspy">
        <h3 class="page-title white-text">Over</h2>
            <div class="container sectie">
                <div class="row align-items-center justify-content-center">
                    <div class="col text-center">
                        <h3 id="eigenschap" class="user-select-none">Levendig</h3>
                    </div>
                    <div class="col text-center">
                        <h3 id="eigenschap" class="user-select-none">Ambitieus</h3>
                    </div>
                    <div class="col text-center">
                        <h3 id="eigenschap" class="user-select-none">Verantwoordelijk</h3>
                    </div>
                    <div class="col text-center">
                        <h3 id="eigenschap" class="user-select-none">Analytisch</h3>
                    </div>
                </div>
                <hr>

                <div class="row align-items-center justify-content-center">
                    <div class="col-11 text-center about-col">
                        <img src="public/images/selfiefemke.jpg" alt="selfie" class="rounded-circle selfie">
                    </div>
                    <div class="col-11 about-col">
                        <?php foreach ($vars['about'] as $about) : ?>
                            <div><?= $about->first_name ?></div>
                            <div><?= $about->last_name ?></div>
                            <div><?= $about->birthday ?></div>
                            <div><?= $about->profile_pitch ?></div>
                        <?php endforeach ?>
                    </div>
                </div>


            </div>
    </section>
</main>

<?php require 'views/partials/footer.view.php' ?>