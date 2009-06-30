<?php
/*
 * Spanish (es_ES) translation file for phpLDAPadmin
 *
 * Date: 02/05/2005
 * Source: CVS snapshot of en.php as of 02/05/2005
 * Translator: Miguelanxo Otero Salgueiro <miguelanxo@telefonica.net>
 */

// Search form
$lang['simple_search_form_str'] = 'Formulario de b�squeda sencilla';
$lang['advanced_search_form_str'] = 'Formulario de b�squeda avanzada';
$lang['server'] = 'Servidor';
$lang['search_for_entries_whose'] = 'Buscar objetos que';
$lang['base_dn'] = 'DN base';
$lang['search_scope'] = '�mbito de b�squeda';
$lang['show_attributes'] = 'Mostrar atributos';
$lang['attributes'] = 'Atributos';
$lang['Search'] = 'Buscar';
$lang['predefined_search_str'] = 'Seleccionar una b�squeda predefinida';
$lang['predefined_searches'] = 'B�squedas predefinidas';
$lang['no_predefined_queries'] = 'No hay ninguna b�squeda predefinida en config.php.';
$lang['export_results'] = 'exportar resultados';
$lang['unrecoginzed_search_result_format'] = 'Formato de resultado de b�squeda no reconocido: %s';
$lang['format'] = 'Formato';
$lang['list'] = 'lista';
$lang['table'] = 'tabla';
$lang['bad_search_display'] = 'Su config.php especifica un valor no v�lido para $default_search_display: %s. Por favor, arr�glelo';
$lang['page_n'] = 'P�gina %d';
$lang['no_results'] = 'La b�squeda no ha encontrado resultados.';

// Tree browser
$lang['request_new_feature'] = 'Solicitar una nueva funcionalidad';
$lang['report_bug'] = 'Informar de un error';
$lang['schema'] = 'esquema';
$lang['search'] = 'buscar';
$lang['create'] = 'crear';
$lang['info'] = 'info';
$lang['import'] = 'importar';
$lang['refresh'] = 'refrescar';
$lang['logout'] = 'salir';
$lang['create_new'] = 'Crear nuevo objeto';
$lang['view_schema_for'] = 'Ver el esquema del';
$lang['refresh_expanded_containers'] = 'Refrescar todos los contenedores extendidos del';
$lang['create_new_entry_on'] = 'Crear un nuevo objeto en el';
$lang['new'] = 'nuevo';
$lang['view_server_info'] = 'Ver la informaci�n enviada por el servidor';
$lang['import_from_ldif'] = 'Importar desde un fichero LDIF';
$lang['logout_of_this_server'] = 'Desconectar del servidor';
$lang['logged_in_as'] = 'Conectado como: ';
$lang['this_base_dn_is_not_valid'] = 'Esta DN base no es v�lida.';
$lang['this_base_dn_does_not_exist'] = 'Este objeto no existe.';
$lang['read_only'] = 's�lo lectura';
$lang['read_only_tooltip'] = 'Este atributo ha sido marcado como de s�lo lectura por el administrador de phpLDAPadmin';
$lang['could_not_determine_root'] = 'No se ha podido determinar la ra�z de su �rbol LDAP.';
$lang['ldap_refuses_to_give_root'] = 'Parece que el servidor LDAP ha sido configurado para no revelar su ra�z.';
$lang['please_specify_in_config'] = 'Por fav�r, especif�quela en config.php';
$lang['create_new_entry_in'] = 'Crear nuevo objeto en';
$lang['login_link'] = 'Autentificaci�n';
$lang['login'] = 'conectar';
$lang['base_entry_does_not_exist'] = 'Este objeto base no existe.';
$lang['create_it'] = '�Crearlo?';

// Entry display
$lang['delete_this_entry'] = 'Borrar este objeto';
$lang['delete_this_entry_tooltip'] = 'Se le pedir� confirmaci�n';
$lang['copy_this_entry'] = 'Copiar este objeto';
$lang['copy_this_entry_tooltip'] = 'Copiar este objeto en otro sitio: un nuevo DN u otro servidor';
$lang['export'] = 'Exportar';
$lang['export_lcase'] = 'exportar';
$lang['export_tooltip'] = 'Exportar este objeto';
$lang['export_subtree_tooltip'] = 'Exportar este objeto y todos sus hijos';
$lang['export_subtree'] = 'Exportar sub�rbol';
$lang['create_a_child_entry'] = 'Crear un objeto hijo';
$lang['rename_entry'] = 'Renombrar objeto';
$lang['rename'] = 'Renombrar';
$lang['add'] = 'A�adir';
$lang['view'] = 'Ver';
$lang['view_one_child'] = 'Ver 1 hijo';
$lang['view_children'] = 'Ver %s hijos';
$lang['add_new_attribute'] = 'A�adir atributo';
$lang['add_new_objectclass'] = 'A�adir ObjectClass';
$lang['hide_internal_attrs'] = 'Ocultar atributos internos';
$lang['show_internal_attrs'] = 'Mostrar atributos internos';
$lang['attr_name_tooltip'] = 'Haga click para ver el esquema del atributo de tipo \'%s\'';
$lang['none'] = 'ninguno';
$lang['no_internal_attributes'] = 'No hay atributos internos';
$lang['no_attributes'] = 'Este objeto no tiene atributos';
$lang['save_changes'] = 'Guardar cambios';
$lang['add_value'] = 'a�adir valor';
$lang['add_value_tooltip'] = 'A�adir un valor al atributo \'%s\'';
$lang['refresh_entry'] = 'Refrescar';
$lang['refresh_this_entry'] = 'Refrescar este objeto';
$lang['delete_hint'] = 'Nota: para borrar un atributo, borre su atributo y haga click en guardar.';
$lang['attr_schema_hint'] = 'Nota: Para ver el esquema de un atributo, haga click en su nombre.';
$lang['attrs_modified'] = 'Se han modificado algunos atributos (%s) que se encuentran destacados mas abajo.';
$lang['attr_modified'] = 'Se ha modificado alg�n atributo (%s) que se encuentra destacado m�s abajo.';
$lang['viewing_read_only'] = 'Nota: Modo de s�lo lectura.';
$lang['no_new_attrs_available'] = 'no hay nuevos atributos en este objeto';
$lang['no_new_binary_attrs_available'] = 'no hay nuevos atributos binarios en este objeto';
$lang['binary_value'] = 'Valor binario';
$lang['add_new_binary_attr'] = 'A�adir atributo binario';
$lang['alias_for'] = 'Nota: \'%s\' es un alias de \'%s\'';
$lang['required_for'] = 'Atributo requerido para la(s) clase(s) de objeto %s';
$lang['download_value'] = 'descargar valor';
$lang['delete_attribute'] = 'borrar atributo';
$lang['true'] = 'verdadero';
$lang['false'] = 'falso';
$lang['none_remove_value'] = 'ninguno, borrar valor';
$lang['really_delete_attribute'] = '�Borrar realmente el atributo';
$lang['add_new_value'] = 'A�adir valor';

