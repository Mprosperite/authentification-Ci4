<?= $this->extend('layout/base.php') ?>

<?= $this->section('content') ?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

            </div>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <a class="btn btn-primary btn-lg" href="<?= site_url('/register'); ?>">S'enreister</a>
                    </div>
                </div>
                <br>
                <div class="col">
                    <a class="btn btn-primary btn-lg" href="<?= site_url('/register'); ?>">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>