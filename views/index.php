<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Предсказания от предсказателей</title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" >
</head>
<body>
  <div class="container">
    <h1 style="text-align:center">Предсказания от предсказателей</h1>

      <hr>
      <div class="row">
          <div class="col" align="center">
              <h3 ><?=$extras_1->extrasense_name;?></h3>
            <img src="merlin1.png" alt="Фотография" class="img-mag">
              <h5><?=$extras_1->rate;?></h5>
          </div>
          <div class="col align-self-center" align="center">
    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Загадать число
      </button>

        </div>
          <div class="col" align="center">
            <h3><?=$extras_2->extrasense_name;?></h3>
            <img src="dambldore1.jpg" alt="" class="img-mag">
              <h5><?=$extras_2->rate;?></h5>
          </div>
        </div>
      <div class="collapse" id="collapseExample">
  <div class="card card-body">
      <div class="row">
    <div class="col" align="center">
      <p><?=$extras_1->extrasense_name;?> предрекает число</p>
        <h2><?= $predict;?></h2>
    </div>
    <div class="col" align="center">
      <form method="post">
        <input type="number" name="user_number" min="10" max="99" style="margin: 8px"><br>
      <button class="btn btn-primary" type="submit" name="submit">Отправить</button>
    </form>
    </div>

  <div class="col" align="center">
    <p><?=$extras_2->extrasense_name;?> предрекает число</p>
      <h2><?= $predict2;?></h2>
  </div>
</div>
</div>
  </div>
    <hr>

  <table class="table"  >
    <thead>
      <tr>
        <th scope="col"><?= $extras_1->extrasense_name;?></th>
        <th scope="col">Правильный ответ</th>
        <th scope="col"><?= $extras_2->extrasense_name;?></th>
      </tr>
    </thead>

    <tbody>
      <?php for($i = 0; $i < count($all_extr1); $i++): ?>
      <tr>
        <td><?= $all_extr1[$i];?></td>
        <th><?= $i;?></th>
        <td><?= $all_extr2[$i];?></td>
      </tr>
      <?php endfor;?>
    </tbody>
  </table>
<br>
<script type="text/javascript"> function newPredict() { $.ajax({
           type: "POST",
           url: 'controllers/ExtrasenseController.php',
           data:{action:'new_predict'},
           success:function(html) {
             window.location.href = "";
           }

      }); } </script>
 </div>
</body>
</html>
