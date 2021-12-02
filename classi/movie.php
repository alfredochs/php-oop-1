<?php
class movie
{
    public $title;
    public $year;
    public $poster;

    //Costruct
    function __construct($_title, $_year, $_poster)
    {
        $this->setTitle($_title);
        $this->setYear($_year);
        $this->setPoster($_poster);
    }



    // title

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($_title)
    {
        return $this->title = $_title;
    }

    // Year
    public function getYear()
    {
        return $this->title;
    }

    public function setYear($_year)
    {
        return $this->year = $_year;
    }

    // Poster
    public function getPoster($_poster)
    {
        return $this->poster;
    }

    public function setPoster($_poster)
    {
        return $this->poster = $_poster;
    }
}
