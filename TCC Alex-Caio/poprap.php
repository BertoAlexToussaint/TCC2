<?php




include_once("templates/hearder.php");
include_once("config/url.php");
include_once("config/process.php");


  if(isset($_SESSION['msg'])) {

    $sprintMsg = $_SESSION['msg'];

    $_SESSION['msg'] = '';
  }

?>



    <main class="main1">
      <div class="lista">
      <ul class="produtos">          


        <li>
          <h2 class="h20">Pitchfork</h2>
          <a href="<?= $BASE_URL ?>drake.php">
          <img class="img-edition" src="<?= $BASE_URL ?>img/drake21savage.jpg" alt="clique em mim e deixa a magia acontecer">
          </a>
          <p class="preço">Drake & 21 Savage</p>  
        </li>

          <li>
            <h2 class="h20">I Hate Being Bi-Polar Its Awesome</h2>
            <a href="<?= $BASE_URL ?>Kanye01.php">
            <img class="img-edition" src="<?= $BASE_URL ?>img/ye.jpg">           
            </a>
            <p class="preço">Kanye West</p>
          </li>
         
          <li>
            <h2 class="h20">Good Kid, MAAD City</h2>
            <a href="<?= $BASE_URL ?>kendrick01.php">
            <img class="img-edition" src="<?= $BASE_URL ?>img/kendricklamar.jpg">
            </a>
            <p class="preço">Kendrick Lamar</p>
          </li>
          
          <li>
            <h2>Monkeybuzz</h2>
            <a href="<?= $BASE_URL ?>tyler01.php">
            <img class="img-edition" src="<?= $BASE_URL ?>img/tyler.jpg">
            </a>
            <p class="preço">Tyler The Creator</p>
          </li>

          <li>
            <h2>Yeezus</h2>
            <a href="<?= $BASE_URL ?>Kanye02.php">
            <img class="img-edition" src="<?= $BASE_URL ?>img/kanye.jpg">
            </a>
            <p class="preço">Kanye West</p>
          </li>

          <li>
            <h2>Mr. Morale & The Big Steppers</h2>
            <a href="<?= $BASE_URL ?>kendrick02.php">
            <img class="img-edition" src="<?= $BASE_URL ?>img/kendrick.jpg">
            </a>
            <p class="preço">Kendrick Lamar</p>
          </li>

      </ul>
    </div>
    </main>




    
    