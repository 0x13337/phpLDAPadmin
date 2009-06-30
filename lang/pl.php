<?php
// $Header: /cvsroot/phpldapadmin/phpldapadmin/lang/pl.php,v 1.13.2.1 2005/10/09 06:29:41 wurley Exp $

/*        ---   INSTRUCTIONS FOR TRANSLATORS   ---
 *
 * If you want to write a new language file for your language,
 * please submit the file on SourceForge:
 *
 * https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498548
 *
 * Use the option "Check to Upload and Attach a File" at the bottom
 *
 * Read the doc/README-translation.txt for translation instructions.
 *
 * Thank you!
 *
 */

/* $Header: /cvsroot/phpldapadmin/phpldapadmin/lang/pl.php,v 1.13.2.1 2005/10/09 06:29:41 wurley Exp $
 * initial translation from Piotr (DrFugazi) Tarnowski on Version 0.9.3
 */
// Based on en.php version 1.133

// Search form
$lang['simple_search_form_str'] = 'Wyszukiwanie proste';
$lang['advanced_search_form_str'] = 'Wyszukiwanie zaawansowane';
$lang['server'] = 'Serwer';
$lang['search_for_entries_whose'] = 'Szukaj wpis�w w kt�rych';
$lang['base_dn'] = 'Bazowa DN';
$lang['search_scope'] = 'Zakres przeszukiwania';
$lang['show_attributes'] = 'Poka� atrybuty';
$lang['Search'] = 'Szukaj';
$lang['equals'] = 'r�wna si�';
$lang['contains'] = 'zawiera';
$lang['predefined_search_str'] = 'Wybierz predefiniowane wyszukiwanie';
$lang['predefined_searches'] = 'Predefiniowane wyszukiwania';
$lang['no_predefined_queries'] = 'Brak zdefiniowanych zapyta� w config.php.';
$lang['export_results'] = 'wyeksportuj wyniki';
$lang['unrecoginzed_search_result_format'] = 'Nierozpoznany format wyniku wyszukiwania: %s';
$lang['format'] = 'Format';
$lang['list'] = 'lista';
$lang['table'] = 'tabela';
$lang['bad_search_display'] = 'W Twojej konfiguracji (config.php) okre�lona jest nieprawid�owa warto�� dla $default_search_display: %s. Prosz� to poprawi�';
$lang['page_n'] = 'Strona %d';
$lang['next_page'] = 'Nast�pna strona'; // 'Next Page';
$lang['no_results'] = 'Wyszukiwanie nie przynios�o �adnych rezultat�w.';
		      
// Tree browser
$lang['request_new_feature'] = 'Zg�o� zapotrzebowanie';
$lang['report_bug'] = 'Zg�o� b��d';
$lang['schema'] = 'schemat';
$lang['search'] = 'szukaj';
$lang['create'] = 'utw�rz';
$lang['info'] = 'info';
$lang['import'] = 'import';
$lang['refresh'] = 'od�wie�';
$lang['logout'] = 'wyloguj';
$lang['create_new'] = 'Utw�rz nowy wpis';
$lang['view_schema_for'] = 'Poka� schemat dla';
$lang['refresh_expanded_containers'] = 'Od�wie� wszystkie otwarte kontenery dla';
$lang['create_new_entry_on'] = 'Utw�rz nowy wpis na';
$lang['new'] = 'nowy';
$lang['view_server_info'] = 'Poka� informacje o serwerze';
$lang['import_from_ldif'] = 'Importuj wpisy z pliku LDIF';
$lang['logout_of_this_server'] = 'Wyloguj z tego serwera';
$lang['logged_in_as'] = 'Zalogowany/a jako: ';
$lang['this_base_dn_is_not_valid'] = 'To nie jest prawid�owa DN.';
$lang['this_base_dn_does_not_exist'] = 'Ten wpis nie istnieje';
$lang['read_only'] = 'tylko-do-odczytu';
$lang['read_only_tooltip'] = 'Ten atrybut zosta� oznaczony przez administratora phpLDAPadmin jako tylko-do-odczytu';
$lang['could_not_determine_root'] = 'Nie mo�na ustali� korzenia Twojego drzewa LDAP.';
$lang['ldap_refuses_to_give_root'] = 'Wygl�da, �e serwer LDAP jest skonfigurowany tak, aby nie ujawnia� swojego korzenia.';
$lang['please_specify_in_config'] = 'Prosz� okre�li� to w pliku config.php';
$lang['create_new_entry_in'] = 'Utw�rz nowy wpis w';
$lang['login_link'] = 'Logowanie...';
$lang['login'] = 'login';
$lang['base_entry_does_not_exist'] = 'Ten wpis bazowy nie istnieje';
$lang['create_it'] = 'Utworzy� ?';
     
