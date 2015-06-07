<?php
namespace thephpcc\workshop;

class AnswerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsInitiallyUndecided()
    {
        $answer = new Answer;
        $this->assertTrue($answer->isUndecided());
    }

    public function testCanBeAccepted()
    {
        $answer = new Answer;

        $answer->accept();

        $this->assertTrue($answer->isAccepted());

        return $answer;
    }

    /**
     * @param   Answer $answer
     * @depends testCanBeAccepted
     */
    public function testAnAcceptedAnswerIsNotUndecided(Answer $answer)
    {
        $this->assertFalse($answer->isUndecided());
    }
}
