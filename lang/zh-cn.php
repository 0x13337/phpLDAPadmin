<?php
// $Header: /cvsroot/phpldapadmin/phpldapadmin/lang/zh-cn.php,v 1.2 2005/03/25 01:21:30 wurley Exp $
// Translate to Simplified Chinese, by ��ѩƽ(heromyth), from zxpmyth@yahoo.com.cn
// Based on en.php,v 1.119 2005/03/16 20:57:45

/*
 ʹ��˵��������ת����utf-8�ַ������ٷŵ�lang/recodedĿ¼�£������޸��ļ�lang/auto.php��ִ�����²��裺

 1���޸ĵ�7��Ϊ��
	$useLang="zh-cn";

 2����31�к����������һ�У�
 		   ," zh-cn"=>"zh-cn" //Simplified Chinese

*/

/*        ---   ����ָ��   ---
 *
 * ������뽨��һ���µ������ļ���
 * ������ύ��SourceForge��
 *
 *   https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498548
 *
 * ��ʹ�õײ���ѡ��"Check to Upload and Attach a File���ϴ�������" 
 *
 * �Ķ�doc/README-translation.txt ���Եõ�����ָ����
 *
 * лл��
 *
 */

/*
 * ����$lang ����������phpLDAPadmin ��ʹ�õ����崮��
 * ÿһ�������ļ���ֻ��Ҫ����������ж���һ�������Ե�����Ӧ��
 * �ַ�����
 */

// Search form
$lang['simple_search_form_str'] = '���������';
$lang['advanced_search_form_str '] = '�߼��������';
$lang['server'] = '������';
$lang['search_for_entries_whose'] = '������Ŀ������';
$lang['base_dn'] = '����DN';
$lang['search_scope'] = '������Χ';
$lang['show_attributes'] = '��ʾ����';
//$lang['attributes'] = '����';
$lang['Search'] = '����';
$lang['predefined_search_str'] = 'ѡ��һ��Ԥ���������';
$lang['predefined_searches'] = 'Ԥ���������';
$lang['no_predefined_queries'] = '��config.php��û����Ŀ���塣';
$lang['export_results'] = '�������';
$lang['unrecoginzed_search_result_format'] = '����ʶ������������ʽ�� %s';
$lang['format'] = '��ʽ';
$lang['list'] = '�б�';
$lang['table'] = '���';
$lang['bad_search_display'] = '���config.php ��$default_search_displayָ����һ���Ƿ���ֵ�� %s�������';
$lang['page_n'] = '��%dҳ';
$lang['no_results'] = '�������û�ҵ������';

// Tree browser
$lang['request_new_feature'] = '��������';
$lang['report_bug'] = '�����©';
$lang['schema'] = '��ʽ';
$lang['search'] = '����';
$lang['create'] = '����';
$lang['info'] = '��Ϣ';
$lang['import'] = '����';
$lang['refresh'] = 'ˢ��';
$lang['logout'] = '�˳�';
$lang['create_new'] = '��������Ŀ';
$lang['view_schema_for'] = '�鿴��ʽ';
$lang['refresh_expanded_containers'] = 'ˢ������չ��������������';
$lang['create_new_entry_on'] = '��������Ŀ��';
$lang['new'] = '�½�';
$lang['view_server_info'] = '�鿴���ӵķ�������Ϣ';
$lang['import_from_ldif'] = '��LDIF�ļ�������Ŀ';
$lang['logout_of_this_server'] = '�˳����������';
$lang['logged_in_as'] = '��¼Ϊ�� ';
$lang['this_base_dn_is_not_valid'] = '��DN����Ч��';
$lang['this_base_dn_does_not_exist'] = '����Ŀ�����ڡ�';
$lang['read_only'] = 'ֻ��';
$lang['read_only_tooltip'] = '�������Ѿ���phpLDAPadmin ����Ա��ʶΪֻ��';
$lang['could_not_determine_root'] = '��ⲻ�����LDAP���ĸ���';
$lang['ldap_refuses_to_give_root'] = '�������LDAP�����������������˲�Ҫ��¶���ĸ���';
$lang['please_specify_in_config'] = '����config.php��ָ����';
$lang['create_new_entry_in'] = '��������Ŀ��';
$lang['login_link'] = '��¼��';
$lang['login'] = '��¼';
$lang['base_entry_does_not_exist'] = '�û�׼��Ŀ�����ڡ�';
$lang['create_it'] = 'Ҫ��������';

