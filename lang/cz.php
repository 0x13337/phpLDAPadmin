<?php
// $Header: /cvsroot/phpldapadmin/phpldapadmin/lang/cz.php,v 1.2 2004/06/01 19:39:52 i18phpldapadmin Exp $
/**
 * Translated to Czech by Radek "rush" Senfeld <rush@logic.cz>

 *        ---   INSTRUCTIONS FOR TRANSLATORS   ---
 *
 * If you want to write a new language file for your language,
 * please submit the file on SourceForge:
 *
 * https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498548
 *
 * Use the option "Check to Upload and Attach a File" at the bottom
 *
 * Thank you!
 *
 */

// Search form
$lang['simple_search_form_str'] = 'Rychl� vyhled�v�n�';
$lang['advanced_search_form_str'] = 'Roz���en� vyhled�v�n�';
$lang['server'] = 'Server';
$lang['search_for_entries_whose'] = 'Vyhledat objekty kde';
$lang['base_dn'] = 'V�choz� <acronym title="Distinguished Name">DN</acronym>';
$lang['search_scope'] = 'Oblast prohled�v�n�';
$lang['show_attributes'] = 'Zobrazovat atributy';
$lang['Search'] = 'Vyhledat';
$lang['predefined_search_str'] = 'Zvolte p�eddefinovan� vyhled�v�n�';
$lang['predefined_searches'] = 'P�eddefinovan� vyhled�v�n�';
$lang['no_predefined_queries'] = 'V config.php nejsou definov�ny ��dn� dotazy.';

// Tree browser
$lang['request_new_feature'] = 'Napi�te si o novou funkci';
$lang['report_bug'] = 'Nahl�sit chybu';
$lang['schema'] = 'sch�ma';
$lang['search'] = 'vyhledat';
$lang['create'] = 'vytvo�it';
$lang['info'] = 'info';
$lang['import'] = 'import';
$lang['refresh'] = 'obnovit';
$lang['logout'] = 'odhl�sit se';
$lang['create_new'] = 'Vytvo�it nov�';
$lang['view_schema_for'] = 'Zobrazit sch�ma pro';
$lang['refresh_expanded_containers'] = 'Obnovit v�echny otev�en� slo�ky';
$lang['create_new_entry_on'] = 'Vytvo�it nov� objekt v';
$lang['new'] = 'nov�';
$lang['view_server_info'] = 'Zobrazit serverem poskytovan� informace';
$lang['import_from_ldif'] = 'Importovat data ze souboru LDIF';
$lang['logout_of_this_server'] = 'Odhl�sit se od tohoto serveru';
$lang['logged_in_as'] = 'P�ihl�en jako: ';
$lang['read_only'] = 'jen pro �ten�';
$lang['read_only_tooltip'] = 'Tento atribut byl administr�torem phpLDAPadminu ozna�en jako "jen pro �ten�".';
$lang['could_not_determine_root'] = 'Nepoda�ilo se zjistit ko�en Va�eho LDAP stromu.';
$lang['ldap_refuses_to_give_root'] = 'Zd� se, �e LDAP server je nastaven� tak, �e nezobrazuje sv�j ko�en.';
$lang['please_specify_in_config'] = 'Nastavte ho pros�m v souboru config.php';
$lang['create_new_entry_in'] = 'Vytvo�it nov� objekt v';
$lang['login_link'] = 'P�ihl�sit se...';
$lang['login'] = 'p�ihl�sit';

