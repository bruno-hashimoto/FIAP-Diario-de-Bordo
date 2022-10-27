<div class="container">
    <div class="row">
        <?php foreach ($getPost as $post) : ?>
        <div class="col-md-12">
            <div class="box-post">
                <div class="imagem-post">
                <img src="../../assets/images/<?php echo $post['imagem'] ?>" class="img-fluid" alt="">
                </div>

                <div class="chamada">
                    <?php echo $post['autor'] ?>
                </div>

                <div class="titulo">
                        <?php echo $post['titulo'] ?>
                    </a>
                </div>

                <div class="chamada">
                    <?php echo $post['chamada'] ?>
                </div>
               
                <div class="chamada">
                    <?php echo $post['texto'] ?>
                </div>
               
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>