// Entry display
$lang['delete_this_entry'] = 'ɾ������Ŀ';
$lang['delete_this_entry_tooltip'] = '���õ���ʾҪ��ȷ�ϸ�ѡ��';
$lang['copy_this_entry'] = '���ƺ��ƶ�����Ŀ';
$lang['copy_this_entry_tooltip'] = '����������Ƶ���һ��λ�ã�һ����DN����һ����������';
$lang['export'] = '����';
$lang['export_lcase'] = '����';
$lang['export_tooltip'] = '����һ���ö���ĵ���';
$lang['export_subtree_tooltip'] = '����һ���ö��������к��ӵĵ���';
$lang['export_subtree'] = '��������';
$lang['create_a_child_entry'] = '����һ������Ŀ';
$lang['rename_entry'] = '��Ŀ����';
$lang['rename'] = '����';
$lang['add'] = '����';
$lang['view'] = '�鿴';
$lang['view_one_child'] = '�鿴1������Ŀ';
$lang['view_children'] = '�鿴%s������Ŀ';
$lang['add_new_attribute'] = '�����µ�����';
$lang['add_new_objectclass'] = '�����µ�ObjectClass';
$lang['hide_internal_attrs'] = '�����ڲ�����';
$lang['show_internal_attrs'] = '��ʾ�ڲ�����';
$lang['attr_name_tooltip'] = '����鿴��������\'%s\'�ĸ�ʽ����';
$lang['none'] = 'ʲô��û��';
$lang['no_internal_attributes'] = 'û���ڲ�����';
$lang['no_attributes'] = '�����Ŀû������';
$lang['save_changes'] = '�������';
$lang['add_value'] = '��ֵ';
$lang['add_value_tooltip'] = '������\'%s\'��һ�����ӵ�ֵ';
$lang['refresh_entry'] = 'ˢ��';
$lang['refresh_this_entry'] = 'ˢ�������Ŀ';
$lang['delete_hint'] = '��ʾ�� ��Ҫɾ��һ�����ԣ��뽫�ı��ֶ���գ�Ȼ�������档';
$lang['attr_schema_hint'] = '��ʾ�� Ҫ�鿴һ�����Եĸ�ʽ���������Ե����ơ�';
$lang['attrs_modified'] = '������һЩ����(%s) ���޸��ˣ����ұ���ʶΪ������';
$lang['attr_modified'] = '����һ������(%s) ���޸��ˣ����ұ���ʶΪ����';
$lang['viewing_read_only'] = '��ֻ��ģʽ�鿴��Ŀ��';
$lang['no_new_attrs_available'] = '�����Ŀû���ṩ�µ�����';
$lang['no_new_binary_attrs_available'] = '�����Ŀû���ṩ�µĶ���������';
$lang['binary_value'] = '������ֵ';
$lang['add_new_binary_attr'] = '�����µĶ�����ֵ';
$lang['alias_for'] = 'ע�⣺ \'%s\'��\'%s\'��һ������';
$lang['required_for'] = 'objectClass(es) %s�����������';
$lang['download_value'] = '����ֵ';
$lang['delete_attribute'] = 'ɾ������';
$lang['true'] = '���';
$lang['false'] = '�ٵ�';
$lang['none_remove_value'] = 'ʲô��û�У���ֵ�Ƴ�';
$lang['really_delete_attribute'] = '���ɾ������';
$lang['add_new_value'] = '�����µ�ֵ';

// Schema browser
//$lang['the_following_objectclasses'] = '���LDAP������֧������objectClasses��';
//$lang['the_following_attributes'] = '���LDAP������֧�������������͡�';
//$lang['the_following_matching'] = '���LDAP������֧������ƥ�����';
//$lang['the_following_syntaxes'] = '���LDAP������֧�������﷨����';
$lang['schema_retrieve_error_1']='���������������ȫ֧��LDAP Э�顣';
$lang['schema_retrieve_error_2']='���PHP�汾������ȷ����ɲ�ѯ��';
$lang['schema_retrieve_error_3']='phpLDAPadmin��֪�������ȡ��ķ������ĸ�ʽ��';
$lang['schema_retrieve_error_4']='����������LDAP������û���ṩ����Ϣ��';
$lang['jump_to_objectclass'] = '��ת��һ��objectClass';
$lang['view_schema_for_oclass'] = '�鿴��objectClass�ĸ�ʽ����';
$lang['jump_to_attr'] = '��ת��һ����������';
$lang['jump_to_matching_rule'] = '��ת��һ��ƥ��Ĺ���';
$lang['schema_for_server'] = '�������ĸ�ʽ';
$lang['required_attrs'] = '���������';
$lang['required'] = '�����';
$lang['optional_attrs'] = '��ѡ������';
$lang['optional_binary_attrs'] = '��ѡ�Ķ���������';
$lang['OID'] = 'OID';
$lang['aliases']='����';
$lang['desc'] = '����';
$lang['no_description']='û������';
$lang['name'] = '����';
$lang['equality']='���';
$lang['is_obsolete'] = '��objectClass�����ˡ�';
$lang['inherits'] = '�̳���';
$lang['inherited_from'] = '���̳���';
$lang['parent_to'] = '˫��ָ��';
$lang['jump_to_this_oclass'] = '��ת����objectClass�Ķ��崦';
$lang['matching_rule_oid'] = 'ƥ����� OID';
$lang['syntax_oid'] = '�﷨����OID';
$lang['not_applicable'] = '����Ӧ��';
$lang['not_specified'] = 'δָ����';
$lang['character']='�����ַ�'; 
$lang['characters']='����ַ�';
$lang['used_by_objectclasses']='��objectClasses��ʹ�õ�';
$lang['used_by_attributes']='��������ʹ�õ�';
$lang['maximum_length']='��󳤶�';
$lang['attribute_types']='��������';
$lang['syntaxes']='�﷨����';
$lang['matchingrules']='ƥ�����';
$lang['oid']='OID';
$lang['obsolete']='���ϵ�';
$lang['ordering']='����';
$lang['substring_rule']='�Ӵ�����';
$lang['single_valued']='������ֵ��';
$lang['collective']='�����';
$lang['user_modification']='�û��޸�';
$lang['usage']='ʹ�ø�ʽ';
$lang['could_not_retrieve_schema_from']='�����һظ�ʽ�ĵط�';
$lang['type']='����';
$lang['no_such_schema_item'] = 'û�������ĸ�ʽ��Ŀ�� "%s"';

// Deleting entries
$lang['entry_deleted_successfully'] = '�ɹ�ɾ����Ŀ��%s��';
$lang['you_must_specify_a_dn'] = '�����ָ��һ��DN';
$lang['could_not_delete_entry'] = '����ɾ������Ŀ�� %s';
$lang['no_such_entry'] = 'û����������Ŀ�� %s';
$lang['delete_dn'] = 'ɾ����%s';
$lang['permanently_delete_children'] = 'ҲҪ����ɾ����������Ŀ��';
$lang['entry_is_root_sub_tree'] = '����Ŀ�Ǹ����������а�������Ŀ��%s��';
$lang['view_entries'] = '�鿴��Ŀ';
$lang['confirm_recursive_delete'] = 'phpLDAPadmin���Եݹ��ɾ������Ŀ������������Ŀ�еģ�%s�� ��������������ܻ�ɾ����������Ŀ�б���鿴���档 ���������������';
$lang['confirm_recursive_delete_note'] = 'ע�ͣ� �������Ǳ��Σ�գ�����Ը��� ����������ɻָ��� һ��Ҫ���ǵ�aliases���������� referrals���������Լ���������������������顣';
$lang['delete_all_x_objects'] = 'ɾ�����еĶ���%s ';
$lang['recursive_delete_progress'] = '�ݹ�ʽɾ������';
$lang['entry_and_sub_tree_deleted_successfully'] = '�ɹ�ɾ����Ŀ%s ��������';
$lang['failed_to_delete_entry'] = 'ɾ����Ŀ��%s ʧ��';
$lang['list_of_entries_to_be_deleted'] = '����ɾ������Ŀ�б�';
$lang['sure_permanent_delete_object']='ȷ����������ɾ�����������';
$lang['dn'] = 'DN';