// Entry display
$lang['delete_this_entry'] = 'Usu� ten wpis';
$lang['delete_this_entry_tooltip'] = 'B�dziesz poproszony/a o potwierdzenie tej decyzji';
$lang['copy_this_entry'] = 'Skopiuj lub przenie� ten wpis';
$lang['copy_this_entry_tooltip'] = 'Skopiuj ten obiekt do innej lokalizacji, nowej DN, lub do innego serwera';
$lang['export'] = 'Eksportuj';
$lang['export_lcase'] = 'eksportuj';
$lang['export_tooltip'] = 'Zapisz zrzut tego obiektu';
$lang['export_subtree_tooltip'] = 'Zapisz zrzut tego obiektu i wszystkich potomnych';
$lang['export_subtree'] = 'Eksportuj ca�e poddrzewo';
$lang['create_a_child_entry'] = 'Utw�rz wpis potomny';
$lang['rename_entry'] = 'Zmie� nazw� wpisu';
$lang['rename'] = 'Zmie� nazw�';
$lang['rename_lower'] = 'zmie� nazw�'; // 'rename';
$lang['add'] = 'Dodaj';
$lang['view'] = 'Poka�';
$lang['view_one_child'] = 'Poka� 1 wpis potomny';
$lang['view_children'] = 'Poka� %s wpisy/�w potomne/ych';
$lang['add_new_attribute'] = 'Dodaj nowy atrybut';
$lang['add_new_objectclass'] = 'Dodaj now� klas� obiektu';
$lang['hide_internal_attrs'] = 'Ukryj wewn�trzne atrybuty';
$lang['show_internal_attrs'] = 'Poka� wewn�trzne atrybuty';
$lang['attr_name_tooltip'] = 'Kliknij aby obejrze� definicje schematu dla atrybutu typu \'%s\'';
$lang['none'] = 'brak';
$lang['no_internal_attributes'] = 'Brak atrybut�w wewn�trznych';
$lang['no_attributes'] = 'Ten wpis nie posiada atrybut�w';
$lang['save_changes'] = 'Zapisz zmiany';
$lang['add_value'] = 'dodaj warto��';
$lang['add_value_tooltip'] = 'Dodaj dodatkow� warto�� do atrybutu \'%s\'';
$lang['refresh_entry'] = 'Od�wie�';
$lang['refresh_this_entry'] = 'Od�wie� ten wpis';
$lang['delete_hint'] = 'Wskaz�wka: Aby skasowa� atrybut, wyczy�� pole tekstowe i kliknij zapisz.';
$lang['attr_schema_hint'] = 'Wskaz�wka: Aby zobaczy� schemat dla atrybutu, kliknij na nazwie atrybutu.';
$lang['attrs_modified'] = 'Niekt�re atrybuty (%s) zosta�y zmodyfikowane i s� wyr�nione poni�ej.';
$lang['attr_modified'] = 'Atrybut (%s) zosta� zmodyfikowany i jest wyr�niony poni�ej.';
$lang['viewing_read_only'] = 'Ogl�danie wpisu w trybie tylko-do-odczytu.';
$lang['no_new_attrs_available'] = 'brak nowych atrybut�w dost�pnych dla tego wpisu';
$lang['no_new_binary_attrs_available'] = 'brak nowych atrybut�w binarnych dla tego wpisu';
$lang['binary_value'] = 'Warto�� binarna';
$lang['add_new_binary_attr'] = 'Dodaj nowy atrybut binarny';
$lang['alias_for'] = 'Uwaga: \'%s\' jest aliasem dla \'%s\'';
$lang['required_for'] = 'Atrybut wymagany dla klas(y) obiektu %s';
$lang['required_by_entry'] = 'Ten atrybut jest wymagany dla RDN'; 
$lang['download_value'] = 'pobierz (download) warto��';
$lang['delete_attribute'] = 'usu� atrybut';
$lang['true'] = 'prawda';
$lang['false'] = 'fa�sz';
$lang['none_remove_value'] = 'brak, usu� warto��';
$lang['really_delete_attribute'] = 'Definitywnie usu� atrybut';
$lang['add_new_value'] = 'Dodaj now� warto��';

// Schema browser
$lang['schema_retrieve_error_1']='Serwer nie wspiera w pe�ni protoko�u LDAP.';
$lang['schema_retrieve_error_2']='Twoja wersja PHP niepoprawnie wykonuje zapytanie.';
$lang['schema_retrieve_error_3']='phpLDAPadmin nie wie jak uzyska� schemat z Twojego serwera.';
$lang['schema_retrieve_error_4']='Lub w ostateczno�ci, Tw�j serwer nie dostarcza tej informacji.';
$lang['jump_to_objectclass'] = 'Skocz do klasy obiektu';
$lang['view_schema_for_oclass'] = 'Poka� opis schematu dla tej klasy obiektu';
$lang['jump_to_attr'] = 'Skocz do typu atrybutu';
$lang['jump_to_matching_rule'] = 'Skocz do regu�y dopasowania';
$lang['schema_for_server'] = 'Schemat dla serwera';
$lang['required_attrs'] = 'Wymagane atrybuty';
$lang['required'] = 'wymagane';
$lang['optional_attrs'] = 'Opcjonalne atrybuty';
$lang['optional_binary_attrs'] = 'Opcjonalne atrybuty binarne';
$lang['OID'] = 'OID';
$lang['aliases']='Aliasy';
$lang['desc'] = 'Opis';
$lang['no_description']='brak opisu';
$lang['name'] = 'Nazwa';
$lang['equality']='R�wno��';
$lang['is_obsolete'] = 'Ta klasa obiektu jest przestarza�a';
$lang['inherits'] = 'Dziedziczy z';
$lang['inherited_from']='dziedziczone z';
$lang['parent_to'] = 'Nadrz�dny dla';
$lang['jump_to_this_oclass'] = 'Skocz do definicji klasy obiektu';
$lang['matching_rule_oid'] = 'OID regu�y dopasowania';
$lang['syntax_oid'] = 'OID sk�adni';
$lang['not_applicable'] = 'nie dotyczy';
$lang['not_specified'] = 'nie okre�lone';
$lang['character']='znak'; 
$lang['characters']='znaki/�w';
$lang['used_by_objectclasses']='U�ywane przez klasy obiektu';
$lang['used_by_attributes']='U�ywane przez atrybuty';
$lang['maximum_length']='Maksymalna d�ugo��';
$lang['attribute_types']='Typy atrybut�w';
$lang['syntaxes']='Sk�adnie';
$lang['objectclasses']='Klasy Obiektu';
$lang['matchingrules']='Regu�y Dopasowania';
$lang['oid']='OID';
$lang['obsolete']='Przestarza�e ';
$lang['ordering']='Uporz�dkowanie';
$lang['substring_rule']='Regu�a podci�gu (Substring Rule)';
$lang['single_valued']='Pojedynczo ceniona (Single Valued)';
$lang['collective']='Zbiorcza ';
$lang['user_modification']='Modyfikacja u�ytkownika';
$lang['usage']='U�ycie';
$lang['could_not_retrieve_schema_from']='Nie mo�na uzyska� schematu z';
$lang['type']='Typ';
$lang['no_such_schema_item'] = 'Nie ma takiej pozycji w schemacie: "%s"';
$lang['random_password'] = 'Zosta�o wygenerowane losowe has�o'; // 'A random password was generated for you';

// Deleting entries
$lang['entry_deleted_successfully'] = 'Wpis %s zosta� pomy�lnie usuni�ty.';
$lang['you_must_specify_a_dn'] = 'Musisz okre�li� DN';
$lang['could_not_delete_entry'] = 'Nie mo�na usun�� wpisu: %s';
$lang['no_such_entry'] = 'Nie ma takiego wpisu: %s';
$lang['delete_dn'] = 'Usu� %s';
$lang['permanently_delete_children'] = 'Czy trwale usun�� tak�e wpisy potomne ?';
$lang['entry_is_root_sub_tree'] = 'Ten wpis jest korzeniem poddrzewa zawieraj�cego %s wpis�w.';
$lang['view_entries'] = 'poka� wpisy';
$lang['confirm_recursive_delete'] = 'phpLDAPadmin mo�e rekursywnie usun�� ten wpis i wszystkie jego %s wpisy/�w potomne/ych. Sprawd� poni�sz� list� wpis�w przeznaczonych do usuni�cia.<br /> Czy na pewno chcesz to zrobi� ?';
$lang['confirm_recursive_delete_note'] = 'Uwaga: ta operacja jest potencjalnie bardzo niebezpieczna i wykonujesz j� na w�asne ryzyko. Ta akcja nie mo�e zosta� cofni�ta. We� pod uwag� aliasy, owo�ania i inne rzeczy, kt�re mog� spowodowa� problemy.';
$lang['delete_all_x_objects'] = 'Usu� wszystkie %s obiekty/�w';
$lang['recursive_delete_progress'] = 'Post�p rekursywnego usuwania';
$lang['entry_and_sub_tree_deleted_successfully'] = 'Wpis %s oraz poddrzewo zosta�y pomy�lnie usuni�te.';
$lang['failed_to_delete_entry'] = 'B��d podczas usuwania wpisu %s';

