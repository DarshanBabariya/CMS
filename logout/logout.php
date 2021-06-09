<?php
session_start();

if (session_destroy()) {
    // Redirecting To login Page
    header("Location: ../homepage/index.php");
}
