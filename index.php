<?php
session_start();

require "function.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Compiled and minified CSS -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="style.css">
<!-- Compiled and minified JavaScript -->
        
    <title>Ma table de multiplication</title>
  </head>
  <body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jeu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Révision</a>
        </li>
        
        
      </ul>
      <div class="container-fluid bg-green    ">
          <div class="row mt-5 text-green    ">
              <div class="col-2 offset-col-1 w-100   ">
              <form method="get" action="" class=" " id='form1'>
                  <label for="table"> choississez votre table de multiplication</label>
                  <select name="tableau">
                  <?php
                    for($i=1;$i<=10;$i++){
                      echo "<option value=\"".$i."\">".$i."</option>";
                    }
                  ?>
                
                 <input type="submit" class='mt-2'>
                </form>
  <div id="repo bnse"></div>

                <form action="" method="post" id="form">
                  <label for="text">table de 1</label>
                  <input type="checkbox" id='test' name='tableaux[]' value="1">
                  <label for="text">table de 2</label>
                  <input type="checkbox" name='tableaux[]' value="2">
                  </select>
                  <label for="text">table de 3</label>
                  <input type="checkbox" name='tableaux[]' value="3">
                  </select>
                  <label for="text">table de 4</label>
                  <input type="checkbox" name='tableaux[]' value="4">
                  </select>
                  <label for="text">table de 5</label>
                  <input type="checkbox" name='tableaux[]' value="5">
                  </select>
                  <label for="text">table de 6</label>
                  <input type="checkbox" name='tableaux[]' value="6">
                  </select>
                  <label for="text">table de 7</label>
                  <input type="checkbox" name='tableaux[]' value="7">
                  </select>
                  <label for="text">table de 8</label>
                  <input type="checkbox" name='tableaux[]' value="8">
                  </select>
                  <label for="text">table de 9</label>
                  <input type="checkbox" name='tableaux[]' value="9">
                  </select>
                  <label for="text">table de 10</label>
                  <input type="checkbox" name='tableaux[]' value="10">
                  </select>
                  <input type='submit' class='mt-2' >
                  </form>
    </div>
    <div id="reponse">
 
  <?php

    if (isset($_GET['tableau'])){
      listTable($_GET['tableau']);

    }
    if(isset($_POST["tableaux"])){

   
    echo ' <div class="col-2  offset-3 d-flex align-items-center  justify-content-center">'.rand(0,10).fullTable($_POST['tableaux']).'</div>';
    }
    ?>
  </div>
  </div>
       <script> 
  const form=document.querySelector('#form');
    form.addEventListener('submit',function (e) {
        e.preventDefault();
       
       firstName=document.querySelector('#test');

    //    creation d'un nouveau formulaire
        datas=new FormData();
        // ajout des élémentns dans le formulaire
        datas.append('firstname',firstName.value);
 
       //prommesse ajax
       fetch('function.php',{
           method:"POST", 
           body:datas
       }).then(function (thereponse) {
           return thereponse.text();
           
       }).then(function (result) {
         myDiv=document.querySelector('#reponse')
         myDiv.innerHTML=result
       })


    })
    </script>

  
            
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
