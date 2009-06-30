<?php
// $Header: /cvsroot/phpldapadmin/phpldapadmin/lang/fr.php,v 1.29.2.2 2005/10/09 06:29:41 wurley Exp $


/*        ---   INSTRUCTIONS FOR TRANSLATORS   ---
 *
 * If you want to write a new language file for your language,
 * please submit the file on SourceForge:
 *
 *   https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498548
 *
 * Use the option "Check to Upload and Attach a File" at the bottom
 *
 * Read the doc/README-translation.txt for translation instructions.
 *
 * Thank you!
 *
 */

/*
 * The $lang array contains all the strings that phpLDAPadmin uses.
 * Each language file simply defines this aray with strings in its
 * language.
 */

// Search form
$lang['simple_search_form_str'] = 'Recherche simple';
$lang['advanced_search_form_str'] = 'Recherche avanc�e';
$lang['server'] = 'Serveur';
$lang['search_for_entries_whose'] = 'Rechercher les entr�es dont';
$lang['base_dn'] = 'Base DN';
$lang['search_scope'] = 'Port�e de la recherche';
$lang['show_attributes'] = 'Afficher les attributs';
$lang['Search'] = 'Rechercher';
$lang['predefined_search_str'] = 'S�lectionner une recherche pr�d�finie';
$lang['predefined_searches'] = 'Recherches pr�d�finies';
$lang['no_predefined_queries'] = 'Aucune requ�te n\'a �t� d�finie dans config.php.';
$lang['export_results'] = 'exporter le resultat';
$lang['unrecoginzed_search_result_format'] = 'Le format du r�sultat de la recherche n\'est pas reconnu : %s';
$lang['format'] = 'Format';
$lang['list'] = 'liste';
$lang['table'] = 'table';
$lang['bad_search_display'] = 'Votre config.php sp�cifie une valeur non valide pour $default_search_display : %s. Veuillez corriger cela';
$lang['page_n'] = 'Page %d';
$lang['next_page'] = 'Page suivante';
$lang['no_results'] = 'Aucun r�sultat pour cette recherche.';

// Tree browser
$lang['request_new_feature'] = 'Demander une fonctionnalit�';
$lang['report_bug'] = 'Signaler une anomalie';
$lang['schema'] = 'sch�ma';
$lang['search'] = 'rechercher';
$lang['create'] = 'cr�er';
$lang['info'] = 'info';
$lang['import'] = 'importer';
$lang['refresh'] = 'rafra�chir';
$lang['logout'] = 'se d�connecter';
$lang['create_new'] = 'Cr�er une nouvelle entr�e ici';
$lang['view_schema_for'] = 'Afficher le sch�ma pour';
$lang['refresh_expanded_containers'] = 'Rafra�chir tous les conteneurs �tendus pour';
$lang['create_new_entry_on'] = 'Cr�er une nouvelle entr�e sur';
$lang['new'] = 'nouveau';
$lang['view_server_info'] = 'Afficher les informations fournies par le serveur';
$lang['import_from_ldif'] = 'Importer les entr�es d\'un fichier LDIF';
$lang['logout_of_this_server'] = 'Se d�connecter de ce serveur';
$lang['logged_in_as'] = 'Connect� en tant que : ';
$lang['this_base_dn_is_not_valid'] = 'Ce n\'est pas un DN valide.';
$lang['this_base_dn_does_not_exist'] = 'Cette entr�e n\'existe pas.';
$lang['read_only'] = 'lecture seule';
$lang['read_only_tooltip'] = 'Cette attribut a �t� mis en lecture seule par l\'administrateur de phpLDAPadmin';
$lang['could_not_determine_root'] = 'Impossible de d�terminer la racine de votre arborescence LDAP.';
$lang['ldap_refuses_to_give_root'] = 'Il semble que votre serveur LDAP a �t� configur� pour ne pas r�v�ler sa racine.';
$lang['please_specify_in_config'] = 'Veuillez la sp�cifier dans config.php';
$lang['create_new_entry_in'] = 'Cr�e une nouvelle entr�e dans';
$lang['login_link'] = 'Connexion...';
$lang['login'] = 'connexion';
$lang['base_entry_does_not_exist'] = 'L\'entr�e racine n\'existe pas.';
$lang['create_it'] = 'La cr�er ?';

// Entry display
$lang['delete_this_entry'] = 'Supprimer cette entr�e';
$lang['delete_this_entry_tooltip'] = 'Il vous sera demander de confirmer cette d�cision';
$lang['copy_this_entry'] = 'Copier ou d�placer cette entr�e';
$lang['copy_this_entry_tooltip'] = 'Copier cet objet vers un autre emplacement, un nouveau DN, ou un autre serveur';
$lang['export'] = 'Exporter';
$lang['export_lcase'] = 'exporter';
$lang['export_tooltip'] = 'Enregistrer un dump de cet objet';
$lang['export_subtree_tooltip'] = 'Enregistrer un dump de cet objet et de tous ses sous-objets';
$lang['export_subtree'] = 'Exporter une sous-arborescence';
$lang['create_a_child_entry'] = 'Cr�er une sous-entr�e';
$lang['rename_entry'] = 'Renommer l\'entr�e';
$lang['rename'] = 'Renommer';
$lang['rename_lower'] = 'renommer';
$lang['add'] = 'Ajouter';
$lang['view'] = 'Afficher';
$lang['view_one_child'] = 'Afficher 1 sous-entr�e';
$lang['view_children'] = 'Afficher %s sous-entr�es';
$lang['add_new_attribute'] = 'Ajouter un nouvel attribut';
$lang['add_new_objectclass'] = 'Ajouter un nouvel ObjectClass';
$lang['hide_internal_attrs'] = 'Cacher les attributs internes';
$lang['show_internal_attrs'] = 'Afficher les attributs internes';
$lang['attr_name_tooltip'] = 'Cliquez pour afficher la d�finition de sch�ma pour le type d\'attribut � %s �';
$lang['none'] = 'aucun';
$lang['no_internal_attributes'] = 'Aucun attribut interne';
$lang['no_attributes'] = 'Cette entr�e n\'a aucun attribut';
$lang['save_changes'] = 'Enregistrer les modifications';
$lang['add_value'] = 'ajouter une valeur';
$lang['add_value_tooltip'] = 'Ajouter une valeur additionnel � l\'attribut � %s �';
$lang['refresh_entry'] = 'Rafra�chir';
$lang['refresh_this_entry'] = 'Rafra�chir cette entr�e';
$lang['delete_hint'] = 'Astuce : pour supprimer un attribut, videz le champ texte et enregistrez.';
$lang['attr_schema_hint'] = 'Astuce : pour afficher le sch�ma d\'un attribut, cliquez sur le nom de l\'attribut.';
$lang['attrs_modified'] = 'Quelques attributs (%s) ont �t� modifi�s et sont surlign�s ci-dessous.';
$lang['attr_modified'] = 'Un attribut (%s) a �t� modifi� et est surlign� ci-dessous.';
$lang['viewing_read_only'] = 'Afficher les entr�es en lecture seule.';
$lang['no_new_attrs_available'] = 'aucun nouvel attribut disponible pour cette entr�e';
$lang['no_new_binary_attrs_available'] = 'aucun nouvel attribut binaire pour cette entr�e';
$lang['binary_value'] = 'Valeur binaire';
$lang['add_new_binary_attr'] = 'Ajouter un nouvel attribut binaire';
$lang['alias_for'] = 'Note : � %s � est un alias de � %s �';
$lang['required_for'] = 'Attribut requis pour l(es) objectClass %s';
$lang['required_by_entry'] = 'Cet attribut est requis pour le RDN.';
$lang['download_value'] = 't�l�charger la valeur';
$lang['delete_attribute'] = 'supprimer l\'attribut';
$lang['true'] = 'vrai';
$lang['false'] = 'faux';
$lang['none_remove_value'] = 'aucun, supprimer la valeur';
$lang['really_delete_attribute'] = 'Voulez-vous vraiment supprimer l\'attribut';
$lang['add_new_value'] = 'Ajouter une nouvelle valeur';

