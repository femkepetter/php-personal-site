<?php require 'views/partials/header.view.php' ?>
<main class="content">
    <section id="educations" class="section scrollspy">
        <h3 class="page-title white-text">Opleidingen en cursussen</h3>
        <div class="container sectie">
            <div class="row align-items-start justify-content-center">
                <?php foreach ($vars['categories'] as $cat) : ?>
                    <div class="col-md-6">
                        <h4 class="subtitel"><?= $cat->category ?></h4>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="row align-items-start justify-content-center">
                <?php foreach ($vars['educations'] as $education) : ?>
                    <div class="col-md-6">
                        <?php foreach ($education as $item) : ?>
                            <div class="row">
                                <div class="col">
                                    <h5 class="taken"><?= $item["education"] ?></h5>
                                    <ul>
                                        <li><?= $item['description'] ?></li>
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