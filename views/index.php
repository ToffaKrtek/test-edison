<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Предсказания от предсказателей</title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1 style="text-align:center">Предсказания от предсказателей</h1>
    <button type="button" name="button" onclick="newPredict()">DO</button>
    <hr>
  <span><?= $predict;?></span>
  <hr>
  <span><?= $predict2;?></span>
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
