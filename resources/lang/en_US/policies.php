<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Policies Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the policies pages & modals on Droptics.
    |
    */

    'button' => [
        'clear' => 'Șterge',
        'delete' => 'Șterge',
        'edit' => 'Editează',
        'filter' => 'Filtrează',
        'email' => 'Trimite email',
        'new' => 'Polita nouă',
        'profile' => 'Profil',
        'text' => 'Trimite SMS'
    ],
    'input' => [
        'label' => [
            'amount' => 'Suma plătită',
            'beneficiaries' => 'Beneficiari',
            'due' => 'Scadență',
            'expiry' => 'Data expirării',
            'from' => 'de la',
            'max' => 'Maxim',
            'min' => 'Minim',
            'owners' => 'Proprietari ai poliței',
            'payer' => 'Plătitor al poliței',
            'payments' => 'Detalii de plată pentru :name',
            'payment_date' => 'Data plății',
            'payment_method' => 'Metoda de plată',
            'premium' => 'Prima de asigurare',
            'product' => 'Produs',
            'ref_no' => 'Nr. Ref.',
            'renewal' => 'Data reînnoirii',
            'special_remarks' => 'Remarcă specială',
            'to' => 'la',
            'type' => 'Tip',
            'nr_inmat' => 'Nr. de înmatriculare',
            'vehType' => 'Tip vehicul',
            'vehMake' => 'Marca auto',
            'vehModel' => 'Model',
            'ss' => 'Serie de șasiu',
            'lastN' => 'Nume',
            'firstN' => 'Prenume',
            'ownerAdd' => 'Adresă',
            'lastN2' => 'Nume2',
            'firstN2' => 'Prenume2',
            'ownerAdd2' => 'Adresă2',
            'first_reg' => 'Data primei înmatriculări',
            'max_mass' => 'Masă maximă autorizată',
            'cc' => 'Capacitate cilindrică',
            'kw' => 'Kw',
            'combust_type' => 'Combustibil',
            'seats' => 'Număr de locuri',
            'reg_series' => 'Serie CIV',

        ],
        'option' => [
            'empty' => [
                'owners' => 'Nu există clienți disponibili',
                'product' => 'Nu există produse disponibile'
            ],
            'method' => [
                'card' => 'Card',
                'cash' => 'Numerar',
                'paypal' => 'PayPal'
            ],
            'type' => [
                'annually' => 'Anual',
                'monthly' => 'Lunar',
                'weekly' => 'Săptămânal'
            ]
        ],
        'placeholder' => [
            'amount' => 'Suma plătită',
            'beneficiaries' => 'Beneficiari',
            'due' => 'Scadență',
            'expiry' => 'Data expirării',
            'payer' => 'Plătitorul poliței',
            'payment_date' => 'Data plății',
            'payment_method' => 'Metoda de plată',
            'policy_number' => 'ex. HG78YH67',
            'premium' => 'Prima de asigurare',
            'product' => 'Produs',
            'ref_no' => 'Nr. Ref.',
            'renewal' => 'Data reînnoirii',
            'special_remarks' => 'Remarcă specială',
            'type' => 'Tip'
        ]
    ],
    'label' => [
        'address' => 'Adresă',
        'beneficiaries' => 'Beneficiari',
        'birthday' => 'Data nașterii',
        'communication' => 'Comunicare',
        'due' => 'Scadență',
        'details' => 'Detalii',
        'email' => 'Email',
        'expired_and_due' => 'Expirat & Dator',
        'expiry' => 'Data expirării',
        'free' => 'Gratuit',
        'nr_inmat' => 'Nr. de înmatriculare',
        'paid_in_full' => 'Plătit integral',
        'payer' => 'Plătitor',
        'phone' => 'Telefon',
        'premium' => 'Prima de asigurare',
        'product' => 'Produs',
        'renewal' => 'Data reînnoirii',
        'ref_no' => 'Număr de referință',
        'sales' => 'Vânzări',
        'special_remarks' => 'Remarcă specială',
        'total_commission' => 'Comision total',
        'total_sales' => 'Vânzări totale'
    ],
    'link' => [
        'profile' => 'Profil'
    ],
    'message' => [
        'empty' => 'Nu au fost adăugate polițe încă',
        'error' => [
            'missing' => 'Nu există o astfel de poliță în compania ta!'
        ],
        'info' => [
            'deleted' => 'Poliță ștearsă!'
        ],
        'success' => [
            'added' => ':count polițe adăugate',
            'edited' => 'Polița a fost editată cu succes'
        ]
    ],
    'menu' => [
        'header' => [
            'button' => 'Mai multe acțiuni',
            'text' => 'Mai multe acțiuni',
            'tooltip' => 'Mai multe acțiuni'
        ],
        'item' => [
            'delete' => 'Șterge',
            'edit_policy' => 'Editează polița'
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
            'edit' => 'Editează polița',
            'new' => 'Poliță nouă'
        ],
        'instruction' => [
            'edit' => 'Efectuează modificări la poliță',
            'new' => 'Adaugă o nouă poliță'
        ]
    ],
    'ribbon' => [
        'type' => [
            'annually' => 'Anual',
            'monthly' => 'Lunar',
            'weekly' => 'Săptămânal'
        ]
    ],
    'swal' => [
        'warning' => [
            'delete' => [
                'confirm' => 'Da, șterge!',
                'title' => 'Ești sigur',
                'text' => 'Polița și toate datele asociate vor fi șterse definitiv.'
            ]
        ]
    ],
    'table' => [
        'data' => [
            'action' => [
                'view' => 'Vizualizează',
                'delete' => 'Șterge'
            ],
            'pagination' => 'Afișare de la :start la :stop din :total',
            'status' => [
                'free' => 'Gratuit',
                'paid' => 'Plătit',
                'partial' => 'Parțial',
                'unpaid' => 'Neplătit'
            ]
        ],
        'header' => [
            'action' => 'Acțiune',
            'actions' => 'Acțiuni',
            'amount' => 'Suma',
            'client' => 'Client',
            'date' => 'Data',
            'due' => 'Scadență',
            'file' => 'Nume fișier',
            'insurer' => 'Asigurator',
            'method' => 'Metodă',
            'name' => 'Nume',
            'number' => '#Nr',
            'premium' => 'Prima de asigurare',
            'policies' => 'Polițe',
            'product' => 'Produs',
            'ref_no' => 'Nr. Ref.',
            'status' => 'Stare',
            'total' => 'Totaluri',
            'uploader' => 'Încărcat de'
        ],
        'message' => [
            'empty' => [
                'attachments' => 'Polița :policy nu are niciun atașament.',
                'payments' => ':name nu a efectuat nicio plată.'
            ]
        ],
        'title' => [
            'attachments' => 'Atașamente',
            'payments' => 'Plăți'
        ]
    ],
    'title' => [
        'all' => 'Polițe',
        'one' => 'Detalii poliță'
    ],
    'tooltip' => [
        'filter' => 'Filtrează polițele'
    ],

];
