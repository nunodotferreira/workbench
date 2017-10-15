<?php

use Botomatic\Engine\Facebook\Localization\Locales as Locale;

return [

    /*
     * All the conversations used by the listener
     */
    'listener' => [

        /*
         * Description is optional and intended to be used when switching to DB storage and handle texts from UI
         */
        'description' => 'All strings used by the listener',

        /*
         * Texts are stored within "translations" node
         */
        'translations' => [

            'hello' => [
                Locale::en_US => 'Hello :name',
                Locale::de_DE => 'Hallo :name',

                /*
                 * Description is optional and intended to be used when switching to DB storage and handle texts from UI
                 */
                'description' => 'says hi'
            ],

            'options' => [
                Locale::en_US => 'Here are your options:',
            ],

        ]
    ],

    'test_templates' => [
        'translations' => [

            'options_1' => [
                Locale::en_US => 'Botomatic supports all template types.',
            ],

            'options_2' => [
                Locale::en_US => 'Select one from the list below to see it in action:',
            ],

            'button' => [
                Locale::en_US => 'Button template contains a title and up to 3 buttons:',
            ],

            'generic' => [
                Locale::en_US => 'Generic templates contain multiple button template like elements',
            ],

            'quick_reply_button' => [
                Locale::en_US => 'Button',
            ],

            'quick_reply_generic' => [
                Locale::en_US => 'Generic',
            ],

            'quick_reply_list' => [
                Locale::en_US => 'List',
            ],
        ]
    ],

    'simple-conversation' => [
        'translations' => [

            'ask_for_age' => [
                Locale::en_US => 'What is your age?',
            ],

            'not_valid_age' => [
                Locale::en_US => 'That is not a valid age',
            ],

            'age_confirmation' => [
                Locale::en_US => ':age is a good age',
            ],
        ]
    ],

    'flow' => [
        'translations' => [

            'default' => [
                Locale::en_US => 'Another message added by the flow state.',
            ],
        ]
    ],
];