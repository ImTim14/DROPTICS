<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Staff Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the staff pages on Droptics.
    |
    */
    'button'        => [
        'delete'    => 'Șterge',
        'edit'      => 'Editează',
        'email'     => 'Trimite email',
        'new'       => 'Agent nou',
        'text'      => 'Trimite text'
    ],
    'input'         => [
        'label'         => [
            'address'           => 'Adresă',
            'birthday'          => 'Data nașterii',
            'commission_rate'   => 'Rată de comision',
            'company'           => 'Companie de asigurări',
            'email'             => 'Adresă de email',
            'first_name'        => 'Prenume',
            'last_name'         => 'Nume de familie',
            'phone'             => 'Număr de telefon',
            'profile_image'     => 'Imagine de profil'
        ],
        'placeholder'   => [
            'address'           => 'Adresă',
            'birthday'          => 'Data nașterii',
            'commission_rate'   => 'Rată de comision',
            'email'             => 'Adresă de email',
            'first_name'        => 'Prenume',
            'last_name'         => 'Nume de familie',
            'phone'             => 'Număr de telefon'
        ]
    ],
    'label'         => [
        'address'           => 'Adresă',
        'birthday'          => 'Data nașterii',
        'commission'        => 'Comision',
        'email'             => 'Email',
        'phone'             => 'Telefon',
        'sales'             => 'Vânzări',
        'status'            => [
            'paid'  => 'Plătit'
        ],
        'total_commission'  => 'Comision total',
        'total_sales'       => 'Vânzări totale'
    ],
    'link'          => [
        'profile'   => 'Profil'
    ],
    'message'       => [
        'empty'     => 'Nu a fost adăugat niciun agent încă',
        'error'     => [
            'file'      => 'A apărut o eroare la încărcarea fișierului - Imagine de profil: :filename',
            'missing'   => 'Nu există un astfel de agent în compania dumneavoastră!'
        ],
        'info'      => [
            'deleted'   => 'Agentul a fost șters!'
        ],
        'success'   => [
            'added'     => 'Agentul a fost adăugat! A fost trimis un email de bun venit către ei.',
            'edited'    => 'Profilul agentului a fost editat!'
        ]
    ],
    'menu'          => [
        'header'    => [
            'text'      => 'Mai multe acțiuni',
            'tooltip'   => 'Mai multe acțiuni'
        ],
        'item'      => [
            'chat'          => 'Chat',
            'delete'        => 'Șterge',
            'edit_profile'  => 'Editează profilul'
        ]
    ],
    'modal'         => [
        'button'        => [
            'confirm'   => [
                'edit'  => 'Salvează',
                'new'   => 'Creează'
            ],
            'or'        => 'SAU',
            'cancel'    => [
                'edit'  => 'Anulează',
                'new'   => 'Anulează'
            ]
        ],
        'header'        => [
            'edit'      => 'Editează agentul',
            'new'       => 'Agent nou'
        ],
        'instruction'   => [
            'edit'      => 'Realizează modificări în profilul agentului',
            'new'       => 'Adaugă un nou agent',
            'policy'    => 'pentru :name'
        ]
    ],
    'status'        => [
        'active'    => 'Agent activ',
        'inactive'  => 'Agent inactiv'
    ],
    'swal'  => [
        'warning'   => [
            'delete'    => [
                'confirm'   => 'Da, șterge-l!',
                'title'     => 'Ești sigur',
                'text'      => 'Agentul și toate datele aferente vor fi șterse definitiv.'
            ]
        ]
    ],
    'table'         => [
        'data'      => [
            'action'    => [
                'view'  => 'Vizualizează'
            ],
            'status'    => [
                'free'      => 'Gratuit',
                'paid'      => 'Plătit',
                'partial'   => 'Parțial',
                'unpaid'    => 'Neplătit'
            ]
        ],
        'header'    => [
            'action'        => 'Acțiune',
            'commission'    => 'Comision',
            'due'           => 'Datorat',
            'email'         => 'Email',
            'name'          => 'Nume',
            'number'        => '#Nr.',
            'premium'       => 'Primă',
            'policies'      => 'Polițe',
            'product'       => 'Produs',
            'ref_no'        => 'Ref. Nr.',
            'status'        => 'Stare',
            'total'         => 'Totaluri'
        ],
        'message'   => [
            'empty' => [
                'clients'   => ':name nu are încă clienți activi.',
                'policies'  => ':name nu are clienți cu polițe active.'
            ]
        ],
        'title'     => [
            'clients'   => 'Clienți',
            'policies'  => 'Polițe'
        ]
    ],
    'title'         => [
        'all'   => 'Agenți',
        'one'   => 'Profil Agent'
    ],

];