// Deleting attributes
$lang['attr_is_read_only'] = 'Atrybut "%s" jest oznaczony jako tylko-do-odczytu w konfiguracji phpLDAPadmin.';
$lang['no_attr_specified'] = 'Nie okre�lono nazwy atrybutu.';
$lang['no_dn_specified'] = 'Nie okre�lono DN';

// Adding attributes
$lang['left_attr_blank'] = 'Pozostawi�e�/a� pust� warto�� atrybutu. Prosz� wr�ci� i spr�bowa� ponownie.';
$lang['failed_to_add_attr'] = 'B��d podczas dodawania atrybutu.';
$lang['file_empty'] = 'Wybrany plik jest pusty lub nie istnieje. Wr�� i spr�buj ponownie.';
$lang['invalid_file'] = 'B��d bezpiecze�stwa: Za�adowany plik mo�e stanowi� zagro�enie.';
$lang['warning_file_uploads_disabled'] = 'Twoja konfiguracja PHP uniemo�liwia za�adowanie plik�w. Prosz� sprawdzi� php.ini przed kontynuacj�.';
$lang['uploaded_file_too_big'] = 'Za�adowany plik jest zbyt du�y. Prosz� sprawdzi� ustawienie upload_max_size w php.ini';
$lang['uploaded_file_partial'] = 'Wybrany plik zosta� tylko cz�ciowo za�adowany, prawdopodobnie wyst�pi� b��d w sieci.';
$lang['max_file_size'] = 'Maksymalny rozmiar pliku: %s';

// Updating values
$lang['modification_successful'] = 'Modyfikacja zako�czona pomy�lnie.';
$lang['change_password_new_login'] = 'Je�li zmieni�e�/a� has�o, musisz si� zalogowa� ponownie z nowym has�em.';

// Adding objectClass form
$lang['new_required_attrs'] = 'Nowe atrybuty wymagane';
$lang['requires_to_add'] = 'Ta akcja wymaga, aby� doda�/a';
$lang['new_attributes'] = 'nowe atrybuty';
$lang['new_required_attrs_instructions'] = 'Instrukcja: Aby doda� t�/e klas�/y obiektu do tego wpisu, musisz okre�li�';
$lang['that_this_oclass_requires'] = 'co ta klasa obiektu wymaga. Mo�esz zrobi� to w tym formularzu.';
$lang['add_oclass_and_attrs'] = 'Dodaj klas� obiektu i atrybuty';

// General
$lang['chooser_link_tooltip'] = 'Kliknij aby wywo�a� okno i wybra� wpis (DN) graficznie';
$lang['no_updates_in_read_only_mode'] = 'Nie mo�esz wykona� modyfikacji dop�ki serwer jest w trybie tylko-do-odczytu';
$lang['bad_server_id'] = 'Z�y identyfikator (id) serwera';
$lang['not_enough_login_info'] = 'Brak wystarczaj�cych informacji aby zalogowa� si� do serwera. Prosz� sprawdzi� konfiguracj�.';
$lang['could_not_connect'] = 'Nie mo�na pod��czy� si� do serwera LDAP.';
$lang['could_not_connect_to_host_on_port'] = 'Nie mo�na pod��czy� si� do "%s" na port "%s"';
$lang['could_not_perform_ldap_mod_add'] = 'Nie mo�na dokona� operacji ldap_mod_add.';
$lang['home'] = 'Strona g��wna';
$lang['help'] = 'Pomoc';
$lang['success'] = 'Sukces';
$lang['server_colon_pare'] = 'Serwer: ';
$lang['look_in'] = 'Szukam w: ';
$lang['missing_dn_in_query_string'] = 'Nie okre�lono DN w zapytaniu !';
$lang['back_up_p'] = 'Do g�ry...';
$lang['no_entries'] = 'brak wpis�w';
$lang['could_not_det_base_dn'] = 'Nie mo�na okre�li� bazowego DN';
$lang['reasons_for_error']='To mog�o zdarzy� si� z kilku powod�w, z kt�rych najbardziej prawdopodobne to:';
$lang['yes']='Tak';
$lang['no']='Nie';
$lang['go']='Id�';
$lang['delete']='Usu�';
$lang['back']='Powr�t';
$lang['object']='obiekt';
$lang['delete_all']='Usu� wszystko';
$lang['hint'] = 'wskaz�wka';
$lang['bug'] = 'b��d (bug)';
$lang['warning'] = 'ostrze�enie';
$lang['light'] = '�ar�wka'; // the word 'light' from 'light bulb'
$lang['proceed_gt'] = 'Dalej &gt;&gt;';
$lang['no_blowfish_secret'] = 'phpLDAPadmin nie mo�e bezpiecznie szyfrowa� danych, poniewa� zmienna $blowfish_secret nie jest ustawiona w config.php. Nale�y wyedytowa� config.php i wpisa� jaki� �a�cuch znak�w do zmiennej $blowfish_secret';
$lang['jpeg_dir_not_writable'] = 'Prosz� ustawi� zmienn� $jpeg_temp_dir w config.php na katalog z mo�liwo�ci� zapisu plik�w';
$lang['jpeg_dir_not_writable_error'] = 'Nie mo�na zapisa� do katalogu $jpeg_temp_dir %s. Sprawd� prosz� czy Tw�j serwer mo�e zapisywa� pliki w tym katalogu.';
$lang['jpeg_unable_toget'] = 'Nie mo�na pobra� danych jpeg z serwera LDAP dla atrybutu %s.'; 
$lang['jpeg_delete'] = 'Usu� zdj�cie';

// Add value form
$lang['add_new'] = 'Dodaj';
$lang['value_to'] = 'warto�� do';
$lang['distinguished_name'] = 'Wyr�niona Nazwa (DN)';
$lang['current_list_of'] = 'Aktualna lista';
$lang['values_for_attribute'] = 'warto�ci dla atrybutu';
$lang['inappropriate_matching_note'] = 'Uwaga: Je�li nie ustawisz regu�y EQUALITY dla tego atrybutu na Twoim serwerze LDAP otrzymasz b��d "niew�a�ciwe dopasowanie (inappropriate matching)"';
$lang['enter_value_to_add'] = 'Wprowad� warto��, kt�r� chcesz doda�:';
$lang['new_required_attrs_note'] = 'Uwaga: mo�e by� wymagane wprowadzenie nowych atrybut�w wymaganych przez t�/e klas�/y obiektu';
$lang['syntax'] = 'Sk�adnia';