// Schema browser
$lang['the_following_objectclasses'] = 'El servidor LDAP soporta las siguientes clases de objeto:';
$lang['the_following_attributes'] = 'El servidor LDAP soporta los siguientes tipos de atributo:';
$lang['the_following_matching'] = 'El servidor LDAP soporta las siguientes reglas de coincidencia:';
$lang['the_following_syntaxes'] = 'El servidor LDAP soporta las siguientes sintaxis:';
$lang['schema_retrieve_error_1']='El servidor LDAP no soporta el protocolo LDAP en su totalidad.';
$lang['schema_retrieve_error_2']='Su versi�n de PHP no realiza la petici�n correctamente.';
$lang['schema_retrieve_error_3']='O el phpLDAPadmin no sabe como obtener el esquema del servidor.';
$lang['jump_to_objectclass'] = 'Ir a la clase de objeto';
$lang['view_schema_for_oclass'] = 'Ver la descripci�n del esquema para esta clase de objeto.';
$lang['jump_to_attr'] = 'Ir al tipo de atributo';
$lang['jump_to_matching_rule'] = 'Ir a la regla de coincidencia';
$lang['schema_for_server'] = 'Esquema del servidor';
$lang['required_attrs'] = 'Atributos requeridos';
$lang['required'] = 'requerido';
$lang['optional_attrs'] = 'Atributos opcionales';
$lang['optional_binary_attrs'] = 'Atributos binarios opcionales';
$lang['OID'] = 'OID';
$lang['aliases']='Alias';
$lang['desc'] = 'Descripci�n';
$lang['no_description']='sin descripci�n';
$lang['name'] = 'Nombre';
$lang['equality']='Igualdad';
$lang['is_obsolete'] = 'Esta clase de objeto es obsoleta.';
$lang['inherits'] = 'Hereda de';
$lang['inherited_from'] = 'Heredado de';
$lang['parent_to'] = 'Padre de';
$lang['jump_to_this_oclass'] = 'Ir a la definici�n de esta clase de objeto';
$lang['matching_rule_oid'] = 'OID de la regla de coincidencia';
$lang['syntax_oid'] = 'OID de sintaxis';
$lang['not_applicable'] = 'no aplicable';
$lang['not_specified'] = 'no especificado';
$lang['character'] = 'car�cter'; 
$lang['characters'] = 'caracteres';
$lang['used_by_objectclasses'] = 'Usado por la clase de objeto';
$lang['used_by_attributes'] = 'Usado por los atributos';
$lang['maximum_length'] = 'Longitud m�xima';
$lang['attribute_types']='Tipos de atributo';
$lang['syntaxes'] = 'Sintaxis';
$lang['matchingrules'] = 'Reglas de coincidencia';
$lang['oid'] = 'OID';
$lang['obsolete'] = 'Obsoleto';
$lang['ordering'] = 'Ordenaci�n';
$lang['substring_rule'] = 'Regla de subcadena';
$lang['single_valued'] = 'Univaludado';
$lang['collective'] = 'Colectivo';
$lang['user_modification'] = 'Modificado por el usuario';
$lang['usage'] = 'Uso';
$lang['could_not_retrieve_schema_from'] = 'No se ha podido obtener el esquema de';
$lang['type'] = 'Tipo';
$lang['no_such_schema_item'] = 'No hay tal �tem en el esquema: "%s"';

// Deleting entries
$lang['entry_deleted_successfully'] = 'Objeto %s borrado correctamente.';
$lang['you_must_specify_a_dn'] = 'Debe especificar un DN';
$lang['could_not_delete_entry'] = 'No se ha podido borrar el objeto %s';
$lang['no_such_entry'] = 'No hay tal objeto %s';
$lang['delete_dn'] = 'Borrar %s';
$lang['permanently_delete_children'] = '�Borrar tambi�n todos los hijos?';
$lang['entry_is_root_sub_tree'] = 'Este objeto es la ra�z de un sub�rbol que contiene %s objetos.';
$lang['view_entries'] = 'ver objetos';
$lang['confirm_recursive_delete'] = 'phpLDAPadmin puede borrar recursivamente este objeto y sus %s hijos. Vea m�s abajo la lista de objetos que se borrar�n ahora. �Todav�a quiere hacerlo?';
$lang['confirm_recursive_delete_note'] = 'Nota: es potencialmente peligroso y debe hacerlo a su cuenta y riesgo. Esta operaci�n NO puede deshacerse. Tome en consideraci�n alias, referencias y otras cosas que puedan causar problemas.';
$lang['delete_all_x_objects'] = 'Borrar los %s objetos';
$lang['recursive_delete_progress'] = 'Progreso de la borraci�n recursiva';
$lang['entry_and_sub_tree_deleted_successfully'] = 'Objeto %s y su sub�rbol borrado correctamente.';
$lang['failed_to_delete_entry'] = 'Error al borrar el objeto %s';
$lang['list_of_entries_to_be_deleted'] = 'Lista de objetos a borrar:';
$lang['sure_permanent_delete_object']='�Est� seguro de querer borrar este objeto?';
$lang['dn'] = 'DN';

