<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the clients' pages on Droptics.
    |
    */

    'button' => [
        'delete' => 'Șterge',
        'edit' => 'Editează',
        'email' => 'Trimite email',
        'new' => 'Client nou',
        'notes' => 'Scrie notă',
        'text' => 'Trimite text'
    ],
    'input' => [
        'label' => [
            'address' => 'Adresă',
            'birthday' => 'Data nașterii',
            'company' => 'Companie',
            'email' => 'Adresă de email',
            'first_name' => 'Prenume',
            'inviter' => 'Invitator client',
            'last_name' => 'Nume',
            'phone' => 'Număr de telefon',
            'profile_image' => 'Imagine de profil'
        ],
        'option' => [
            'empty' => [
                'brokers' => 'Nu sunt înregistrați brokeri cu :company_name',
                'staff' => 'Nu sunt înregistrați agenți cu :company_name'
            ],
            'header' => [
                'brokers' => 'Brokeri',
                'company' => 'Companie',
                'staff' => 'Agenți'
            ],
            'you' => '(Tu)'
        ],
        'placeholder' => [
            'address' => 'Adresă',
            'birthday' => 'Data nașterii',
            'email' => 'Adresă de email',
            'first_name' => 'Prenume',
            'inviter' => 'Invitator client',
            'last_name' => 'Nume',
            'phone' => 'Număr de telefon'
        ]
    ],
    'label' => [
        'address' => 'Adresă',
        'birthday' => 'Data nașterii',
        'communication' => 'Comunicare',
        'details' => 'Detalii',
        'due' => 'Datorie',
        'email' => 'Email',
        'name' => 'Nume',
        'notes' => 'Note',
        'phone' => 'Telefon',
        'policies' => 'Polițe',
        'status' => [
            'paid' => 'Plătit'
        ],
        'total_commission' => 'Comision total',
        'total_sales' => 'Vânzări totale'
    ],
    'link' => [
        'profile' => 'Profil'
    ],
    'message' => [
        'empty' => [
            'clients' => 'Nu ai adăugat niciun client'
        ],
        'error' => [
            'file' => 'A apărut o eroare la încărcarea unui fișier - :type: :filename',
            'missing' => 'Nu există un astfel de client!'
        ],
        'info' => [
            'deleted' => 'Client șters!'
        ],
        'success' => [
            'added' => 'Client adăugat! Li se trimite un email de bun venit.',
            'edited' => 'Profilul clientului a fost editat!'
        ]
    ],
    'menu' => [
        'header' => [
            'button' => 'Mai multe acțiuni',
            'text' => 'Mai multe acțiuni',
            'tooltip' => 'Mai multe acțiuni'
        ],
        'item' => [
            'chat' => 'Chat',
            'delete' => 'Șterge',
            'edit_profile' => 'Editează profilul',
            'email' => 'Trimite email',
            'text' => 'Trimite text'
        ]
    ],
    'modal' => [
        'button' => [
            'confirm' => [
                'edit' => 'Salvează',
                'new' => 'Creează'
            ],
            'or' => 'SAU',
            'cancel' => [
                'edit' => 'Anulează',
                'new' => 'Anulează'
            ]
        ],
        'header' => [
            'edit' => 'Editează clientul',
            'new' => 'Client nou'
        ],
        'instruction' => [
            'edit' => 'Fă modificări la profilul clientului',
            'new' => 'Adaugă un client nou',
            'policy' => 'pentru :name'
        ]
    ],
    'status' => [
        'active' => 'Client activ',
        'inactive' => 'Client inactiv'
    ],
    'swal' => [
        'warning' => [
            'delete' => [
                'confirm' => 'Da, șterge!',
                'title' => 'Ești sigur',
                'text' => 'Clientul și toate datele asociate vor fi șterse definitiv.'
            ]
        ]
    ],
    'table' => [
        'button' => [
            'attachments' => 'Fișier atașat nou',
            'payments' => 'Plată nouă',
            'policies' => 'Poliță nouă'
        ],
        'data' => [
            'action' => [
                'delete' => 'Șterge',
                'read' => 'Citește',
                'view' => 'Vezi'
            ],
            'method' => [
                'card' => 'Card',
                'cash' => 'Numerar',
                'paypal' => 'PayPal'
            ],
            'status' => [
                'free' => 'Liber',
                'paid' => 'Plătit',
                'partial' => 'Parțial',
                'unpaid' => 'Neplătit'
            ]
        ],
        'header' => [
            'action' => 'Acțiune',
            'actions' => 'Acțiuni',
            'amount' => 'Sumă',
            'date' => 'Dată',
            'due' => 'Datorie',
            'file' => 'Nume fișier',
            'from' => 'De la',
            'insurer' => 'Asigurator',
            'message' => 'Mesaj',
            'method' => 'Metodă',
            'name' => 'Nume',
            'number' => '#Nr',
            'policy' => 'Poliță',
            'premium' => 'Prima de asigurare',
            'product' => 'Produs',
            'ref_no' => 'Ref. Nr.',
            'status' => 'Stare',
            'total' => 'Totaluri',
            'uploader' => 'Încărcat de'
        ],
        'message' => [
            'empty' => [
                'attachments' => ':name nu are niciun fișier atașat.',
                'notes' => 'Scrie note despre :name pe care colegii le pot vedea',
                'payments' => ':name nu a efectuat nicio plată.',
                'policies' => ':name nu a încheiat nicio poliță încă.'
            ]
        ],
        'title' => [
            'attachments' => 'Fișiere atașate',
            'notes' => 'Note pentru :name',
            'payments' => 'Plăți',
            'policies' => 'Polițe'
        ]
    ],
    'title' => [
        'all' => 'Clienți',
        'one' => 'Profil client'
    ],

];