// Deleting attributes
$lang['attr_is_read_only'] = ' ��phpLDAPadmin�������У�����"%s"����ʶΪֻ����';
$lang['no_attr_specified'] = 'û��ָ���������ơ�';
$lang['no_dn_specified'] = 'û��ָ��DN ';

// Adding attributes
$lang['left_attr_blank'] = '����ֵΪ�հס� �뷵�����ԡ�';
$lang['failed_to_add_attr'] = '��������ʧ�ܡ�';
$lang['file_empty'] = '��ѡ����ļ�Ϊ�ջ򲻴��ڡ� �뷵�����ԡ�';
$lang['invalid_file'] = '��ȫ���� �ϴ�������ļ����ܴ��ڰ�ȫΣ�ա�';
$lang['warning_file_uploads_disabled'] = '���PHP���ò������ϴ��ļ��� ���ڽ����²�֮ǰ���һ��php.ini��';
$lang['uploaded_file_too_big'] = '���ϴ����ļ�̫�� ����php.ini�е�upload_max_size ����';
$lang['uploaded_file_partial'] = '��ѡ����ļ��ϴ�����������������Ϊ�����Ե�ʡ�';
$lang['max_file_size'] = '����ļ��ߴ磺 %s';

// Updating values
$lang['modification_successful'] = '�ɹ��޸ģ�';
$lang['change_password_new_login'] = '��Ϊ����������룬�����ڱ���ʹ���µ��������µ�¼��';

// Adding objectClass form
$lang['new_required_attrs'] = '�������������';
$lang['requires_to_add'] = '�������Ҫ��������';
$lang['new_attributes'] = '��������';
$lang['new_required_attrs_instructions'] = 'ָ���� Ϊ���������objectClass ������Ŀ�������ָ��';
$lang['that_this_oclass_requires'] = '���objectClass������ġ� ����������������ɡ�';
$lang['add_oclass_and_attrs'] = '����ObjectClass ������';
$lang['objectclasses'] = 'ObjectClasses';

// General
$lang['chooser_link_tooltip'] = '�������һ���Ի�������ͼ�η�ʽѡ��һ����Ŀ(DN) ';
$lang['no_updates_in_read_only_mode'] = '����������ֻ����ʽ���У��㲻����ɸ���';
$lang['bad_server_id'] = '����ķ�����id';
$lang['not_enough_login_info'] = 'û���㹻����Ϣ����¼�������� ����������á�';
$lang['could_not_connect'] = '�������ӵ�LDAP��������';
$lang['could_not_connect_to_host_on_port'] = '�������ӵ�"%s" ��"%s"�˿�';
$lang['could_not_perform_ldap_mod_add'] = '�������ldap_mod_add ������';
//$lang['bad_server_id_underline'] = '�����server_id��';
$lang['home'] = '��ҳ';
$lang['help'] = '����';
$lang['success'] = '�ɹ�';
$lang['server_colon_pare'] = '��������';
$lang['look_in'] = '���ڲ鿴��';
//$lang['missing_server_id_in_query_string'] = '�ڲ�ѯ����û��ָ��������ID��';
$lang['missing_dn_in_query_string'] = '�ڲ�ѯ����û��ָ��DN��';
$lang['back_up_p'] = '����...';
$lang['no_entries'] = 'û����Ŀ';
//$lang['not_logged_in'] = 'û�е�¼';
$lang['could_not_det_base_dn'] = '����ȷ��base DN����DN��';
//$lang['please_report_this_as_a_bug']='�뱨�������©��';
$lang['reasons_for_error']='����������������м���ԭ���������п��ܵ��ǣ�';
$lang['yes']='��';
$lang['no']='��';
$lang['go']='��ʼ';
$lang['delete']='ɾ��';
$lang['back']='����';
$lang['object']='����';
$lang['delete_all']='ɾ�����е�';
//$lang['url_bug_report']='https://sourceforge.net/tracker/?func=add&group_id=61828&atid=498546';
$lang['hint'] = '��ʾ';
$lang['bug'] = '��©';
$lang['warning'] = '����';
$lang['light'] = 'light'; // ����'light' ���� 'light bulb������ݣ�'
$lang['proceed_gt'] = '���� &gt;&gt;';
$lang['no_blowfish_secret'] = 'phpLDAPadmin���ܰ�ȫ�ؼ��ܺͽ������������Ϣ����Ϊ��config.php��û������$blowfish_secret�����ڣ�����Ҫ�༭config.php��������$blowfish_secretΪĳ�����ص��ַ�����';
$lang['jpeg_dir_not_writable'] = '����phpLDAPadmin��config.php���$jpeg_temp_dir���õ�һ����д��Ŀ¼';
$lang['jpeg_dir_not_writable_error'] = '���ܽ�%sд��$jpeg_temp_dirĿ¼����ȷ�����web�������ܹ�������д�ļ���';
$lang['jpeg_unable_toget'] = '���ܴ�LDAP������Ϊ����%s���jpeg���ݡ�';
$lang['jpeg_delete'] = 'ɾ��ͼƬ';



