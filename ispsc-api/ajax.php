<?php
/**
 * AJAX Process Requests
 *
 * @author Cyanne Justin Vega
 * @copyright  Ilocos Sur Polytechnic State College 2023
 */
include_once 'init.php';

if (isset($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {
        case 'addAnnouncement':
            $announcement = new Announcements();
            $res = $announcement->addAnnouncement($_POST['announcement_content']);
            if ($res === true) {
                echo "true";
            }
            break;
        case 'deleteAnnouncement':
            $announcement = new Announcements();
            $res = $announcement->deleteAnnouncement($_POST['id']);
            if ($res === true) {
                echo "true";
            }
            break;
        case 'fetchAnnouncementById':
            $announcement = new Announcements();
            $announcement->fetchAnnouncementById($_POST['id']);
            break;
        case 'updateAnnouncement':

            $announcement = new Announcements();
            $res = $announcement->editAnnouncement($_POST['id'], $_POST['announcement_content']);
            if ($res === true) {
                echo "true";
            }
            break;
        case 'addNews':

            $news = new News();
            $res = $news->addNews($_POST['news_title'], $_POST['news_content'], $_POST['news_image']);
            if ($res === true) {
                echo "true";
            }
            break;
        case 'deleteNews':
            $news = new News();
            $res = $news->deleteNews($_POST['id']);
            if ($res === true) {
                echo "true";
            }
            break;
        case 'fetchNewsById':
            $news = new News();
           echo $news->convertToJson( $news->getNewsById($_POST['id']));
            break;
        case 'updateNews':
            $news = new News();
            $res = $news->editNews($_POST['id'], $_POST['news_title'], $_POST['news_content'], $_POST['news_image']);
            if ($res === true) {
                echo "true";
            }
            break;
        default:
            echo "unknown action";
    }

}