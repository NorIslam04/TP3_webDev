<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: page1.php'); // Redirige vers la première page si l'utilisateur est connecté
    exit();
} else {
    header('Location: login.php'); // Redirige vers la page de connexion sinon
    exit();
}