// Entry display
$lang['delete_this_entry'] = 'Smazat tento objekt';
$lang['delete_this_entry_tooltip'] = 'Budete po��d�ni o potvrzen� tohoto rozhodnut�';
$lang['copy_this_entry'] = 'Kop�rovat tento objekt';
$lang['copy_this_entry_tooltip'] = 'Okop�ruje tento objekt do jin�ho um�st�n�, nov�ho DN, nebo na jin� server';
$lang['export'] = 'Export';
$lang['export_tooltip'] = 'Ulo�it p�epis objektu';
$lang['export_subtree_tooltip'] = 'Ulo�� p�epis tohoto objektu a v�ech jeho potomk�';
$lang['export_subtree'] = 'Exportovat podstrom';
$lang['create_a_child_entry'] = 'Vytvo�it nov�ho potomka';
$lang['rename_entry'] = 'P�ejmenovat objekt';
$lang['rename'] = 'P�ejmenovat';
$lang['add'] = 'P�idat';
$lang['view'] = 'Zobrazit';
$lang['view_one_child'] = 'Zobrazit potomka';
$lang['view_children'] = 'Zobrazit potomky (%s)';
$lang['add_new_attribute'] = 'P�idat nov� atribut';
$lang['add_new_objectclass'] = 'P�idat objectClass';
$lang['hide_internal_attrs'] = 'Schovat intern� atributy';
$lang['show_internal_attrs'] = 'Zobrazit intern� atributy';
$lang['attr_name_tooltip'] = 'Klepnut�m zobraz�te defini�n� sch�ma pro atribut typu \'%s\'';
$lang['none'] = '��dn�';
$lang['no_internal_attributes'] = '��dn� intern� atributy';
$lang['no_attributes'] = 'Tento objekt nem� atributy';
$lang['save_changes'] = 'Ulo�it zm�ny';
$lang['add_value'] = 'p�idat hodnotu';
$lang['add_value_tooltip'] = 'P�id� dal�� hodnotu k atributu \'%s\'';
$lang['refresh_entry'] = 'Obnovit';
$lang['refresh_this_entry'] = 'Obnovit tento objekt';
$lang['delete_hint'] = 'Rada: <b>Pro smaz�n� atributu</b> vypr�zd�te textov� pol��ko a klepn�te na Ulo�it.';
$lang['attr_schema_hint'] = 'Rada: <b>K zobrazen� sch�mata pro atribut</b> klepn�te na n�zev atributu.';
$lang['attrs_modified'] = 'N�kter� atributy (%s) byly modifikov�n� a jsou zv�razn�ny dole.';
$lang['attr_modified'] = 'Atribut (%s) byl zm�n�n a je zv�razn�n dole.';
$lang['viewing_read_only'] = 'Prohl�en� objekt v m�du "pouze pro �ten�".';
$lang['no_new_attrs_available'] = 'nejsou dostupn� ��dn� nov� atributy pro tento objekt';
$lang['no_new_binary_attrs_available'] = 'nejsou dostupn� ��dn� nov� bin�rn� atributy pro tento objekt';
$lang['binary_value'] = 'Binarn� hodnota';
$lang['add_new_binary_attr'] = 'P�idat nov� binarn� atribut';
$lang['alias_for'] = 'Pozn�mka: \'%s\' je aliasem pro \'%s\'';
$lang['download_value'] = 'st�hnout data';
$lang['delete_attribute'] = 'smazat atribut';
$lang['true'] = 'true';
$lang['false'] = 'false';
$lang['none_remove_value'] = '��dn�, odebrat hodnotu';
$lang['really_delete_attribute'] = 'Skute�n� smazat atribut';
$lang['add_new_value'] = 'P�idat novou hodnotu';

// Schema browser
$lang['the_following_objectclasses'] = 'N�sleduj�c� <b>objectClass</b> jsou podporov�ny t�mto LDAP serverem.';
$lang['the_following_attributes'] = 'N�sleduj�c� <b>attributeType</b> jsou podporov�ny t�mto LDAP serverem.';
$lang['the_following_matching'] = 'N�sleduj�c� <b>krit�ria v�b�ru</b> jsou podporov�ny t�mto LDAP serverem.';
$lang['the_following_syntaxes'] = 'N�sleduj�c� <b>syntaxe</b> jsou podporov�ny t�mto LDAP serverem.';
$lang['schema_retrieve_error_1']='Server pln� nepodporuje LDAP protocol.';
$lang['schema_retrieve_error_2']='Va�e verze PHP korektn� neprovede tento dotaz.';
$lang['schema_retrieve_error_3']='Nebo mo�n� phpLDAPadmin nev� jak z�skat sch�ma pro V� server.';
$lang['jump_to_objectclass'] = 'Jdi na objectClass';
$lang['jump_to_attr'] = 'Jdi na typ atributu';
$lang['jump_to_matching_rule'] = 'Jdi na Matching Rule';
$lang['schema_for_server'] = 'Sch�ma serveru';
$lang['required_attrs'] = 'Vy�adovan� atributy';
$lang['optional_attrs'] = 'Voliteln� atributy';
$lang['optional_binary_attrs'] = 'Voliteln� bin�rn� atributy';
$lang['OID'] = 'OID';
$lang['aliases']='Aliasy';
$lang['desc'] = 'Popis';
$lang['no_description']='��dn� popis';
$lang['name'] = 'N�zev';
$lang['equality']='Equality';
$lang['is_obsolete'] = 'Tato objectClass je <b>zastaral�</b>';
$lang['inherits'] = 'Odvozeno od objectClass';
$lang['inherited_from'] = 'Odvozeno od objectClass';
$lang['parent_to'] = 'Rodi�ovsk� objectClass';
$lang['jump_to_this_oclass'] = 'Jdi na definici t�to objectClass';
$lang['matching_rule_oid'] = 'V�b�rov� krit�rium OID';
$lang['syntax_oid'] = 'Syntaxe OID';
$lang['not_applicable'] = 'nepou�iteln�';
$lang['not_specified'] = 'nespecifikovan�';
$lang['character']='znak'; 
$lang['characters']='znak�';
$lang['used_by_objectclasses']='Pou��v�no t�mito objectClass';
$lang['used_by_attributes']='Pou��vaj� atributy';
$lang['maximum_length']='Maxim�ln� d�lka';
$lang['attributes']='Typy atribut�';
$lang['syntaxes']='Syntaxe';
$lang['matchingrules']='Matching Rules';
$lang['oid']='OID';
$lang['obsolete']='Zastaral�';
$lang['ordering']='�azen�';
$lang['substring_rule']='Substring Rule';
$lang['single_valued']='Single Valued';
$lang['collective']='Collective';
$lang['user_modification']='User Modification';
$lang['usage']='Pou�it�';
$lang['could_not_retrieve_schema_from']='Nelze z�skat sch�ma z';
$lang['type']='Typ';

