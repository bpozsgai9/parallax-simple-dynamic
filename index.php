<?php
    include('class.php');
    $osztaly = new Osztaly();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rajzvásznak</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Meddon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="parallax.css">
    
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-toggleable-md navbar-inverse" style="background:#333;">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Főoldal</a>
                    <a href="#VanGogh" class="nav-item nav-link "data-toggle="tooltip" title="Fejlesztés alatt..." data-placement="bottom">Részletes adatok</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bgimg-1">
        <div class="caption">
            <div class="container">
                <h1 class=" display-3 font-weight-bold" style="font-family: 'Meddon'; color: #ffc800; text-shadow: 2px 2px black;" >Rajzvásznak</h1>
                <br /><br />
                <p class="lead font-italic" style="color: #ffc800; text-shadow: 2px 2px black;">Válaszd ki a kedvenced 🎨</p>
            </div>
        </div>
    </div>

    <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <div class="container">
            <h1 class="font-weight-bold" style="color:#333; text-align: center;">Választható vásznaink</h1>
            <br />
            <div class="d-flex justify-content-center">
            <?php
                $osztaly->listCard()
            ?>
            </div>
        </div>
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">
            <h1 class="font-weight-bold text-white" style="text-align: center;">Új vásznat szeretnék felvenni</h1>
            </span>
        </div>
    </div>

<div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <form method="post" class="form-group">
        <table class='table'>
            <tr>
                <th scope='col'>Név:</th>
                <th scope='col'>Anyag:</th>
                <th scope='col'>Méret:</th>
                <th scope='col'>Ár:</th>
                <th scope='col'></th>
            </tr>
            <tr>
                <td>
                    <input class="form-control" type="text" name="insertNev">
                </td>
                <td>
                    <input class="form-control" type="text" name="insertAnyag">
                </td>
                <td>
                    <input class="form-control" type="number" name="insertMeret">
                </td>
                <td>
                    <input class="form-control" type="number" name="insertAr">
                </td>
                <td>
                    <input class="btn btn-success" type="submit" name='adatSubmit' value="Felvétel">
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>

<div class="bgimg-3">
    <div class="caption">
        <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">
            <h1 class="font-weight-bold text-white" style="text-align: center;">Adatmódosítási lehetőségek</h1>
        </span>
    </div>
</div>

<div style="position:relative;">
  <div style="background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            
            <?php
                if (isset($_POST['adatSubmit'])){
                    $osztaly->insert(
                        $_POST['insertNev'], 
                        $_POST['insertAnyag'], 
                        $_POST['insertMeret'], 
                        $_POST['insertAr']);
                }
                if (isset($_POST['modositas'])){
                    $osztaly->update(
                        $_POST['hiddenId'], 
                        $_POST['updateNev'],
                        $_POST['updateAnyag'], 
                        $_POST['updateMeret'],  
                        $_POST['updateAr']);
                }
                if (isset($_POST['torles'])){
                    $osztaly->delete($_POST['hiddenId']);
                }
                $osztaly->listData();
            ?>

  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
  <h1 class="font-weight-bold" style="font-family: 'Meddon'; color: #ffc800; text-shadow: 2px 2px black;">Köszönjük a látogatásod!</h1>
  </div>
</div>

<footer class="page-footer font-small" style="background: #333;">
  <div class="footer-copyright text-center py-3  text-white">
    © 2020 Copyright:
    <a href="#">rajzvasznak.hu</a>
  </div>
</footer>

 <!-- jQuery first, then Tether, then Bootstrap JS. -->
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
</body>

</body>
</html>