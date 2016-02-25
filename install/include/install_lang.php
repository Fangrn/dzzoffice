<?php
/*
 * @copyright   Leyun internet Technology(Shanghai)Co.,Ltd
 * @license     http://www.dzzoffice.com/licenses/license.txt
 * @package     DzzOffice
 * @link        http://www.dzzoffice.com
 * @author      zyx(zyx@dzz.cc)
 */

if(!defined('IN_LEYUN')) {
	exit('Access Denied');
}

define('UC_VERNAME', '中文版');
$lang = array(
	'SC_UTF8' => '简体中文 UTF8 版',
	'EN_UTF8' => 'ENGLIST UTF-8',
	'error_quit_msg'=>'安装出现问题了，无法继续，请解决下面提示的问题后刷新继续',
	'title_install' => SOFT_NAME.' 安装向导',
	'agreement_yes' => '我同意',
	'agreement_no' => '我不同意',
	'notset' => '不限制',

	'db_installing_title'=>'正在安装，请稍候...',
	'message_title' => '提示信息',
	'error_message' => '错误信息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安装向导',
	'config_nonexistence' => '配置文件不存在',
	'nodir' => '目录不存在',
	'redirect' => '浏览器会自动跳转页面，无需人工干预。<br>除非当您的浏览器没有自动跳转时，请点击这里',
	'auto_redirect' => '浏览器会自动跳转页面，无需人工干预',
	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_errno_1064' => 'SQL 语法错误',

	'dbpriv_createtable' => '没有CREATE TABLE权限，无法继续安装',
	'dbpriv_insert' => '没有INSERT权限，无法继续安装',
	'dbpriv_select' => '没有SELECT权限，无法继续安装',
	'dbpriv_update' => '没有UPDATE权限，无法继续安装',
	'dbpriv_delete' => '没有DELETE权限，无法继续安装',
	'dbpriv_droptable' => '没有DROP TABLE权限，无法安装',

	'db_drop_table_confirm' => '继续安装会清空全部原有数据，您确定要继续吗?',

	'writeable' => '可写',
	'unwriteable' => '不可写',
	'old_step' => '上一步',
	'new_step' => '下一步',

	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_connect_error' => '数据库连接错误',

	'step_title_1' => '检查安装环境',
	'step_title_2' => '设置运行环境',
	'step_title_3' => '创建数据库',
	'step_title_4' => '安装',
	'step_env_check_title' => '开始安装',
	'step_env_check_desc' => '环境以及文件目录权限检查',
	'step_db_init_title' => '安装数据库',
	'step_db_init_desc' => '正在执行数据库安装',

	'step1_file' => '目录文件',
	'step1_need_status' => '所需状态',
	'step1_status' => '当前状态',
	'not_continue' => '请将以上红叉部分修正再试',

	'tips_dbinfo' => '填写数据库信息',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => '填写管理员信息',
	'step_ext_info_title' => '安装成功。',
	'step_ext_info_comment' => '点击进入登录',

	'ext_info_succ' => '安装成功。',
	'install_submit' => '提交',
	'install_locked' => '安装锁定，已经安装过了，如果您确定要重新安装，请到服务器上删除<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	
	'step_app_reg_title' => '设置运行环境',
	'step_app_reg_desc' => '检测服务器环境',
	
	'advice_mysql_connect' => '请检查 mysql 模块是否正确加载',
	'advice_gethostbyname' => '是否 PHP 配置中禁止了 gethostbyname 函数。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml_parser_create' => '该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',
	'advice_fsockopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_pfsockopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_stream_socket_client' => '是否 PHP 配置中禁止了 stream_socket_client 函数',
	'advice_curl_init' => '是否 PHP 配置中禁止了 curl_init 函数',

	

	'tips_siteinfo' => '请填写站点信息',
	'sitename' => '站点名称',
	'siteurl' => '站点 URL',

	'forceinstall' => '强制安装',
	'dbinfo_forceinstall_invalid' => '当前数据库当中已经含有同样表前缀的数据表，您可以修改“表名前缀”来避免删除旧的数据，或者选择强制安装。强制安装会删除旧数据，且无法恢复',

	'click_to_back' => '点击返回上一步',
	'adminemail' => '系统信箱 Email',
	'adminemail_comment' => '用于发送程序错误报告',
	'dbhost_comment' => '数据库服务器地址, 一般为 localhost；如果使用RDS、请填入RDS的连接地址和端口',
	'company_comment'=>'组织简称，设置后将默认新建同名机构及共享目录。如：上海乐云。',
	'tablepre_comment' => '同一数据库运行多个副本时，请修改前缀',
	'forceinstall_check_label' => '我要删除数据，强制安装 !!!',
	
	'ali_param_error'=>'阿里云设置错误，如果暂时不启用云存储，请钩掉启用，直接下一步',
	'ali_bucket_error'=>'请确认你的阿里云有此bucket,可以到阿里云官方管理中心新建bucket',
	'ali_secret_error'=>'阿里云Access Key ID或Access Key Secret错误<br>请到阿里云官方获取Access Key ID和Access Key Secret',
	'tips_aliinfo'=>'阿里云存储设置',
	'ali_available_check_label'=>'启用阿里云存储',
	'ali_available'=>'',
	'ali_access_id'=>'云存储ID',
	'ali_access_secret'=>'云存储Secret',
	'ali_bucket'=>'BUCKET',
	'ali_access_id_comment'=>'阿里云云存储Access Key ID',
	'ali_access_secret_comment'=>'阿里云云存储Access Key Secret',
	'ali_bucket_comment'=>'请选择BUCKET',
	
	'buckets'=>array(''=>'请选择bucket'),
	
	'aliinfo_ali_access_id_invalid'=>'阿里云云存储Access Key ID 不能为空，如没有云存储,请钩掉启用，然后下一步',
	'aliinfo_ali_access_secret_invalid'=>'阿里云云存储Access Key Secret',
	'aliinfo_ali_bucket_invalid'=>'请选择BUCKET',

	'siteinfo_siteurl_invalid' => '站点URL为空，或者格式错误，请检查',
	'siteinfo_sitename_invalid' => '站点名称为空，或者格式错误，请检查',
	'dbinfo_dbhost_invalid' => '数据库服务器为空，或者格式错误，请检查',
	'dbinfo_dbname_invalid' => '数据库名为空，或者格式错误，请检查',
	'dbinfo_dbuser_invalid' => '数据库用户名为空，或者格式错误，请检查',
	'dbinfo_dbpw_invalid' => '数据库密码为空，或者格式错误，请检查',
	'dbinfo_adminemail_invalid' => '系统邮箱为空，或者格式错误，请检查',
	'dbinfo_tablepre_invalid' => '数据表前缀为空，或者格式错误，请检查',
	'admininfo_username_invalid' => '管理员姓名为空，或者格式错误，请检查',
	'admininfo_nickname_invalid' => '管理员用户名为空，或者格式错误，请检查',
	'admininfo_email_invalid' => '管理员Email为空，或者格式错误，请检查',
	'admininfo_password_invalid' => '管理员密码为空，请填写',
	'admininfo_password2_invalid' => '两次密码不一致，请检查',

	'username' => '管理员姓名',
	'email' => '管理员登录邮箱',
	'nickname' => '管理员登录用户名',
	'password' => '管理员密码',
	'password_comment' => '管理员密码不能为空',
	'password2' => '重复密码',

	'admininfo_invalid' => '管理员信息不完整，请检查管理员姓名，密码，邮箱',
	'dbname_invalid' => '数据库名为空，请填写数据库名称',
	'tablepre_invalid' => '数据表前缀为空，或者格式错误，请检查',
	'admin_username_invalid' => '非法姓名，姓名长度不应当超过 30 个英文字符，且不能包含特殊字符，一般是中文，字母或者数字',
	'admin_nicname_invalid' => '非法用户名，用户名长度不应当超过 30 个英文字符，且不能包含特殊字符，一般是中文，字母或者数字',
	'admin_password_invalid' => '密码和上面不一致，请重新输入',
	'admin_email_invalid' => 'Email 地址错误，此邮件地址已经被使用或者格式无效，请更换为其他地址',
	'admin_invalid' => '您的信息管理员信息没有填写完整，请仔细填写每个项目',
	'admin_exist_password_error' => '该用户已经存在，如果您要设置此用户为的管理员，请正确输入该用户的密码，或者请更换论坛管理员的名字',

	'tagtemplates_subject' => '标题',
	'tagtemplates_uid' => '用户 ID',
	'tagtemplates_username' => '发帖者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主题地址',

	'config_unwriteable' => '安装向导无法写入配置文件, 请设置 config.inc.php 程序属性为可写状态(777)',

	'install_in_processed' => '正在安装...',
	'install_succeed' => '安装成功，点击进入',



	'license' => '',

	'i_agree' => '我已仔细阅读，并同意上述条款中的所有内容',
	'supportted' => '支持',
	'unsupportted' => '不支持',
	'max_size' => '支持/最大尺寸',
	'project' => '项目',
	'dzzoffice_required' => 'DzzOffice 所需配置',
	'dzzoffice_best' => 'DzzOffice 最佳',
	'curr_server' => '当前服务器',
	'env_check' => '环境检查',
	'os' => '操作系统',
	'php' => 'PHP 版本',
	'attachmentupload' => '附件上传',
	'unlimit' => '不限制',
	'version' => '版本',
	'gdversion' => 'GD 库',
	'allow' => '允许 ',
	'unix' => '类Unix',
	'diskspace' => '磁盘空间',
	'priv_check' => '目录、文件权限检查',
	'func_depend' => '函数依赖性检查',
	'func_name' => '函数名称',
	'check_result' => '检查结果',
	'suggestion' => '建议',
	'advice_mysql' => '请检查 mysql 模块是否正确加载',
	'advice_fopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml' => '该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',
	'none' => '无',

	'dbhost' => '数据库服务器',
	'dbuser' => '数据库用户名',
	'dbpw' => '数据库密码',
	'dbname' => '数据库名',
	'tablepre' => '数据表前缀',
	'company'=>'组织简称',

	'ucfounderpw' => '创始人密码',
	'ucfounderpw2' => '重复创始人密码',

	'init_log' => '初始化记录',
	'clear_dir' => '清空目录',
	'select_db' => '选择数据库',
	'create_table' => '建立数据表',
	'succeed' => '成功 ',

	'install_data' => '正在安装数据',
	'install_test_data' => '正在安装附加数据',

	'method_undefined' => '未定义方法',
	'database_nonexistence' => '数据库操作对象不存在',
	'skip_current' => '跳过本步',

);

$msglang = array(
	'config_nonexistence' => '您的 config.php 不存在, 无法继续安装, 请用 FTP 将该文件上传后再试。',
);

?>