// Add value form
$lang['add_new'] = '����';
$lang['value_to'] = '��ֵ��';
$lang['distinguished_name'] = 'ʶ������DN��';
$lang['current_list_of'] = '��ǰ�б�';
$lang['values_for_attribute'] = '����ֵ';
$lang['inappropriate_matching_note'] = 'ע�ͣ� ��������LDAP��������û��Ϊ�����������EQUALITY ����Ļ�������ܻ�����"inappropriate matching������ȷ��ƥ�䣩"�����Ĵ���';
$lang['enter_value_to_add'] = '�����������ӵ�ֵ��';
$lang['new_required_attrs_note'] = 'ע�ͣ� ���ܻ�Ҫ���������objectClass������������ԡ�';
$lang['syntax'] = '����';

//copy.php
$lang['copy_server_read_only'] = '����������ֻ��ģʽ���㲻����ɸ���';
$lang['copy_dest_dn_blank'] = ' Ŀ��DN��Ϊ�ա�';
$lang['copy_dest_already_exists'] = 'Ŀ����Ŀ (%s) �Ѿ����ڡ�';
$lang['copy_dest_container_does_not_exist'] = 'Ŀ������ (%s) �����ڡ�';
$lang['copy_source_dest_dn_same'] = 'Դ��Ŀ��DN ��ͬ��';
$lang['copy_copying'] = '���ڸ��� ';
$lang['copy_recursive_copy_progress'] = '�ݹ��ָ��ƹ���';
$lang['copy_building_snapshot'] = '���ڽ������ڸ��Ƶ����Ŀ��ա� ';
$lang['copy_successful_like_to'] = '���Ƴɹ��� �㻹��Ҫ ';
$lang['copy_view_new_entry'] = '�鿴����Ŀ';
$lang['copy_failed'] = '����DN���ɹ��� ';

//edit.php
$lang['missing_template_file'] = '���棺 �����ļ������ڣ�';
$lang['using_default'] = 'ʹ��Ĭ�ϵġ�';
$lang['template'] = '����';
$lang['must_choose_template'] = '�����ѡ��һ������';
$lang['invalid_template'] = '%s ��һ���Ƿ�������';
$lang['using_template'] = 'ʹ������';
$lang['go_to_dn'] = 'ת�� %s';
$lang['structural_object_class_cannot_remove'] = '���Ǹ��ṹ����ObjectClass����˲����Ƴ���';
$lang['structural'] = '�ṹ��';

//copy_form.php
$lang['copyf_title_copy'] = '����';
$lang['copyf_to_new_object'] = '��Ϊһ���µĶ���';
$lang['copyf_dest_dn'] = 'Ŀ��DN';
$lang['copyf_dest_dn_tooltip'] = '�ڸ��Ƹ�Դ��Ŀʱ����������������Ŀ������DN ';
$lang['copyf_dest_server'] = 'Ŀ�������';
$lang['copyf_note'] = '��ʾ�� ��������ͬ�ķ�����֮�临��ʱ��Ҫ������û��"schema����ʽ����ͻ"';
$lang['copyf_recursive_copy'] = '���⻹Ҫ�ݹ鸴�ƴ˶�������������ݡ�';
$lang['recursive_copy'] = '�ݹ鸴��';
$lang['filter'] = '������';
//$lang['search_filter'] = '����������';
$lang['filter_tooltip'] = '�����һ���ݹ鸴��ʱ��ֻ�Ḵ����Щƥ���������������Ŀ��';
$lang['delete_after_copy'] = '���ƺ�ɾ�������ƶ�����';
$lang['delete_after_copy_warn'] = 'ȷ����Ĺ������������棩��ѡ�����е��Ӽ�¼��';

//create.php
$lang['create_required_attribute'] = '��������(%s)��ֵΪ�հס�';
$lang['redirecting'] = '�ض���...';
$lang['here'] = '����';
$lang['create_could_not_add'] = '�������Ӹö���LDAP��������';

//create_form.php
$lang['createf_create_object'] = '��������';
$lang['createf_choose_temp'] = 'ѡ������';
$lang['createf_select_temp'] = 'ѡ�����ڴ������̵�����';
$lang['save_as_file'] = '���Ϊ�ļ�';
$lang['rdn_field_blank'] = 'RDN��Ϊ�հס�';
$lang['container_does_not_exist'] = '��ָ����(%s)���������ڡ� �������ԡ�';
$lang['no_objectclasses_selected'] = '��û��Ϊ�ö���ѡ���κ�ObjectClasses�� �뷵��������';
$lang['hint_structural_oclass'] = '��ʾ�� �����ѡ��һ���ṹ����objectClass (�������������ʾ��)';

//creation_template.php
$lang['ctemplate_on_server'] = '�ڷ�������';
$lang['ctemplate_no_template'] = '��POST������û��ָ�����塣';
$lang['template_not_readable'] = '����������ָ�������ڸ������"%s"���ֱ�����������ļ���Ϊ��ֹȨ��̫�ϸ�����ɶ���';
$lang['template_does_not_exist'] = '���������ļ���ָ�������ڸ� �����"%s"���ֱ������Ǹ��ֱ���templates/creation Ŀ¼�в����ڡ�';
$lang['create_step1'] = '��һ���� Name �� ObjectClass(es)';
$lang['create_step2'] = '�ڶ����� ָ�����Ժ�ֵ';
$lang['relative_distinguished_name'] = 'Relative Distinguished Name����Ա�ʶ����';
$lang['rdn'] = 'RDN';
$lang['rdn_example'] = '(���磺 cn=MyNewPerson)';
$lang['container'] = 'Container��������';

