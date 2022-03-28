<?php

return [
    'plugin' => [
        'name' => 'Tulkojumi',
        'description' => 'Pārvaldiet daudzvalodu tīmekļvietnes.',
        'tab' => 'Tulkojumi',
        'manage_locales' => 'Pārvaldīt lokalizācijas',
        'manage_messages' => 'Pārvaldīt ziņojumus',
    ],
    'locale_picker' => [
        'component_name' => 'Lokalizācijas pārslēgs',
        'component_description' => 'Attēlo izkrītošo sarakstu, lai izvēlētos valodu lapas publiskajā daļā.',
    ],
    'alternate_hreflang' => [
        'component_name' => 'Alternatīvie hrefLang elementi',
        'component_description' => 'Iekļauj valodu alternatīvas kā lapas hreflang elementus'
    ],
    'locale' => [
        'title' => 'Pārvaldīt valodas',
        'update_title' => 'Atjaunot valodu',
        'create_title' => 'Izveidot valodu',
        'select_label' => 'Izvēlēties valodu',
        'default_suffix' => 'noklusējuma',
        'unset_default' => '":locale" valoda jau ir iestatīta kā noklusējuma un nevar tikt atiestatīta.',
        'delete_default' => '":locale" valoda ir noklusējuma un nevar tikt izdzēsta.',
        'disabled_default' => '":locale" valoda ir izslēgta un nevar tikt iestatīta kā noklusējuma.',
        'name' => 'Nosaukums',
        'code' => 'Kods',
        'is_default' => 'Noklusējuma',
        'is_default_help' => 'Noklusējuma valoda attēlo saturu pirms tulkošanas.',
        'is_enabled' => 'Ieslēgta',
        'is_enabled_help' => 'Izslēgtās valodas nebūs pieejamas lapas publiskajā daļā.',
        'not_available_help' => 'Citas valodas nav iestatītas.',
        'hint_locales' => 'Izveidojiet jaunas valodas lapas publiskās daļas satura tulkošanai. Noklusējuma valoda attēlo saturu pirms tas ir ticis tulkots.',
        'reorder_title' => 'Pārkārtot valodas',
        'sort_order' => 'Kārtošanas secība',
    ],
    'messages' => [
        'title' => 'Tulkot ziņojumus',
        'description' => 'Atjaunojiet tulkojumu ziņojumus.',
        'clear_cache_link' => 'Iztīrīt kešatmiņu',
        'clear_cache_loading' => 'Iztīra lietotnes kešatmiņu...',
        'clear_cache_success' => 'Lietotnes kešatmiņa veiksmīgi iztīrīta!',
        'clear_cache_hint' => 'Ja nepieciešams, noklikšķiniet uz <strong>Iztīrīt kešatmiņu</strong>, lai redzētu izmaiņas lapas publiskajā daļā.',
        'scan_messages_link' => 'Skenēt ziņojumus',
        'scan_messages_begin_scan' => 'Sākt skenēšanu',
        'scan_messages_loading' => 'Skenē jaunus ziņojumus...',
        'scan_messages_success' => 'Tēmas veidņu faili veiksmīgi noskenēti!',
        'scan_messages_hint' => 'Noklikšķinot <strong>Skenēt ziņojumus</strong> tiks pārbaudīti aktīvās tēmas faili, mēģinot atrast jaunus ziņojumus, ko nepieciešams tulkot.',
        'scan_messages_process' => 'Šis process mēģinās skenēt aktīvās tēmas failus, lai atrastu ziņojumus, ko nepieciešams tulkot.',
        'scan_messages_process_limitations' => 'Daži ziņojumi var netikt atrasti un tiks attēloti tikai pēc tam, kad tiks pirmo reizi izmantoti izvadē.',
        'scan_messages_purge_label' => 'Vispirms iztīrīt visus ziņojumus',
        'scan_messages_purge_help' => 'Ja atzīmēts, tad pirms skenēšanas tiks dzēsti visi ziņojumi, ieskaitot to tulkojumus.',
        'scan_messages_purge_confirm' => 'Vai esat pārliecināts, ka vēlaties dzēst visas ziņas? Šo darbību nevarēs atsaukt!',
        'scan_messages_purge_deleted_label' => 'Iztīrīt trūkstošos ziņojumus pēc skenēšanas',
        'scan_messages_purge_deleted_help' => 'Ja atzīmēts, tad pēc skenēšanas jebkurš neatrastais ziņojums, ieskaitot tā tulkojumus, tiks dzēsts. Šo darbību nevarēs atsaukt!',
        'hint_translate' => 'Šeit iespējams tulkot ziņojumus, kas tiek lietoti lapas publiskajā daļā; lauku saturs tiks saglabāts automātiski.',
        'hide_translated' => 'Slēpt tulkotās',
        'export_messages_link' => 'Eksportēt ziņojumus',
        'import_messages_link' => 'Importēt ziņojumus',
        'not_found' => 'Nav atrasta',
        'found_help' => 'Skenēšanas laikā atklātās kļūdas.',
        'found_title' => 'Skenēšanas kļūdas',
    ],
];