// Deleting attributes
$lang['attr_is_read_only'] = 'El atributo "%s" est� marcado como de s�lo lectura en la configuraci�n de phpLDAPadmin.';
$lang['no_attr_specified'] = 'No se ha especificado ning�n nombre de atributo.';
$lang['no_dn_specified'] = 'No se ha especificado ning�n DN';

// Adding attributes
$lang['left_attr_blank'] = 'Ha dejado en blanco el valor del atributo. Por favor, vuelva atr�s e int�ntelo de nuevo.';
$lang['failed_to_add_attr'] = 'Error al a�adir atributo.';
$lang['file_empty'] = 'El fichero que ha escogido no existe o est� vac�o. Por favor vuelva atr�s e int�ntelo de nuevo.';
$lang['invalid_file'] = 'Error de seguridad: El fichero que est� enviando puede ser malicioso.';
$lang['warning_file_uploads_disabled'] = 'Su configuraci�n del PHP ha desactivado la recepci�n de ficheros. Por favor revise php.ini antes de continuar.';
$lang['uploaded_file_too_big'] = 'El fichero que est� enviando es demasiado grande. Por favor revise el ajuste "upload_max_size" en php.ini.';
$lang['uploaded_file_partial'] = 'El fichero que ha seleccionado s�lo se ha recibido parcialmente debido a un error de red.';
$lang['max_file_size'] = 'Tama�o m�ximo de fichero: %s';

// Updating values
$lang['modification_successful'] = '�Modificaci�n realizada correctamente!';
$lang['change_password_new_login'] = 'Como ha cambiado su contrase�a, debe conectarse de nuevo empleando la nueva.';

// Adding objectClass form
$lang['new_required_attrs'] = 'Nuevos atributos requeridos';
$lang['requires_to_add'] = 'Esta acci�n requiere que a�ada';
$lang['new_attributes'] = 'nuevos atributos';
$lang['new_required_attrs_instructions'] = 'Instrucciones: Para poder a�adir esta clase a este objeto, debe especificar';
$lang['that_this_oclass_requires'] = 'que esta clase requiere. Puede hacerlo en este formulario.';
$lang['add_oclass_and_attrs'] = 'A�adir clase de objeto y atributos';
$lang['objectclasses'] = 'Clases de objeto';

// General
$lang['chooser_link_tooltip'] = 'Haga click en el di�logo emergente para seleccionar un DN de forma gr�fica';
$lang['no_updates_in_read_only_mode'] = 'No puede realizar cambios cuando el servidor est� funcionando en modo de s�lo lectura';
$lang['bad_server_id'] = 'Identificador de servidor no v�lido';
$lang['not_enough_login_info'] = 'No hay informaci�n suficiente para conectar con el servidor. Por favor, revise su configuraci�n.';
$lang['could_not_connect'] = 'No se ha podido conectar con el servidor LDAP.';
$lang['could_not_connect_to_host_on_port'] = 'No se ha podido conectar con "%s" en el puerto "%s"';
$lang['could_not_perform_ldap_mod_add'] = 'No se ha podido realizar la operaci�n "ldap_mod_add".';
$lang['bad_server_id_underline'] = 'Identificador de servidor no v�lido: ';
$lang['success'] = '�xito';
$lang['home'] = 'Inicio';
$lang['help'] = 'Ayuda';
$lang['success'] = '�xito';
$lang['server_colon_pare'] = 'Servidor: ';
$lang['look_in'] = 'Buscando en: ';
$lang['missing_server_id_in_query_string'] = '�No se ha especificado ning�n servidor en la petici�n!';
$lang['missing_dn_in_query_string'] = '�No se ha especificado ning�n DN en la petici�n!';
$lang['back_up_p'] = 'Volver';
$lang['no_entries'] = 'no hay objetos';
$lang['not_logged_in'] = 'No est� conectado';
$lang['could_not_det_base_dn'] = 'No se puede determinar el DN base';
$lang['please_report_this_as_a_bug']='Por favor informe de este error.';
$lang['reasons_for_error']='Esto puede suceder por varias razones, las m�s probables son:';
$lang['yes']='S�';
$lang['no']='No';
$lang['go']='Ir';
$lang['delete']='Borrar';
$lang['back']='Atr�s';
$lang['object']='objeto';
$lang['delete_all']='Borrar todo';
$lang['url_bug_report']='https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498546';
$lang['hint'] = 'nota';
$lang['bug'] = 'error';
$lang['warning'] = 'aviso';
$lang['light'] = 'bombilla'; // the word 'light' from 'light bulb'
$lang['proceed_gt'] = 'Proceder &gt;&gt;';

// Add value form
$lang['add_new'] = 'A�adir';
$lang['value_to'] = 'valor de';
$lang['distinguished_name'] = 'Nombre distinguido';
$lang['current_list_of'] = 'Lista actual de';
$lang['values_for_attribute'] = 'valores del atributo';
$lang['inappropriate_matching_note'] = 'Nota: Si no ha creado una regla de igualdad en el servidor LDAP para este atributo, obtendr� un error de coincidencia inapropiada ("inappropriate matching").';
$lang['enter_value_to_add'] = 'Introduzca el valor a a�adir:';
$lang['new_required_attrs_note'] = 'Nota: puede que tenga que introducir nuevos atributos que esta clase de objeto requiera';
$lang['syntax'] = 'Sintaxis';

