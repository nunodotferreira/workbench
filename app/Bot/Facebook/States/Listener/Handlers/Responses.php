<?php

namespace App\Bot\Facebook\States\Listener\Handlers;

/**
 * Class Responses
 * @package App\Bot\Facebook\States\Listener\Handlers
 */
class Responses extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Handler
{
    const STATUS_SHOW_TEMPLATES = 'custom_status';

    /**
     * @param string $name
     *
     * @return \Botomatic\Engine\Facebook\Entities\Response
     */
    public function responseDefault(string $name) : \Botomatic\Engine\Facebook\Entities\Response
    {
        return $this->response->addMessage(
            localizator()->translate('listener', 'hello', ['name' => $name])
        )
            ->sendResponse()
            ->setStatusActive();
    }

    /**
     * @return \Botomatic\Engine\Facebook\Entities\Response
     */
    public function options() : \Botomatic\Engine\Facebook\Entities\Response
    {
        return $this->response

            ->addQuickReplies(new \App\Bot\Facebook\Templates\QuickReplies\General\Options (
                localizator()->translate('listener', 'options')
            ))
            ->sendResponse()
            ->setStatusActive();
    }

    /**
     * @return \Botomatic\Engine\Facebook\Entities\Response
     */
    public function finish() : \Botomatic\Engine\Facebook\Entities\Response
    {
        return $this->response->setStatusFinish();
    }

    /**
     * @return \Botomatic\Engine\Facebook\Entities\Response
     */
    public function showTemplates() : \Botomatic\Engine\Facebook\Entities\Response
    {
        return $this->response->setStatus(self::STATUS_SHOW_TEMPLATES);
    }
}
