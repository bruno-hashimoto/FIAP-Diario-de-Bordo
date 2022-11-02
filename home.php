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
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($getPosts as $post) : 
            $linkPost = "postagem-ver/" . urllimpa($post['titulo']) . "/" . $post['id'] ?>
                <div class="col-md-12">


                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <!-- <div class="col-md-4">
                                <a href="<?php echo $linkPost; ?>">
                                    <img src="./assets/images/<?php echo $post['imagem'] ?>" class="img-fluid" alt="">
                                </a>
                            </div> -->
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $post['criado'] . " - " . $post['titulo'] ?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo $post['chamada'] ?>
                                    </p>

                                    <a href="<?php echo $linkPost; ?>" class="btn btn-primary">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-3">
            <img src="https://previews.123rf.com/images/messer16/messer161704/messer16170400038/76964195-crispy-croutons-ads-vector-realistic-illustration-of-croutons-with-tomato-vertical-banner-with-produ.jpg"
                class="img-fluid" alt="">
        </div>
    </div>
</div>