// Deleting entries
$lang['entry_deleted_successfully'] = 'Objekt \'%s\' byl �sp�n� odstran�n.';
$lang['you_must_specify_a_dn'] = 'Mus�te zadat DN';
$lang['could_not_delete_entry'] = 'Nebylo mo�n� odstranit objekt: %s';
$lang['no_such_entry'] = 'Objekt neexistuje: %s';
$lang['delete_dn'] = 'Smazat %s';
$lang['permanently_delete_children'] = 'Odstranit tak� v�echny potomky?';
$lang['entry_is_root_sub_tree'] = 'Tento objekt je ko�enem podstromu, kter� obsahuje %s objekt�.';
$lang['view_entries'] = 'zobrazit objekty';
$lang['confirm_recursive_delete'] = 'phpLDAPadmin rekurzivn� odstran� tento objekt a v�ech jeho %s potomk�. Pozorn� si prohl�dn�te seznam objekt�, kter� tato operace odstran�. P�ejete si pokra�ovat?';
$lang['confirm_recursive_delete_note'] = 'Pozn�mka: tato operace m��e m�t fat�ln� n�sledky a nelze ji vr�tit zp�t. Speci�ln� pozornost v�nujte alias�m, odkaz�m a ostatn�m v�cem, kter� m��ou zp�sobit probl�my.';
$lang['delete_all_x_objects'] = 'Smazat v�ech %s objekt�';
$lang['recursive_delete_progress'] = 'Pr�b�h rekurzivn�ho odstran�n�';
$lang['entry_and_sub_tree_deleted_successfully'] = 'Objekt %s a jeho podstrom byly �sp�n� odstran�ny.';
$lang['failed_to_delete_entry'] = 'Nepoda�ilo se odstranit objekt %s';
$lang['list_of_entries_to_be_deleted'] = 'Seznam objekt� k odstran�n�:';
$lang['sure_permanent_delete_object']='Jste si skute�n� jisti, �e chcete odstranit tento objekt?';
$lang['dn'] = 'DN';

// Deleting attributes
$lang['attr_is_read_only'] = 'Atribut "%s" je v konfiguraci phpLDAPadminu ozna�en jako "jen pro �ten�".';
$lang['no_attr_specified'] = 'Nebylo zad�no jm�no atributu.';
$lang['no_dn_specified'] = 'Nebylo zad�no DN';

// Adding attributes
$lang['left_attr_blank'] = 'Nevyplnili jste hodnotu atributu. Vra�te se zp�t a akci opakujte.';
$lang['failed_to_add_attr'] = 'P�id�n� atributu selhalo.';
$lang['file_empty'] = 'Soubor, kter� jste zvolili je bu� pr�zdn� nebo neexistuje. Vra�te se pros�m zp�t a akci opakujte.';
$lang['invalid_file'] = 'Bezpe�nostn� chyba: Soubor, kter� uploadujete m��e b�t z�vadn�.';
$lang['warning_file_uploads_disabled'] = 'V konfiguraci PHP jsou zak�z�ny uploady soubor�. Pro pokra�ov�n� upravte pros�m php.ini.';
$lang['uploaded_file_too_big'] = 'Soubor, kter� se pokou�eli ulo�it je p��li� velik�. Upravte pros�m hodnotu upload_max_size v php.ini.';
$lang['uploaded_file_partial'] = 'P�i uploadu souboru do�lo z�ejm� k selh�n� s�t�, nebo� se poda�ilo z�skat jen ��st souboru.';
$lang['max_file_size'] = 'Maxim�ln� velikost souboru: %s';

// Updating values
$lang['modification_successful'] = '�prava prob�hla �sp�n�!';
$lang['change_password_new_login'] = 'Kv�li zm�n� sv�ho hesla se nyn� mus�te p�ihl�sit znova - s nov�m heslem.';

// Adding objectClass form
$lang['new_required_attrs'] = 'Nov� vy�adovan� atribut';
$lang['requires_to_add'] = 'K proveden� t�to akce mus�te p�idat';
$lang['new_attributes'] = 'nov� atributy';
$lang['new_required_attrs_instructions'] = 'N�vod: K p�i�azen� t�to objectClass k vybran�mu objektu mus�te zadat';
$lang['that_this_oclass_requires'] = 'atributy, kter� jsou touto objectClass vy�adov�ny. M��ete tak u�init v tomto formul��i.';
$lang['add_oclass_and_attrs'] = 'P�idat objectClass a atributy';
$lang['objectclasses'] = 'objectClassy';