//copy.php
$lang['copy_server_read_only'] = 'No puede realizar modificaciones cuando el servidor est� en modo de s�lo lectura';
$lang['copy_dest_dn_blank'] = 'Ha dejado el campo DN en blanco.';
$lang['copy_dest_already_exists'] = 'El objeto destino (%s) ya existe.';
$lang['copy_dest_container_does_not_exist'] = 'El contenedor destino (%s) no existe.';
$lang['copy_source_dest_dn_same'] = 'El DN origen y destino son iguales.';
$lang['copy_copying'] = 'Copiando ';
$lang['copy_recursive_copy_progress'] = 'Progreso de la copia recursiva';
$lang['copy_building_snapshot'] = 'Creando imagen del �rbol a copiar... ';
$lang['copy_successful_like_to'] = '�Copia correcta! �Le gustar�a ';
$lang['copy_view_new_entry'] = 'ver el nuevo objeto';
$lang['copy_failed'] = 'Error al copiar el DN: ';

//edit.php
$lang['missing_template_file'] = 'Aviso: falta el fichero de plantilla, ';
$lang['using_default'] = 'usando la plantilla por defecto.';
$lang['template'] = 'Plantilla';
$lang['must_choose_template'] = 'Debes escoger una plantilla';
$lang['invalid_template'] = '%s no es una plantilla v�lida';
$lang['using_template'] = 'usando plantilla';
$lang['go_to_dn'] = 'Ir a %s';
$lang['structural_object_class_cannot_remove'] = 'Esta es una clase de objeto estructural y no se puede eliminar.';
$lang['structural'] = 'estructural';

//copy_form.php
$lang['copyf_title_copy'] = 'Copiar ';
$lang['copyf_to_new_object'] = 'a un objeto nuevo';
$lang['copyf_dest_dn'] = 'DN destino';
$lang['copyf_dest_dn_tooltip'] = 'El DN completo del objeto a crear';
$lang['copyf_dest_server'] = 'Servidor destino';
$lang['copyf_note'] = 'Nota: S�lo se puede copiar entre servidores diferentes cuando no hay violaciones de esquema';
$lang['copyf_recursive_copy'] = 'Tambi�n copiar recursivamente todos los hijos de este objeto.';
$lang['recursive_copy'] = 'Copia recursiva';
$lang['filter'] = 'Filtro';
$lang['search_filter'] = 'Filtro de b�squeda';
$lang['filter_tooltip'] = 'Cuando se realice una copia recursiva, copiar s�lo los objetos que superen el filtrado';

//create.php
$lang['create_required_attribute'] = 'Ha dejado el valor del atributo requerido (%s) en blanco.';
$lang['redirecting'] = 'Redirigiendo...';
$lang['here'] = 'aqu�';
$lang['create_could_not_add'] = 'No se ha podido a�adir el objeto al servidor LDAP.';

//create_form.php
$lang['createf_create_object'] = 'Crear objeto';
$lang['createf_choose_temp'] = 'Escoja una plantilla';
$lang['createf_select_temp'] = 'Seleccione una plantilla para el proceso de creaci�n';
$lang['save_as_file'] = 'Guardar como fichero';
$lang['rdn_field_blank'] = 'Ha dejado el campo RDN en blanco.';
$lang['container_does_not_exist'] = 'El contenedor que ha especificado (%s) no existe. Por favor int�ntelo de nuevo.';
$lang['no_objectclasses_selected'] = 'No ha seleccionado ninguna clase para este objeto. Por favor, vuelva atr�s y h�galo ahora.';
$lang['hint_structural_oclass'] = 'Nota: Debe escoger al menos una clase de objeto estructural';

//creation_template.php
$lang['ctemplate_on_server'] = 'En el servidor';
$lang['ctemplate_no_template'] = 'No se ha especificado ninguna plantilla en las variables POST.';
$lang['template_not_readable'] = 'Su configuraci�n especifica un fichero "%s" para esta plantilla pero dicho fichero no se puede leer debido a que sus permisos son demasiado restrictivos.';
$lang['template_does_not_exist'] = 'Su configuraci�n especifica un fichero "%s" para esta plantilla pero dicho fichero no existe en el directorio templates/creation.';
$lang['create_step1'] = 'Paso 1 de 2: Nombre y clase(s) de objeto';
$lang['create_step2'] = 'Paso 2 de 2: Especifique attributos y valores';
$lang['relative_distinguished_name'] = 'Nombre Distinguido Relativo (RDN)';
$lang['rdn'] = 'RDN';
$lang['rdn_example'] = '(ejemplo: cn=nuevaPersona)';
$lang['container'] = 'Contenedor';

// search.php
$lang['you_have_not_logged_into_server'] = 'Todav�a no ha conectado con el servidor, as� que no puede realizar b�squedas.';
$lang['click_to_go_to_login_form'] = 'Pulse aqu� para ir al formulario de conexi�n';
$lang['unrecognized_criteria_option'] = 'Criterio no reconocido: ';
$lang['if_you_want_to_add_criteria'] = 'Si quiere puede a�adir su propios criterios a la lista. Aseg�rese de editar search.php para manejarlos. Saliendo...';
$lang['entries_found'] = 'Objetos encontrados: ';
$lang['filter_performed'] = 'Filtrado realizado: ';
$lang['search_duration'] = 'B�squeda realizada por phpLDAPadmin en';
$lang['seconds'] = 'segundos';

