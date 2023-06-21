<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match text used 
    | on the settings page on Droptics.
    |
    */

    'accordion' => [
        'header' => [
            'reminder' => 'Notificare'
        ]
    ],
    'button' => [
        'add_client_field' => 'Adaugă Câmp Personalizat Client',
        'add_policy_field' => 'Adaugă Câmp Personalizat Poliță',
        'add_reminder' => 'Adaugă Notificare',
        'save' => 'Salvează Modificările'
    ],
    'input' => [
        'label' => [
            'address' => 'Adresă',
            'commission_rate' => 'Rată Comision (%)',
            'confirm_password' => 'Confirmă Parola',
            'current_password' => 'Parolă Curentă',
            'currency' => 'Monedă',
            'custom_default' => 'Valoare Implicită',
            'custom_field' => 'Câmpuri Personalizate Client|Câmpuri Personalizate Poliță',
            'custom_label' => 'Nume Câmp',
            'custom_options' => 'Listă de Opțiuni',
            'custom_required' => 'Fă câmpul obligatoriu',
            'custom_type' => 'Tipul Câmpului',
            'birthday' => 'Data Nașterii',
            'days' => 'Zile pe Cronologie',
            'email' => 'Email',
            'email_signature' => 'Semnătură Email',
            'favicon' => 'Imagine Favicon',
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'locale' => 'Limba',
            'logo' => 'Imagine Logo',
            'mail_driver' => 'Driver Mail',
            'mail_encryption' => 'Criptare Mail',
            'mail_username' => 'Nume Utilizator Mail',
            'mailgun_domain' => 'Domeniu Mailgun',
            'mailgun_secret' => 'Secret Mailgun',
            'mandrill_secret' => 'Secret Mandrill',
            'message' => 'Mesaj',
            'name' => 'Nume',
            'new_password' => 'Parolă Nouă',
            'phone' => 'Număr de Telefon',
            'product_categories' => 'Categorii Produse (separate prin virgulă)',
            'product_sub_categories' => 'Sub-categorii Produse (separate prin virgulă)',
            'profile_image' => 'Imagine Profil',
            'reminder_status' => 'Activează Notificări',
            'reminder_type' => 'Tipul Notificării',
            'sendmail_path' => 'Cale Mail',
            'subject' => 'Subiect',
            'text_provider' => 'Furnizor Text (SMS)',
            'timeline' => 'Cronologie',

        ],
        'option' => [
            'after_expiry' => 'După Expirare',
            'before_expiry' => 'Înainte de Expirare',
            'custom_default' => [
                'checked' => 'Bifat',
                'unchecked' => 'Debifat'
            ],
            'custom_type' => [
                'checkbox' => 'Casetă de Bifat',
                'date' => 'Data',
                'email' => 'Adresă de Email',
                'hidden' => 'Ascuns',
                'number' => 'Număr',
                'select' => 'Opțiuni',
                'tel' => 'Număr de Telefon',
                'text' => 'Text Scurt',
                'textarea' => 'Text Lung'
            ],
            'email' => 'Email',
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
            ],
            'text' => 'Text'
        ],
        'placeholder' => [
            'address' => 'Adresă',
            'aft_api_key' => 'Cheie API Africa\'s Talking',
            'aft_username' => 'Nume Utilizator Africa\'s Talking',
            'commission_rate' => 'Rată Comision (%)',
            'birthday' => 'Data Nașterii',
            'confirm_password' => 'Confirmă Parola',
            'current_password' => 'Parolă Curentă',
            'custom_default' => 'Valoare Implicită',
            'custom_label' => 'Nume Câmp',
            'custom_options' => 'Listă de Opțiuni',
            'custom_type' => 'Tipul Câmpului',
            'days' => 'Zile pe Cronologie',
            'email' => 'Email',
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'mail_username' => 'Nume Utilizator Mail',
            'mailgun_domain' => 'Domeniu Mailgun',
            'mailgun_secret' => 'Secret Mailgun',
            'mandrill_secret' => 'Secret Mandrill',
            'message' => 'Mesaj',
            'name' => 'Nume',
            'new_password' => 'Parolă Nouă',
            'phone' => 'Număr de Telefon',
            'product_categories' => 'Exemplu: Unu, Doi, Trei',
            'product_sub_categories' => 'Exemplu: Lorem, Ipsum, Ușă',
            'sendmail_path' => 'Cale Sendmail',
            'ses_key' => 'Cheie Amazon SES',
            'ses_region' => 'Regiune Amazon SES',
            'ses_secret' => 'Secret Amazon SES',
            'smtp_host' => 'Gazdă SMTP',
            'smtp_password' => 'Parolă SMTP',
            'smtp_port' => 'Port SMTP',
            'subject' => 'Subiect',
            'twilio_auth_token' => 'Token Autentificare Twilio',
            'twilio_number' => 'Număr Telefon Twilio',
            'twilio_sid' => 'SID Twilio'
        ]
    ],
    'message' => [
        'error' => [
            'company' => [
                'missing' => 'Nu există o astfel de companie!'
            ],
            'file' => 'A apărut o eroare la încărcarea unui fișier - :type: :filename',
            'files' => [
                'favicon' => 'Favicon: ',
                'logo' => 'Logo: ',
                'profile_image' => 'Imagine Profil: '
            ],
            'password' => [
                'change' => 'Parola curentă este incorectă!'
            ],
            'reminders' => [
                'fail' => 'Nu s-au adăugat sau actualizat notificări.',
            ],
            'required' => 'Vă rugăm să selectați o opțiune'
        ],
        'warning' => [
            'reminders' => [
                'update' => 'Nu s-a putut actualiza notificarea #:id'
            ]
        ],
        'success' => [
            'company' => [
                'edit' => 'Setările companiei au fost modificate!'
            ],
            'password' => [
                'change' => 'Parola a fost schimbată cu succes!'
            ],
            'profile' => [
                'edit' => 'Profilul a fost editat!'
            ],
            'reminders' => [
                'edit' => 'Setările notificărilor au fost salvate!'
            ],
            'system' => [
                'edit' => 'Setările sistemului au fost modificate!'
            ]
        ]
    ],
    'tab' => [
        'menu' => [
            'company' => 'Companie',
            'profile' => 'Profil',
            'reminders' => 'Notificări',
            'security' => 'Securitate',
            'system' => 'Sistem'
        ],
        'message' => [
            'company' => 'Actualizați setările companiei',
            'profile' => 'Actualizați profilul',
            'reminders' => 'Notificările sunt emailuri sau SMS-uri trimise clienților înainte sau după expirarea unei polițe pentru a-i reaminti să o reînnoiască',
            'security' => 'Schimbați parola contului dvs.',
            'system' => 'Actualizați setările sistemului'
        ]
    ],
    'title' => 'Setări',

];
