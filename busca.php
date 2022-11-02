<div class="container mt-3 py-3">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Início</li>
                    <li class="breadcrumb-item active" aria-current="page">Buscar</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Resultado da busca por: <?php echo $palavraTratada[1]; ?></h3>
        </div>
    </div>
    <?php if($getPost): ?>
    <div class="row">
        <?php foreach ($getPost as $post) : ?>
        <div class="col-md-12">
            <div class="card mb-3 border-0">
                <div class="row no-gutters">
                    <!-- <div class="col-md-4">
                        <img src="<?php echo $caminho; ?>/assets/images/<?php echo $post['imagem'] ?>" class="img-fluid"
                            alt="">
                    </div> -->
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $post['criado'] . " - " . $post['titulo'] ?>
                            </h5>

                            <p class="card-text">
                                <?php echo $post['texto'] ?>
                            </p>

                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <a href="<?php echo $caminho . "/postagem-ver/" . urllimpa($post['titulo']) . "/" . $post['id']; ?>">
                                        ver mais
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <?php else: ?>
        <p>nenhum registro encontrado.</p>
        <?php endif; ?>
    </div>
</div>