//copy.php
$lang['copy_server_read_only'] = 'Nie mo�esz dokona� modyfikacji dop�ki serwer jest w trybie tylko-do-odczytu';
$lang['copy_dest_dn_blank'] = 'Nie wype�niono docelowej DN.';
$lang['copy_dest_already_exists'] = 'Docelowy wpis (%s) ju� istnieje.';
$lang['copy_dest_container_does_not_exist'] = 'Docelowy kontener (%s) nie istnieje.';
$lang['copy_source_dest_dn_same'] = '�r�d�owa i docelowa DN s� takie same.';
$lang['copy_copying'] = 'Kopiowanie ';
$lang['copy_recursive_copy_progress'] = 'Post�p kopiowania rekursywnego';
$lang['copy_building_snapshot'] = 'Budowanie migawki (snapshot) drzewa do skopiowania... ';
$lang['copy_successful_like_to'] = 'Kopiowanie zako�czone pomy�lnie. Czy chcesz ';
$lang['copy_view_new_entry'] = 'zobaczy� nowy wpis ';
$lang['copy_failed'] = 'B��d podczas kopiowania DN: ';

//edit.php
$lang['missing_template_file'] = 'Uwaga: brak pliku szablonu, ';
$lang['using_default'] = 'U�ywam domy�lnego.';
$lang['template'] = 'Szablon';
$lang['must_choose_template'] = 'Musisz wybra� szablon';
$lang['invalid_template'] = '%s nie jest prawid�owym szablonem';
$lang['using_template'] = 'wykorzystuj�c szablon';
$lang['go_to_dn'] = 'Id� do %s';
$lang['structural_object_class_cannot_remove'] = 'To jest strukturalna klasa obiektu i nie mo�e zosta� usuni�ta.';
$lang['structural'] = 'strukturalna';

//copy_form.php
$lang['copyf_title_copy'] = 'Kopiuj ';
$lang['copyf_to_new_object'] = 'do nowego obiektu';
$lang['copyf_dest_dn'] = 'Docelowa DN';
$lang['copyf_dest_dn_tooltip'] = 'Pe�na DN nowego wpisu do utworzenia poprzez skopiowanie wpisu �r�d�owego';
$lang['copyf_dest_server'] = 'Docelowy serwer';
$lang['copyf_note'] = 'Wskaz�wka: Kopiowanie pomi�dzy r�nymi serwerami dzia�a wtedy, gdy nie wyst�puje naruszenie schemat�w';
$lang['copyf_recursive_copy'] = 'Rekursywne kopiowanie wszystkich potomnych obiekt�w';
$lang['recursive_copy'] = 'Kopia rekursywna';
$lang['filter'] = 'Filtr';
$lang['filter_tooltip'] = 'Podczas rekursywnego kopiowania, kopiowane s� tylko wpisy pasuj�ce do filtra';
$lang['delete_after_copy'] = 'Usu� po skopiowaniu (przenie�):';
$lang['delete_after_copy_warn'] = 'Upewnij si�, �e ustawienia filtra (powy�ej) pozwalaj� na wybranie wszystkich rekord�w podrz�dnych.'; 
     
//create.php
$lang['create_required_attribute'] = 'Brak warto�ci dla wymaganego atrybutu (%s).';
$lang['redirecting'] = 'Przekierowuj�';
$lang['here'] = 'tutaj';
$lang['create_could_not_add'] = 'Nie mo�na doda� obiektu do serwera LDAP.';

//create_form.php
$lang['createf_create_object'] = 'Utw�rz obiekt';
$lang['createf_choose_temp'] = 'Wybierz szablon';
$lang['createf_select_temp'] = 'Wybierz szablon dla procesu tworzenia';
$lang['save_as_file'] = 'Zapisz jako';
$lang['rdn_field_blank'] = 'Pozostawi�e�/a� puste pole RDN.';
$lang['container_does_not_exist'] = 'Kontener kt�ry okre�li�e�/a� (%s) nie istnieje. Spr�buj ponownie.';
$lang['no_objectclasses_selected'] = 'Nie wybra�e�/a� �adnych Klas Obiektu dla tego obiektu. Wr�� prosz� i zr�b to.';
$lang['hint_structural_oclass'] = 'Wskaz�wka: Musisz wybra� dok�adnie jedn� strukturaln� klas� obiektu (wyr�nion� pogrubieniem)';
$lang['template_restricted'] = 'Ten szablon nie jest dost�pny w tym kontenerze'; // 'This template is not allowed in this container.';
$lang['template_invalid'] = 'Ten szablon zosta� zablokowany, prawdopodobnie z powodu brakuj�cego schamatu lub brakuj�cych p�l szablonu XML.'; // 'This template has been disabled, possibly due to missing schema or missing template XML fields.';
	      
//creation_template.php
$lang['ctemplate_on_server'] = 'Na serwerze';
$lang['ctemplate_no_template'] = 'Brak okre�lenia szablonu w zmiennych POST.';
$lang['template_not_readable'] = 'Twoja konfiguracja okre�la obs�ug� "%s" dla tego szablonu, ale tego pliku nie da si� odczyta�, poniewa� uprawnienia s� zbyt restrykcyjne.';
$lang['template_does_not_exist'] = 'Twoja konfiguracja okre�la obs�ug� "%s" dla tego szablonu, ale pliku obs�ugi nie ma w katalogu templates/creation.';
$lang['create_step1'] = 'Krok 1 z 2: Nazwa i klasa/y obiektu';
$lang['create_step2'] = 'Krok 2 z 2: Okre�lenie atrybut�w i warto�ci';
$lang['relative_distinguished_name'] = 'Relatywna Wyr�niona Nazwa (RDN)';
$lang['rdn'] = 'RDN';
$lang['rdn_example'] = '(przyk�ad: cn=MyNewPerson)';
$lang['container'] = 'Kontener';

// search.php
$lang['you_have_not_logged_into_server'] = 'Nie zalogowa�e�/a� si� jeszcze do wybranego serwera, wi�c nie mo�esz go przeszukiwa�.';
$lang['click_to_go_to_login_form'] = 'Kliknij tutaj aby przej�� do formularza logowania';
$lang['unrecognized_criteria_option'] = 'Nierozpoznane kryterium opcji: ';
$lang['if_you_want_to_add_criteria'] = 'Je�li chcesz doda� w�asne kryteria do listy, zmodyfikuj plik search.php aby to obs�u�y�.';
$lang['entries_found'] = 'Znaleziono wpis�w: ';
$lang['filter_performed'] = 'Zastosowano filtr: ';
$lang['search_duration'] = 'Wyszukiwanie wykonane przez phpLDAPadmin w';
$lang['seconds'] = 'sekund(y)';