// General
$lang['chooser_link_tooltip'] = 'Otev�e popup okno, ve kter�m zvol�te DN';
$lang['no_updates_in_read_only_mode'] = 'Nelze prov�d�t �pravy dokud je server v m�du "pouze pro �ten�"';
$lang['bad_server_id'] = '�patn� ID serveru';
$lang['not_enough_login_info'] = 'Nedostatek informac� pro p�ihl�en� k serveru. Ov��te pros�m nastaven�.';
$lang['could_not_connect'] = 'Nelze se p�ipojit k LDAP serveru.';
$lang['could_not_connect_to_host_on_port'] = 'Nelze se p�ipojit k "%s" na portu "%s"';
$lang['could_not_perform_ldap_mod_add'] = 'Nelze prov�st ldap_mod_add operaci.';
$lang['bad_server_id_underline'] = 'server_id: ';
$lang['success'] = 'Hotovo';
$lang['server_colon_pare'] = 'Server: ';
$lang['look_in'] = 'Prohl�en�: ';
$lang['missing_server_id_in_query_string'] = 'V po�adavku nebylo uvedeno ��dn� ID serveru!';
$lang['missing_dn_in_query_string'] = 'V po�adavku nebyl uveden ��dn� DN!';
$lang['back_up_p'] = 'O �rove� v��...';
$lang['no_entries'] = '��dn� objekty';
$lang['not_logged_in'] = 'Nep�ihl�en';
$lang['could_not_det_base_dn'] = 'Nelze zjistit v�choz� DN';
$lang['please_report_this_as_a_bug']='Nahla�te toto pros�m jako chybu.';
$lang['reasons_for_error']='Toto se m��e p�ihodit z n�kolika p���in. Nejpravd�podobn�j�� jsou:';
$lang['yes']='Ano';
$lang['no']='Ne';
$lang['go']='Jdi';
$lang['delete']='Odstranit';
$lang['back']='Zp�t';
$lang['object']='objekt';
$lang['delete_all']='Odstranit v�e';
$lang['url_bug_report']='https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498546';
$lang['hint'] = 'rada';
$lang['bug'] = 'chyba';
$lang['warning'] = 'upozorn�n�';
$lang['light'] = 'light'; // the word 'light' from 'light bulb'
$lang['proceed_gt'] = 'Prove� &gt;&gt;';

// Add value form
$lang['add_new'] = 'P�idat nov�';
$lang['value_to'] = 'hodnota pro';
$lang['distinguished_name'] = 'Distinguished Name';
$lang['current_list_of'] = 'Sou�asn� v�pis';
$lang['values_for_attribute'] = 'hodnoty pro atribut';
$lang['inappropriate_matching_note'] = 'Pozn�mka: Pokud nenastav�te na tomto LDAP serveru pravidlo<br /><tt>EQUALITY</tt> pro tento atribut, dojde k chyb� p�i v�b�ru objekt�.';
$lang['enter_value_to_add'] = 'Zadejte hodnotu, kterou chcete p�idat:';
$lang['new_required_attrs_note'] = 'Pozn�mka: Nen� vylou�en�, �e budete vyzv�ni k zad�n� nov�ch atribut� vy�adovan�ch touto objectClass';
$lang['syntax'] = 'Syntaxe';

//copy.php
$lang['copy_server_read_only'] = 'Nem��ete prov�d�t zm�ny dokud je server v m�du "jen pro �ten�"';
$lang['copy_dest_dn_blank'] = 'Ponechali jste kolonku c�lov� DN pr�zdnou.';
$lang['copy_dest_already_exists'] = 'Objekt (%s) ji� v c�lov�m DN existuje.';
$lang['copy_dest_container_does_not_exist'] = 'C�lov� slo�ka (%s) neexistuje.';
$lang['copy_source_dest_dn_same'] = 'Zdrojov� a c�lov� DN se shoduj�.';
$lang['copy_copying'] = 'Kop�ruji ';
$lang['copy_recursive_copy_progress'] = 'Pr�b�h rekurzivn�ho kop�rov�n�';
$lang['copy_building_snapshot'] = 'Sestavuji obraz stromu ke kop�rov�n�... ';
$lang['copy_successful_like_to'] = 'Kopie �sp�n� dokon�ena! P�ejete si ';
$lang['copy_view_new_entry'] = 'zobrazit nov� objekt';
$lang['copy_failed'] = 'Nepoda�ilo se okop�rovat DN: ';

//edit.php
$lang['missing_template_file'] = 'Upozorn�n�: chyb� �ablona, ';
$lang['using_default'] = 'Pou��v�m v�choz�.';
$lang['template'] = '�ablona';
$lang['must_choose_template'] = 'Mus�te zvolit �ablonu';
$lang['invalid_template'] = '%s je neplatn� �ablona';
$lang['using_template'] = 'pou��t�m �ablony';
$lang['go_to_dn'] = 'Jdi na %s';

