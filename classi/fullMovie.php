<?php
class FullMovie
{
    public $title;
    public $year;
    public $poster;

    function __construct($arr)
    {
        // $this->title = $arr["Title"];
        $this->setTitle($arr["Title"]);
        $this->setYear($arr["Year"]);
        $this->setPoster($arr["Poster"]);
    }
    /**
     * TITLE
     */
    public function setTitle($_title)
    {
        $this->title = $_title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Year
     */
    public function setYear($_year)
    {
        $this->year = $_year;
    }

    /**
     * Poster
     */
    public function setPoster($_poster)
    {
        $this->poster = $_poster;
    }
}
