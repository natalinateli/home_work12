<?php
include "DataBase.php";

class Article
{
    public $isPublished = false;
    public $title;
    public $text;

    /**
     * @return bool
     */
    public function publish()
    {
        return $this->isPublished = true;
    }

    /**
     * @param $title
     * @param $text
     */
    public function save($title, $text) {
        $database = new DataBase();
        $database->insertNewArticle($title, $text, $this->publish());
    }
}