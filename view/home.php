<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h5>postagens</h5>
        </div>
    </div>

    <div class="row">
        <?php foreach ($getPosts as $post) : 
            $linkPost = "post-ver/" . urllimpa($post['titulo']) . "/" . $post['id'] ?>
        <div class="col-md-3">

            <div class="card">
                <a href="<?php echo $linkPost; ?>">
                    <img src="./assets/images/<?php echo $post['imagem'] ?>" class="img-fluid" alt="">
                </a>
                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $post['titulo'] ?>
                    </h5>

                    <p class="card-text">
                        <?php echo $post['chamada'] ?>
                    </p>

                    <a href="<?php echo $linkPost; ?>" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>