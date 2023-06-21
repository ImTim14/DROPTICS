<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Communication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the communication page on Droptics.
    |
    */

    'button' => [
        'email' => 'Email nou',
        'profile' => 'Vizualizează profilul',
        'text' => 'Mesaj nou / SMS'
    ],
    'input' => [
        'label' => [
            'message' => 'Mesaj',
            'recipients' => 'Destinatari',
            'subject' => 'Subiect'
        ],
        'option' => [
            'admins' => 'Toți administratorii',
            'default' => 'Alege un destinatar',
            'brokers' => 'Toți brokerii',
            'clients' => 'Toți clienții',
            'empty' => 'Nu sunt utilizatori înregistrați cu :company_name',
            'staff' => 'Toți agenții'
        ],
        'placeholder' => [
            'message' => 'Mesaj',
            'subject' => 'Subiect'
        ]
    ],
    'label' => [
        'address' => 'Adresă',
        'birthday' => 'Data nașterii',
        'email' => 'Email',
        'phone' => 'Număr de telefon'
    ],
    'message' => [
        'error' => [
            'invalid' => [
                'phone' => 'Vă rugăm să utilizați formatul corect pentru țara dumneavoastră'
            ],
            'missing' => [
                'email' => 'Nu am putut găsi adresa de email specificată',
                'text' => 'Nu am putut găsi mesajul text specificat'
            ]
        ],
        'info' => [
            'deleted' => ':type a fost șters!',
            'sent' => ':type tău este în curs de trimitere!'
        ],
        'warning' => [
            'text' => 'Trimiterea de mesaje text / SMS a fost dezactivată pentru această companie (:company_name)'
        ]
    ],
    'modal' => [
        'button' => [
            'cancel' => 'Anulează',
            'confirm' => 'Trimite',
            'dismiss' => 'Renunță',
            'or' => 'SAU'
        ],
        'content' => [
            'yours' => 'Cu respect'
        ],
        'header' => [
            'email' => 'Email nou',
            'text' => 'Mesaj nou / SMS'
        ],
        'instruction' => [
            'email' => 'Creează un email nou.',
            'send' => 'Trimite :type către :name',
            'text' => 'Creează un mesaj nou / SMS.'
        ]
    ],
    'status' => [
        'active' => ':role activ',
        'inactive' => ':role inactiv'
    ],
    'swal' => [
        'warning' => [
            'delete' => [
                'cancel' => 'Anulează',
                'confirm' => 'Da, șterge!',
                'title' => 'Ești sigur',
                'text' => ':type va fi șters definitiv.'
            ]
        ]
    ],
    'table' => [
        'data' => [
            'action' => [
                'delete' => 'Șterge',
                'emails' => 'Citește emailuri',
                'read' => 'Citește',
                'texts' => 'Citește mesaje text'
            ],
            'pagination' => [
                'showing' => 'Se afișează :start - :stop din :total'
            ]
        ],
        'header' => [
            'actions' => 'Acțiuni',
            'date' => 'Data',
            'email' => 'Emailuri',
            'from' => 'De la',
            'message' => 'Mesaj',
            'name' => 'Nume',
            'number' => '#Nr.',
            'subject' => 'Subiect',
            'text' => 'Mesaje text / SMS',
            'type' => 'Tip'
        ],
        'message' => [
            'empty' => 'Nu ai primit sau trimis nimic încă!'
        ],
        'title' => [
            'emails' => 'Emailuri cu :name',
            'texts' => 'Mesaje text / SMS cu :name'
        ]
    ],
    'title' => [
        'emails' => 'Emailuri',
        'main' => 'Comunicare',
        'texts' => 'Mesaje text'
    ],

];
