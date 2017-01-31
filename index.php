<?php
session_start();
// on require le fichier car on a besoin des données
require("inc/data.php");

// Header de page
include_once("templates/header.php");

// Liste des produits
include_once("templates/products-list.php");

// Pied de page
include_once("templates/footer.php");
?>
