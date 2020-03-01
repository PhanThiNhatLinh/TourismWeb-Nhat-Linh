<?php
class Writer
{
    public $writerCode;
    public $writerName;
    public $gender;
    public $phone;
    public $adress;
    public $email;
    public $workStatus;

    public function __construct($writerCode, $writerName,$gender,$phone,$email,$adress,$workStatus )
    {
        $this->writerCode = $writerCode;
        $this->writerName = $writerName;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->adress = $adress;
        $this->email = $email;
        $this->workStatus = $workStatus;
    }

    public function getCity() 
    {
        return 'Huế';
    }

}

?>