// search_form_advanced.php
$lang['scope_in_which_to_search'] = '�mbito de b�squeda';
$lang['scope_sub'] = 'Sub (sub�rbol completo)';
$lang['scope_one'] = 'One (un nivel bajo la base)';
$lang['scope_base'] = 'Base (s�lo la base)';
$lang['standard_ldap_search_filter'] = 'Filtro de b�squeda LDAP est�ndar. Ejemplo: (&(sn=Picapiedra)(givenname=Pedro))';
$lang['search_filter'] = 'Filtro de b�squeda';
$lang['list_of_attrs_to_display_in_results'] = 'Lista de atributos para mostrar en los resultados (separados por comas)';
$lang['show_attributes'] = 'Mostrar atributos';

// search_form_simple.php
$lang['search_for_entries_whose'] = 'Buscar entradas en las que';
$lang['equals'] = 'sea igual a';
$lang['starts with'] = 'comience por';
$lang['contains'] = 'contenga';
$lang['ends with'] = 'acabe en';
$lang['sounds like'] = 'suene como';

// server_info.php
$lang['could_not_fetch_server_info'] = 'No se ha podido obtener ninguna informaci�n del servidor LDAP. Esto puede deberse a este <a href="http://bugs.php.net/bug.php?id=29587">error</a> es su versi�n de PHP o quiz�s su servidor LDAP posee controles de acceso que privan a los clientes de acceso al RootDSE.';
$lang['server_info_for'] = 'Informaci�n sobre el servidor: ';
$lang['server_reports_following'] = 'El servidor LDAP env�a la siguiente informaci�n:';
$lang['nothing_to_report'] = 'Este servidor no tiene nada sobre lo que informar.';

//update.php
$lang['update_array_malformed'] = 'El array update_array no est� bien formado. Esto puede indicar un error de phpLDAPadmin. Por favor, informe de ello.';
$lang['could_not_perform_ldap_modify'] = 'No se ha podido realizar la operaci�n "ldap_modify".';

// update_confirm.php
$lang['do_you_want_to_make_these_changes'] = '�Quiere realizar estos cambios?';
$lang['attribute'] = 'Atributo';
$lang['old_value'] = 'Valor anterior';
$lang['new_value'] = 'Nuevo valor';
$lang['attr_deleted'] = '[atributo borrado]';
$lang['commit'] = 'Cometer';
$lang['cancel'] = 'Cancelar';
$lang['you_made_no_changes'] = 'No ha realizado cambios';
$lang['go_back'] = 'Volver atr�s';

// welcome.php
$lang['welcome_note'] = 'Use el men� de la izquierda para navegar';
$lang['credits'] = 'Creditos';
$lang['changelog'] = 'Lista de cambios';
$lang['donate'] = 'Donar';
$lang['pla_logo'] = 'logotipo de phpLDAPadmin';

// Donate.php
$lang['donation_instructions'] = 'Para donar fondos al proyecto phpLDAPadmin, use uno de los botones de abajo.';
$lang['donate_amount'] = 'Donar %s';

$lang['purge_cache'] = 'Borrar cach�s';
$lang['no_cache_to_purge'] = 'No hay que borrar ning�n cach�.';
$lang['done_purging_caches'] = 'Se han borrado %s bytes de cach�.';
$lang['purge_cache_tooltip'] = 'Se han borrado todos los datos en el cach� de phpLDAPadmin, incluyendo los esquemas del servidor.';

// view_jpeg_photo.php
$lang['unsafe_file_name'] = 'Nombre de fichero no seguro: ';
$lang['no_such_file'] = 'No hay tal fichero: ';

//function.php
$lang['auto_update_not_setup'] = 'Ha activado "auto_uid_numbers" para <b>%s</b> en su configuraci�n,
                                  pero no ha especificado el mecanismo "auto_uid_number_mechanism". Por favor, corrija este problema';
$lang['uidpool_not_set'] = 'Ha especificado el mecanismo "auto_uid_number_mechanism" como "uidpool"
                            en su configuraci�n para el servidor <b>%s</b>, pero no ha especificado
                            "audo_uid_number_uid_pool_dn". Por favor, verifiquelo antes de continuar.';
$lang['uidpool_not_exist'] = 'Parece ser que el "uidPool" que ha especificado en su configuraci�n ("%s")
                              no existe.';
$lang['specified_uidpool'] = 'Ha especificado "auto_uid_number_mechanism" como "search" en la
                              configuraci�n del servidor <b>%s</b>, pero no ha especificado
                              "auto_uid_number_search_base". Por favor, especif�quelo antes de continuar.';
$lang['auto_uid_invalid_credential'] = 'Imposible conectar con <b>%s</b> con sus credenciales "auto_uid". Por favor, verifique su fichero de configuraci�n.'; 
$lang['bad_auto_uid_search_base'] = 'Su configuraci�n de phpLDAPadmin especifica "auto_uid_search_base" como no v�lida para el servidor %s';
$lang['auto_uid_invalid_value'] = 'Ha especificado un valor no v�lido para el mecanismo "auto_uid_number_mechanism" ("%s")
                                   en su configuraci�n. S�lo son v�lidos "uidpool" y "search". Por favor, corrija este problema.';
$lang['error_auth_type_config'] = 'Error: Tiene un error en su fichero de configurci�n. Los tres �nicos valores para "auth_type"
                                    en la secci�n $servers son \'session\', \'cookie\', y \'config\'. Usted ha introducido \'%s\',
                                    que no est� permitido. ';