// search.php
$lang['you_have_not_logged_into_server'] = '�㻹û�е�����ѡ��ķ�����������㲻�������������������';
$lang['click_to_go_to_login_form'] = '�������ת����¼���';
$lang['unrecognized_criteria_option'] = '����ʶ��criteria����׼��ѡ� ';
$lang['if_you_want_to_add_criteria'] = '������������Լ���criteria ���б�� �ǵñ༭search.php ���������ǡ� �˳���';
$lang['entries_found'] = '�ҵ�����Ŀ�� ';
$lang['filter_performed'] = 'Ӧ���˵Ĺ������� ';
$lang['search_duration'] = 'phpLDAPadmin�����������ʱ';
$lang['seconds'] = '��';

// search_form_advanced.php
$lang['scope_in_which_to_search'] = '�����ķ�Χ';
$lang['scope_sub'] = 'Sub (��������)';
$lang['scope_one'] = 'One (base֮�µ�һ��)';
$lang['scope_base'] = 'Base (������base dn)';
$lang['standard_ldap_search_filter'] = '��׼��LDAP������������ ���磺 (&(sn=Smith)(givenname=David))';
$lang['search_filter'] = '����������';
$lang['list_of_attrs_to_display_in_results'] = '������ʾ�ڽ���е������б�(�Զ��Ÿ���)';
//$lang['show_attributes'] = '��ʾ����';

// search_form_simple.php
//$lang['search_for_entries_whose'] = '������˭����Ŀ��';
$lang['equals'] = '����';
$lang['starts with'] = '��ʼ��';
$lang['contains'] = '����';
$lang['ends with'] = '������';
$lang['sounds like'] = '��������';

// server_info.php
$lang['could_not_fetch_server_info'] = '���ܴӷ�������ȡ��LDAP��Ϣ�� ��������Ϊ���PHP�������<a href="http://bugs.php.net/bug.php?id=29587">��©</a>�����������LDAP��������ָ����"���ʿ���"��ֹLDAP�ͻ��˷���RootDSE��';
$lang['server_info_for'] = '��������Ϣ�� ';
$lang['server_reports_following'] = '������Ϣ�Ƿ���������Ĺ������Լ�����Ϣ';
$lang['nothing_to_report'] = '�÷�����û�б����κ���Ϣ��';

//update.php
$lang['update_array_malformed'] = '������update_array�� �������phpLDAPadmin�Ĵ�©�� �뱨�档';
$lang['could_not_perform_ldap_modify'] = '�������ldap_modify ������';

// update_confirm.php
$lang['do_you_want_to_make_these_changes'] = '����Ӧ����Щ�仯��';
$lang['attribute'] = '����';
$lang['old_value'] = '��ֵ';
$lang['new_value'] = '��ֵ';
$lang['attr_deleted'] = '[ɾ��������]';
$lang['commit'] = '�ύ';
$lang['cancel'] = 'ȡ��';
$lang['you_made_no_changes'] = '��û�н��и���';
$lang['go_back'] = '����';
$lang['unable_create_samba_pass'] = '���ܽ���samba���롣����template_config.php�����������';

// welcome.php
$lang['welcome_note'] = 'ʹ����߲˵�������';
$lang['credits'] = '����';
$lang['changelog'] = '�����¼';
$lang['donate'] = '����';
$lang['pla_logo'] = 'phpLDAPadmin ��ʶ';

// Donate.php
$lang['donation_instructions'] = '�����phpLDAPadmin��Ŀ����������PayPal��ť�е�һ����';
$lang['donate_amount'] = '���� %s';
//$lang['wish_list_option'] = '�����������������phpLDAPadmin������Ա��';
//$lang['wish_list'] = '�鿴Dave��phpLDAPadmin Ը���б�';

$lang['purge_cache'] = '��ջ���';
$lang['no_cache_to_purge'] = 'û�л������ա�';
$lang['done_purging_caches'] = '��ջ���%s ���ֽڡ�';
$lang['purge_cache_tooltip'] = '���������phpLDAPadmin�л�������ݣ�����������schema����ʽ����';

// view_jpeg_photo.php
$lang['unsafe_file_name'] = '����ȫ���ļ����� ';
$lang['no_such_file'] = 'û���������ļ��� ';

//function.php
$lang['auto_update_not_setup'] = '�����������Ϊ <b>%s</b> ������auto_uid_numbers��
                                  ������û��ָ��auto_uid_number_mechanism�� �����
                                  �������';
$lang['uidpool_not_set'] = '���ڷ���<b>%s</b>��������ָ��"auto_uid_number_mechanism" Ϊ "uidpool"��
                            ������û��ָ��
                            audo_uid_number_uid_pool_dn�� ���ڽ����²�ǰָ������';
$lang['uidpool_not_exist'] = '������������("%s")��ָ����uidPool
                              �����ڡ�';
$lang['specified_uidpool'] = '���ڷ�����<b>%s<b>�������ļ���ָ����"auto_uid_number_mechanism" Ϊ "search"��
                              ������û��ָ��
                              "auto_uid_number_search_base"�� ���ڽ����²�ǰָ������';
$lang['auto_uid_invalid_credential'] = 'ʹ��auto_uid credentials���ܰ󶨵�<b>%s</b>�� ������������ļ���'; 
$lang['bad_auto_uid_search_base'] = '���phpLDAPadmin����Ϊ������%sָ����һ���Ƿ���auto_uid_search_base ';
$lang['auto_uid_invalid_value'] = '���������ļ���Ϊauto_uid_number_mechanism ("%s")ָ����һ���Ƿ���ֵ
                                   �� ֻ��"uidpool" �� "search" �ǺϷ��ġ�
                                   �����������⡣';
$lang['error_auth_type_config'] = '���� ����������ļ����и����� ����������
                                    $servers���ֵ�auth_type��ֵΪ \'session\', \'cookie\', and \'config\'�� ����\'%s\'��
                                    ���ǲ�����ġ� ';
