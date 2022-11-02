<?php 
include_once './repository/command.php';
$getPosts = command("SELECT * FROM posts order by criado desc");
include './topo.php'; ?>


<div class="container">

    <nav class="navbar">
        <a class="navbar-brand">Navbar</a>
        <div class="d-flex justify-content-end">
            <script language=javascript type="text/javascript">
                now = new Date
                dayName = new Array("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado")
                monName = new Array("janeiro", "fevereiro", "março", "abril", "Maio", "junho", "agosto", "outubro",
                    "novembro", "dezembro")
                document.write("<strong> Hoje é " + dayName[now.getDay()] + ", " + now.getDate() + " de " + monName[now
                    .getMonth()] + " de " + now.getFullYear() + ". </strong>")
            </script>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-2">
            <?php include './menu.php'; ?>
        </div>
        <div class="col-md-10">
            <div class="content">
                <h2> Lista de Postagens</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($getPosts as $post) { ?>
                        <tr>
                            <th scope="row"><?php echo $post['id']; ?></th>
                            <td><?php echo $post['titulo']; ?></td>
                            <td><?php echo $post['categoria']; ?></td>
                            <td>
                                <a href="alterar.php?id=<?php echo $post['id']; ?>">alterar</a>
                                <a href="excluir.php?id=<?php echo $post['id']; ?>"
                                    onclick="return confirm('tem certeza que deseja deletar o item?');">deletar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include './footer.php'; ?>