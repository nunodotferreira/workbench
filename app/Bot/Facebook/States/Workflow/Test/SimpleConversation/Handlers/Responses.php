<?php 

namespace App\Bot\Facebook\States\Workflow\Test\SimpleConversation\Handlers;

/**
 * Class Responses
 * @package  App\Bot\Facebook\States\Workflow\Test\SimpleConversation\Handlers
 */
class Responses extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Handler
{

    /**
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    public function askForAge() : \Botomatic\Engine\Facebook\Entities\Response
    {
      return $this->response->addMessage(
          localizator()->translate('simple-conversation', 'ask_for_age')
      )
            ->setStatusActive()
            ->sendResponse();
    }

    /**
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    public function notAValidAge() : \Botomatic\Engine\Facebook\Entities\Response
    {
          return $this->response->addMessage(
              localizator()->translate('simple-conversation', 'not_valid_age')
          )
             ->setStatusActive()
            ->sendResponse();
    }

    /**
     * Any state except active (default) will search for the next state in /Routes/Workflow
     *
     * Note: by not calling ->sendResponse() the state moves to the next one and continues execution
     *
     * @param string $age
     *
     * @return \Botomatic\Engine\Facebook\Entities\Response
     */
    public function finish(string $age) : \Botomatic\Engine\Facebook\Entities\Response
    {
        return $this->response
            ->addMessage(
                localizator()->translate('simple-conversation', 'age_confirmation', ['age' => $age])
            )
            ->setStatusFinish();
    }

}
