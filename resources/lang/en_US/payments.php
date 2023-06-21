<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Payment Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | with attachments on Droptics.
    |
    */
    'button' => [
        'new' => 'Plată nouă',
    ],
    'input' => [
        'label' => [
            'amount' => 'Sumă',
            'date' => 'Data',
            'method' => 'Metoda de plată',
            'policy' => 'Polita'
        ],
        'option' => [
            'empty' => [
                'policy' => 'Adaugă mai întâi o poliță pentru :name'
            ],
            'method' => [
                'card' => 'Card',
                'cash' => 'Numerar',
                'paypal' => 'PayPal'
            ]
        ],
        'placeholder' => [
            'amount' => 'Sumă',
            'date' => 'Data',
            'method' => 'Metoda de plată',
            'policy' => 'Polita'
        ]
    ],
    'message' => [
        'error' => [
            'missing' => 'Nu există o astfel de plată în înregistrările tale!'
        ],
        'info' => [
            'deleted' => 'Plată ștearsă!'
        ],
        'success' => [
            'added' => 'Plată adăugată!'
        ]
    ],
    'modal' => [
        'button' => [
            'confirm' => [
                'new' => 'Adaugă'
            ],
            'or' => 'SAU',
            'cancel' => [
                'new' => 'Anulează'
            ]
        ],
        'header' => [
            'new' => 'Plată nouă'
        ],
        'instruction' => [
            'new' => "Adaugă o plată pentru polița lui :name"
        ]
    ],
    'swal' => [
        'warning' => [
            'delete' => [
                'confirm' => 'Da, șterge!',
                'title' => 'Sigur',
                'text' => 'Plata și toate informațiile asociate vor fi șterse definitiv.'
            ]
        ]
    ],

];