// Schema browser
$lang['schema_retrieve_error_1']='Le serveur ne supporte pas compl�tement le protocole LDAP.';
$lang['schema_retrieve_error_2']='Votre version de PHP n\'effectue pas correctement la requ�te.';
$lang['schema_retrieve_error_3']='phpLDAPadmin ne sais pas comment r�cup�rer le sch�ma de votre serveur.';
$lang['schema_retrieve_error_4']='Ou alors, votre serveur LDAP ne fournit pas cette information.';
$lang['jump_to_objectclass'] = 'Sauter vers un objectClass';
$lang['view_schema_for_oclass'] = 'Afficher la description de sch�ma de cet objectClass';
$lang['jump_to_attr'] = 'Sauter vers un type d\'attribut';
$lang['jump_to_matching_rule'] = 'Sauter vers une r�gle correspondante';
$lang['schema_for_server'] = 'Schema pour le serveur';
$lang['required_attrs'] = 'Attributs requis';
$lang['required'] = 'requis';
$lang['optional_attrs'] = 'Attributs optionnels';
$lang['optional_binary_attrs'] = 'Attributs binaires optionnels';
$lang['OID'] = 'OID';
$lang['aliases']='Alias';
$lang['desc'] = 'Description';
$lang['no_description']='aucune description';
$lang['name'] = 'Nom';
$lang['equality']='�galit�';
$lang['is_obsolete'] = 'Cet objectClass est obsol�te.';
$lang['inherits'] = 'H�rite de';
$lang['inherited_from'] = 'H�rit� de';
$lang['parent_to'] = 'Parent de';
$lang['jump_to_this_oclass'] = 'Sauter vers cette d�finition d\'objectClass';
$lang['matching_rule_oid'] = 'R�gle OID correspondante';
$lang['syntax_oid'] = 'Syntaxe OID';
$lang['not_applicable'] = 'non applicable';
$lang['not_specified'] = 'non sp�cifi�';
$lang['character']='caract�re'; 
$lang['characters']='caract�res';
$lang['used_by_objectclasses']='Utilis� par ces objectClass';
$lang['used_by_attributes']='Utilis� par ces attributs';
$lang['maximum_length']='Longueur maximum';
$lang['attribute_types']='Types d\'attributs';
$lang['syntaxes']='Syntaxes';
$lang['matchingrules']='R�gles correspondantes';
$lang['oid']='OID';
$lang['obsolete']='Obsol�te';
$lang['ordering']='Triage';
$lang['substring_rule']='R�gle de sous-cha�ne';
$lang['single_valued']='Valeur simple';
$lang['collective']='Collectif';
$lang['user_modification']='Modification utilisateur';
$lang['usage']='Usage';
$lang['could_not_retrieve_schema_from']='Impossible de r�cup�rer le sch�ma de';
$lang['type']='Type';
$lang['no_such_schema_item'] = 'Aucun �l�ment de sch�ma : � %s �';
$lang['random_password'] = 'Un mot de passe al�atoire a �t� g�n�r� pour vous';

// Deleting entries
$lang['entry_deleted_successfully'] = 'L\'entr�e %s a �t� supprim� avec succ�s.';
$lang['you_must_specify_a_dn'] = 'Vous devez sp�cifier un DN';
$lang['could_not_delete_entry'] = 'Impossible de supprimer l\'entr�e : %s';
$lang['no_such_entry'] = 'Aucune entr�e: %s';
$lang['delete_dn'] = 'Supprimer %s';
$lang['permanently_delete_children'] = 'Supprimer aussi toutes les sous-entr�es ?';
$lang['entry_is_root_sub_tree'] = 'Cette entr�e est la racine d\'une sous-arborescence contenant %s entr�es.';
$lang['view_entries'] = 'afficher les entr�es';
$lang['confirm_recursive_delete'] = 'phpLDAPadmin peut supprimer r�cursivement cette entr�e et toutes %s de ses sous-entr�es. Voir ci-dessous pour une liste de toutes les entr�es que cette action supprimera. Voulez-vous le faire ?';
$lang['confirm_recursive_delete_note'] = 'Note : ceci est potentiellement tr�s dangereux et vous le faites � vos risques et p�rils. Cette op�ration ne peut �tre annul�e. Prenez bien note que les alias, les r�f�rents, et d\'autres choses pourront vous causer des probl�mes.';
$lang['delete_all_x_objects'] = 'Supprimer tous les %s objets';
$lang['recursive_delete_progress'] = 'Progression de la suppression r�cursive';
$lang['entry_and_sub_tree_deleted_successfully'] = 'L\'entr�e %s et la sous-arborescence ont �t� supprim� avec succ�s.';
$lang['failed_to_delete_entry'] = 'La suppression de l\'entr�e %s a �chou�';
$lang['list_of_entries_to_be_deleted'] = 'Liste des entr�es � supprimer :';
$lang['sure_permanent_delete_object']='�tes-vous s�r de vouloir supprimer d�finitivement cet objet ?';
$lang['dn'] = 'DN';

