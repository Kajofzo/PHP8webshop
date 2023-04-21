<?php
  $host = 'localhost';
  $dbname = 'php8';
  $username = 'root';
  $password = '';

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Stel foutenmodus in op uitzonderingen
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch (PDOException $e) {
    echo 'Verbindingsfout: ' . $e->getMessage();
  }
  ?>