$lang['unique_attrs_invalid_credential'] = 'Imposible conectarse a <b>%s</b> con sus credenciales unique_attr. Por favor, revise su fichero de configuraci�n.';
$lang['unique_attr_failed'] = 'Su intento de a�adir <b>%s</b> (<i>%s</i>) a <br><b>%s</b><br> NO se ha permitido. Tal atributo/valor pertenece a otro objeto.<p>Probablemente desee <a href=\'%s\'>buscar</a> tal objeto.';
$lang['php_install_not_supports_tls'] = 'Su instalaci�n de PHP no soporta TLS.';
$lang['could_not_start_tls'] = 'No se ha podido iniciar TLS. Por favor, revise su configuraci�n LDAP.';
$lang['could_not_bind_anon'] = 'No se ha podido conectar con el servidor de forma an�nima.';
$lang['could_not_bind'] = 'No se ha podido conectar con el servidor LDAP.';
$lang['anonymous_bind'] = 'Conexi�n an�nima';
$lang['bad_user_name_or_password'] = 'Nombre de usuario o contrase�a incorrectos. Por favor, int�ntelo de nuevo.';
$lang['redirecting_click_if_nothing_happens'] = 'Redirigiendo... Pulse aqu� si no sucede nada.';
$lang['successfully_logged_in_to_server'] = 'Ha conectado con el servidor <b>%s</b>.';
$lang['could_not_set_cookie'] = 'No se ha podido guardar la cookie.';
$lang['ldap_said'] = 'LDAP ha dicho: %s';
$lang['ferror_error'] = 'Error';
$lang['fbrowse'] = 'seleccionar';
$lang['delete_photo'] = 'Borrar foto';
$lang['install_not_support_blowfish'] = 'Su instalaci�n de PHP no soporta encriptaci�n blowfish.';
$lang['install_not_support_md5crypt'] = 'Su instalaci�n de PHP no soporta encriptaci�n md5crypt.';
$lang['install_no_mash'] = 'Su instalaci�n de PHP no posee la funci�n mhash(). No se pueden realizar hashes SHA.';
$lang['jpeg_contains_errors'] = 'La foto jpegPhoto contiene errores<br />';
$lang['ferror_number'] = 'Error n�mero: %s (%s)';
$lang['ferror_discription'] = 'Descripci�n: %s <br /><br />';
$lang['ferror_number_short'] = 'Error n�mero: %s<br /><br />';
$lang['ferror_discription_short'] = 'Descripci�n: (no existe descripci�n disponible)<br />';
$lang['ferror_submit_bug'] = '�Es �ste un error de phpLDAPadmin? Si es as�, por favor <a href=\'%s\'>informe sobre ello</a>.';
$lang['ferror_unrecognized_num'] = 'N�mero de error no reconocido: ';
$lang['ferror_nonfatil_bug'] = '<center><table class=\'notice\'><tr><td colspan=\'2\'><center><img src=\'images/warning.png\' height=\'12\' width=\'13\' />
             <b>�Ha encontrado un error no fatal en phpLDAPadmin!</b></td></tr><tr><td>Error:</td><td><b>%s</b> (<b>%s</b>)</td></tr><tr><td>Fichero:</td>
             <td><b>%s</b> l�nea <b>%s</b>, caller <b>%s</b></td></tr><tr><td>Versiones:</td><td>PLA: <b>%s</b>, PHP: <b>%s</b>, SAPI: <b>%s</b>
             </td></tr><tr><td>Servidor web:</td><td><b>%s</b></td></tr><tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>
             Por favor, informe de este error pulsando aqu�</a>.</center></td></tr></table></center><br />';
$lang['ferror_congrats_found_bug'] = '�Felicidades! Ha encontrado un error en phpLDAPadmin.<br /><br />
	     <table class=\'bug\'>
	     <tr><td>Error:</td><td><b>%s</b></td></tr>
	     <tr><td>Nivel:</td><td><b>%s</b></td></tr>
	     <tr><td>Fichero:</td><td><b>%s</b></td></tr>
	     <tr><td>L�nea:</td><td><b>%s</b></td></tr>
		 <tr><td>Caller:</td><td><b>%s</b></td></tr>
	     <tr><td>Veris�n PLA:</td><td><b>%s</b></td></tr>
	     <tr><td>Versi�n PHP:</td><td><b>%s</b></td></tr>
	     <tr><td>PHP SAPI:</td><td><b>%s</b></td></tr>
	     <tr><td>Servidor web:</td><td><b>%s</b></td></tr>
	     </table>
	     <br />
	     Por favor, informe sobre este error haciendo click m�s abajo!';

//ldif_import_form
$lang['import_ldif_file_title'] = 'Importar fichero LDIF';
$lang['select_ldif_file'] = 'Seleccione un fichero LDIF:';
$lang['dont_stop_on_errors'] = 'Ignorar errores';

//ldif_import
$lang['add_action'] = 'A�adiendo...';
$lang['delete_action'] = 'Borrando...';
$lang['rename_action'] = 'Renombrando...';
$lang['modify_action'] = 'Modificando...';
$lang['warning_no_ldif_version_found'] = 'No se ha encontrado versi�n. Asumiendo 1.';
$lang['valid_dn_line_required'] = 'Se requiere una l�nea v�lida.';
$lang['missing_uploaded_file'] = 'Falta el fichero enviado.';
$lang['no_ldif_file_specified.'] = 'No se ha especificado un fichero LDIF. Por favor, int�ntelo de nuevo.';
$lang['ldif_file_empty'] = 'El fichero LDIF enviado est� vac�o.';
$lang['empty'] = 'vac�o';
$lang['file'] = 'Fichero';
$lang['number_bytes'] = '%s bytes';

$lang['failed'] = 'Error';
$lang['ldif_parse_error'] = 'Error al parsear LDIF';
$lang['ldif_could_not_add_object'] = 'No se ha podido a�adir objeto:';
$lang['ldif_could_not_rename_object'] = 'No se ha podido renombrar el objeto:';
$lang['ldif_could_not_delete_object'] = 'No se ha podido borrar el objeto:';
$lang['ldif_could_not_modify_object'] = 'No se ha podido modificar el objeto:';
$lang['ldif_line_number'] = 'N�mero de l�nea:';
$lang['ldif_line'] = 'L�nea:';

