<div class="container mt-3 py-3">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Categoria 1</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($getPost as $post) : ?>
        <div class="col-md-12">
            <div class="card mb-3 border-0">
                <div class="row no-gutters">
                    <!-- <div class="col-md-4">
                        <a href="<?php echo $linkPost; ?>">
                            <img src="<?php echo $caminho; ?>/assets/images/<?php echo $post['imagem'] ?>"
                                class="img-fluid" alt="">
                        </a>
                    </div> -->
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $post['criado'] . " - " . $post['titulo'] ?>
                            </h5>

                            <p class="card-text">
                                <?php echo $post['texto'] ?>
                            </p>
                            <p class="card-text">
                                <?php echo "por " . $post['autor'] ?>
                            </p>

                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <a href="javascript:history.back()">Voltar</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>