// Deleting attributes
$lang['attr_is_read_only'] = 'L\'attribut � %s � est marqu� en lecture seule dans la configuration de phpLDAPadmin.';
$lang['no_attr_specified'] = 'Aucun nom d\'attribut d�fini.';
$lang['no_dn_specified'] = 'Aucun DN sp�cifi�';

// Adding attributes
$lang['left_attr_blank'] = 'Vous avez laiss� la valeur de l\'attribut blanc. Veuillez revenir et essayer de nouveau.';
$lang['failed_to_add_attr'] = 'L\'ajout de l\'attribut a �chou�.';
$lang['file_empty'] = 'Le fichier que vous avez choisi est soit vide, soit il n\'existe pas. Veuillez revenir et essayer de nouveau.';
$lang['invalid_file'] = 'Erreur de s�curit� : le fichier t�l�charg� est peut �tre corrompu.';
$lang['warning_file_uploads_disabled'] = 'Votre configuration de PHP a d�sactiv� le t�l�chargement de fichiers. Veuillez v�rifier php.ini avant de proc�der.';
$lang['uploaded_file_too_big'] = 'Le fichier que vous avez t�l�charg� est trop grand. Veuillez v�rifier dans php.ini le r�glage upload_max_size';
$lang['uploaded_file_partial'] = 'Le fichier que vous avez s�lectionn� est partiellement t�l�charg�, surement du � une erreur r�seau.';
$lang['max_file_size'] = 'Taille de fichier maximum : %s';

// Updating values
$lang['modification_successful'] = 'Modification avec succ�s !';
$lang['change_password_new_login'] = 'Puisque vous avez chang� de mot de passe, vous devez vous reconnecter avec votre nouveau mot de passe.';

// Adding objectClass form
$lang['new_required_attrs'] = 'Nouveaux attributs requis';
$lang['requires_to_add'] = 'Cette action n�cessite que vous ajoutiez';
$lang['new_attributes'] = 'nouveaux attributs';
$lang['new_required_attrs_instructions'] = 'Instructions : afin d\'ajouter ces objectClass � cette entr�e, vous devez sp�cifier';
$lang['that_this_oclass_requires'] = 'ce que cet objectClass n�cessite. Vous pouvez le faire dans ce formulaire.';
$lang['add_oclass_and_attrs'] = 'Ajouter des objectClass et des attributs';
$lang['objectclasses'] = 'ObjectClass';

// General
$lang['chooser_link_tooltip'] = 'Cliquez afin de faire apparaitre une bo�te de dialogue permettant de choisir une entr�e graphiquement';
$lang['no_updates_in_read_only_mode'] = 'Vous ne pouvez effectuer de mises � jour tant que le serveur est en lecture seule';
$lang['bad_server_id'] = 'Mauvais id de serveur';
$lang['not_enough_login_info'] = 'Il n\'y a pas assez d\'informations pour se connecter au serveur. Veuillez v�rifier votre configuration.';
$lang['could_not_connect'] = 'Impossible de se connecter au serveur LDAP.';
$lang['could_not_connect_to_host_on_port'] = 'Impossible de se connecter � � %s � sur le port � %s �';
$lang['could_not_perform_ldap_mod_add'] = 'Impossible d\'effectuer ldap_mod_add operation.';
$lang['home'] = 'Accueil';
$lang['help'] = 'Aide';
$lang['success'] = 'Succ�s';
$lang['server_colon_pare'] = 'Serveur : ';
$lang['look_in'] = 'Rechercher dans : ';
$lang['missing_dn_in_query_string'] = 'Aucun DN sp�cifi� dans la chaine de requete !';
$lang['back_up_p'] = 'Sauvegarde...';
$lang['no_entries'] = 'aucune entr�es';
$lang['could_not_det_base_dn'] = 'Impossible de d�terminer le DN racine';
$lang['reasons_for_error']='Ceci peut arriver pour diff�rentes raisons, le plus probable est sans doute :';
$lang['yes']='oui';
$lang['no']='Non';
$lang['go']='Aller �';
$lang['delete']='Supprimer';
$lang['back']='Revenir';
$lang['object']='objet';
$lang['delete_all']='Tout supprimer';
$lang['hint'] = 'astuce';
$lang['bug'] = 'anomalie';
$lang['warning'] = 'avertissement';
$lang['light'] = 'lumi�re'; // the word 'light' from 'light bulb'
$lang['proceed_gt'] = 'Proc�der &gt;&gt;';
$lang['no_blowfish_secret'] = 'phpLDAPadmin ne peut pas chiffrer ou d�chiffrer en toute s�curit� vos informations sensibles, car $blowfish_secret n\'est pas d�fini dans config.php. Vous avez besoin d\'�diter config.php et de d�finir $blowfish_secret � une cha�ne secr�te maintenant.';
$lang['jpeg_dir_not_writable'] = 'Veuillez d�finir $jpeg_temp_dir � un r�pertoire accessible en �criture dans le config.php de phpLDAPadmin';
$lang['jpeg_dir_not_writable_error'] = 'Impossible d\'�crire dans le r�pertoire $jpeg_temp_dir %s. Veuillez v�rifier que votre serveur Web peut �crire des fichiers dedans.';
$lang['jpeg_unable_toget'] = 'Impossible de r�cup�rer les donn�es JPEG depuis votre serveur LDAP pour l\'attribut %s.';
$lang['jpeg_delete'] = 'Supprimer la photo';

// Add value form
$lang['add_new'] = 'Ajouter une nouvelle valeur';
$lang['value_to'] = 'dans';
$lang['distinguished_name'] = 'Nom distingu�';
$lang['current_list_of'] = 'Liste actuelle de';
$lang['values_for_attribute'] = 'valeur(s) pour l\'attribut';
$lang['inappropriate_matching_note'] = 'Note : vous obtiendrez une erreur � correspondance innapropri�e � si vous n\'avez pas d�fini de r�gle d\'�galit� sur votre serveur LDAP pour cette attribut.';
$lang['enter_value_to_add'] = 'Saisissez la valeur que vous voulez ajouter :';
$lang['new_required_attrs_note'] = 'Note : il peut vous �tre demand� de saisir les nouveaux attributs requis par ces objectClass';
$lang['syntax'] = 'Syntaxe';