// Exports
$lang['export_format'] = 'Formato de exportaci�n';
$lang['line_ends'] = 'Fin de l�nea';
$lang['must_choose_export_format'] = 'Debe escoger un formato de exportaci�n.';
$lang['invalid_export_format'] = 'Formato de exportaci�n no v�lido';
$lang['no_exporter_found'] = 'No se ha encontrado ning�n exportador v�lido.';
$lang['error_performing_search'] = 'Se ha encontrado un error al realizar la b�squeda.';
$lang['showing_results_x_through_y'] = 'Mostrando los resultados de %s a %s.';
$lang['searching'] = 'Buscando...';
$lang['size_limit_exceeded'] = 'Nota: se ha excedido el tiempo de b�squeda.';
$lang['entry'] = 'Objeto';
$lang['ldif_export_for_dn'] = 'Exportaci�n LDIF de: %s';
$lang['generated_on_date'] = 'Generado por phpLDAPadmin el %s';
$lang['total_entries'] = 'Entradas totales';
$lang['dsml_export_for_dn'] = 'Exportaci�n DSLM de: %s';
$lang['include_system_attrs'] = 'Incluir atributos de sistema';
$lang['csv_spreadsheet'] = 'CSV (Hoja de c�lculo)';

// logins
$lang['could_not_find_user'] = 'No se ha podido encontrar el usuario "%s"';
$lang['password_blank'] = 'Ha dejado la contrase�a en blanco.';
$lang['login_cancelled'] = 'Conexi�n cancelada.';
$lang['no_one_logged_in'] = 'No hay nadie conectado con el servidor.';
$lang['could_not_logout'] = 'No se ha podido desconectar.';
$lang['unknown_auth_type'] = 'Tipo de autentificaci�n "auth_type" desconocido: %s';
$lang['logged_out_successfully'] = 'Se ha desconectado del servidor <b>%s</b>';
$lang['authenticate_to_server'] = 'Autentificaci�n del servidor %s';
$lang['warning_this_web_connection_is_unencrypted'] = 'Aviso: Esta conexi�n no est� encriptada.';
$lang['not_using_https'] = 'No est� usando \'https\'. El navegador web enviar� su informaci�n sin encriptar.';
$lang['login_dn'] = 'Login';
$lang['user_name'] = 'Nombre de usuario';
$lang['password'] = 'Contrase�a';
$lang['authenticate'] = 'Entrar';

// Entry browser
$lang['entry_chooser_title'] = 'Selector de objetos';

// Index page
$lang['need_to_configure'] = 'Debe configurar phpLDAPadmin, editando el fichero \'config.php\'. Se proporciona un fichero de configuraci�n de ejemplo en \'config.php.example\'';

// Mass deletes
$lang['no_deletes_in_read_only'] = 'No se permiten borrados en modo de s�lo lectura.';
$lang['error_calling_mass_delete'] = 'Error al llamar a "mass_delete.php". Falta la variable POST "mass_delete".';
$lang['mass_delete_not_array'] = 'La variable POST "mass_delete" no es un array.';
$lang['mass_delete_not_enabled'] = 'No est� activado el borrado masivo. Por favor, act�velo en config.php antes de continuar.';
$lang['search_attrs_wrong_count'] = 'Su config.php tiene un error. El n�mero de atributos en $search_attributes y $search_attributes_display es diferente';
$lang['mass_deleting'] = 'Efectuando borrado masivo';
$lang['mass_delete_progress'] = 'Borrado en progreso en el servidor "%s"';
$lang['malformed_mass_delete_array'] = 'Array de borrado masivo mal formado.';
$lang['no_entries_to_delete'] = 'No ha seleccionado objetos para borrar.';
$lang['deleting_dn'] = 'Borrando %s';
$lang['total_entries_failed'] = 'No han podido borrarse %s de %s objetos.';
$lang['all_entries_successful'] = 'Todos los objetos han sido borrados.';
$lang['confirm_mass_delete'] = 'Confirmar borrado masivo de %s objetos en el servidor %s';
$lang['yes_delete'] = '�S�, borrar!';

// Renaming entries
$lang['non_leaf_nodes_cannot_be_renamed'] = 'No puede renombrar un objeto que tenga hijos';
$lang['no_rdn_change'] = 'No ha cambiado el RDN';
$lang['invalid_rdn'] = 'Valor RDN no v�lido';
$lang['could_not_rename'] = 'No se ha podido renombrar el objeto';

// General errors
$lang['php5_unsupported'] = 'phpLDAPadmin no soporta todav�a PHP 5. Si contin�a encontrar� probablemente extra�os errores.';
$lang['mismatched_search_attr_config'] = 'Su configuraci�n tiene un error. $search_attributes debe tener el mismo n�mero de atributos que $search_attributes_display.';

// Password checker
$lang['passwords_match'] = '�Las contrase�as coinciden!';
$lang['passwords_do_not_match'] = '�Las contrase�as no coinciden!';
$lang['password_checker_tool'] = 'Herramienta de comprobaci�n de contrase�as';
$lang['compare'] = 'Comparar';
$lang['to'] = 'con';

// Templates
$lang['using'] = 'Usando la';
$lang['template'] = 'plantilla';
$lang['switch_to'] = 'Puede cambair a la ';
$lang['default_template'] = 'plantilla por defecto';

