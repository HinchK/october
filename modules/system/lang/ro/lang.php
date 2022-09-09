<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Intoarcerea la elementele de baza',
  ],
  'directory' => [
    'create_fail' => 'Nu se poate crea directorul: :name',
  ],
  'file' => [
    'create_fail' => 'Nu se poate crea fisierul: :name',
  ],
  'combiner' => [
    'not_found' => 'Fisierul compus \':name\' nu a fost gasit.',
  ],
  'system' => [
    'name' => 'Sistem',
    'menu_label' => 'Sistem',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Altele',
      'logs' => 'Jurnal',
      'mail' => 'Mail',
      'shop' => 'Magazin',
      'team' => 'Echipa',
      'users' => 'Utilizatori',
      'system' => 'Sistem',
      'social' => 'Social',
      'events' => 'Evenimente',
      'customers' => 'Clienti',
      'my_settings' => 'Setarile mele',
    ],
  ],
  'plugin' => [
    'unnamed' => 'Plugin fara nume',
    'name' => [
      'label' => 'Nume Plugin',
      'help' => 'Denumiti plugin-ul dupa codul sau unic. De exemplu, RainLab.Blog',
    ],
  ],
  'plugins' => [
    'enable_or_disable' => 'Activare sau dezactivare',
    'enable_or_disable_title' => 'Activare sau dezactivare plugin-uri',
    'remove' => 'Inlaturare',
    'refresh' => 'Reimprospatare',
    'disabled_label' => 'Dezactivat',
    'disabled_help' => 'Plugin-urile care sunt dezactivate sunt ignorate de catre aplicatie.',
    'selected_amount' => 'Plugin-uri selectate: :amount',
    'remove_success' => 'Plugin-urile respective au fost inlaturate cu succes din sistem.',
    'refresh_success' => 'Plugin-urile respective au fost actualizate cu succes.',
    'disable_success' => 'Plugin-urile respective au fost dezactivate cu succes.',
    'enable_success' => 'Plugin-urile respective au fost activate cu succes.',
    'unknown_plugin' => 'Plugin-ul a fost inlaturat din sistemul de fisiere.',
  ],
  'project' => [
    'attach' => 'Atasare Proiect',
    'detach' => 'Detasare Proiect',
    'none' => 'Niciunul',
    'id' => [
      'missing' => 'Va rugam sa specificati un ID de Proiect.',
    ],
    'detach_confirm' => 'Sunteti sigur(a) ca doriti sa detasati acest proiect?',
    'unbind_success' => 'Proiectul a fost detasat cu succes.',
  ],
  'settings' => [
    'search' => 'Cautare',
  ],
  'mail' => [
    'menu_label' => 'Configuratie Email',
    'menu_description' => 'Administrare configuratie email.',
    'general' => 'General',
    'method' => 'Metoda trimitere email',
    'sender_name' => 'Nume expeditor',
    'sender_email' => 'Email expeditor',
    'smtp' => 'SMTP',
    'smtp_address' => 'Adresa SMTP',
    'smtp_authorization' => 'Autorizatie SMTP necesara',
    'smtp_authorization_comment' => 'Utilizati aceasta bifa daca serverul SMTP necesita autorizatie.',
    'smtp_username' => 'Utilizator',
    'smtp_password' => 'Parola',
    'smtp_port' => 'Port SMTP',
    'smtp_ssl' => 'Conexiune SSL necesara',
    'sendmail' => 'Sendmail',
    'sendmail_path' => 'Cale catre Sendmail',
    'sendmail_path_comment' => 'Va rugam sa specificati calea catre programul sendmail.',
  ],
  'mail_templates' => [
    'menu_label' => 'Sabloane email',
    'menu_description' => 'Modificati sabloanele de email care sunt trimise catre utilizatori si administratori, administrati aspectul email-urilor.',
    'new_template' => 'Sablon nou',
    'new_layout' => 'Macheta noua',
    'template' => 'Sablon',
    'templates' => 'Sabloane',
    'menu_layouts_label' => 'Machete email',
    'layout' => 'Macheta',
    'layouts' => 'Machete',
    'name' => 'Nume',
    'name_comment' => 'Nume unic folosit ca referinta la acest sablon',
    'code' => 'Cod',
    'code_comment' => 'Cod unic folosit ca referinta la acest sablon',
    'subject' => 'Subiect',
    'subject_comment' => 'Subiect mesaj Email',
    'description' => 'Descriere',
    'content_html' => 'HTML',
    'content_css' => 'CSS',
    'content_text' => 'Text simplu',
    'test_send' => 'Trimitere mesaj de test',
    'test_success' => 'Mesajul de test a fost trimis cu succes.',
    'return' => 'Intoarcere la lista de sabloane',
  ],
  'install' => [
    'plugin_label' => 'Instalare Plugin',
    'missing_plugin_name' => 'Va rugam sa specificati un nume de Plugin pentru instalare.',
    'install_completing' => 'Se finalizeaza procesul de instalare',
    'install_success' => 'Acest plugin a fost instalat cu succes.',
  ],
  'updates' => [
    'plugin_name' => 'Nume',
    'plugin_description' => 'Descriere',
    'plugin_version' => 'Versiune',
    'plugin_author' => 'Autor',
    'plugin_not_found' => 'Plugin not found',
    'core_build' => 'Versiune :build',
    'core_build_help' => 'Ultima versiune este disponibila.',
    'core_downloading' => 'Se descarca fisierele aplicatiei',
    'plugin_downloading' => 'Se descarca plugin-ul: :name',
    'plugin_version_none' => 'Plugin nou',
    'theme_new_install' => 'Instalare tema noua.',
    'theme_downloading' => 'Se descarca tema: :name',
    'theme_extracting' => 'Se dezarhiveaza tema: :name',
    'update_label' => 'Actualizare software',
    'update_completing' => 'Se finalizeaza procesul de actualizare',
    'update_loading' => 'Se incarca actualizarile disponibile...',
    'update_success' => 'Procesul de actualizare a fost finalizat cu succes.',
    'force_label' => 'Forteaza actualizarea',
    'found' => [
      'label' => 'Au fost gasite noi actualizari!',
      'help' => 'Apasati pe "Actualizare software" pentru a incepe procesul de actualizare.',
    ],
    'none' => [
      'label' => 'Nu exista actualizari',
      'help' => 'Nu au fost gasite actualizari disponibile.',
    ],
  ],
  'server' => [
    'connect_error' => 'Eroare la conectarea la server.',
    'response_not_found' => 'Serverul de actualizari nu a putut fi contactat.',
    'response_invalid' => 'Raspuns invalid de la server.',
    'response_empty' => 'Raspuns gol de la server.',
    'file_error' => 'Serverul a esuat sa livreze pachetul software.',
    'file_corrupt' => 'Fisierul de pe server este corupt.',
  ],
  'behavior' => [
    'missing_property' => 'Clasa :class trebuie sa defineasca proprietatea $:property folosita pentru caracteristica :behavior.',
  ],
  'config' => [
    'not_found' => 'Nu a fost gasit fisierul de configurare :file definit pentru :location.',
    'required' => 'Configuratia folosita in :location trebuie sa furnizeze o valoare \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Nu s-a putut extrage fisierul de baza \':file\'.',
  ],
  'event_log' => [
    'hint' => 'Acest jurnal afiseaza o lista de erori potentiale in aplicatie, cum ar fi exceptii sau informatie pentru depanare.',
    'menu_label' => 'Jurnal evenimente',
    'menu_description' => 'Vizualizati mesajele jurnalului de sistem cu inregistrarile de timp si detaliile aferente.',
    'empty_link' => 'Golire jurnal de evenimente',
    'empty_loading' => 'Se goleste jurnalul de evenimente...',
    'empty_success' => 'Jurnalul de evenimente a fost golit cu succes.',
    'return_link' => 'Intoarcere la jurnalul de evenimente',
    'id' => 'ID',
    'id_label' => 'ID eveniment',
    'created_at' => 'Data & Ora',
    'message' => 'Mesaj',
    'level' => 'Nivel',
  ],
  'request_log' => [
    'hint' => 'Acest jurnal afiseaza o lista de cereri efectuate de browser care pot sa necesite atentie. De exemplu, daca un vizitator deschide o pagina in CMS care nu poate fi gasita, o inregistrare va fi creata cu un cod de status 404.',
    'menu_label' => 'Jurnal cereri',
    'menu_description' => 'Vizualizare cereri esuate sau redirectate, precum Pagini care nu au fost gasite (404).',
    'empty_link' => 'Golire jurnal de cereri',
    'empty_loading' => 'Se goleste jurnalul de cereri...',
    'empty_success' => 'Jurnalul cu cereri a fost golit cu succes.',
    'return_link' => 'Intoarcere la jurnal de cereri',
    'id' => 'ID',
    'id_label' => 'ID Jurnal',
    'count' => 'Contor',
    'referer' => 'Refereri',
    'url' => 'URL',
    'status_code' => 'Status',
  ],
  'permissions' => [
    'manage_system_settings' => 'Gestioneaza setarile sistemului',
    'manage_software_updates' => 'Gestioneaza actualizarile software',
    'manage_mail_templates' => 'Gestioneaza sabloanele de email',
    'manage_other_administrators' => 'Gestioneaza alti administratori',
    'view_the_dashboard' => 'Vizualizare panou de control',
  ],
];
