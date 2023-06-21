<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Broker Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the brokers' pages on Droptics.
    |
    */

    'button' => [
        'delete' => 'Șterge',
        'edit' => 'Editează',
        'email' => 'Trimite email',
        'new' => 'Broker nou',
        'text' => 'Trimite text'
    ],
    'input' => [
        'label' => [
            'address' => 'Adresă',
            'birthday' => 'Data nașterii',
            'commission_rate' => 'Rată comision',
            'company' => 'Companie de asigurări',
            'email' => 'Adresă de email',
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'phone' => 'Număr de telefon',
            'profile_image' => 'Imagine de profil'
        ],
        'placeholder' => [
            'address' => 'Adresă',
            'birthday' => 'Data nașterii',
            'commission_rate' => 'Rată comision',
            'email' => 'Adresă de email',
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'phone' => 'Număr de telefon'
        ]
    ],
    'label' => [
        'address' => 'Adresă',
        'birthday' => 'Data nașterii',
        'commission' => 'Comision',
        'email' => 'Email',
        'phone' => 'Telefon',
        'status' => [
            'paid' => 'Plătit'
        ],
        'sales' => 'Vânzări',
        'total_commission' => 'Comision total',
        'total_sales' => 'Vânzări totale'
    ],
    'link' => [
        'profile' => 'Profil'
    ],
    'message' => [
        'empty' => 'Nu s-au adăugat încă brokeri',
        'error' => [
            'file' => 'A apărut o eroare la încărcarea unei fișiere - Imagine de profil: :filename',
            'missing' => 'Nu există un astfel de broker în compania ta!'
        ],
        'info' => [
            'deleted' => 'Broker șters!'
        ],
        'success' => [
            'added' => 'Broker adăugat! S-a trimis un email de bun venit către ei.',
            'edited' => 'Profilul brokerului a fost editat!'
        ]
    ],
    'menu' => [
        'header' => [
            'text' => 'Mai multe acțiuni',
            'tooltip' => 'Mai multe acțiuni'
        ],
        'item' => [
            'chat' => 'Chat',
            'delete' => 'Șterge',
            'edit_profile' => 'Editează profilul'
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
            'edit' => 'Editează brokerul',
            'new' => 'Broker nou',
            'policy' => 'pentru :name'
        ],
        'instruction' => [
            'edit' => 'Fă modificări la profilul brokerului',
            'new' => 'Adaugă un broker nou',
            'policy' => 'cu :name'
        ]
    ],
    'status' => [
        'active' => 'Broker activ',
        'inactive' => 'Broker inactiv'
    ],
    'swal' => [
        'warning' => [
            'delete' => [
                'confirm' => 'Da, șterge!',
                'title' => 'Ești sigur',
                'text' => 'Brokerul și toate datele asociate vor fi șterse definitiv.'
            ]
        ]
    ],
    'table' => [
        'data' => [
            'action' => [
                'view' => 'Vezi'
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
            'commission' => 'Comision',
            'due' => 'Datorie',
            'email' => 'Email',
            'insurer' => 'Asigurator',
            'name' => 'Nume',
            'number' => '#Nr',
            'premium' => 'Prima de asigurare',
            'policies' => 'Polițe',
            'product' => 'Produs',
            'ref_no' => 'Ref. Nr.',
            'status' => 'Stare',
            'total' => 'Totaluri'
        ],
        'message' => [
            'empty' => [
                'clients' => ' nu are încă clienți înregistrați.',
                'policies' => ' nu are clienți cu polițe.'
            ]
        ],
        'title' => [
            'clients' => 'Clienți',
            'policies' => 'Polițe'
        ]
    ],
    'title' => [
        'all' => 'Brokeri',
        'one' => 'Profil broker'
    ],

];