//copy_form.php
$lang['copyf_title_copy'] = 'Kop�rovat ';
$lang['copyf_to_new_object'] = 'jako nov� objekt';
$lang['copyf_dest_dn'] = 'C�lov� DN';
$lang['copyf_dest_dn_tooltip'] = 'Cel� DN nov�ho objektu bude vytvo�eno kopi� zdrojov�ho objektu';
$lang['copyf_dest_server'] = 'C�lov� server';
$lang['copyf_note'] = 'Rada: Kop�rov�n� mezi servery funguje jedin� za p�edpokladu, �e nedojde k neshod� sch�mat';
$lang['copyf_recursive_copy'] = 'P�i kop�rov�n� zahrnout v�echny potomky tohoto objektu.';
$lang['recursive_copy'] = 'Rekurzivn� kopie';
$lang['filter'] = 'Filtr';
$lang['filter_tooltip'] = 'P�i rekurzivn� kopii pracovat pouze s objekty, kter� spl�uj� zvolen� filtr';

//create.php
$lang['create_required_attribute'] = 'Nevyplnili jste pole pro vy�adovan� atribut <b>%s</b>.';
$lang['redirecting'] = 'P�esm�rov�v�m';
$lang['here'] = 'zde';
$lang['create_could_not_add'] = 'Nelze objekt do LDAP serveru p�idat.';

//create_form.php
$lang['createf_create_object'] = 'Vytvo�it objekt';
$lang['createf_choose_temp'] = 'Vyberte �ablonu';
$lang['createf_select_temp'] = 'Zvolte �ablonu pro vytvo�en� objektu';
$lang['createf_proceed'] = 'Prov�st';
$lang['rdn_field_blank'] = 'Ponechali jste pole RDN nevypln�n�.';
$lang['container_does_not_exist'] = 'Slo�ka (%s) neexistuje. Opakujte pros�m akci.';
$lang['no_objectclasses_selected'] = 'Nep�i�adili jste ��dn� objectClass k tomuto objektu. Vra�te se pros�m zp�t a akci opakujte.';
$lang['hint_structural_oclass'] = 'N�pov�da: Mus�te zvolit alespo� jednu structural objectClass.';

//creation_template.php
$lang['ctemplate_on_server'] = 'Na serveru';
$lang['ctemplate_no_template'] = 'V POST po�adavku nebyla zasl�na ��dn� �ablona.';
$lang['ctemplate_config_handler'] = 'Va�e nastaven� uv�d� obsluhova� ';
$lang['ctemplate_handler_does_not_exist'] = 'pro tuto �ablonu. Ale tento obsluhova� nelze v adres��i templates/creation nal�zt.';
$lang['create_step1'] = 'Krok 1 ze 2: Jm�no a objectClass(y)';
$lang['create_step2'] = 'Krok 2 ze 2: Atributy a hodnoty';
$lang['relative_distinguished_name'] = 'Relativn� Distinguished Name';
$lang['rdn'] = 'RDN';
$lang['rdn_example'] = '(p��klad: cn=MujNovyUzivatel)';
$lang['container'] = 'Slo�ka';
$lang['alias_for'] = 'Alias k %s';

// search.php
$lang['you_have_not_logged_into_server'] = 'Nelze prov�d�t vyhled�v�n� na serveru bez p�edchoz�ho p�ihl�en�.';
$lang['click_to_go_to_login_form'] = 'Klepnut�m budete p�esm�rov�ni na formul�� k p�ihl�en�';
$lang['unrecognized_criteria_option'] = 'Nezn�m� vyhled�vac� krit�ria: ';
$lang['if_you_want_to_add_criteria'] = 'Pokud si p�ejete p�idat svoje vlastn� vyhled�vac� krit�ria, ujist�te se, �e jste je p�idali do search.php.';
$lang['entries_found'] = 'Nalezen� objekty: ';
$lang['filter_performed'] = 'Uplatn�n� filtr: ';
$lang['search_duration'] = 'Vyhled�v�n� dokon�eno za';
$lang['seconds'] = 'sekund';

// search_form_advanced.php
$lang['scope_in_which_to_search'] = 'Oblast vyhled�v�n�';
$lang['scope_sub'] = 'Cel� podstrom';
$lang['scope_one'] = 'O jednu �rove� n�';
$lang['scope_base'] = 'Pouze v�choz� DN';
$lang['standard_ldap_search_filter'] = 'Standardn� LDAP vyhled�vac� filtr. P�iklad: (&(sn=Smith)(givenname=David))';
$lang['search_filter'] = 'Vyhled�vac� filtr';
$lang['list_of_attrs_to_display_in_results'] = 'Seznam atribut� zobrazen�ch ve v�sledku hled�n� (odd�len� ��rkou)';
$lang['show_attributes'] = 'Zobrazit atributy';

