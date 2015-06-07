<?php
namespace thephpcc\workshop;

class Answer
{
    /**
     * @var bool
     */
    private $isAccepted = false;

    /**
     * @var bool
     */
    private $isUndecided = true;

    public function accept()
    {
        $this->isAccepted  = true;
        $this->isUndecided = false;
    }

    /**
     * @return bool
     */
    public function isAccepted()
    {
        return $this->isAccepted;
    }

    /**
     * @return bool
     */
    public function isUndecided()
    {
        return $this->isUndecided;
    }
}
