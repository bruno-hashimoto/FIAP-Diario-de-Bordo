<div class="container">
  <div class="row">
    <div class="col-md-12 d-flex justify-content-end">
      <script language=javascript type="text/javascript">
        now = new Date
        dayName = new Array("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado")
        monName = new Array("janeiro", "fevereiro", "março", "abril", "Maio", "junho", "agosto", "outubro",
          "novembro", "dezembro")
        document.write("<strong> Hoje é " + dayName[now.getDay()] + ", " + now.getDate() + " de " + monName[now
          .getMonth()] + " de " + now.getFullYear() + ". </strong>")
      </script>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">Logotipo</a>
        <ul class="navbar-nav mr-auto ml-auto">
          <li class="nav-item">
            <a href="<?php echo $caminho; ?>/categorias/esporte/1" class="nav-link active" aria-current="page"
              href="#">Esportes</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $caminho; ?>/categorias/games/2" class="nav-link active" aria-current="page"
              href="#">Games</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $caminho; ?>/categorias/blog/3" class="nav-link active" aria-current="page"
              href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $caminho; ?>/categorias/saude/4" class="nav-link active" aria-current="page"
              href="#">Saúde</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="search">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo $caminho . "/busca"; ?>" method="get" class="d-flex">
          <div class="form-check">
            <input type="text" class="form-control" name="termo" placeholder="Insira o artigo">
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </div>
  </div>
</div>