// search_form_advanced.php
$lang['scope_in_which_to_search'] = 'Przeszukiwany zakres';
$lang['scope_sub'] = 'Sub (ca�e poddrzewo)';
$lang['scope_one'] = 'One (jeden poziom poni�ej bazowej)';
$lang['scope_base'] = 'Base (tylko bazowa dn)';
$lang['standard_ldap_search_filter'] = 'Standardowy filtr dla LDAP. Na przyk�ad: (&(sn=Kowalski)(givenname=Jan))';
$lang['search_filter'] = 'Filtr wyszukiwania';
$lang['list_of_attrs_to_display_in_results'] = 'Lista atrybut�w do wy�wietlenia rezultat�w (rozdzielona przecinkami)';

// search_form_simple.php
$lang['starts with'] = 'zaczyna si� od';
$lang['ends with'] = 'ko�czy si� na';
$lang['sounds like'] = 'brzmi jak';

// server_info.php
$lang['could_not_fetch_server_info'] = 'Nie mo�na uzyska� informacji od serwera LDAP. Mo�e to by� spowodowane <a href="http://bugs.php.net/bug.php?id=29587">b��dem</a> w Twojej wersji PHP albo na przyk�ad tym, �e Tw�j serwer LDAP posiada list� kontroli dost�pu nie zezwalaj�c� na pobranie RootDSE klientom LDAP';
$lang['server_info_for'] = 'Informacja o serwerze: ';
$lang['server_reports_following'] = 'Serwer zwr�ci� nast�puj�ce informacje o sobie';
$lang['nothing_to_report'] = 'Ten serwer nie chce nic powiedzie� o sobie :).';

//update.php
$lang['update_array_malformed'] = 'tablica modyfikacji (update_array) jest zniekszta�cona. To mo�e by� b��d (bug) w phpLDAPadmin. Prosz� to zg�osi�.';
$lang['could_not_perform_ldap_modify'] = 'Nie mo�na wykona� operacji modyfikacji (ldap_modify).';

// update_confirm.php
$lang['do_you_want_to_make_these_changes'] = 'Czy chcesz dokona� tych zmian ?';
$lang['attribute'] = 'Atrybuty';
$lang['old_value'] = 'Stara warto��';
$lang['new_value'] = 'Nowa warto��';
$lang['attr_deleted'] = '[atrybut usuni�ty]';
$lang['commit'] = 'Zatwierd�';
$lang['cancel'] = 'Anuluj';
$lang['you_made_no_changes'] = 'Nie dokonano �adnych zmian';
$lang['go_back'] = 'Powr�t';
$lang['unable_create_samba_pass'] = 'Nie mo�na utworzy� has�a dla samby. Sprawd� prosz� swoj� konfiguracj� w template_config.php'; 

// welcome.php
$lang['welcome_note'] = 'U�yj menu z lewej strony do nawigacji';
$lang['credits'] = 'Lista p�ac';
$lang['changelog'] = 'Historia zmian';
$lang['documentation'] = 'Dokumentacja'; // 'Documentation';
$lang['donate'] = 'Wesprzyj projekt';
$lang['pla_logo'] = 'phpLDAPadmin logo';
     
// Donate.php
$lang['donation_instructions'] = 'Aby wesprze� projekt phpLDAPadmin skorzystaj z jednego z przycisk�w PayPal umieszczonych poni�ej'; 
$lang['donate_amount'] = 'Wesprzyj kwot� %s'; 

$lang['purge_cache'] = 'Wyczy�� cache';
$lang['no_cache_to_purge'] = 'Nie ma czego czy�ci�.';
$lang['done_purging_caches'] = 'Wyczyszczono %s bajt�w pami�ci podr�cznej (cache).';
$lang['purge_cache_tooltip'] = 'Czy�ci wszystkie dane podr�czne (cache) w phpLDAPadmin, ��cznie ze schematami serwera';

// view_jpeg_photo.php
$lang['unsafe_file_name'] = 'Niebezpieczna nazwa pliku: ';
$lang['no_such_file'] = 'Nie znaleziono pliku: ';

