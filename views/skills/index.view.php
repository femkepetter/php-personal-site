<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <section id="skills" class="section scrollspy">
        <h3 class="page-title white-text">Vaardigheden</h3>
        <div class="container sectie">
            <div class="row align-items-start justify-content-center">
                <?php foreach ($vars['categories'] as $cat) : ?>
                    <div class="col-md-6">
                        <h4 class="subtitel"><?= $cat->category ?></h4>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="row align-items-start justify-content-center">
                <?php foreach ($vars['skills'] as $skill) : ?>
                    <div class="col-md-6">
                        <?php foreach ($skill as $item) : ?>
                            <div class="row">
                                <div class="col">
                                    <ul class="my-0">
                                        <li><?= $item["skill"] ?>:</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="my-0">
                                        <li><?= $item["score"] ?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>

<?php require 'views/partials/footer.view.php' ?>