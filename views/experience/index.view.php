<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <!-- WERKERVARING -->
    <section id="experience" class="section scrollspy">
        <h3 class="page-title white-text">Werkervaring</h2>

            <?php foreach ($vars['data'] as $experience) : ?>
                <div class="container sectie">
                    <div class="row">
                        <div class="col">
                            <h4 class="subtitel"><?= $experience['experience']->company ?> | <?= $experience['experience']->position ?></h4>
                            <ul>
                                <div><?= $experience['experience']->description ?></div>
                            </ul>
                            <h5 class="taken">Taken:</h5>
                            <?php foreach ($experience['tasks'] as $item) : ?>
                                <ul>
                                    <li><?= $item['task'] ?></li>
                                </ul>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
    </section>
</main>

<?php require 'views/partials/footer.view.php' ?>