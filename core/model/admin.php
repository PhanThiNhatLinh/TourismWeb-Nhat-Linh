<?php 
class Admin{
    public $articleCode;
    public $articleName;
    public $placeName;
    public $writerCode;
    public $categoryArticle;
    public $content;
    public $quantitychars;
    public $image;
    public $uploadDate;
    public $deadline;

    public function __construct($articleCode, $articleName,$placeName,$writerCode,$categoryArticle,$content,$image,$uploadDate, $quantitychars,$deadline)
    {
        $this->writerCode = $articleCode;
        $this->writerName = $articleName;
        $this->gender = $placeName;
        $this->phone = $writerCode;
        $this->adress = $categoryArticle;
        $this->email = $content;
        $this->workStatus = $quantitychars;
        $this->workStatus = $image;
        $this->workStatus = $uploadDate;
        $this->workStatus = $deadline;
    }
}

?>