//copy.php
$lang['copy_server_read_only'] = 'Vous ne pouvez faire de mises � jour tantq ue le serveur est en lecture seule';
$lang['copy_dest_dn_blank'] = 'Vopus avez laiss� le DN de destination vide.';
$lang['copy_dest_already_exists'] = 'L\'entr�e de destination (%s)existe d�j�.';
$lang['copy_dest_container_does_not_exist'] = 'Le conteneur de destination (%s) n\'existe pas.';
$lang['copy_source_dest_dn_same'] = 'Les DN source et destination sont les m�mes.';
$lang['copy_copying'] = 'Copie ';
$lang['copy_recursive_copy_progress'] = 'progression de la copie r�cursive';
$lang['copy_building_snapshot'] = 'Construction d\'un instantan� de l\'arborescence � copier... ';
$lang['copy_successful_like_to'] = 'Copie avec succ�s ! Voulez-vous ';
$lang['copy_view_new_entry'] = 'afficher la nouvelle entr�e';
$lang['copy_failed'] = 'La copie du DN a �chou� : ';

//edit.php
$lang['missing_template_file'] = 'Avertissement : fichier mod�le manquant, ';
$lang['using_default'] = 'Utilisant les valeurs par d�faut.';
$lang['template'] = 'Mod�le';
$lang['must_choose_template'] = 'Vous devez choisir un mod�le';
$lang['invalid_template'] = '%s n\'est pas un mod�le valide';
$lang['using_template'] = 'en utilisant le mod�le';
$lang['go_to_dn'] = 'Aller vers %s';
$lang['structural_object_class_cannot_remove'] = 'C\'est un ObjectClass structurel et il ne peut �tre supprim�.';
$lang['structural'] = 'structurel';

//copy_form.php
$lang['copyf_title_copy'] = 'Copie ';
$lang['copyf_to_new_object'] = 'vers un nouvel objet';
$lang['copyf_dest_dn'] = 'DN de destination';
$lang['copyf_dest_dn_tooltip'] = 'Le DN complet de la nouvelle entr�e a cr�er lors de la copie de l\'entr�e source';
$lang['copyf_dest_server'] = 'Serveur de destination';
$lang['copyf_note'] = 'Astuce : la copie entre diff�rents serveurs ne fonctionne que si il n\'y a aucune violations de sch�ma';
$lang['copyf_recursive_copy'] = 'Copie r�cursive de toutes les sous-entr�es de cet objet.';
$lang['recursive_copy'] = 'Copie r�cursive';
$lang['filter'] = 'Filtre';
$lang['filter_tooltip'] = 'Lors de la copie r�cursive, ne copier que les entr�es qui correspondent � ce filtre';
$lang['delete_after_copy'] = 'Supprimer apr�s la copie (d�placement) :';
$lang['delete_after_copy_warn'] = 'Veuillez vous assurer que vos filtres (ci-dessus) s�lectionneront tous les enregistrements fils.';

//create.php
$lang['create_required_attribute'] = 'Vous avez laissez une valeur blanche pour l\'attribut requis (%s).';
$lang['redirecting'] = 'Redirection...';
$lang['here'] = 'ici';
$lang['create_could_not_add'] = 'Impossible d\'ajouter l\'objet au serveur LDAP.';

//create_form.php
$lang['createf_create_object'] = 'Cr�er un objet';
$lang['createf_choose_temp'] = 'Choisissez un mod�le';
$lang['createf_select_temp'] = 'S�lectionner un mod�le pour le processus de cr�ation';
$lang['save_as_file'] = 'Enregistrer dans un fichier';
$lang['rdn_field_blank'] = 'Vous avez laiss� le champ RDN vide.';
$lang['container_does_not_exist'] = 'Le conteneur que vous avez sp�cifi� (%s) n\'existe pas. Veuillez essayer de nouveau.';
$lang['no_objectclasses_selected'] = 'Vous n\'avez pas s�lectionn� d\'objectClass pour cet objet. Veuillez revenir et le faire.';
$lang['hint_structural_oclass'] = 'Astuce : vous devez choisir un seul objectClass structurel (affich� en gras ci-dessus)';
$lang['template_restricted'] = 'Ce mod�le n\'est pas autoris� dans ce conteneur.';
$lang['template_invalid'] = 'Ce mod�le a �t� d�sactiv�, cela est s�rement du � un sch�ma manquant ou � des champs manquants dans le mod�le XML.';

//creation_template.php
$lang['ctemplate_on_server'] = 'Sur le serveur';
$lang['ctemplate_no_template'] = 'Aucun mod�le sp�cifi� dans les variables POST.';
$lang['template_not_readable'] = 'Votre configuration sp�cifie un gestionnaire de � %s � pour ce mod�le mais le fichier n\'est pas lisible car les permissions sont trop strictes..';
$lang['template_does_not_exist'] = 'Votre configuration sp�cifie un gestionnaire de � %s � pour ce mod�le mais ce gestionnaire n\'existe pas dans le r�pertoire de mod�les/cr�ation.';
$lang['create_step1'] = '�tape 1 of 2 : nom et ObjectClass';
$lang['create_step2'] = '�tape 2 of 2 : sp�cifie les attributs et valeur';
$lang['relative_distinguished_name'] = 'Nom distingu� relatif';
$lang['rdn'] = 'RDN';
$lang['rdn_example'] = '(exemple : cn=MaNouvellePersonne)';
$lang['container'] = 'Conteneur';

// search.php
$lang['you_have_not_logged_into_server'] = 'Vous n\'�tes pas encore connect� au serveur s�lectionn�, vous ne pouvez pas effectuer de recherche dessus.';
$lang['click_to_go_to_login_form'] = 'Cliquez ici pour aller au formulaire de connexion';
$lang['unrecognized_criteria_option'] = 'Option de crit�re non reconnue : ';
$lang['if_you_want_to_add_criteria'] = 'Si vous voulez ajouter vos propres crit�res dans la liste. Veuillez vous assurer d\'�diter search.php pour les g�rer. Quitte.';
$lang['entries_found'] = 'Entr�es trouv�es : ';
$lang['filter_performed'] = 'Filtrage effectu� : ';
$lang['search_duration'] = 'Recherche effectu�e par phpLDAPadmin dans';
$lang['seconds'] = 'secondes';