// search_form_simple.php
$lang['search_for_entries_whose'] = 'Vyhledat objekty kde';
$lang['equals'] = 'je';
$lang['starts with'] = 'za��n� na';
$lang['contains'] = 'obsahuje';
$lang['ends with'] = 'kon�� na';
$lang['sounds like'] = 'zn� jako';

// server_info.php
$lang['could_not_fetch_server_info'] = 'Nelze z�skat informace ze serveru LDAP';
$lang['server_info_for'] = 'Server info pro: ';
$lang['server_reports_following'] = 'Server o sob� poskytuje n�sleduj�c� informace';
$lang['nothing_to_report'] = 'Server neposkytuje ��dn� informace.';

//update.php
$lang['update_array_malformed'] = 'update_array je po�kozen�. M��e se jednat o chybu v phpLDAPadmin. Pros�me V�s, abyste chybu nahl�sili.';
$lang['could_not_perform_ldap_modify'] = 'Nelze prov�st operaci ldap_modify.';

// update_confirm.php
$lang['do_you_want_to_make_these_changes'] = 'P�ejete si prov�st tyto zm�ny?';
$lang['attribute'] = 'Atribut';
$lang['old_value'] = 'P�vodn� hodnota';
$lang['new_value'] = 'Nov� hodnota';
$lang['attr_deleted'] = '[atribut odstran�n]';
$lang['commit'] = 'Odeslat';
$lang['cancel'] = 'Storno';
$lang['you_made_no_changes'] = 'Neprovedli jste ��dn� zm�ny';
$lang['go_back'] = 'Zp�t';

// welcome.php
$lang['welcome_note'] = 'K navigaci pou�ijte pros�m menu v lev� ��sti obrazovky';
$lang['credits'] = 'Auto�i';
$lang['changelog'] = 'ChangeLog';
$lang['donate'] = 'Podpo�it projekt';

// view_jpeg_photo.php
$lang['unsafe_file_name'] = 'Nebezpe�n� n�zev souboru: ';
$lang['no_such_file'] = 'Soubor nelze nal�zt: ';

//function.php
$lang['auto_update_not_setup'] = 'V konfiguraci jste zapnuli podporu auto_uid_numbers pro <b>%s</b>, ale nespecifikovali jste auto_uid_number_mechanism. Napravte pros�m nejprve tento probl�m.';
$lang['uidpool_not_set'] = 'V konfiguraci serveru <b>%s</b> jste specifikovali <tt>auto_uid_number_mechanism</tt> jako <tt>uidpool</tt>, ale neuvedli jste audo_uid_number_uid_pool_dn. Napravte pros�m nejprve tento probl�m.';
$lang['uidpool_not_exist'] = 'Zd� se, �e uidPool uveden� v konfiguraci (<tt>%s</tt>) neexistuje.';
$lang['specified_uidpool'] = 'V konfiguraci serveru <b>%s</b> jste specifikovali <tt>auto_uid_number_mechanism</tt> jako <tt>search</tt>, ale neuvedli jste <tt>auto_uid_number_search_base</tt>. Napravte pros�m nejprve tento probl�m.';
$lang['auto_uid_invalid_credential'] = 'Se zadan�mi p��stupov�mi opr�vn�n�mi se nelze p�ipojit k <b>%s</b> a z�skat auto_uid. Zkontrolujte pros�m konfiguraci.'; 
$lang['bad_auto_uid_search_base'] = 'V konfiguraci phpLDAPadminu je uveden neplatn� parametr auto_uid_search_base pro server %s';
$lang['auto_uid_invalid_value'] = 'V konfiguraci je uvedena neplatn� hodnota auto_uid_number_mechanism (<tt>%s</tt>). Platn� hodnoty jsou pouze <tt>uidpool</tt> a <tt>search</tt>. Napravte pros�m nejprve tento probl�m.';
$lang['error_auth_type_config'] = 'Chyba: Ve sv�m konfigura�n�m souboru jste u polo�ky $servers[\'auth_type\'] uvedli chybnou hodnotu \'%s\'. Platn� hodnoty jsou pouze \'config\' a \'form\'.';
$lang['php_install_not_supports_tls'] = 'Tato instalace PHP neobsahuje podporu pro TLS';
$lang['could_not_start_tls'] = 'Nelze inicializovat TLS.<br />Zkontolujte pros�m konfiguraci sv�ho LDAP serveru.';
$lang['could_not_bind_anon'] = 'K serveru se nelze p�ipojit anonymn�.';
$lang['could_not_bind'] = 'Nelze se p�ipojit k serveru LDAP.';
$lang['anonymous_bind'] = 'P�ipojit anonymn�';
$lang['bad_user_name_or_password'] = 'Nespr�vn� jm�no nebo heslo. Opakujte p�ihl�en�.';
$lang['redirecting_click_if_nothing_happens'] = 'P�esm�rov�v�m... Klepn�te sem, pokud se nic nestane.';
$lang['successfully_logged_in_to_server'] = '�sp�n� jste se p�ihl�sili k serveru <b>%s</b>';
$lang['could_not_set_cookie'] = 'Cookie nemohla b�t ulo�ena.';
$lang['ldap_said'] = '<b>Odpov�� LDAP serveru</b>: %s<br /><br />';
$lang['ferror_error'] = 'Chyba';
$lang['fbrowse'] = 'proch�zet';
$lang['delete_photo'] = 'Odstranit fotografii';
$lang['install_not_support_blowfish'] = 'Tato instalace PHP neobsahuje podporu pro �ifru Blowfish.';
$lang['install_not_support_md5crypt'] = 'Tato instalace PHP neobsahuje podporu pro �ifru md5crypt.';
$lang['install_no_mash'] = 'Tato instalace PHP nepodporuje funkci mhash(). Nelze aplikovat SHA hash.';
$lang['jpeg_contains_errors'] = 'jpegPhoto obsahuje chyby<br />';
$lang['ferror_number'] = '<b>��slo chyby</b>: %s <small>(%s)</small><br /><br />';
$lang['ferror_discription'] = '<b>Popis</b>: %s <br /><br />';
$lang['ferror_number_short'] = '<b>��slo chyby</b>: %s<br /><br />';
$lang['ferror_discription_short'] = '<b>Popis</b>: (popis nen� k dispozici)<br />';
$lang['ferror_submit_bug'] = 'Pokud je toto chyba v phpLDAPadmin, <a href=\'%s\'>napi�te n�m</a> o tom.';
$lang['ferror_unrecognized_num'] = 'Nezn�m� ��slo chyby: ';
$lang['ferror_nonfatil_bug'] = '<center><table class=\'notice\'><tr><td colspan=\'2\'><center><img src=\'images/warning.png\' height=\'12\' width=\'13\' />
             <b>Narazili jste na nez�va�nou, droubnou a� zanedbatelnou chybu v phpLDAPadmin!</b></td></tr><tr><td>Chyba:</td><td><b>%s</b> (<b>%s</b>)</td></tr><tr><td>Soubor:</td>
             <td><b>%s</b> ��dka <b>%s</b>, vol�no z <b>%s</b></td></tr><tr><td>Verze:</td><td>PLA: <b>%s</b>, PHP: <b>%s</b>, SAPI: <b>%s</b>
             </td></tr><tr><td>Web server:</td><td><b>%s</b></td></tr><tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>
             Klepnut�m pros�m ohl�te chybu</a>.</center></td></tr></table></center><br />';