$lang['unique_attrs_invalid_credential'] = '����ʹ��unique_attrs �󶨵�<b>%s</b>�� ������������ļ���'; 
$lang['unique_attr_failed'] = '����ͼ����<b>%s</b> (<i>%s</i>) �� <br><b>%s</b><br>�����ǲ�����ġ� ������/ֵ�����κ���Ŀ��<p>�������<a href=\'%s\'>����</a> ������Ŀ��';
$lang['php_install_not_supports_tls'] = '�㰲װ��PHP ��֧��TLS��';
$lang['could_not_start_tls'] = '��������TLS�� �������LDAP ���������á�';
$lang['could_not_bind_anon'] = '���������󶨵���������';
$lang['could_not_bind'] = '���ܰ󶨵���LDAP��������';
$lang['anonymous_bind'] = '������';
$lang['bad_user_name_or_password'] = '������û��������롣 �������ԡ�';
//$lang['redirecting_click_if_nothing_happens'] = '�ض���... ���û�·����������';
$lang['successfully_logged_in_to_server'] = '�ɹ���¼��������<b>%s</b>';
$lang['could_not_set_cookie'] = '��������cookie��';
$lang['ldap_said'] = 'LDAP˵�� %s';
$lang['ferror_error'] = '����';
$lang['fbrowse'] = '���';
$lang['delete_photo'] = 'ɾ��ͼƬ';
//$lang['install_not_support_blowfish'] = '�㰲װ��PHP��֧��blowfish ���ܡ�';
//$lang['install_not_support_md5crypt'] = '�㰲װ��PHP��֧�� md5crypt ���ܡ�';
//$lang['install_no_mash'] = '�㰲װ��PHPû��mhash() ������ ���ܽ���SHA��ϣ��';
$lang['install_not_support_ext_des'] = '���ϵͳ���ܿⲻ֧����չ��DES���ܡ�';
$lang['install_not_support_blowfish'] = '���ϵͳ���ܿⲻ֧��blowfish���ܡ�';
$lang['install_not_support_md5crypt'] = '���ϵͳ���ܿⲻ֧��md5crypt���ܡ�';
$lang['jpeg_contains_errors'] = 'jpegPhoto �����д�<br />';
$lang['ferror_number'] = '������� %s';
$lang['ferror_discription'] = '������ %s <br /><br />';
$lang['ferror_number_short'] = '������ţ� %s <br /><br />';
$lang['ferror_discription_short'] = '������ (û���������ṩ)<br />';
$lang['ferror_submit_bug'] = '���Ǹ�phpLDAPadmin ��©�� ����ǣ�����<a href=\'%s\'>����һ��</a>��';
$lang['ferror_unrecognized_num'] = '����ʶ�Ĵ�����ţ� ';
$lang['ferror_nonfatil_bug'] = '<center><table class=\'notice\'><tr><td colspan=\'2\'><center><img src=\'images/warning.png\' height=\'12\' width=\'13\' />
             <b>�㷢����һ������ʹ��phpLDAPadmin ��©��</b></td></tr><tr><td>����</td><td><b>%s</b> (<b>%s</b>)</td></tr><tr><td>�ļ���</td>
             <td><b>%s</b> �� <b>%s</b>�����ú��� <b>%s</b></td></tr><tr><td>�汾��</td><td>PLA: <b>%s</b>, PHP: <b>%s</b>, SAPI: <b>%s</b>
             </td></tr><tr><td>Web ��������</td><td><b>%s</b></td></tr><tr><td colspan=\'2\'><center><a target=\'new\' href=\'%s\'>
             �������ﱨ��ô�©</a>��</center></td></tr></table></center><br />';
$lang['ferror_congrats_found_bug'] = '��ϲ�㣡 �㷢����phpLDAPadmin��һ����©��<br /><br />
	     <table class=\'bug\'>
	     <tr><td>����</td><td><b>%s</b></td></tr>
	     <tr><td>����:</td><td><b>%s</b></td></tr>
	     <tr><td>�ļ���</td><td><b>%s</b></td></tr>
	     <tr><td>�У�</td><td><b>%s</b></td></tr>
		 <tr><td>�����ߣ�</td><td><b>%s</b></td></tr>
	     <tr><td>PLA �汾��</td><td><b>%s</b></td></tr>
	     <tr><td>PHP �汾��</td><td><b>%s</b></td></tr>
	     <tr><td>PHP SAPI:</td><td><b>%s</b></td></tr>
	     <tr><td>PHP ��������</td><td><b>%s</b></td></tr>
	     </table>
	     <br />
	     ��ͨ��������������������©��';

//ldif_import_form
$lang['import_ldif_file_title'] = '����LDIF�ļ�';
$lang['select_ldif_file'] = 'ѡ��һ��LDIF�ļ���';
$lang['dont_stop_on_errors'] = '��������ʱ��ֹͣ';

//ldif_import
$lang['add_action'] = '����...';
$lang['delete_action'] = 'ɾ��...';
$lang['rename_action'] = '����...';
$lang['modify_action'] = '�޸�...';
$lang['warning_no_ldif_version_found'] = 'û���ҵ��汾�š� ���� 1��';
$lang['valid_dn_line_required'] = 'Ҫ��һ���Ϸ���dn�С�';
$lang['missing_uploaded_file'] = '��ʧ�ϴ����ļ���';
$lang['no_ldif_file_specified'] = 'û��ָ��LDIF�ļ��� �������ԡ�';
$lang['ldif_file_empty'] = '�ϴ���LDIF �ļ�Ϊ�ա�';
$lang['empty'] = '�յ�';
$lang['file'] = '�ļ�';
$lang['number_bytes'] = '%s �ֽ�';

$lang['failed'] = 'ʧ��';
$lang['ldif_parse_error'] = 'LDIF��������';
$lang['ldif_could_not_add_object'] = '�������Ӷ���';
$lang['ldif_could_not_rename_object'] = '���ܸ�������';
$lang['ldif_could_not_delete_object'] = '����ɾ������';
$lang['ldif_could_not_modify_object'] = '�����޸Ķ���';
$lang['ldif_line_number'] = '�кţ�';
$lang['ldif_line'] = '����:';

