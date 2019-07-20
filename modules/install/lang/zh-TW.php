<?php
$lang->introduce_title = '安裝Rhymix';
$lang->install_progress_menu['language'] = '選擇安裝語言';
$lang->install_progress_menu['license_agreement'] = '許可協議';
$lang->install_progress_menu['condition'] = '檢查安裝條件';
$lang->install_progress_menu['ftp'] = '輸入FTP信息';
$lang->install_progress_menu['dbSelect'] = '選擇DB';
$lang->install_progress_menu['dbInfo'] = '輸入DB信息';
$lang->install_progress_menu['configInfo'] = '環境設置';
$lang->install_progress_menu['adminInfo'] = '輸入管理員信息';
$lang->install_checklist_title['php_version'] = 'PHP版本';
$lang->install_checklist_title['permission'] = 'files文件夾權限';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session';
$lang->install_checklist_title['session_auto'] = 'session.auto_start設置';
$lang->install_checklist_desc['permission'] = '[必須] Rhymix的資料夾或『./files』資料夾權限必須是『777』。';
$lang->install_checklist_desc['xml'] = '[必須] 必須要安裝『XML Library』，才能夠使用 XML 通訊。';
$lang->install_checklist_desc['session'] = '[必須] PHP會話必須可用';
$lang->install_checklist_desc['session_auto'] = '[必須] 在『php.ini』中必須要設定『session.auto_start=0』，才能使用暫存功能';
$lang->install_checklist_desc['iconv'] = '安裝『iconv』，才能使 UTF-8 和其他語言文字作互相轉換。';
$lang->install_checklist_desc['gd'] = '安裝『GD Library』才可以使用圖片轉換功能。';
$lang->install_checklist_xml = '安裝 XML Library';
$lang->install_without_xml = '尚未安裝 XML Library！';
$lang->install_checklist_gd = '安裝 GD Library';
$lang->install_without_gd = '尚未安裝負責轉換圖片功能的 GD Library！';
$lang->install_without_iconv = '尚未安裝負責處理字串的『iconv』！';
$lang->install_session_auto_start = 'PHP設置中設置成『session.auto_start==1』，可能在處理 session 時會發生錯誤。';
$lang->install_permission_denied = '安裝目錄權限不是『777』！';
$lang->cmd_install_refresh_page = '刷新屏幕';
$lang->cmd_install_next = '開始進行安裝';
$lang->cmd_ignore = '忽略';
$lang->cmd_recommended = '推薦';
$lang->db_desc['mysqli'] = '使用MySQL或MariaDB。 如果支持，Rhymix將自動使用InnoDB。';
$lang->db_desc['mysql'] = '使用MySQL或MariaDB。 如果支持，Rhymix將自動使用InnoDB。';
$lang->db_desc['cubrid'] = '不支持CUBRID。';
$lang->db_desc['mssql'] = '不支持Microsoft SQL Server。';
$lang->can_use_when_installed = '不是這個服務器上安裝';
$lang->form_title = '輸入資料庫及管理員資訊';
$lang->db_title = '輸入資料庫資訊';
$lang->db_type = '資料庫類型';
$lang->select_db_type = '請選擇要使用的資料庫。';
$lang->db_hostname = '主機名稱';
$lang->db_port = '埠口';
$lang->db_userid = '使用者名稱';
$lang->db_password = '密碼';
$lang->db_name = 'DB 姓名';
$lang->db_database_file = '資料庫檔案';
$lang->db_table_prefix = '前置字元';
$lang->admin_title = '管理員資料';
$lang->env_title = '環境設置';
$lang->use_optimizer = 'Optimizer';
$lang->about_optimizer = '使用 Optimizer 可對大部分的『CSS/JS』檔案進行整合/壓縮加快網站訪問速度。<br />只是有時會發生小小的問題，這時候請暫時不要使用 Optimizer 功能。';
$lang->use_rewrite = 'Rewrite';
$lang->use_sso = '單一登入';
$lang->about_rewrite = '如果支援 rewrite 功能，可縮短冗長的網址。<br />例>『http://域名/?document_srl=123』縮短成『http://域名/123』。';
$lang->time_zone = '時區';
$lang->about_time_zone = '主機時間和您所處的時間有差異時，可以設置時區來滿足你所需要的時間顯示。';
$lang->ssl_options['none'] = '關閉';
$lang->ssl_options['optional'] = '手動';
$lang->ssl_options['always'] = '開啟';
$lang->about_database_file = 'Sqlite是保存資料於檔案中。資料庫的檔案位置應該放在 web 不能訪問的地方。<br/><span style="color:red">資料檔案應放在具有 777 權限的位置。</span>';
$lang->success_installed = '已完成安裝。';
$lang->msg_cannot_proc = '不具備安裝所需環境，無法繼續安裝。';
$lang->msg_already_installed = '已安裝';
$lang->msg_dbconnect_failed = '連接資料庫時發生錯誤。 請重新確認資料庫資訊。';
$lang->msg_table_is_exists = '已建立資料表。 重新建立 config 檔案。';
$lang->msg_install_completed = '安裝完成。 非常感謝。';
$lang->msg_install_failed = '建立安裝檔案時，發生錯誤。';
$lang->ftp_get_list = '取得列表';
$lang->ftp_form_title = '輸入 FTP 資訊';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTP 主機名稱';
$lang->ftp_port = 'FTP 埠口';
$lang->about_ftp_password = '不會儲存 FTP 密碼';
$lang->cmd_check_ftp_connect = '檢查 FTP 連線';
$lang->msg_ftp_not_connected = '本地(localhost) FTP連線錯誤。請檢查 FTP 埠口並確認是否支援 FTP 功能。';
$lang->msg_ftp_invalid_auth_info = 'FTP登入失敗。請確認輸入的 FTP 資訊。';
$lang->msg_ftp_mkdir_fail = '新增資料夾失敗。請確認 FTP 主機設置。';
$lang->msg_ftp_chmod_fail = '修改資料夾權限失敗。請確認 FTP 主機設置。';
$lang->msg_ftp_connect_success = 'FTP連線成功。';
$lang->ftp_path_title = '請輸入 FTP 路經';
$lang->msg_ftp_installed_realpath = 'Rhymix絕對路經';
$lang->msg_ftp_installed_ftp_realpath = 'Rhymix的 FTP 絕對路經';
