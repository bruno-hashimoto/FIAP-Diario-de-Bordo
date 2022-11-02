<?php 
include_once './repository/command.php';
$getPosts = command("SELECT * FROM posts");
include './topo.php'; 

if($_POST){
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];
    $chamada = $_POST['chamada'];
    $data = $_POST['data'];
    $autor = $_POST['autor'];

    $sql = "INSERT INTO posts (titulo, texto, categoria, chamada, criado, autor) VALUES ('$titulo', '$texto', '$categoria', '$chamada', '$data', '$autor')";
    
    if (mysqli_query($conexao, $sql)) {
        $success = true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

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

    <?php if($success) { ?>
    <div class="alert alert-success" role="alert">
        Postagem inserida com sucesso!
    </div>
    <?php } ?>

    <div class="row">
        <div class="col-md-2">
            <?php include './menu.php'; ?>
        </div>
        <div class="col-md-10">
            <div class="content inserir">
                <h2> Nova postagem</h2>

                <form action="" method="post" class="d-flex flex-column">
                    <label for="">
                        Título do post
                        <input type="text" name="titulo">
                    </label>

                    <label for="">
                        Chamada
                        <input type="text" name="chamada">
                    </label>

                    <label for="">
                        Texto <br>
                        <textarea name="texto" id="" cols="35" rows="10"></textarea>
                    </label>

                    <label for="">
                        Autor
                        <input type="text" name="autor">
                    </label>

                    <label for="">
                        Categoria do Post
                        <select name="categoria" id="">
                            <option value="1">Esportes</option>
                            <option value="2">Games</option>
                            <option value="3">Blog</option>
                            <option value="4">Saúde</option>
                        </select>
                    </label>

                    <label for="">
                        Data da publicação
                        <input type="date" name="data">
                    </label>

                    <button type="submit"> Inserir Post </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './topo.php'; ?>