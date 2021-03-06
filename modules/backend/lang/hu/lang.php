<?php

return [
    'auth' => [
        'title' => 'Adminisztrációs oldal'
    ],
    'field' => [
        'invalid_type' => 'A(z) :type mezőtípus érvénytelen.',
        'options_method_not_exists' => "A(z) :model modellosztálynak egy :method() metódus visszaadandó beállításait kell definiálnia a(z) ':field' űrlapmező számára."
    ],
    'widget' => [
        'not_registered' => "A(z) ':name' widget osztálynév regisztrálása nem történt meg.",
        'not_bound' => "A(z) ':name' osztálynevű widget kötése nem történt meg a vezérlővel."
    ],
    'page' => [
        'untitled' => 'Névtelen',
        'access_denied' => [
            'label' => 'Hozzáférés megtagadva',
            'help' => 'Ön nem rendelkezik a szükséges engedélyekkel ennek a lapnak a megtekintéséhez.',
            'cms_link' => 'Vissza a látogatói oldalra'
        ],
        'invalid_token' => [
            'label' => 'Érvénytelen a biztonsági kód.'
        ]
    ],
    'partial' => [
        'not_found_name' => "A(z) ':name' részlap nem található."
    ],
    'account' => [
        'sign_out' => 'Kijelentkezés',
        'login' => 'Belép',
        'reset' => 'Alaphelyzet',
        'restore' => 'Visszaállítás',
        'login_placeholder' => 'felhasználónév',
        'password_placeholder' => 'jelszó',
        'forgot_password' => 'Elfelejtette a jelszavát?',
        'enter_email' => 'Adja meg az e-mail címét',
        'enter_login' => 'Adja meg a felhasználónevét',
        'email_placeholder' => 'e-mail cím',
        'enter_new_password' => 'Adjon meg egy új jelszót',
        'password_reset' => 'Új jelszó kiadása',
        'restore_success' => 'A visszaállítással kapcsolatos utasításokat tartalmazó levél elküldésre került az e-mail címére.',
        'restore_error' => "Nem található a(z) ':login' nevű felhasználó.",
        'reset_success' => 'A jelszó átállítása sikerült. Most már bejelentkezhet.',
        'reset_error' => 'A megadott jelszó átállítási adatok érvénytelenek. Próbálja újra!',
        'reset_fail' => 'Nem állítható vissza a jelszava!',
        'apply' => 'Alkalmaz',
        'cancel' => 'Mégse',
        'delete' => 'Törlés',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Vezérlőpult',
        'widget_label' => 'Widget',
        'widget_width' => 'Szélesség',
        'full_width' => 'teljes szélesség',
        'add_widget' => 'Widget hozzáadása',
        'widget_inspector_title' => 'Widget konfiguráció',
        'widget_inspector_description' => 'A jelentés widget konfigurálása',
        'widget_columns_label' => 'Szélesség :columns',
        'widget_columns_description' => 'A widget szélessége, egy 1 és 10 közötti szám.',
        'widget_columns_error' => 'Adja meg a widget szélességét egy 1 és 10 közötti számként.',
        'columns' => '{1} oszlop|[2,Inf] oszlop',
        'widget_new_row_label' => 'Új sor kényszerítése',
        'widget_new_row_description' => 'A widget új sorba helyezése.',
        'widget_title_label' => 'Widget címe',
        'widget_title_error' => 'A widget címének megadása kötelező.',
        'status' => [
            'widget_title_default' => 'Rendszer állapota',
            'online' => 'online',
            'maintenance' => 'karbantartás',
            'update_available' => '{0} frissítés érhető el!|{1} frissítés érhető el!|[2,Inf] frissítés érhető el!'
        ]
    ],
    'user' => [
        'name' => 'Adminisztrátor',
        'menu_label' => 'Adminisztrátorok',
        'menu_description' => 'A felhasználók, a csoportok és az engedélyek kezelése.',
        'list_title' => 'Adminisztrátorok kezelése',
        'new' => 'Új adminisztrátor',
        'login' => 'Felhasználónév',
        'first_name' => 'Keresztnév',
        'last_name' => 'Vezetéknév',
        'full_name' => 'Teljes név',
        'email' => 'E-mail cím',
        'groups' => 'Csoportok',
        'groups_comment' => 'Adja meg, hogy ez a felhasználó melyik csoportokba tartozik.',
        'avatar' => 'Profilkép',
        'password' => 'Jelszó',
        'password_confirmation' => 'Jelszó megerősítése',
        'permissions' => 'Engedélyek',
        'account' => 'Fiók',
        'superuser' => 'Szuperadmin',
        'superuser_comment' => 'Korlátlan hozzáférés a teljes admin felülethez.',
        'send_invite' => 'Meghívó küldése e-mailben',
        'send_invite_comment' => 'A fentebb megadott adatokat tartalmazza.',
        'delete_confirm' => 'Valóban törölni akarja ezt az adminisztrátort?',
        'return' => 'Vissza az adminisztrátor listához',
        'allow' => 'Engedélyezés',
        'inherit' => 'Öröklés',
        'deny' => 'Tiltás',
        'group' => [
            'name' => 'Csoport',
            'name_field' => 'Név',
            'description_field' => 'Leírás',
            'is_new_user_default_field' => 'Az új adminisztrátorok hozzáadása alapértelmezésként ehhez a csoporthoz.',
            'code_field' => 'Kód',
            'code_comment' => 'Adjon meg egy egyedi kódot, ha az API-val kíván hozzáférni.',
            'menu_label' => 'Csoportok',
            'list_title' => 'Csoportok kezelése',
            'new' => 'Új adminisztrátori csoport',
            'delete_confirm' => 'Valóban törölni akarja ezt a adminisztrátori csoportot?',
            'return' => 'Vissza a csoport listához',
            'users_count' => 'Felhasználók'
        ],
        'preferences' => [
            'not_authenticated' => 'Nincs olyan hitelesített felhasználó, aki számára betölthetők vagy menthetők a beállítások.'
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Keresés...',
        'no_records' => 'Nincs megjeleníthető tartalom.',
        'missing_model' => 'Nincs modell definiálva a(z) :class osztályban használt lista viselkedéshez.',
        'missing_column' => 'Nincsenek oszlopdefiníciók a(z) :columns oszlopok számára.',
        'missing_columns' => 'A(z) :class osztályban használt listának nincsenek definiált listaoszlopai.',
        'missing_definition' => "A lista viselkedés nem tartalmaz oszlopot a(z) ':field' mező számára.",
        'behavior_not_ready' => 'Nem történt meg a lista viselkedés inicializálása és ellenőrizze, hogy meghívta-e a(z) makeLists() függvényt a vezérlőben.',
        'invalid_column_datetime' => "A(z) ':column' oszlopérték nem DateTime objektum, hiányzik egy \$dates hivatkozás a Modellben?",
        'pagination' => 'Megjelenített elemek: :from-:to / :total',
        'prev_page' => 'Előző lap',
        'next_page' => 'Következő lap',
        'loading' => 'Betöltés...',
        'setup_title' => 'Lista beállítása',
        'setup_help' => 'A jelölőnégyzetek használatával válassza ki azokat az oszlopokat, melyeket látni szeretne a listában. Az oszlopok pozícióját felfelé vagy lefelé húzással módosíthatja.',
        'records_per_page' => 'Listázás',
        'records_per_page_help' => 'Adja meg az elemek laponként megjelenítendő számát. Minél nagyobbat választ, annál több időbe kerül a lista frissítése. Az ajánlott érték 20 és 40 közötti.',
        'delete_selected' => 'Kiválasztottak törlése',
        'delete_selected_empty' => 'A törléshez előbb ki kell választani elemet.',
        'delete_selected_confirm' => 'Töröljük a kiválasztott elemeket?',
        'delete_selected_success' => 'Sikeresen törölve lettek a kiválasztott elemek.'
    ],
    'fileupload' => [
        'attachment' => 'Csatolmány',
        'help' => 'Adja meg a csatolmány címét és a leírását.',
        'title_label' => 'Cím',
        'description_label' => 'Leírás',
        'default_prompt' => 'Hozza ide a fájlt vagy kattintson erre: %s',
        'attachment_url' => 'Csatolmány webcíme',
        'upload_file' => 'Fájl feltöltése',
        'upload_error' => 'Feltöltési hiba',
        'remove_confirm' => 'Biztos benne?',
        'remove_file' => 'Fájl eltávolítása'
    ],
    'form' => [
        'create_title' => 'Új :name',
        'update_title' => ':name szerkesztése',
        'preview_title' => ':name villámnézete',
        'create_success' => 'A(z) :name létrehozása sikerült',
        'update_success' => 'A(z) :name módosítása sikerült',
        'delete_success' => 'A(z) :name törlése sikerült',
        'missing_id' => 'Nincs megadva az űrlap rekord azonosítója.',
        'missing_model' => 'A(z) :class osztályban használt űrlap viselkedésnek nincs definiált modellje.',
        'missing_definition' => "Az űrlap viselkedés nem tartalmaz mezőt a(z) ':field' mezőhöz.",
        'not_found' => 'A(z) :id azonosítójú űrlap rekord nem található.',
        'action_confirm' => 'Biztos benne?',
        'create' => 'Létrehozás',
        'create_and_close' => 'Létrehozás és bezárás',
        'creating' => 'Létrehozás...',
        'creating_name' => 'A(z) :name létrehozása...',
        'save' => 'Mentés',
        'save_and_close' => 'Mentés és bezárás',
        'saving' => 'Mentés...',
        'saving_name' => 'A(z) :name mentése...',
        'delete' => 'Törlés',
        'deleting' => 'Törlés...',
        'deleting_name' => 'A(z) :name törlése...',
        'reset_default' => 'Alaphelyzet',
        'resetting' => 'Visszaállítás',
        'resetting_name' => 'A(z) :name visszaállítása',
        'undefined_tab' => 'Egyebek',
        'field_off' => 'Ki',
        'field_on' => 'Be',
        'add' => 'Hozzáadás',
        'apply' => 'Alkalmaz',
        'cancel' => 'Mégse',
        'close' => 'Bezárás',
        'confirm' => 'Megerősítés',
        'reload' => 'Újratöltés',
        'ok' => 'OK',
        'or' => 'vagy',
        'confirm_tab_close' => 'Valóban be akarja zárni a fület? El fognak veszni a nem mentett módosítások.',
        'behavior_not_ready' => 'Nem történt meg az űrlap viselkedésének inicializálása. Ellenőrizze, hogy meghívta-e az initForm() függvényt a vezérlőben.',
        'preview_no_files_message' => 'Nincsennek feltöltve fájlok.',
        'preview_no_record_message' => 'Egy mező sincs kiválasztva.',
        'select' => 'Válasszon',
        'select_all' => 'mind',
        'select_none' => 'egyik sem',
        'select_placeholder' => 'válasszon',
        'insert_row' => 'Sor beszúrása',
        'delete_row' => 'Sor törlése',
        'concurrency_file_changed_title' => 'A fájl megváltozott',
        'concurrency_file_changed_description' => 'Az Ön által szerkesztett fájlt már egy máik felhasználó módosította. Vagy újratöltheti a fájlt és elveszti a változtatásait, vagy felülírja a fájlt.'
    ],
    'relation' => [
        'missing_config' => "A reláció viselkedésnek nincs semmilyen konfigurációja a következőhöz: ':config'.",
        'missing_definition' => "A reláció viselkedés nem tartalmazza a(z) ':field' mező definícióját.",
        'missing_model' => 'A(z) :class osztályban használt reláció viselkedésnek nincs definiált modellje.',
        'invalid_action_single' => 'Ez a művelet nem hajtható végre egyetlen kapcsolaton.',
        'invalid_action_multi' => 'Ez a művelet nem hajtható végre több kapcsolaton.',
        'help' => 'Kattintson egy elemre a hozzáadásához',
        'related_data' => 'Kapcsolódó :name adatok',
        'add' => 'Hozzáadás',
        'add_selected' => 'Kijelöltek hozzáadása',
        'add_a_new' => 'Új :name hozzáadása',
        'link_selected' => 'Kijelöltek csatolása',
        'link_a_new' => 'Új :name csatolása',
        'cancel' => 'Mégse',
        'close' => 'Bezárás',
        'add_name' => ':name hozzáadása',
        'create' => 'Létrehozás',
        'create_name' => ':name létrehozása',
        'update' => 'Frissítés',
        'update_name' => 'A(z) :name frissítése',
        'preview' => 'Előnézet',
        'preview_name' => 'Előnézet neve',
        'remove' => 'Eltávolítás',
        'remove_name' => 'A(z) :name eltávolítása',
        'delete' => 'Törlés',
        'delete_name' => 'A(z) :name törlése',
        'delete_confirm' => 'Biztos benne?',
        'link' => 'Csatolás',
        'link_name' => ':name csatolása',
        'unlink' => 'Csatolás megszüntetése',
        'unlink_name' => ':name csatolásának megszüntetése',
        'unlink_confirm' => 'Biztos benne?'
    ],
    'model' => [
        'name' => 'Modell',
        'not_found' => "Nem található :id azonosítójú ':class' modell.",
        'missing_id' => 'Nincs azonosító megadva a modellrekord kereséséhez.',
        'missing_relation' => "A(z) ':class' modell nem tartalmaz definíciót a(z) ':relation' reláció számára.",
        'missing_method' => "A(z) ':class' modell nem tartalmaz ':method' metódust.",
        'invalid_class' => "A(z) :class osztályban használt :model modell nem érvényes, örökölnie kell a \Model osztályt.",
        'mass_assignment_failed' => "A tömeges hozzárendelés a(z) ':attribute' modell attribútumhoz nem sikerült."
    ],
    'warnings' => [
        'tips' => 'Rendszer konfigurációs tippek',
        'tips_description' => 'Olyan problémák vannak, melyekre figyeljen oda a rendszer megfelelő konfigurálása érdekében.',
        'permissions'  => 'A(z) :name könyvtár vagy alkönyvtárai a PHP számára nem írhatóak. Adjon megfelelő engedélyeket a webkiszolgálónak erre a könyvtárra.',
        'extension' => 'A(z) :name PHP kiterjesztés nincs telepítve. Telepítse ezt a függvénytárat és aktiválja a kiterjesztést.'
    ],
    'editor' => [
        'menu_label' => 'Kódszerkesztő',
        'menu_description' => 'A megjelenésének egyedivé tétele.',
        'font_size' => 'Betűméret',
        'tab_size' => 'Tabulátor mérete',
        'use_hard_tabs' => 'Behúzás tabulátorokkal',
        'code_folding' => 'Kód összecsukása',
        'word_wrap' => 'Tördelés',
        'highlight_active_line' => 'Aktív sor kiemelése',
        'show_invisibles' => 'Láthatatlan karakterek megjelenítése',
        'show_gutter' => 'Margó megjelenítése',
        'theme' => 'Színséma'
    ],
    'tooltips' => [
        'preview_website' => 'Weboldal megtekintése'
    ],
    'mysettings' => [
        'menu_label' => 'Beállításaim',
        'menu_description' => 'A fiókkal kapcsolatos beállítások'
    ],
    'myaccount' => [
        'menu_label' => 'Fiókom',
        'menu_description' => 'A felhasználói adatok módosítása.',
        'menu_keywords' => 'biztonságos bejelentkezés'
    ],
    'branding' => [
        'menu_label' => 'Admin felület',
        'menu_description' => 'A kinézetének módosítása és egyedivé tétele.',
        'brand' => 'Márka',
        'logo' => 'Embléma',
        'logo_description' => 'Töltsön fel egy emblémát az admin oldalon való használathoz.',
        'app_name' => 'Weboldal neve',
        'app_name_description' => 'Ez a név látható a bejelentkező képernyőn.',
        'app_tagline' => 'Weboldal szlogenje',
        'app_tagline_description' => 'Ez a mondat látható a bejelentkező oldalon.',
        'colors' => 'Színek',
        'primary_light' => 'Alap (világos)',
        'primary_dark' => 'Alap (sötét)',
        'secondary_light' => 'Másodlagos (világos)',
        'secondary_dark' => 'Másodlagos (sötét)',
        'styles' => 'Stílusok',
        'custom_stylesheet' => 'Egyéni megjelenés'
    ],
    'backend_preferences' => [
        'menu_label' => 'Admin felület',
        'menu_description' => 'A működésének testreszabása.',
        'locale' => 'Nyelv',
        'locale_comment' => 'Válassza ki az alapértelmezett nyelvet.'
    ],
    'access_log' => [
        'hint' => 'Ez a napló a felhasználók sikeres bejelentkezési kísérleteit listázza ki. A bejegyzéseket :days napig őrzi meg a rendszer.',
        'menu_label' => 'Hozzáférésnapló',
        'menu_description' => 'A felhasználók sikeres bejelentkezéseinek megtekintése.',
        'created_at' => 'Dátum és idő',
        'login' => 'Felhasználónév',
        'ip_address' => 'IP cím',
        'first_name' => 'Keresztnév',
        'last_name' => 'Vezetéknév',
        'email' => 'E-mail cím'
    ],
    'filter' => [
      'all' => 'mind'
    ]
];