$lang['ferror_congrats_found_bug'] = 'Blahop�ejeme! Nalezli jste chybu v phpLDAPadmin. :-)<br /><br />
	     <table class=\'bug\'>
	     <tr><td>Chyba:</td><td><b>%s</b></td></tr>
	     <tr><td>V�nost:</td><td><b>%s</b></td></tr>
	     <tr><td>Soubor:</td><td><b>%s</b></td></tr>
	     <tr><td>��dka:</td><td><b>%s</b></td></tr>
	     <tr><td>Vol�no z:</td><td><b>%s</b></td></tr>
	     <tr><td>Verze PLA:</td><td><b>%s</b></td></tr>
	     <tr><td>Verze PHP:</td><td><b>%s</b></td></tr>
	     <tr><td>PHP SAPI:</td><td><b>%s</b></td></tr>
	     <tr><td>Web server:</td><td><b>%s</b></td></tr>
	     </table>
	     <br />
	     Klepnut�m dole pros�m ohla�te chybu!';

//ldif_import_form
$lang['import_ldif_file_title'] = 'Importovat soubor LDIF';
$lang['select_ldif_file'] = 'Zvolte soubor LDIF:';
$lang['select_ldif_file_proceed'] = 'Prove� &gt;&gt;';
$lang['dont_stop_on_errors'] = 'Ignorovat chyby';

//ldif_import
$lang['add_action'] = 'P�id�v�n�...';
$lang['delete_action'] = 'Odstra�ov�n�...';
$lang['rename_action'] = 'P�ejmenov�v�n�...';
$lang['modify_action'] = 'Upravov�n�...';
$lang['warning_no_ldif_version_found'] = 'Nebyla nalezena verze. P�edpokl�d�m 1.';
$lang['valid_dn_line_required'] = 'Je vy�adov�n platn� ��dek s DN.';
$lang['missing_uploaded_file'] = 'Soubor LDIF nebyl nalezen.';
$lang['no_ldif_file_specified.'] = 'Neuvedli jste LDIF soubor. Opakujte pros�m akci.';
$lang['ldif_file_empty'] = 'Soubor LDIF je pr�zdn�.';
$lang['empty'] = 'pr�zdn�';
$lang['file'] = 'Soubor';
$lang['number_bytes'] = '%s bajt�';