// search_form_advanced.php
$lang['scope_in_which_to_search'] = 'La port�e dans laquelle effectuer la recherche';
$lang['scope_sub'] = 'Sub (sous-arborescence enti�re)';
$lang['scope_one'] = 'One (un niveau au-dessous de la base)';
$lang['scope_base'] = 'Base (dn de base seulement)';
$lang['standard_ldap_search_filter'] = 'Filtre de recherche LDAAP standard. Exemple : (&(sn=Smith)(givenname=David))';
$lang['search_filter'] = 'Filtre de recherche';
$lang['list_of_attrs_to_display_in_results'] = 'Une liste d\'attributs � afficher dans le r�sultat (s�par� par des virgules)';

// search_form_simple.php
$lang['equals'] = 'est �gal �';
$lang['starts with'] = 'commence par';
$lang['contains'] = 'contient';
$lang['ends with'] = 'se termine par';
$lang['sounds like'] = 'ressemble �';

// server_info.php
$lang['could_not_fetch_server_info'] = 'Impossible de r�cup�rer les informations LDAP depuis le serveur. Ceci est sans doute du � une <a href="http://bugs.php.net/bug.php?id=29587">anomalie</a> dans votre version de PHP ou peut-�tre que votre serveur LDAP a un contr�le d\'acc�s d�fini qui emp�che les clients LDAP d\'acc�der au RootDSE.';
$lang['server_info_for'] = 'Info serveur pour : ';
$lang['server_reports_following'] = 'Le serveur rapporte les informations suivantes � propos de lui-m�me';
$lang['nothing_to_report'] = 'Ce serveur n\'a rien � rapporter.';

//update.php
$lang['update_array_malformed'] = 'update_array est malform�. C\'est peut-�tre une anomalie de phpLDAPadmin. Veuillez la rapporter.';
$lang['could_not_perform_ldap_modify'] = 'Impossible d\'effectuer une op�ration ldap_modify.';

// update_confirm.php
$lang['do_you_want_to_make_these_changes'] = 'Voulez-vous effectuer ces modifications ?';
$lang['attribute'] = 'Attribut';
$lang['old_value'] = 'Ancienne valeur';
$lang['new_value'] = 'Nouvelle valeur';
$lang['attr_deleted'] = '[attribut supprim�]';
$lang['commit'] = 'Valider';
$lang['cancel'] = 'Annuler';
$lang['you_made_no_changes'] = 'Vous n\'avez fait aucune modification';
$lang['go_back'] = 'Revenir';
$lang['unable_create_samba_pass'] = 'Impossible de cr�er le mot de passe Samba. Veuillez v�rifier votre configuration dans template_config.php';

// welcome.php
$lang['welcome_note'] = 'Utiliser le menu de gauche pour naviguer';
$lang['credits'] = 'Cr�dits';
$lang['changelog'] = 'ChangeLog';
$lang['documentation'] = 'Documentation';
$lang['donate'] = 'Donation';
$lang['pla_logo'] = 'Logo phpLDAPadmim';

// Donate.php
$lang['donation_instructions'] = 'Pour contribuer financi�rement au projet phpLDAPadmin, utilisez un des boutons PayPal ci-dessous.';
$lang['donate_amount'] = 'Donner %s';

$lang['purge_cache'] = 'Purger les caches';
$lang['no_cache_to_purge'] = 'Aucun cache � purger.';
$lang['done_purging_caches'] = '%s octets de cache purg�s.';
$lang['purge_cache_tooltip'] = 'Purge toutes les donn�es cach�es dans phpLDAPadmin, incluant les sch�mas de serveur.';

// view_jpeg_photo.php
$lang['unsafe_file_name'] = 'Nom de fichier non s�r : ';
$lang['no_such_file'] = 'Pas de tel fichier : ';

//function.php
$lang['auto_update_not_setup'] = 'Vous avez activ� auto_uid_numbers pour <b>%s</b> dans votre configuration,
                                  mais vous n\'avez pas sp�cifi� de m�canisme auto_uid_number_mechanism. Veuillez corriger
                                  ce probl�me.';
$lang['uidpool_not_set'] = 'Vous avez d�fini � auto_uid_number_mechanism � comme � uidpool �
                            dans votre configuration pour le serveur <b>%s</b>, mais vous n\'avez pas sp�cifi� le
                            auto_uid_number_uid_pool_dn. Veuillez le sp�cifier avant de proc�der.';
$lang['uidpool_not_exist'] = 'Il semble que le uidPool que vous avez sp�cifi� dans votre configuration (� %s �)
                              n\'existe pas.';
$lang['specified_uidpool'] = 'Vous avez sp�cifi� le � auto_uid_number_mechanism � comme � search � dans votre
                              configuration du serveur <b>%s</b>, mais vous n\'avez pas sp�cifi� le
                              � auto_uid_number_search_base �. Veuillez le sp�cifier avant de proc�der.';
$lang['auto_uid_invalid_credential'] = 'Incapable de se connecter � <b>%s</b> avec votre cr�dentiel auto_uid . Veuillez v�rifier votre fichier de configuration.'; 
$lang['bad_auto_uid_search_base'] = 'Votre configuration de phpLDAPadmin sp�cifie un auto_uid_search_base non valide pour le serveur %s';
$lang['auto_uid_invalid_value'] = 'Vous avez sp�cifi� une valeur non valide pour pour auto_uid_number_mechanism ("%s")
                                   dans votre configuration. Seul � uidpool � et � search � sont valides.
                                   Veuillez corriger ce probl�me.';
$lang['error_auth_type_config'] = 'Erreur : Vous avez une erreur dans votre fichier de configuration. Les seuls trois valeurs autoris�es
                                   pour auth_type dans la section $servers sont � session �, � cookie �, et � config �. Vous avez saisi � %s �,
                                   qui n\'est pas autoris�e. ';