// Exports
$lang['export_format'] = '������ʽ';
$lang['line_ends'] = '�н���';
$lang['must_choose_export_format'] = '������ѡ��һ��������ʽ��';
$lang['invalid_export_format'] = '�Ƿ��ĵ�����ʽ';
$lang['no_exporter_found'] = 'û���ҵ����õ�������';
$lang['error_performing_search'] = '��ִ������ʱ����һ������';
$lang['showing_results_x_through_y'] = '��ʾ���%s������ͨ��%s����ɵġ�';
$lang['searching'] = '����...';
$lang['size_limit_exceeded'] = 'ע�⣬����������С���ơ�';
$lang['entry'] = '��Ŀ';
$lang['ldif_export_for_dn'] = 'Ϊ�� %s������LDIF';
$lang['generated_on_date'] = '��phpLDAPadmin ( http://phpldapadmin.sourceforge.net/ ) �� %s�����ɵ�';
$lang['total_entries'] = '��Ŀ����';
$lang['dsml_export_for_dn'] = 'Ϊ�� %s������DSLM';
$lang['include_system_attrs'] = '����ϵͳ����';
$lang['csv_spreadsheet'] = 'CSV (Spreadsheet)';

// logins
//$lang['could_not_find_user'] = '�����ҵ��û�"%s"';
$lang['password_blank'] = '�������Ϊ�ա�';
//$lang['login_cancelled'] = '��¼ȡ���ˡ�';
$lang['no_one_logged_in'] = 'û�˵�¼���÷�������';
$lang['could_not_logout'] = '�����˳���';
$lang['unknown_auth_type'] = '����ʶ���auth_type�� %s';
$lang['logged_out_successfully'] = '�ɹ���<b>%s</b>�������˳�';
$lang['authenticate_to_server'] = '��֤��������%s';
$lang['warning_this_web_connection_is_unencrypted'] = '���棺 ��web����û�м��ܡ�';
$lang['not_using_https'] = '��û��ʹ��\'https\'�� Web��������������Ĵ����¼��Ϣ��';
$lang['login_dn'] = '��¼DN';
$lang['user_name'] = '�û���';
$lang['password'] = '����';
$lang['authenticate'] = '��֤';
$lang['login_not_allowed'] = '�Բ�����̨LDAP��������������ʹ��phpLDAPadmin��';

// Entry browser
$lang['entry_chooser_title'] = '��Ŀѡ����';

// Index page
$lang['need_to_configure'] = '����Ҫ����phpLDAPadmin�� �༭�ļ�\'config.php\'�Ϳ��ԡ� �и����������ļ��ṩ�� \'config.php.example\'��';

// Mass deletes
$lang['no_deletes_in_read_only'] = '��ֻ��ģʽ�²�����ɾ����';
$lang['error_calling_mass_delete'] = '�������mass_delete.php����POST�����ж�ʧ mass_delete��';
$lang['mass_delete_not_array'] = 'mass_delete POST �������Ǹ����顣';
$lang['mass_delete_not_enabled'] = 'Mass deletion(����ɾ��)û�����á� ���ڽ�����һ��ǰ��config.php����������';
$lang['search_attrs_wrong_count'] = '���config.php�и����� ��$search_attributes �� $search_attributes_display������Ա�Ų�һ��';
$lang['mass_deleting'] = '���ڴ���ɾ��';
$lang['mass_delete_progress'] = '������"%s"�ϵ�ɾ������';
$lang['malformed_mass_delete_array'] = '�������mass_delete ���顣';
$lang['no_entries_to_delete'] = '��û��ѡ���κ�Ҫɾ������Ŀ��';
$lang['deleting_dn'] = '����ɾ�� %s';
$lang['total_entries_failed'] = 'ɾ����Ŀ%s������%s��ʧ�ܡ�';
$lang['all_entries_successful'] = '������Ŀɾ���ɹ���';
$lang['confirm_mass_delete'] = 'ȷ�ϴ���ɾ����Ŀ%s���ڷ�����%s�ϣ�';
$lang['yes_delete'] = '�ǵģ�ɾ����';

// Renaming entries
$lang['non_leaf_nodes_cannot_be_renamed'] = '�㲻�ܸ���һ����������Ŀ����Ŀ���������������������ڷ�Ҷ����Ŀ�����';
$lang['no_rdn_change'] = '�㲻�ܸ���RDN';
$lang['invalid_rdn'] = '��Ч��RDNֵ';
$lang['could_not_rename'] = '���ܸ�������Ŀ';

// General errors
//$lang['php5_unsupported'] = 'phpLDAPadmin ����֧��PHP 5�������������ܻ�����������벻�������⡣';
$lang['mismatched_search_attr_config'] = '��������и����� $search_attributes �� $search_attributes_display ����Ҫ����ͬ��Ŀ�����ԡ�';

// Password checker
$lang['passwords_match'] = '����ƥ�䣡';
$lang['passwords_do_not_match'] = '���벻ƥ�䣡';
$lang['password_checker_tool'] = '�����鹤��';
$lang['compare'] = '�Ƚ�';
$lang['to'] = '��';

// Templates
$lang['using'] = 'ʹ�ø�';
//$lang['template'] = 'ģ��';
$lang['switch_to'] = '�����ת����';
$lang['default_template'] = 'Ĭ��ģ��';

