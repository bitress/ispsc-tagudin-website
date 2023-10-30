<?php
/**
 * @author Cyanne Justin Vega
 * @copyright  Ilocos Sur Polytechnic State College 2023
 */

include_once 'init.php';
header('Content-Type: application/json; charset=utf-8');
$news = new News();
if (!isset($_GET['id'])) {
    echo $news->convertToJson($news->fetchNews());
} else {
    $id = $_GET['id'];
    echo $news->convertToJson($news->getNewsById($id));
}