// template_config
$lang['user_account'] = 'Cuenta de Usuario (posixAccount)';
$lang['address_book_inet'] = 'Entrada del libro de direcciones (inetOrgPerson)';
$lang['address_book_moz'] = 'Entrada del libro de direcciones (mozillaOrgPerson)';
$lang['kolab_user'] = 'Entrada de Usuario Kolab';
$lang['organizational_unit'] = 'Unidad Organizativa';
$lang['organizational_role'] = 'Rol Organizativo';
$lang['posix_group'] = 'Grupo Posix';
$lang['samba_machine'] = 'Ordenador con Samba NT';
$lang['samba3_machine'] = 'Ordenador con Samba 3 NT';
$lang['samba_user'] = 'Usuario de Samba';
$lang['samba3_user'] = 'Usuario de Samba 3';
$lang['samba3_group'] = 'Mapeo de Grupo de Samba 3';
$lang['dns_entry'] = 'Entrada DNS';
$lang['simple_sec_object'] = 'Objeto de Seguridad Simple';
$lang['courier_mail_account'] = 'Cuenta de Correo Courier';
$lang['courier_mail_alias'] = 'Alias de Correo Courier';
$lang['ldap_alias'] = 'Alias de LDAP';
$lang['sendmail_cluster'] = 'Cluster de Sendmail';
$lang['sendmail_domain'] = 'Dominio de Sendmail';
$lang['sendmail_alias'] = 'Alias de Sendmail';
$lang['sendmail_virt_dom'] = 'Dominio Virtual de Sendmail';
$lang['sendmail_virt_users'] = 'Usuarios Virtuales de Sendmail';
$lang['sendmail_relays'] = 'Rel�s de Sendmail';
$lang['custom'] = 'A medida';
$lang['samba_domain_name'] = 'Mi Nombre de Dominio de Samba';
$lang['administrators'] = 'Administradores';
$lang['users'] = 'Usuarios';
$lang['guests'] = 'Invitados';
$lang['power_users'] = 'Usuarios Privilegiados';
$lang['account_ops'] = 'Administradores de Cuentas';
$lang['server_ops'] = 'Administradores de Servidor';
$lang['print_ops'] = 'Administradores de Impresi�n';
$lang['backup_ops'] = 'Administradores de Copias de Seguridad';
$lang['replicator'] = 'Replicador';
$lang['unable_smb_passwords'] = ' Imposible crear las contrase�as de Samba. Por favor, revise la configuraci�n en template_config.php';
$lang['err_smb_conf'] = 'Error: Tiene un error en su configuraci�n de Samba.';
$lang['err_smb_no_name_sid'] = 'Error: Necesita indicar el nombre y el sid de su dominio Samba.';
$lang['err_smb_no_name'] = 'Error: No se ha indicado el nombre del dominio Samba.';
$lang['err_smb_no_sid'] = 'Error: No se ha indicado el sid del dominio Samba.';

// Samba Account Template
$lang['samba_account'] = 'Cuenta Samba';
$lang['samba_account_lcase'] = 'cuenta samba';

// New User (Posix) Account
$lang['t_new_user_account'] = 'Nueva cuenta de usuario';
$lang['t_hint_customize'] = 'Nota: Para modificar esta plantilla, edite el fichero templates/creation/new_user_template.php';
$lang['t_name'] = 'Nombre';
$lang['t_first_name'] = 'Nombre propio';
$lang['t_last_name'] = 'Apellido';
$lang['t_first'] = 'nombre propio';
$lang['t_last'] = 'apellido';
$lang['t_common_name'] = 'Nombre com�n';
$lang['t_user_name'] = 'Nombre de Usuario';
$lang['t_password'] = 'Contrase�a';
$lang['t_encryption'] = 'Encriptaci�n';
$lang['t_login_shell'] = 'Shell de entrada';
$lang['t_home_dir'] = 'Directorio de usuario';
$lang['t_uid_number'] = 'N�mero UID';
$lang['t_auto_det'] = '(determinado autom�ticamente)';
$lang['t_group'] = 'Grupo';
$lang['t_gid_number'] = 'N�mero GID';
$lang['t_err_passwords'] = 'Sus contrase�as no coinciden. Por favor, vuelva atr�s e int�ntelo de nuevon.';
$lang['t_err_field_blank'] = 'No puede dejar en blanco el %s. Por favor, vuelva atr�s e int�ntelo de nuevo.';
$lang['t_err_field_num'] = 'S�lo puede introducir valores num�ricos en el campo %s. Por favor, vuelva atr�s e int�ntelo de nuevo.';
$lang['t_err_bad_container'] = 'El contenedor que ha especificado (%s) no existe. Por favor, vuelva atr�s e int�ntelo de nuevo.';
$lang['t_confirm_account_creation'] = 'Confirmar creaci�n de cuenta';
$lang['t_secret'] = '[secreta]';
$lang['t_create_account'] = 'Crear cuenta';

// New Address Template
$lang['t_new_address'] = 'Nueva entrada en el libro de direcciones';
$lang['t_organization'] = 'Organizaci�n';
$lang['t_address'] = 'Direcci�n';
$lang['t_city'] = 'Ciudad';
$lang['t_postal_code'] = 'C�digo postal';
$lang['t_street'] = 'Calle';
$lang['t_work_phone'] = 'Tel�fono de trabajo';
$lang['t_fax'] = 'Fax';
$lang['t_mobile'] = 'M�vil';
$lang['t_email'] = 'Email';
$lang['t_container'] = 'Contenedor';
$lang['t_err_cn_blank'] = 'No puede dejar el campo "Nombre Com�n" en blanco. Por favor, vuelva atr�s e int�ntelo de nuevo.';
$lang['t_confim_creation'] = 'Confirmar creaci�n de entrada:';
$lang['t_create_address'] = 'Crear direcci�n';

// default template
$lang['t_check_pass'] = 'Compruebe la contrase�a...';

?>