$lang['unique_attrs_invalid_credential'] = 'Impossible de se connecter � <b>%s</b> avec votre cr�dentiel unique_attrs. Veuillez v�rifier votre fichier de configuration.'; 
$lang['unique_attr_failed'] = 'Votre tentative d\'ajouter <b>%s</b> (<i>%s</i>) � <br><b>%s</b><br> n\'est pas autoris�e. Cet attribut/valeur appartient � une autre entr�e.<p>Vous souhaitez <a href=\'%s\'>rechercher</a> cette entr�e.';
$lang['php_install_not_supports_tls'] = 'Votre installation de PHP ne supporte pas TLS.';
$lang['could_not_start_tls'] = 'Impossible de d�marrer TLS. Veuillez v�rifier la configuration de votre serveur LDAP.';
$lang['could_not_bind_anon'] = 'Impossible de se connecter anonymement au serveur.';
$lang['could_not_bind'] = 'Impossible de se connecter au serveur LDAP.';
$lang['anonymous_bind'] = 'Connexion anonyme';
$lang['bad_user_name_or_password'] = 'Mauvais nom d\'utilisateur ou mot de passe. Veuillez r�essayer.';
$lang['successfully_logged_in_to_server'] = 'Connexion au serveur <b>%s</b> avec succ�s';
$lang['could_not_set_cookie'] = 'Impossible de d�finir le cookie.';
$lang['ldap_said'] = 'LDAP dit : %s';
$lang['ferror_error'] = 'Erreur';
$lang['fbrowse'] = 'parcourir';
$lang['delete_photo'] = 'Supprimer la photo';
$lang['install_not_support_ext_des'] = 'Votre biblioth�que syst�me crypt ne supporte pas le chiffrement DES �tendu.';
$lang['install_not_support_blowfish'] = 'Votre biblioth�que syst�me crypt ne supporte pas le chiffrement blowfish.';
$lang['install_not_support_md5crypt'] = 'Votre biblioth�que syst�me crypt ne supporte pas le chiffrement md5crypt.';
$lang['install_no_mash'] = 'Votre installation PHP n\'a pas de fonction mhash(). Impossible de faire de signature SHA.';
$lang['jpeg_contains_errors'] = 'jpegPhoto contient des erreurs<br />';
$lang['ferror_number'] = 'Erreur num�ro : %s (%s)';
$lang['ferror_discription'] = 'Description : %s <br /><br />';
$lang['ferror_number_short'] = 'Erreur num�ro : %s<br /><br />';
$lang['ferror_discription_short'] = 'Description : (aucune description disponible)<br />';
$lang['ferror_submit_bug'] = 'Est-ce une anomalie phpLDAPadmin ? Si c\'est le cas, veuillez <a href=\'%s\'>la rapporter</a>.';
$lang['ferror_unrecognized_num'] = 'Num�ro d\'erreur non reconnu: ';
$lang['ferror_nonfatil_bug'] = '<center><table class=\'notice\'><tr><td colspan=\'2\'><center><img src=\'images/warning.png\' height=\'12\' width=\'13\' />
             <b>Vous avez trouv� une anomalie phpLDAPadmin non fatale !</b></td></tr><tr><td>Erreur :</td><td><b>%s</b> (<b>%s</b>)</td></tr><tr><td>Fichier :</td>
             <td><b>%s</b> ligne <b>%s</b>, appelant <b>%s</b></td></tr><tr><td>Versions :</td><td>PLA : <b>%s</b>, PHP : <b>%s</b>, SAPI : <b>%s</b>
             </td></tr><tr><td>Serveur Web :</td><td><b>%s</b></td></tr>
	<tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>Veuillez v�rifier et voir si cette anomalie a d�j� �t� rapport�e ici</a>.</center></td></tr>
	<tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>Si elle n\'a pas �t� rapport�e, vous pouver rapporter cette anomalie en cliquant ici</a>.</center></td></tr>
	</table></center><br />';
$lang['ferror_congrats_found_bug'] = 'F�licitations ! Vous avez trouv� une anomalie dans phpLDAPadmin.<br /><br />
	     <table class=\'bug\'>
	     <tr><td>Erreur :</td><td><b>%s</b></td></tr>
	     <tr><td>Niveau :</td><td><b>%s</b></td></tr>
	     <tr><td>Fichier :</td><td><b>%s</b></td></tr>
	     <tr><td>Ligne :</td><td><b>%s</b></td></tr>
		 <tr><td>Appelant :</td><td><b>%s</b></td></tr>
	     <tr><td>Version PLA :</td><td><b>%s</b></td></tr>
	     <tr><td>Version PHP :</td><td><b>%s</b></td></tr>
	     <tr><td>SAPI PHP :</td><td><b>%s</b></td></tr>
	     <tr><td>Serveur Web :</td><td><b>%s</b></td></tr>
	     </table>
	     <br />
	     Veuillez rapporter cette anomalie en cliquant ci-dessous !';

//ldif_import_form
$lang['import_ldif_file_title'] = 'Importer un fichier LDIF';
$lang['select_ldif_file'] = 'S�lectionner un fichier LDIF :';
$lang['dont_stop_on_errors'] = 'Ne pas vous arr�ter sur les erreurs';

//ldif_import
$lang['add_action'] = 'Ajout...';
$lang['delete_action'] = 'Suppression...';
$lang['rename_action'] = 'Renommage...';
$lang['modify_action'] = 'Modification...';
$lang['warning_no_ldif_version_found'] = 'Aucune version trouv�. Assume 1.';
$lang['valid_dn_line_required'] = 'Une ligne dn valide est requise.';
$lang['missing_uploaded_file'] = 'Fichier t�l�charg� manquant.';
$lang['no_ldif_file_specified'] = 'Aucun fichier LDIF sp�cifi�. Veuillez essayer de nouveau.';
$lang['ldif_file_empty'] = 'Le fichier LDIF t�l�charg� est manquant.';
$lang['empty'] = 'vide';
$lang['file'] = 'Fichier';
$lang['number_bytes'] = '%s octets';

$lang['failed'] = '�choue';
$lang['ldif_parse_error'] = 'Erreur d\'analyse LDIF';
$lang['ldif_could_not_add_object'] = 'Impossible d\'ajouter un objet :';
$lang['ldif_could_not_rename_object'] = 'Impossible de renommer l\'objet :';
$lang['ldif_could_not_delete_object'] = 'Impossible de supprimer l\'objet :';
$lang['ldif_could_not_modify_object'] = 'Impossible de modifier l\'objet :';
$lang['ldif_line_number'] = 'Num�ro de ligne :';
$lang['ldif_line'] = 'Ligne :';

