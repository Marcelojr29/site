<?php

require 'database.php';

  //$produtos = DBRead('produto','where proid = 2','*');
  $produtos = DBRead('produto');

  foreach($produtos as $key=>$values) {

    echo "<div class='card' style='width: 18rem;'>
    <img class='card-img-top' src='resource/img/mkcamisa.jpg' alt='{$values['pronome']}'>
    <div class='card-body'>
      <h5 class='card-title'>Scorpion </h5>
      <p class='card-text'>Camisa do Scorpion - Mortal Kombat</p>
    </div>
    <ul class='list-group list-group-flush'>
      <li class='list-group-item'>R$65,00</li>
    </ul>
    <div class='card-body'>
      <a href='#' class='btn btn-outline-success'>Comprar</a>
      <a href='#' class='btn btn-outline-info'>Detalhes</a>
    </div>
  </div>";
  }
  ?>