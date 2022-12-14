<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar País</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="View/modules/TImePais/style_time.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/time_pais/form"> Cadastrar Time <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Outros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/posicao">Posição</a>
              <a class="dropdown-item" href="/pais">País</a>
              <a class="dropdown-item" href="/jogador">Jogador</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <p class="titulo-time"> TIMES </p>

    <div class="time-container">
         <table>
            <tr>
                <th> </th>
                <th> Time </th>
                <th> Logo </th>
                <th> País </th>
            </tr>

            <?php foreach($model->rows as $item): ?>
                <tr>
                    <td>
                        <div class="deletar">
                            <a href="/time_pais/delete?id=<?= $item['id'] ?>"> X </a>
                        </div>
                    </td> 

                    <td>
                        <a href="/time_pais/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?> </a>
                    </td>

                    <td>
                        <div class="logo-time">
                          <img src="View/modules/TimePais/logos/<?= $item['link'] ?>" >
                        </div>
                    </td>

                    <td>
                      <div class="bandeira">
                        <img src="View/modules/Pais/bandeiras/<?=$item['link_bandeira'] ?>" >
                      </div>
                    </td>
                
                </tr>
            <?php endforeach ?>
         </table>
    </div>

    <center>
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5"> Nenhum registro encontrado. </td>
            </tr>
        <?php endif ?>
    </center>

    <div class="background-time">
      <img src="wave.svg">
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>