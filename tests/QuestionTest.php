<?php
namespace thephpcc\workshop;

class QuestionTest extends \PHPUnit_Framework_TestCase
{
    public function testInitiallyHasNoAnswers()
    {
        $question = new Question;
        $this->assertFalse($question->hasAnswers());

        return $question;
    }

    /**
     * @param   Question $question
     * @depends testInitiallyHasNoAnswers
     */
    public function testCanBeAnswered(Question $question)
    {
        $answer = $this->getMock(Answer::class);

        $question->answer($answer);

        $this->assertTrue($question->hasAnswers());
    }

    /**
     * @expectedException \LogicException
     */
    public function testCannotHaveMoreThanOneAcceptedAnswer()
    {
        $question = new Question;

        $a = $this->getMock(Answer::class);
        $a->method('isAccepted')->willReturn(true);
        $b = $this->getMock(Answer::class);
        $b->method('isAccepted')->willReturn(true);

        $question->answer($a);
        $question->answer($b);
    }
}