$lang['failed'] = 'selhal';
$lang['ldif_parse_error'] = 'Chyba v souboru LDIF';
$lang['ldif_could_not_add_object'] = 'Nelze p�idat objekt:';
$lang['ldif_could_not_rename_object'] = 'Nelze p�ejmenovat objekt:';
$lang['ldif_could_not_delete_object'] = 'Nelze odstranit objekt:';
$lang['ldif_could_not_modify_object'] = 'Nelze upravit objekt:';
$lang['ldif_line_number'] = '��slo ��dku:';
$lang['ldif_line'] = '��dek:';

// Exports
$lang['export_format'] = 'Form�t exportu';
$lang['line_ends'] = 'Konce ��dk�';
$lang['must_choose_export_format'] = 'Mus�te zvolit exportn� form�t.';
$lang['invalid_export_format'] = 'Neplatn� exportn� form�t';
$lang['no_exporter_found'] = 'Nebyla nalezena ��dn� aplikace pro export.';
$lang['error_performing_search'] = 'B�hem vyhled�v�n� do�lo k chyb�.';
$lang['showing_results_x_through_y'] = 'V�sledky od %s do %s.';
$lang['searching'] = 'Vyhled�v�m...';
$lang['size_limit_exceeded'] = 'Byl p�ekro�en limitn� parametr pro vyhled�v�n�.';
$lang['entry'] = 'Objekt';
$lang['ldif_export_for_dn'] = 'LDIF Export objektu: %s';
$lang['generated_on_date'] = 'Generov�no phpLDAPadminem dne %s';
$lang['total_entries'] = 'Celkem objekt�';
$lang['dsml_export_for_dn'] = 'DSLM Export objektu: %s';

// logins
$lang['could_not_find_user'] = 'Nelze nal�zt u�ivatele "%s"';
$lang['password_blank'] = 'Nezadali jste u�ivatelsk� heslo.';
$lang['login_cancelled'] = 'P�ihla�ov�n� zru�eno.';
$lang['no_one_logged_in'] = 'Nikdo nen� p�ihl�en k tomuto serveru.';
$lang['could_not_logout'] = 'Nelze se odhl�sit.';
$lang['unknown_auth_type'] = 'Nezn�m� auth_type: %s';
$lang['logged_out_successfully'] = 'Odhl�en� od serveru <b>%s</b> prob�hlo �sp�n�.';
$lang['authenticate_to_server'] = 'Ov��en� v��i serveru %s';
$lang['warning_this_web_connection_is_unencrypted'] = 'Upozorn�n�: Toto spojen� nen� �ifrov�n�.';
$lang['not_using_https'] = 'Nep�ipojujete se pomoc� \'https\'. Prohl�e� ode�le Va�e p�ihl�en� v ne�ifrovan� podob�.';
$lang['login_dn'] = 'P�ihla�ovac� DN';
$lang['user_name'] = 'U�ivatel';
$lang['password'] = 'Heslo';
$lang['authenticate'] = 'P�ihl�sit';

// Entry browser
$lang['entry_chooser_title'] = 'Zvolit objekt';

// Index page
$lang['need_to_configure'] = 'Nejprve je t�eba phpLDAPadmin nakonfigurovat. Toho doc�l�te upravou souboru \'config.php\'. Uk�zkov� konfigurace je k nalezen� v souboru \'config.php.example\'';

// Mass deletes
$lang['no_deletes_in_read_only'] = 'Maz�n� je v re�imu "jen pro �ten�" zak�z�no.';
$lang['error_calling_mass_delete'] = 'Chyba p�i vol�n� mass_delete.php. V POSTu chyb� prom�nn� mass_delete.';
$lang['mass_delete_not_array'] = 'mass_delete v POSTu nen� pole.';
$lang['mass_delete_not_enabled'] = 'Hromad� v�maz nen� umo�n�n. M��ete ho povolit v souboru config.php.';
$lang['mass_deleting'] = 'Hromadn� v�maz';
$lang['mass_delete_progress'] = 'Pr�b�h odstra�ov�n� na serveru "%s"';
$lang['malformed_mass_delete_array'] = 'Zdeformovan� pole mass_delete.';
$lang['no_entries_to_delete'] = 'Nevybrali jste ��dn� objekty k odstran�n�.';
$lang['deleting_dn'] = 'Odstra�uji %s';
$lang['total_entries_failed'] = '%s z %s objekt� se nepoda�ilo odstranit.';
$lang['all_entries_successful'] = 'V�echny objekty byly �sp�n� odstran�ny.';
$lang['confirm_mass_delete'] = 'Potv�te hromadn� v�maz v po�tu %s objekt� na serveru %s';
$lang['yes_delete'] = 'Ano, odstranit!';

// Renaming entries
$lang['non_leaf_nodes_cannot_be_renamed'] = 'Nelze p�ejmenovat objekt, kter� m� potomky. Toto se nap��klad vztahuje na v�echny objekty, kter� nejsou typu "list".';
$lang['no_rdn_change'] = 'Nezm�nili jste RDN';
$lang['invalid_rdn'] = 'Neplatn� hodnota RDN';
$lang['could_not_rename'] = 'Objekt nelze p�ejmenovat';

?>