//function.php
$lang['auto_update_not_setup'] = 'Zezwoli�e�/a� na automatyczne nadawanie uid (auto_uid_numbers) dla <b>%s</b> w konfiguracji, ale nie okre�li�e�/a� mechanizmu (auto_uid_number_mechanism). Prosz� skorygowa� ten problem.'; 
$lang['uidpool_not_set'] = 'Okre�li�e�/a� mechanizm autonumerowania uid "auto_uid_number_mechanism" jako "uidpool" w konfiguracji Twojego serwera <b>%s</b>, lecz nie okre�li�e�/a� audo_uid_number_uid_pool_dn. Prosz� okre�l to zanim przejdziesz dalej.';
$lang['uidpool_not_exist'] = 'Wygl�da na to, �e uidPool, kt�r� okre�li�e�/a� w Twojej konfiguracji ("%s") nie istnieje.';
$lang['specified_uidpool'] = 'Okre�li�e�/a� "auto_uid_number_mechanism" jako "search" w konfiguracji Twojego serwera <b>%s</b>, ale nie okre�li�e�/a� bazy "auto_uid_number_search_base". Zr�b to zanim przejdziesz dalej.';
$lang['auto_uid_invalid_credential'] = 'Nie mo�na pod��czy� do <b>%s</b> z podan� to�samo�ci� auto_uid. Prosz� sprawdzi� sw�j plik konfiguracyjny.';
$lang['bad_auto_uid_search_base'] = 'W Twojej konfiguracji phpLDAPadmin okre�lona jest nieprawid�owa warto�� auto_uid_search_base dla serwera %s';
$lang['auto_uid_invalid_value'] = 'Okre�li�e�/a� b��dn� warto�� dla auto_uid_number_mechanism ("%s") w konfiguracji. Tylko "uidpool" i "search" s� poprawne. Prosz� skorygowa� ten problem.';
$lang['error_auth_type_config'] = 'B��d: Masz b��d w pliku konfiguracji. Trzy mo�liwe warto�ci dla auth_type w sekcji $servers to \'session\', \'cookie\' oraz \'config\'.  Ty wpisa�e�/a� \'%s\', co jest niedozwolone. ';
$lang['unique_attrs_invalid_credential'] = 'Nie mo�na pod��czy� do <b>%s</b> z podan� to�samo�ci� unique_attrs. Prosz� sprawdzi� sw�j plik konfiguracyjny.';
$lang['unique_attr_failed'] = 'Pr�ba dodania <b>%s</b> (<i>%s</i>) do <br><b>%s</b><br> jest NIEDOZWOLONA. Ten atrybut/warto�� nale�y do innego wpisu.<p>Je�li chcesz, mo�esz <a href=\'%s\'>poszuka�</a> tego wpisu.';
$lang['php_install_not_supports_tls'] = 'Twoja instalacja PHP nie wspiera TLS.';
$lang['could_not_start_tls'] = 'Nie mo�na uruchomi� TLS. Prosz� sprawdzi� konfiguracj� serwera LDAP.';
$lang['could_not_bind_anon'] = 'Nie mo�na anonimowo pod��czy� do serwera.';
$lang['could_not_bind'] = 'Nie mo�na pod��czy� si� do serwera LDAP.';
$lang['anonymous_bind'] = 'Pod��czenie anonimowe';
$lang['bad_user_name_or_password'] = 'Z�a nazwa u�ytkownika lub has�o. Spr�buj ponownie.';
$lang['successfully_logged_in_to_server'] = 'Pomy�lnie zalogowano do serwera <b>%s</b>';
$lang['could_not_set_cookie'] = 'Nie mo�na ustawi� ciasteczka (cookie).';
$lang['ldap_said'] = 'LDAP odpowiedzia�: %s';
$lang['ferror_error'] = 'B��d';
$lang['fbrowse'] = 'przegl�daj';
$lang['delete_photo'] = 'Usu� fotografi�';
$lang['install_not_support_ext_des'] = 'Twoja systemowa biblioteka crypt nie wspiera rozszerzonego szyfrowania DES'; 
$lang['install_not_support_blowfish'] = 'Twoja systemowa biblioteka crypt nie wspiera szyfrowania blowfish.';
$lang['install_not_support_md5crypt'] = 'Twoja systemowa biblioteka crypt nie wspiera szyfrowania md5crypt.';
$lang['install_no_mash'] = 'Twoja instalacja PHP nie posiada funkcji mhash(). Nie mog� tworzy� haszy SHA.';
$lang['jpeg_contains_errors'] = 'jpegPhoto zawiera b��dy<br />';
$lang['ferror_number'] = 'B��d numer: %s (%s)';
$lang['ferror_discription'] = 'Opis: %s<br /><br />';
$lang['ferror_number_short'] = 'B��d numer: %s<br /><br />';
$lang['ferror_discription_short'] = 'Opis: (brak dost�pnego opisu)<br />';
$lang['ferror_submit_bug'] = 'Czy jest to b��d w phpLDAPadmin ? Je�li tak, prosz� go <a href=\'%s\'>zg�osi�</a>.';
$lang['ferror_unrecognized_num'] = 'Nierozpoznany numer b��du: ';
$lang['ferror_nonfatil_bug'] = '<center><table class=\'notice\'><tr><td colspan=\'2\'><center><img src=\'images/warning.png\' height=\'12\' width=\'13\' />
             <b>Znalaz�e� b��d w phpLDAPadmin (nie krytyczny) !</b></td></tr><tr><td>B��d:</td><td><b>%s</b> (<b>%s</b>)</td></tr><tr><td>Plik:</td>
             <td><b>%s</b> linia <b>%s</b>, wywo�ane z <b>%s</b></td></tr><tr><td>Wersje:</td><td>PLA: <b>%s</b>, PHP: <b>%s</b>, SAPI: <b>%s</b>
             </td></tr><tr><td>Serwer Web:</td><td><b>%s</b></td></tr><tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>
             Sprawd� prosz� czy ten b��d nie zosta� ju� zg�oszony tutaj</a>.</center></td></tr>
	     <tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>Je�li nie zosta� jeszcze zg�oszony, to mo�esz go zg�osi� tutaj</a>.</center></td></tr>
	     </table></center><br />';
$lang['ferror_congrats_found_bug'] = 'Gratulacje ! Znalaz�e� b��d w phpLDAPadmin.<br /><br />
	     <table class=\'bug\'>
	     <tr><td>B��d:</td><td><b>%s</b></td></tr>
	     <tr><td>Poziom:</td><td><b>%s</b></td></tr>
	     <tr><td>Plik:</td><td><b>%s</b></td></tr>
	     <tr><td>Linia:</td><td><b>%s</b></td></tr>
	     <tr><td>Wywo�ane z:</td><td><b>%s</b></td></tr>
	     <tr><td>Wersja PLA:</td><td><b>%s</b></td></tr>
	     <tr><td>Wersja PHP:</td><td><b>%s</b></td></tr>
	     <tr><td>PHP SAPI:</td><td><b>%s</b></td></tr>
	     <tr><td>Serwer Web:</td><td><b>%s</b></td></tr>
	     </table>
	     <br />
         Prosz� zg�o� ten b��d klikaj�c poni�ej !';

//ldif_import_form
$lang['import_ldif_file_title'] = 'Importuj plik LDIF';
$lang['select_ldif_file'] = 'Wybierz plik LDIF:';
$lang['dont_stop_on_errors'] = 'Nie zatrzymuj si� po napotkaniu b��d�w';

//ldif_import
$lang['add_action'] = 'Dodawanie...';
$lang['delete_action'] = 'Usuwanie...';
$lang['rename_action'] = 'Zmiana nazwy...';
$lang['modify_action'] = 'Modyfikowanie...';
$lang['warning_no_ldif_version_found'] = 'Nie znaleziono numeru wersji. Przyjmuj� 1.';
$lang['valid_dn_line_required'] = 'Wymagana jest poprawna linia DN.';
$lang['missing_uploaded_file'] = 'Brak wgrywanego pliku.';
$lang['no_ldif_file_specified'] = 'Nie okre�lono pliku LDIF. Spr�buj ponownie.';
$lang['ldif_file_empty'] = 'Wgrany plik LDIF jest pusty.';
$lang['empty'] = 'pusty';
$lang['file'] = 'Plik';
$lang['number_bytes'] = '%s bajt�w';
			  
$lang['failed'] = 'Nieudane';
$lang['ldif_parse_error'] = 'B��d przetwarzania LDIF (Parse Error)';
$lang['ldif_could_not_add_object'] = 'Nie mo�na doda� obiektu:';
$lang['ldif_could_not_rename_object'] = 'Nie mo�na zmieni� nazwy obiektu:';
$lang['ldif_could_not_delete_object'] = 'Nie mo�na usun�� obiektu:';
$lang['ldif_could_not_modify_object'] = 'Nie mo�na zmodyfikowa� obiektu:';
$lang['ldif_line_number'] = 'Linia numer:';
$lang['ldif_line'] = 'Linia:';