// Exports
$lang['export_format'] = 'Format d\'exportation';
$lang['line_ends'] = 'Les lignes se finissent par';
$lang['must_choose_export_format'] = 'Vous devez choisir un format d\'exportation.';
$lang['invalid_export_format'] = 'Format d\'exportation non valide';
$lang['no_exporter_found'] = 'Aucun filtre d\'exportation trouv�.';
$lang['error_performing_search'] = 'Une erreur est survenue lors de la recherche.';
$lang['showing_results_x_through_y'] = 'Affichage des r�sultats %s � %s.';
$lang['searching'] = 'Recherche en cours...';
$lang['size_limit_exceeded'] = 'Attention, la taille limite de recherche est d�pass�e.';
$lang['entry'] = 'Entr�e';
$lang['ldif_export_for_dn'] = 'Exportation LDIF pour : %s';
$lang['generated_on_date'] = 'G�n�r� par phpLDAPadmin ( http://phpldapadmin.sourceforge.net/ ) pour %s';
$lang['total_entries'] = 'Entr�es totales';
$lang['dsml_export_for_dn'] = 'Exportation DSLM pour : %s';
$lang['include_system_attrs'] = 'Inclure les attributs syst�me';
$lang['csv_spreadsheet'] = 'CSV (feuille de calcul)';

// logins
$lang['password_blank'] = 'Vous avez laiss� le mot de passe vide.';
$lang['no_one_logged_in'] = 'Personne n\'est connect� sur ce serveur.';
$lang['could_not_logout'] = 'Impossible de se d�connecter.';
$lang['unknown_auth_type'] = 'auth_type inconnu : %s';
$lang['logged_out_successfully'] = 'D�connexion du serveur avec succ�s <b>%s</b>';
$lang['authenticate_to_server'] = 'Authentification aupr�s du serveur %s';
$lang['warning_this_web_connection_is_unencrypted'] = 'Avertissement : la connexion Web n\'est pas chiffr�.';
$lang['not_using_https'] = 'Vous n\'utilisez pas � https �. Le navigateur Web transmettra les informations de connexion en clair.';
$lang['login_dn'] = 'DN de connexion';
$lang['user_name'] = 'Nom d\'utilisateur';
$lang['password'] = 'Mot de passe';
$lang['authenticate'] = 'Authentification';
$lang['login_not_allowed'] = 'D�sol�, vous n\'�tes pas autoris� � utiliser phpLDAPadmin avec ce serveur LDAP.';

// Entry browser
$lang['entry_chooser_title'] = 'S�lecteur d\'entr�es';

// Index page
$lang['need_to_configure'] = 'Vous avez besoin de configurer phpLDAPadmin. �ditez le fichier � config.php � pour le faire. un exemple de fichier de configuration est fournit dans � config.php.example �';

// Mass deletes
$lang['no_deletes_in_read_only'] = 'Supprimer n\'est pas autoris� en lecture seule.';
$lang['error_calling_mass_delete'] = 'Erreur lors de l\'applel de mass_delete.php. Il manque mass_delete dans les variables POST.';
$lang['mass_delete_not_array'] = 'La variable POST mass_delete n\'est pas un tableau.';
$lang['mass_delete_not_enabled'] = 'La suppression de masse n\'est pas activ�. Veuillez l\'activer dans config.php avant de proc�der.';
$lang['mass_deleting'] = 'Suppression de masse';
$lang['mass_delete_progress'] = 'Progression de la suppression sur le serveur � %s �';
$lang['malformed_mass_delete_array'] = 'Tableau mass_delete malform�.';
$lang['no_entries_to_delete'] = 'Vous n\'avez s�lectionn� aucune entr�es � supprimer.';
$lang['deleting_dn'] = 'Suppression de %s';
$lang['total_entries_failed'] = '%s sur %s entr�es n\'ont pu �tre effac�es.';
$lang['all_entries_successful'] = 'Toutes les entr�es ont �t� supprim�es avec succ�s.';
$lang['confirm_mass_delete'] = 'Confirmer la suppression de masse de %s entr�es sur le serveur %s';
$lang['yes_delete'] = 'Oui, supprimer !';

// Renaming entries
$lang['non_leaf_nodes_cannot_be_renamed'] = 'Vous ne pouvez renommer une entr�e qui a des sous-entr�es (cad, l\'op�ration de renommage n\'est pas autoris� sur des entr�es non terminales)';
$lang['no_rdn_change'] = 'Vous n\'avez pas modifi� le RDN';
$lang['invalid_rdn'] = 'Valeur RDN non valide';
$lang['could_not_rename'] = 'Impossible de renommer l\'entr�e';

// Password checker
$lang['passwords_match'] = 'Correspondance du mot de passe !';
$lang['passwords_do_not_match'] = 'Les mots de passe ne correspondent pas !';
$lang['password_checker_tool'] = 'Outil de v�rification de mot de passe';
$lang['to'] = 'Vers';

// Templates
$lang['using'] = 'En utilisant le';
$lang['switch_to'] = 'Vous pouvez basculer vers ';
$lang['default_template'] = 'mod�le par d�faut';

