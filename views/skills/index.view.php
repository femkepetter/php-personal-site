<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <!-- VAARDIGHEDEN -->
    <section id="skills" class="section scrollspy">
        <h3 class="page-title white-text">Vaardigheden</h2>
            <div class="container sectie">

                <div class="row align-items-start justify-content-center">
                    <div class="col-md-6 col-10">
                        <h4 class="subtitel">Web Development</h4>
                        <ul>
                            <?php foreach ($vars['skills'][1] as $skills) : ?>

                                <div class="row">
                                    <div class="col">
                                        <li><?= $skills["skill"] ?>:
                                    </div>

                                    <div class="col"><?= $skills["score"] ?></li>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <div class="col-md-6 col-10">
                        <h4 class="subtitel">Overige</h4>
                        <ul>
                            <?php foreach ($vars['skills'][2] as $skills) : ?>
                                <div class="row">
                                    <div class="col">
                                        <li><?= $skills["skill"] ?>:
                                    </div>

                                    <div class="col"><?= $skills["score"] ?></li>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

    </section>
</main>

<?php require 'views/partials/footer.view.php' ?>