<?php

/**
 * News Class
 *
 * @author Cyanne Justin Vega
 * @copyright  Ilocos Sur Polytechnic State College 2023
 */
class News {

    /**
     * @var Database
     */
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function convertToJson($data){
        return json_encode($data);
    }

    /**
     * Fetch news articles from the database
     * @return array|false
     */
    public function fetchNews() {
        $sql = "SELECT * FROM `news` ORDER BY date_posted DESC";
        $stmt = $this->db->query($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getNewsById($newsId) {
        $sql = "SELECT * FROM news WHERE news_id = :news_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":news_id", $newsId, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }


    /**
     * Add a new news article
     * @param $news_title
     * @param $news_content
     * @param $news_image
     * @return true|false
     */
    public function addNews($news_title, $news_content, $news_image) {
        try {
            $sql = "INSERT INTO news (news_title, news_content, news_image) VALUES (:news_title, :news_content, :news_image)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":news_title", $news_title);
            $stmt->bindParam(":news_content", $news_content);
            $stmt->bindParam(":news_image", $news_image);
            if ($stmt->execute()) {
                return true;
            }
        } catch (Exception $exception) {
            echo "Error: " . $exception->getMessage();
        }
        return false;
    }

    /**
     * Update an existing news article
     * @param $news_id
     * @param $news_title
     * @param $news_content
     * @param $news_image
     * @return true|false
     */
    public function editNews($news_id, $news_title, $news_content, $news_image) {
        try {
            $sql = "UPDATE news SET news_title = :news_title, news_content = :news_content, news_image = :news_image WHERE news_id = :news_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":news_id", $news_id);
            $stmt->bindParam(":news_title", $news_title);
            $stmt->bindParam(":news_content", $news_content);
            $stmt->bindParam(":news_image", $news_image);
            if ($stmt->execute()) {
                return true;
            }
        } catch (Exception $exception) {
            echo "Error: " . $exception->getMessage();
        }
        return false;
    }

    /**
     * Delete a news article
     * @param $news_id
     * @return true|false
     */
    public function deleteNews($news_id) {
        try {
            $sql = "DELETE FROM news WHERE news_id = :news_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":news_id", $news_id);
            if ($stmt->execute()) {
                return true;
            }
        } catch (Exception $exception) {
            echo "Error: " . $exception->getMessage();
        }
        return false;
    }



}