//delete_form
$lang['sure_permanent_delete_object']='Czy na pewno trwale usun�� ten obiekt ?';
$lang['list_of_entries_to_be_deleted'] = 'Lista wpis�w do usuni�cia:';
$lang['dn'] = 'DN';

// Exports
$lang['export_format'] = 'Format eksportu';
$lang['line_ends'] = 'Zako�czenie linii';
$lang['must_choose_export_format'] = 'Musisz wybra� format eksportu.';
$lang['invalid_export_format'] = 'B��dny format eksportu';
$lang['no_exporter_found'] = 'Nie znaleziono dost�pnego eksportera.';
$lang['error_performing_search'] = 'Napotkano b��d podczas szukania.';
$lang['showing_results_x_through_y'] = 'Pokazywanie rezultat�w %s przez %s.';
$lang['searching'] = 'Szukam...';
$lang['size_limit_exceeded'] = 'Uwaga, przekroczono limit rozmiaru wyszukiwania.';
$lang['entry'] = 'Wpis';
$lang['ldif_export_for_dn'] = 'Eksport LDIF dla: %s';
$lang['generated_on_date'] = 'Wygenerowane przez phpLDAPadmin ( http://phpldapadmin.sourceforge.net/ ) na %s';
$lang['total_entries'] = '��cznie wpis�w';
$lang['dsml_export_for_dn'] = 'Eksport DSLM dla: %s';
$lang['include_system_attrs'] = 'Zawiera atrybuty systemowe';
$lang['csv_spreadsheet'] = 'CVS (arkusz)';

// logins
$lang['password_blank'] = 'Pozostawi�e�/a� puste has�o.';
$lang['no_one_logged_in'] = 'Nikt nie jest zalogowany do tego serwera.';
$lang['could_not_logout'] = 'Nie mo�na wylogowa�.';
$lang['unknown_auth_type'] = 'Nieznany auth_type: %s';
$lang['logged_out_successfully'] = 'Pomy�lnie wylogowano z serwera <b>%s</b>';
$lang['authenticate_to_server'] = 'Uwierzytelnienie dla serwera %s';
$lang['warning_this_web_connection_is_unencrypted'] = 'Uwaga: To po��czenie nie jest szyfrowane.';
$lang['not_using_https'] = 'Nie u�ywasz \'https\'. Przegl�darka b�dzie transmitowa� informacj� logowania czystym tekstem (clear text).';
$lang['login_dn'] = 'Login DN';
$lang['user_name'] = 'Nazwa u�ytkownika';
$lang['password'] = 'Has�o';
$lang['authenticate'] = 'Zaloguj';
$lang['login_not_allowed'] = 'Przykro mi, ale nie masz uprawnie� aby korzysta� z phpLDAPadmin na tym serwerze LDAP.';

// Entry browser
$lang['entry_chooser_title'] = 'Wyb�r wpisu';

// Index page
$lang['need_to_configure'] = 'Musisz skonfigurowa� phpLDAPadmin. Wyedytuj plik \'config.php\' aby to zrobi�. Przyk�ad pliku konfiguracji znajduje si� w \'config.php.example\'';

// Mass deletes
$lang['no_deletes_in_read_only'] = 'Usuwanie jest niedozwolone w trybie tylko-do-odczytu.';
$lang['error_calling_mass_delete'] = 'B��d podczas wywo�ania mass_delete.php. Brakuj�ca mass_delete w zmiennych POST.';
$lang['mass_delete_not_array'] = 'zmienna POST mass_delete nie jest w tablic�.';
$lang['mass_delete_not_enabled'] = 'Masowe usuwanie nie jest dozwolone. Odblokuj to prosz� w config.php przed kontynuacj�.';
$lang['mass_deleting'] = 'Masowe usuwanie';
$lang['mass_delete_progress'] = 'Post�p usuwania na serwerze "%s"';
$lang['malformed_mass_delete_array'] = 'Zniekszta�cona tablica mass_delete.';
$lang['no_entries_to_delete'] = 'Nie wybrano �adnegych wpis�w do usuni�cia.';
$lang['deleting_dn'] = 'Usuwanie %s';
$lang['total_entries_failed'] = '%s z %s wpis�w nie zosta�o usuni�tych.';
$lang['all_entries_successful'] = 'Wszystkie wpisy pomy�lnie usunieto.';
$lang['confirm_mass_delete'] = 'Potwierd� masowe usuni�cie %s wpis�w na serwerze %s';
$lang['yes_delete'] = 'Tak, usu� !';

// Renaming entries
$lang['non_leaf_nodes_cannot_be_renamed'] = 'Nie mo�esz zmieni� nazwy wpisu, posiadaj�cego wpisy potomne (np. operacja zmiany nazwy nie jest dozwolona na wpisach nie b�d�cych li�cmi).';
$lang['no_rdn_change'] = 'Nie zmieni�e�/a� RDN';
$lang['invalid_rdn'] = 'B��dna warto�� RDN';
$lang['could_not_rename'] = 'Nie mo�na zmieni� nazwy wpisu';

// Password checker
$lang['passwords_match'] = 'Has�a zgodne !';
$lang['passwords_do_not_match'] = 'Has�a nie zgadzaj� si� !'; 
$lang['password_checker_tool'] = 'Narz�dzie do sprawdzania hase�';
$lang['to'] = 'Do';
				     
// Templates
$lang['using'] = 'U�ywaj�c';
$lang['switch_to'] = 'Mo�esz prze��czy� si� do ';
$lang['default_template'] = 'domy�lnego szablonu';

