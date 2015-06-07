<?php
namespace thephpcc\workshop;

class Question
{
    /**
     * @var Answer[]
     */
    private $answers = [];

    /**
     * @param  Answer $answer
     * @throws \LogicException
     */
    public function answer(Answer $answer)
    {
        if ($this->hasAcceptedAnswers()) {
            throw new \LogicException;
        }

        $this->answers[] = $answer;
    }

    /**
     * @return bool
     */
    public function hasAnswers()
    {
        return !empty($this->answers);
    }

    /**
     * @return bool
     */
    private function hasAcceptedAnswers()
    {
        foreach ($this->answers as $answer) {
            if ($answer->isAccepted()) {
                return true;
            }
        }

        return false;
    }
}
