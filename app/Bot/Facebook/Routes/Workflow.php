<?php

use App\Bot\Facebook\States\Listener\Listener;
use App\Bot\Facebook\States\Workflow\Test;
use Botomatic\Engine\Facebook\Entities\Response;

return [
    /*--------------------------------------------------------------------------------------------------------------
     *
     *
     * Listener
     *
     *
     -------------------------------------------------------------------------------------------------------------*/
    Listener::class => [
        Response::STATUS_FINISH => Test\SimpleConversation\SimpleConversation::class,
        \App\Bot\Facebook\States\Listener\Handlers\Responses::STATUS_SHOW_TEMPLATES => Test\Templates\Templates::class
    ],

    Test\SimpleConversation\SimpleConversation::class => [
        Response::STATUS_FINISH => Test\FlowState\FlowState::class,
    ]

];