// template_config
$lang['user_account'] = 'Konto U�ytkownika (posixAccount)';
$lang['address_book_inet'] = 'Wpis Ksi��ki Adresowej (inetOrgPerson)';
$lang['address_book_moz'] = 'Wpis Ksi��ki Adresowej (mozillaOrgPerson)';
$lang['kolab_user'] = 'Wpis U�ytkownika Kolab';
$lang['organizational_unit'] = 'Jednostka Organizacyjna';
$lang['new_organizational_unit'] = 'Nowa Jednostka Organizacyjna';
$lang['organizational_role'] = 'Rola w Organizacji';
$lang['posix_group'] = 'Grupa Posix';
$lang['samba_machine'] = 'Maszyna Samba NT';
$lang['samba3_machine'] = 'Maszyna Samba 3 NT';
$lang['samba_user'] = 'U�ytkownik Samba';
$lang['samba3_user'] = 'U�ytkownik Samba 3';
$lang['samba3_group'] = 'Przypisanie grupy Samba 3';
$lang['dns_entry'] = 'Wpis DNS';
$lang['simple_sec_object'] = 'Prosty obiekt bezpiecze�stwa (SSO)';
$lang['courier_mail_account'] = 'Konto Pocztowe w Courier';
$lang['courier_mail_alias'] = 'Alias Pocztowy w Courier';
$lang['ldap_alias'] = 'Alias w LDAP';
$lang['sendmail_cluster'] = 'Klaster Sendmail';
$lang['sendmail_domain'] = 'Domena Sendmail';
$lang['sendmail_alias'] = 'Alias Sendmail';
$lang['sendmail_virt_dom'] = 'Wirtualna Domena Sendmail';
$lang['sendmail_virt_users'] = 'Wirtualni U�ytkownicy Sendmail';
$lang['sendmail_relays'] = 'Sendmail Relays';
$lang['custom'] = 'Og�lne';
$lang['samba_domain_name'] = 'Moja nazwa domeny w Samba';
$lang['administrators'] = 'Administratorzy';
$lang['users'] = 'U�ytkownicy';
$lang['guests'] = 'Go�cie';
$lang['power_users'] = 'U�ytkownicy zaawansowani';
$lang['account_ops'] = 'Operatorzy kont';
$lang['server_ops'] = 'Operatorzy serwera';
$lang['print_ops'] = 'Operatorzy drukowania';
$lang['backup_ops'] = 'Operatorzy archiwizacji danych';
$lang['replicator'] = 'Replikator';
$lang['unable_smb_passwords'] = ' Nie mo�na utworzy� hase� Samba. Prosz� sprawdzi� konfiguracj� w template_config.php';
$lang['err_smb_conf'] = 'B��d: masz b��d w konfiguracji samby';
$lang['err_smb_no_name_sid'] = 'B��d: musisz wprowadzi� nazw� oraz sid dla Twojej domeny samby.';
$lang['err_smb_no_name'] = 'B��d: brak nazwy dla domeny samby.';
$lang['err_smb_no_sid'] = 'B��d: brak sid dla domeny samby';

// Samba Account Template
$lang['samba_account'] = 'Konto Samba';
$lang['samba_account_lcase'] = 'konto samba';

// New User (Posix) Account
$lang['t_new_user_account'] = 'Nowe konto u�ytkownika';
$lang['t_hint_customize'] = 'Wskaz�wka: Aby dostosowa� ten szablon, wyedytuj plik templates/creation/new_user_template.php';
$lang['t_name'] = 'Nazwa/Nazwisko';
$lang['t_first_name'] = 'Imi�';
$lang['t_last_name'] = 'Nazwisko';
$lang['t_first'] = 'imi�';
$lang['t_last'] = 'nazwisko';
$lang['t_state'] = 'Stan';
$lang['t_common_name'] = 'Nazwa';
$lang['t_user_name'] = 'Nazwa u�ytkownika';
$lang['t_password'] = 'Has�o';
$lang['t_encryption'] = 'Szyfrowanie';
$lang['t_login_shell'] = 'Pow�oka (shell)';
$lang['t_home_dir'] = 'Katalog domowy';
$lang['t_uid_number'] = 'Numer UID';
$lang['t_auto_det'] = '(automatycznie okre�lony)';
$lang['t_group'] = 'Grupa';
$lang['t_gid_number'] = 'Numer GID';
$lang['t_uid'] = 'ID U�ytkownika';
$lang['t_err_passwords'] = 'Has�a nie zgadzaj� si�. Wr�c i spr�buj ponownie.';
$lang['t_err_field_blank'] = 'Nie mo�esz pozostawi� pustego pola %s. Wr�� i spr�buj ponownie.';
$lang['t_err_field_num'] = 'Pole %s mo�e zawiera� tylko warto�ci numeryczne. Wr�� i spr�buj ponownie.';
$lang['t_err_bad_container'] = 'Kontener kt�ry wybra�e�/a� (%s) nie istnieje. Wr�� i spr�buj ponownie.';
$lang['t_confirm_account_creation'] = 'Potwierd� utworzenie konta';
$lang['t_secret'] = '[tajne]';
$lang['t_create_account'] = 'Utw�rz konto';
$lang['t_verify'] = 'Weryfikuj';

// New Group (Posix)
$lang['t_new_posixgroup'] = 'Nowa Grupa Posix';

// New Address Template
$lang['t_new_address'] = 'Nowy wpis w Ksi��ce Adresowej';
$lang['t_organization'] = 'Organizacja';
$lang['t_address'] = 'Adres';
$lang['t_city'] = 'Miasto';
$lang['t_postal_code'] = 'Kod pocztowy';
$lang['t_street'] = 'Ulica';
$lang['t_work_phone'] = 'Telefon s�u�bowy';
$lang['t_fax'] = 'Fax';
$lang['t_mobile'] = 'Telefon kom�rkowy';
$lang['t_email'] = 'E-mail';
$lang['t_container'] = 'Kontener';
$lang['t_err_cn_blank'] = 'Nie mo�esz pozostawi� pustego pola Nazwa. Wr�� i spr�buj ponownie.';
$lang['t_confim_creation'] = 'Potwierd� utworzenie wpisu:';
$lang['t_create_address'] = 'Utw�rz adres';

// default template
$lang['t_check_pass'] = 'Sprawd� has�o';
$lang['t_auto_submit'] = '(Automatycznie wyliczane przy wys�aniu)'; // '(Auto evalutated on submission.)';

// compare form
$lang['compare'] = 'Por�wnaj';
$lang['comparing'] = 'Por�wnuj� nast�puj�ce DN';
$lang['compare_dn'] = 'Por�wnaj inny DN z';
$lang['with'] = 'z';
$lang['compf_source_dn'] = '�r�d�owa DN';
$lang['compf_dn_tooltip'] = 'Pr�wnaj t� DN z inn�';
$lang['switch_entry'] = 'Zamie� wpisy';
$lang['no_value'] = 'Brak warto�ci';
$lang['compare_with'] = 'Por�wnaj z innym wpisem';
$lang['need_oclass'] = 'Musisz posiada� jedn� z nast�puj�cych klas obiekt�w, aby doda� ten atrybut %s ';

// Time out page
$lang['session_timed_out_1'] = 'Twoja sesja wyga�nie po'; 
$lang['session_timed_out_2'] = 'min. nieaktywno�ci. Zostaniesz automatycznie wylogowany/a.';
$lang['log_back_in'] = 'Aby si� zalogowa� ponownie kliknij w nast�puj�cy link:';
$lang['session_timed_out_tree'] = '(Sesja wygas�a. Automatycznie wylogowano)';
$lang['timeout_at'] = 'Brak aktywno�ci wyloguje Ci� o %s';
?>
