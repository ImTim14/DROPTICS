<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Setup Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the setup page on Droptics.
    |
    */

    'button' => [
        'finish' => 'Finalizează',
        'next' => 'Următorul',
        'prevoius' => 'Anterior'
    ],
    'input' => [
        'label' => [
            'address' => 'Adresă',
            'aft_api_key' => 'Cheia API Africa\'s Talking',
            'aft_username' => 'Nume utilizator Africa\'s Talking',
            'confirm_password' => 'Confirmă parola',
            'currency' => 'Monedă',
            'birthday' => 'Data nașterii',
            'db_database' => 'Numele bazei de date sau fișierul',
            'db_default' => 'Driverul bazei de date',
            'db_host' => 'Gazda bazei de date',
            'db_password' => 'Parola bazei de date',
            'db_username' => 'Numele utilizatorului bazei de date',
            'email' => 'Email',
            'email_signature' => 'Semnătură email',
            'favicon' => 'Imagine favicon',
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'locale' => 'Limba',
            'logo' => 'Imagine logo',
            'mail_driver' => 'Driver de email',
            'mail_encryption' => 'Criptare email',
            'mail_username' => 'Nume utilizator email',
            'mailgun_domain' => 'Domeniu Mailgun',
            'mailgun_secret' => 'Cheie secretă Mailgun',
            'mandrill_secret' => 'Cheie secretă Mandrill',
            'name' => 'Nume',
            'password' => 'Parolă',
            'phone' => 'Număr de telefon',
            'profile_image' => 'Imagine de profil',
            'sendmail_path' => 'Calea Sendmail',
            'ses_key' => 'Cheie Amazon SES',
            'ses_region' => 'Regiune Amazon SES',
            'ses_secret' => 'Secret Amazon SES',
            'smtp_host' => 'Gazdă SMTP',
            'smtp_password' => 'Parolă SMTP',
            'smtp_port' => 'Port SMTP',
            'text_provider' => 'Furnizor de mesaje (SMS)',
            'text_signature' => 'Semnătură mesaj (SMS)',
            'twilio_auth_token' => 'Token de autentificare Twilio',
            'twilio_number' => 'Număr de telefon Twilio',
            'twilio_sid' => 'SID Twilio',
            'url' => 'URL aplicație'
        ],
        'option' => [
            'db_default' => [
                'mysql' => 'MySQL',
                'pgsql' => 'PostgreSQL',
                'sqlite' => 'SQLite',
                'sqlsrv' => 'SQL'
            ],
            'mail_driver' => [
                'mailgun' => 'Mailgun',
                'mandrill' => 'Mandrill',
                'sendmail' => 'Sendmail',
                'ses' => 'Amazon SES',
                'smtp' => 'SMTP'
            ],
            'mail_encryption' => [
                'none' => 'Niciuna',
                'ssl' => 'SSL',
                'tls' => 'TLS'
            ]
        ],
        'placeholder' => [
            'address' => 'Adresă',
            'aft_api_key' => 'Cheia API Africa\'s Talking',
            'aft_username' => 'Nume utilizator Africa\'s Talking',
            'birthday' => 'Data nașterii',
            'confirm_password' => 'Confirmă parola',
            'db_database' => 'Numele bazei de date sau fișierul',
            'db_default' => 'Driverul bazei de date',
            'db_host' => 'Gazda bazei de date',
            'db_password' => 'Parola bazei de date',
            'db_username' => 'Numele utilizatorului bazei de date',
            'email' => 'Email',
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'mail_username' => 'Nume utilizator email',
            'mailgun_domain' => 'Domeniu Mailgun',
            'mailgun_secret' => 'Cheie secretă Mailgun',
            'mandrill_secret' => 'Cheie secretă Mandrill',
            'name' => 'Nume',
            'password' => 'Parolă',
            'phone' => 'Număr de telefon',
            'sendmail_path' => 'Calea Sendmail',
            'ses_key' => 'Cheie Amazon SES',
            'ses_region' => 'Regiune Amazon SES',
            'ses_secret' => 'Secret Amazon SES',
            'smtp_host' => 'Gazdă SMTP',
            'smtp_password' => 'Parolă SMTP',
            'smtp_port' => 'Port SMTP',
            'twilio_auth_token' => 'Token de autentificare Twilio',
            'twilio_number' => 'Număr de telefon Twilio',
            'twilio_sid' => 'SID Twilio',
            'url' => 'URL aplicație'
        ]
    ],
    'message' => [
        'error' => [
            'file' => 'A apărut o eroare la încărcarea unui fișier - :type: :filename',
            'files' => [
                'favicon' => 'Favicon',
                'logo' => 'Logo',
                'profile_image' => 'Imagine de profil'
            ],
            'unauthorised' => 'Nu aveți autorizație pentru a efectua o actualizare. Contactați administratorul sistemului pentru a o face.'
        ],
        'info' => 'Câmpurile obligatorii sunt marcate cu ',
        'success' => [
            'same' => 'Instalarea Droptics dvs. este deja actualizată. Versiunea - :version',
            'setup' => 'Configurarea este completă. Vă rugăm să vă autentificați pentru a continua',
            'update' => 'Instalarea Droptics dvs. a fost actualizată cu succes la versiunea :version'
        ]
    ],
    'sub_title' => 'Se pare că este prima dată când vă aflați aici. Doar câteva lucruri de configurat și veți fi pregătit să continuați.',
    'tab' => [
        'menu' => [
            'step01' => 'Bază de date',
            'step02' => 'Email',
            'step03' => 'Sistem',
            'step04' => 'Companie',
            'step05' => 'Cont'
        ],
        'message' => [
            'step01' => 'Să începem cu cea mai importantă parte, baza de date!',
            'step02' => 'Acestea dictează modul în care se trimite emailul în sistem.',
            'step03' => 'Acestea sunt câteva setări generale pentru sistem.',
            'step04' => 'Aici se configurează compania principală a sistemului.',
            'step05' => 'Acesta configurează contul de super/utilizator al sistemului.'
        ]
    ],
    'title' => 'Configurare',

];