// template_config
$lang['user_account'] = 'Compte utilisateur (posixAccount)';
$lang['address_book_inet'] = 'Entr�e de carnet d\'adresses (inetOrgPerson)';
$lang['address_book_moz'] = 'Entr�e de carnet d\'adresses (mozillaOrgPerson)';
$lang['kolab_user'] = 'Entr�e d\'utilisateur Kolab';
$lang['organizational_unit'] = 'Unit� organisationnelle';
$lang['new_organizational_unit'] = 'Nouvelle unit� organisationnelle';
$lang['organizational_role'] = 'R�le organisationnel';
$lang['posix_group'] = 'Groupe Posix';
$lang['samba_machine'] = 'Machine NT Samba';
$lang['samba3_machine'] = 'Machine NT Samba 3';
$lang['samba_user'] = 'Utilisateur Samba';
$lang['samba3_user'] = 'Utilisateur Samba 3';
$lang['samba3_group'] = 'Groupe de mappage Samba 3';
$lang['dns_entry'] = 'Entr�e DNS';
$lang['simple_sec_object'] = 'Object de s�curit� simple';
$lang['courier_mail_account'] = 'Compte de messagerie';
$lang['courier_mail_alias'] = 'Alias de compte de messagerie';
$lang['ldap_alias'] = 'Alias LDAP';
$lang['sendmail_cluster'] = 'Cluster Sendmail';
$lang['sendmail_domain'] = 'Domaine Sendmail';
$lang['sendmail_alias'] = 'Alias Sendmail';
$lang['sendmail_virt_dom'] = 'Domaine virtuel Sendmail';
$lang['sendmail_virt_users'] = 'Utilisateurs virtuels Sendmail';
$lang['sendmail_relays'] = 'Relais Sendmail';
$lang['custom'] = 'personnalis�';
$lang['samba_domain_name'] = 'Mon nom de domaine Samba';
$lang['administrators'] = 'Administrateurs';
$lang['users'] = 'Utilisateurs';
$lang['guests'] = 'Invit�s';
$lang['power_users'] = 'Utilisateurs avec pouvoir';
$lang['account_ops'] = 'Op�rateurs de comptes';
$lang['server_ops'] = 'Op�rateurs de serveurs';
$lang['print_ops'] = 'Op�rateurs d\'impression';
$lang['backup_ops'] = 'Op�rateurs de sauvegarde';
$lang['replicator'] = 'Duplicateurs';
$lang['unable_smb_passwords'] = ' Impossible de cr�er les mots de passe Samba. Veuillez v�rifier la configuration dans template_config.php';
$lang['err_smb_conf'] = 'Erreur : vous avez une erreur dans votre confguration Samba.';
$lang['err_smb_no_name_sid'] = 'Erreur : un nom et un sid doivent �tre fournit pour votre domaine Samba.';
$lang['err_smb_no_name'] = 'Erreur : aucun nom fournit pour le domaine Samba.';
$lang['err_smb_no_sid'] = 'Erreur : aucun sid fournit pour le domaine Samba.';

// Samba Account Template
$lang['samba_account'] = 'Compte Samba';
$lang['samba_account_lcase'] = 'compte samba';

// New User (Posix) Account
$lang['t_new_user_account'] = 'Nouveau compte utilisateur';
$lang['t_hint_customize'] = 'astuce : pour personnaliser ce mod�le, �ditez le fichier templates/creation/new_user_template.php';
$lang['t_name'] = 'Nom';
$lang['t_first_name'] = 'Pr�nom';
$lang['t_last_name'] = 'Nom de famille';
$lang['t_first'] = 'premier';
$lang['t_last'] = 'dernier';
$lang['t_state'] = '�tat';
$lang['t_common_name'] = 'Nom commun';
$lang['t_user_name'] = 'Nom d\'utilisateur';
$lang['t_password'] = 'Mot de passe';
$lang['t_encryption'] = 'Chiffrement';
$lang['t_login_shell'] = 'Shell de connexion';
$lang['t_home_dir'] = 'Dossier personnel';
$lang['t_uid_number'] = 'UID';
$lang['t_auto_det'] = '(d�termin� automatiquement)';
$lang['t_group'] = 'Groupe';
$lang['t_gid_number'] = 'GID';
$lang['t_uid'] = 'ID utilisateur';
$lang['t_err_passwords'] = 'Vos mots de passe ne correspondent pas. Veuillez revenir et r�essayer.';
$lang['t_err_field_blank'] = 'Vous ne pouvez laisser %s vide. Veuillez revenir et r�essayer.';
$lang['t_err_field_num'] = 'Vous ne pouvez entrez que des valeurs num�riques pour le champ %s. Veuillez revenir et r�essayer.';
$lang['t_err_bad_container'] = 'Le conteneur que vous avez sp�cifi� (%s) n\'existe pas. Veuillez revenir et r�essayer.';
$lang['t_confirm_account_creation'] = 'Confirmer la cr�ation du compte';
$lang['t_secret'] = '[secret]';
$lang['t_create_account'] = 'Cr�er un compte';
$lang['t_verify'] = 'V�rifier';

// New Group (Posix)
$lang['t_new_posixgroup'] = 'Nouveau groupe Posix';

// New Address Template
$lang['t_new_address'] = 'Nouvelle entr�e de carnet d\'adresses';
$lang['t_organization'] = 'Organisation';
$lang['t_address'] = 'Adresse';
$lang['t_city'] = 'Ville';
$lang['t_postal_code'] = 'Code postal';
$lang['t_street'] = 'Rue';
$lang['t_work_phone'] = 'T�l�phone (bureau)';
$lang['t_fax'] = 'Fax';
$lang['t_mobile'] = 'Mobile';
$lang['t_email'] = 'Courriel';
$lang['t_container'] = 'Conteneur';
$lang['t_err_cn_blank'] = 'Vousne pouvez pas laissez le Nom commun vide. Veuiller revenir er r�essayer.';
$lang['t_confim_creation'] = 'Confirmer la cr�ation de l\'entr�e :';
$lang['t_create_address'] = 'Cr�er l\'adresse';

// default template
$lang['t_check_pass'] = 'V�rifier l\'adresse...';
$lang['t_auto_submit'] = '(�valuation automatique lors de la soumission.)';

// compare form
$lang['compare'] = 'Comparer';
$lang['comparing'] = 'Compararaison des DNs suivants';
$lang['compare_dn'] = 'Comparer un autre DN avec';
$lang['with'] = 'avec ';
$lang['compf_source_dn'] = 'DN source';
$lang['compf_dn_tooltip'] = 'Comparer cn DN avec un autre';
$lang['switch_entry'] = 'Basculer l\'entr�e';
$lang['no_value'] = 'Aucune valeur';
$lang['compare_with'] = 'Comparer avec une autre entr�e';
$lang['need_oclass'] = 'Vous avez besoin d\'un autre ObjectClass(es) pour ajouter cet attribut %s.';

// Time out page
$lang['session_timed_out_1'] = 'Votre session s\'est termin� avec';
$lang['session_timed_out_2'] = 'min. d\'inactivit�. Vous avez �t� automatiquement d�connect�.';
$lang['log_back_in'] = 'Pour vous reconnecter, veuillez cliquer sur le lien suivant :';
$lang['session_timed_out_tree'] = '(Session expir�e. D�connexion automatique.)';
$lang['timeout_at'] = 'L\'inactivit� vous d�connectera � %s';
?>