// template_config
$lang['user_account'] = '�û��˺�(posixAccount)';
$lang['address_book_inet'] = '��ַ����Ŀ(inetOrgPerson)';
$lang['address_book_moz'] = '��ַ����Ŀ(mozillaOrgPerson)';
$lang['kolab_user'] = 'Kolab�û���Ŀ';
$lang['organizational_unit'] = '��֯����Ԫ(Organizational Unit)';
$lang['organizational_role'] = '��֯����ɫ';
$lang['posix_group'] = 'Posix��';
$lang['samba_machine'] = 'Samba NT ����';
$lang['samba3_machine'] = 'Samba 3 NT ����';
$lang['samba_user'] = 'Samba �û�';
$lang['samba3_user'] = 'Samba 3 �û�';
$lang['samba3_group'] = 'Samba 3 ��ӳ��(Mapping)';
$lang['dns_entry'] = 'DNS ��Ŀ';
$lang['simple_sec_object'] = '�򵥰�ȫ����(Simple Security Object)';
$lang['courier_mail_account'] = 'Courier �ʼ��˺�';
$lang['courier_mail_alias'] = 'Courier �ʼ�����';
$lang['ldap_alias'] = 'LDAP ����';
$lang['sendmail_cluster'] = 'Sendmail ��Ⱥ';
$lang['sendmail_domain'] = 'Sendmail ��';
$lang['sendmail_alias'] = 'Sendmail ����';
$lang['sendmail_virt_dom'] = 'Sendmail ������';
$lang['sendmail_virt_users'] = 'Sendmail �����û�';
$lang['sendmail_relays'] = 'Sendmail �ظ�';
$lang['custom'] = '�Զ���';
$lang['samba_domain_name'] = '�ҵ�Samba����';
$lang['administrators'] = '����Ա';
$lang['users'] = '�û�';
$lang['guests'] = 'һ���û�(Guests)';
$lang['power_users'] = '��ǿ�û�(Power Users)';
$lang['account_ops'] = '�˺Ź���Ա';
$lang['server_ops'] = '����������Ա';
$lang['print_ops'] = '��ӡ����Ա';
$lang['backup_ops'] = '���ݹ���Ա';
$lang['replicator'] = '������(Replicator)';
$lang['unable_smb_passwords'] = '���ܽ���Samba���롣�����ļ�template_config.php������á�';
$lang['err_smb_conf'] = '���������samba�������и�����';
$lang['err_smb_no_name_sid'] = '������ҪΪ���samba���ṩһ������(name)��һ��sid��';
$lang['err_smb_no_name'] = '����û��Ϊsamba���ṩ���֡�';
$lang['err_smb_no_sid'] = '����û��Ϊsamba���ṩsid��';

// Samba Account Template
$lang['samba_account'] = 'Samba �˺�';
$lang['samba_account_lcase'] = 'samba �˺�';

// New User (Posix) Account
$lang['t_new_user_account'] = '�½��û��˺�';
$lang['t_hint_customize'] = '��ʾ����Ҫ����ģ��Ļ�������Ա༭�ļ�templates/creation/new_user_template.php';
$lang['t_name'] = '����';
$lang['t_first_name'] = '��һ������';
$lang['t_last_name'] = '���һ������';
$lang['t_first'] = '��һ��';
$lang['t_last'] = '���һ��';
$lang['t_common_name'] = '��������(Common name)';
$lang['t_user_name'] = '�û���';
$lang['t_password'] = '����';
$lang['t_encryption'] = '���ܷ���';
$lang['t_login_shell'] = '��¼Shell';
$lang['t_home_dir'] = '��Ŀ¼';
$lang['t_uid_number'] = 'UID��';
$lang['t_auto_det'] = '���Զ���⵽�ģ�';
$lang['t_group'] = '��';
$lang['t_gid_number'] = 'GID��';
$lang['t_err_passwords'] = '������벻ƥ�䡣�뷵�������ԡ�';
$lang['t_err_field_blank'] = '%s������Ϊ�ա��뷵�������ԡ�';
$lang['t_err_field_num'] = '%s�ֶβ���ֻ�������֡��뷵�������ԡ�';
$lang['t_err_bad_container'] = '��ָ��������(%s)�����ڡ��뷵�������ԡ�';
$lang['t_confirm_account_creation'] = 'ȷ�ϴ����˺�';
$lang['t_secret'] = '[����]';
$lang['t_create_account'] = '�����˺�';

// New Address Template
$lang['t_new_address'] = '�½���ַ����Ŀ';
$lang['t_organization'] = '��֯';
$lang['t_address'] = '��ַ';
$lang['t_city'] = '����';
$lang['t_postal_code'] = '��������';
$lang['t_street'] = '�ֵ�';
$lang['t_work_phone'] = '�����绰';
$lang['t_fax'] = '����(Fax)';
$lang['t_mobile'] = '�ƶ��绰(Mobile)';
$lang['t_email'] = '�����ʼ�';
$lang['t_container'] = '����';
$lang['t_err_cn_blank'] = '��������(Common Name)����Ϊ�ա��뷵�������ԡ�';
$lang['t_confim_creation'] = 'ȷ�ϴ�����Ŀ��';
$lang['t_create_address'] = '������ַ��';

// default template
$lang['t_check_pass'] = '���ڼ�����롭��';

// compare form
$lang['compare'] = '�Ƚ�';
$lang['comparing'] = '�ȽϽ����ŵ�DN';
$lang['compare_dn'] = '�Ƚ���һ��DN��';
$lang['with'] = 'ͬ ';
$lang['compf_source_dn'] = 'ԴDN';
$lang['compf_dn_tooltip'] = '����DN����һ���Ƚ�';
$lang['switch_entry'] = '�л���Ŀ';
$lang['no_value'] = 'û��ֵ';
$lang['compare_with'] = 'ͬ��һ����Ŀ���бȽ�';
$lang['need_oclass'] = 'Ҫ��������%s������Ҫ�����ObjectClass(es)���������ࡣ';

// Time out page
$lang['session_timed_out_1'] = '��ĻỰ�ڽ����޻��';
$lang['session_timed_out_2'] = '���Ӻ���ڡ��㽫�Զ��˳���';
$lang['log_back_in'] = '���¼������������������ӣ�';
$lang['session_timed_out_tree'] = '(�Ự��ʱ���Զ��˳���)';
$lang['timeout_at'] = '��%s�������㽫���ǳ���';


?>
