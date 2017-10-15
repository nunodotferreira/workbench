<?php 

namespace App\Bot\Facebook\States\Workflow\Test\SimpleConversation;

/**
 * Class SimpleConversation
 * @package  App\Bot\Facebook\States\Workflow\Test\SimpleConversation
 */
class SimpleConversation extends \Botomatic\Engine\Facebook\Abstracts\States\Workflow
{

    /*------------------------------------------------------------------------------------------------------------------
     *
     * Sometimes it's useful to structure several "steps" into 1 state.
     *
     * The most basic example is when bot will ask for something and await for an answer from the user
     *
     -----------------------------------------------------------------------------------------------------------------*/
    use \Botomatic\Engine\Facebook\Abstracts\States\Workflow\Traits\Steps;


    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\SimpleConversation\Handlers\Responses
     */
    protected $response;

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\SimpleConversation\Handlers\Message
     */
    protected $message;

    /**
     * SimpleConversation constructor.
     */
    public function __construct()
    {
        $this->serializes = ['step'];
    }

    /**
     * Logic specific to the state
     *
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    protected function process(): \Botomatic\Engine\Facebook\Entities\Response
    {
        if ($this->isFirstStep())
        {
            // advance to the next step
            $this->nextStep();

            return $this->response->askForAge();
        }
        else
        {
            if ($this->message->userSentAge())
            {
                /**
                 * Extract the age, show message and move to the next state
                 */
                return $this->response->finish($this->message->extractAge());
            }
            else
            {
                return $this->response->notAValidAge();
            }
        }
    }

}