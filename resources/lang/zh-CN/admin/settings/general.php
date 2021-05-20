<?php

return array(
    'ad'				        => 'Active Directory活动目录',
    'ad_domain'				    => 'AD域',
    'ad_domain_help'			=> '通常(但并非全部情况下)这与您的邮件域相同',
    'ad_append_domain_label'    => '附加域名',
    'ad_append_domain'          => '添加域名到用户名字段',
    'ad_append_domain_help'     => '不要求用户输入“"username@domain.local"，他们只需输入“username”。' ,
    'admin_cc_email'            => '邮件抄送',
    'admin_cc_email_help'       => '如果你想给用户额外的邮件账户发送签入/签出副本，请在此输入邮箱地址，否则请留空。',
    'is_ad'				        => '这是AD域服务器',
    'alert_email'				=> '发送警报',
    'alerts_enabled'			=> '警报已启用',
    'alert_interval'			=> '警报阈值(天)',
    'alert_inv_threshold'		=> '库存警报阈值',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> '资产ID',
    'audit_interval'            => '盘点时间间隔',
    'audit_interval_help'       => '如果您需要定期盘点您的资产，请输入月数间隔。',
    'audit_warning_days'        => '盘点开始提醒',
    'audit_warning_days_help'   => '需要提前多少天让我们通知您需要盘点资产？',
    'auto_increment_assets'		=> '生成自动递增资产ID',
    'auto_increment_prefix'		=> '前缀（可选）',
    'auto_incrementing_help'    => '在启用自动递增的资产ID之前设置此处。',
    'backups'					=> '备份',
    'barcode_settings'			=> '条码设置',
    'confirm_purge'			    => '确认清除',
    'confirm_purge_help'		=> '在下面的框中输入文本“DELETE”以清除已删除的记录。此操作无法撤消，将永久删除所有软删除的项目和用户。（为了安全起见，你应该先做个备份。）',
    'custom_css'				=> '自定义 CSS',
    'custom_css_help'			=> '键入你喜欢的CSS格式覆盖。不要包括：&lt;style&gt;&lt;/style&gt; 标签。',
    'custom_forgot_pass_url'	=> '密码重置网址',
    'custom_forgot_pass_url_help'	=> '这将替换登录屏幕上的忘记密码URL，有助于将用户引导至内部或托管的LDAP密码重置服务。它将禁用本地用户密码重置功能。',
    'dashboard_message'			=> '仪表盘消息',
    'dashboard_message_help'	=> '此文本将显示在仪表盘上，供有权查看仪表盘的任何人使用。',
    'default_currency'  		=> '默认货币',
    'default_eula_text'			=> 'Default EULA',
    'default_language'			=> '默认语言',
    'default_eula_help_text'	=> '你也可以将自定义的EULA与特定资产分类相关联。',
    'display_asset_name'        => '显示资产名称',
    'display_checkout_date'     => '显示借出日期',
    'display_eol'               => '以表格形式显示寿命期限',
    'display_qr'                => '显示二维码',
    'display_alt_barcode'		=> '显示条码',
    'email_logo'                => '电子邮件标志',
    'barcode_type'				=> '二维码类型',
    'alt_barcode_type'			=> '条码类型',
    'email_logo_size'       => '电子邮件中最好使用方形标志。 ',
    'eula_settings'				=> '最终用户许可协议(EULA)设置',
    'eula_markdown'				=> 'EULA中可以使用<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => '收藏夹图标',
    'favicon_format'            => '可接受的文件类型是ico、png和gif。其他图像格式可能无法在所有浏览器中显示。',
    'favicon_size'          => '收藏图标 应该是方形图像，16x16像素。',
    'footer_text'               => '附加页脚文本 ',
    'footer_text_help'          => '此文本将显示在右侧页脚中。链接允许使用 <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>。换行符、页眉、图像等可能会导致不可预知的结果。',
    'general_settings'			=> '一般设置',
    'generate_backup'			=> '生成备份',
    'header_color'              => '标题颜色',
    'info'                      => '这些设置允许您自定义安装的某些方面',
    'label_logo'                => '标签标志',
    'label_logo_size'           => '方形标志看起来最好——将显示在每个资产标签的右上角。 ',
    'laravel'                   => 'Laravel版本',
    'ldap_enabled'              => '启用LDAP验证',
    'ldap_integration'          => 'LDAP集成',
    'ldap_settings'             => 'LDAP 设置',
    'ldap_login_test_help'      => '根据你指定的base DN，输入有效的LDAP用户名和密码，以测试您的LDAP登录是否配置正确。当然您必须先保存您更改的LDAP设置。',
    'ldap_login_sync_help'      => '这只证明了LDAP同步正确。如果您的LDAP身份验证查询设置不正确，用户可能仍然无法登录。当然您必须先保存您的LDAP设置。',
    'ldap_server'               => 'LDAP 服务器',
    'ldap_server_help'          => '这应以ldap:// (for unencrypted or TLS)或 ldaps:// (for SSL)开头',
    'ldap_server_cert'			=> '检验LDAP的SSL证书',
    'ldap_server_cert_ignore'	=> '允许未通过校验的SSL证书',
    'ldap_server_cert_help'		=> '如果你使用了自签发证书，请勾选',
    'ldap_tls'                  => '使用TLS',
    'ldap_tls_help'             => '仅当LDAP服务器使用STARTTLS时本选项才被勾选',
    'ldap_uname'                => 'LDAP 用户名',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP 密码',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP 过滤器',
    'ldap_pw_sync'              => 'LDAP 密码同步',
    'ldap_pw_sync_help'         => '若您不想让 LDAP 密码与系统密码同步，请勿勾选此项。取消同步设置将造成当系统与 LDAP 失去连接时，用户无法登录。',
    'ldap_username_field'       => '用户名字段',
    'ldap_lname_field'          => '姓氏',
    'ldap_fname_field'          => 'LDAP用户名字字段',
    'ldap_auth_filter_query'    => 'LDAP认证请求',
    'ldap_version'              => 'LDAP 版本',
    'ldap_active_flag'          => 'LDAP 启用标志',
    'ldap_activated_flag_help'  => '该标志用于确定用户是否可以登录Snipe-IT，不影响用户对其进行物品查询。',
    'ldap_emp_num'              => 'LDAP 员工号',
    'ldap_email'                => 'LDAP Email',
    'license'                  => '软件许可证',
    'load_remote_text'          => '外部脚本',
    'load_remote_help_text'		=> '允许Snipe-IT安装外部的加载脚本。',
    'login_note'                => '登陆提示',
    'login_note_help'           => '可选择性地在登陆界面显示一些信息，例如给找到丢失或者被偷设备的用户提供帮助。这里支持<a href="https://help.github.com/articles/github-flavored-markdown/">Github的markdown语法</a>。',
    'login_remote_user_text'    => '远程用户登录选项',
    'login_remote_user_enabled_text' => '启用远程用户头登录',
    'login_remote_user_enabled_help' => '这个选项根据“通用网关接口（rfc3875）”标准，开启使用 REMOTE_USER 头的认证。',
    'login_common_disabled_text' => '禁用其他认证机制',
    'login_common_disabled_help' => '该选项将禁用其他身份验证机制。请您确定只有您的REMOTE_USER登录已经可用，才启用此选项',
    'login_remote_user_custom_logout_url_text' => '自定义注销网址',
    'login_remote_user_custom_logout_url_help' => '如果此处提供了URL，则在用户注销Snipe-IT后，用户将被重定向到此URL。这对于正确关闭身份验证提供程序的用户会话非常有用。',
    'login_remote_user_header_name_text' => '自定义用户名前缀',
    'login_remote_user_header_name_help' => '使用指定的用户前缀而不是REMOTE_USER',
    'logo'                    	=> '徽标',
    'logo_print_assets'         => '在打印中使用',
    'logo_print_assets_help'    => '在打印资产列表中使用品牌 ',
    'full_multiple_companies_support_help_text' => '限制归属特定公司的用户（包括管理员）仅能访问该公司资产',
    'full_multiple_companies_support_text' => '完整多企业支持',
    'show_in_model_list'   => '在模型下拉列表中显示',
    'optional'					=> '可选',
    'per_page'                  => '每页搜索结果',
    'php'                       => 'PHP版本',
    'php_gd_info'               => '您必须安装php-gd显示二维码，请参阅安装说明。',
    'php_gd_warning'            => 'PHP图像处理的GD[php-gd]插件没有安装',
    'pwd_secure_complexity'     => '密码复杂度',
    'pwd_secure_complexity_help' => '选择您想执行哪种密码复杂性规则。',
    'pwd_secure_min'            => '密码最少包含的字符',
    'pwd_secure_min_help'       => '允许的最小值是 8',
    'pwd_secure_uncommon'       => '禁止使用常见密码',
    'pwd_secure_uncommon_help'  => '这将会禁止用户使用最常见的10000个密码。',
    'qr_help'                   => '允许二维码首次设置',
    'qr_text'                   => '二维码文本',
    'saml_enabled'              => 'SAML 已启用',
    'saml_integration'          => 'SAML 集成',
    'saml_sp_entityid'          => '实体 ID',
    'saml_sp_acs_url'           => '申明消费者服务 (ACS) URL',
    'saml_sp_sls_url'           => '单次注销服务 (SLS) URL',
    'saml_sp_x509cert'          => '公开证书',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP 元数据',
    'saml_idp_metadata_help'    => '您可以使用 URL 或 XML 文件指定IdP 元数据。',
    'saml_attr_mapping_username' => '属性映射 - 用户名',
    'saml_attr_mapping_username_help' => '如果属性映射未指定或无效，将使用NameID。',
    'saml_forcelogin_label'     => 'SAML 强制登录',
    'saml_forcelogin'           => '将SAML 设为主要登录',
    'saml_forcelogin_help'      => '您可以使用 \'/login?nosaml\' 进入正常登录页面。',
    'saml_slo_label'            => 'SAML 单一注销',
    'saml_slo'                  => '注销时向IdP发送注销请求',
    'saml_slo_help'             => '这将导致用户在注销时首先被重定向到IdP。如果IdP不能正确地支持SP发起的SAML SLO，则不勾选。',
    'saml_custom_settings'      => 'SAML 自定义设置',
    'saml_custom_settings_help' => '您可以为onelogin/php-saml库指定额外的设置。请自行承担风险。',
    'setting'                   => '设置',
    'settings'                  => '设置',
    'show_alerts_in_menu'       => '在顶部菜单中显示警告',
    'show_archived_in_list'     => '归档资产',
    'show_archived_in_list_text'     => '在 "所有资产" 列表中显示归档资产',
    'show_assigned_assets'      => '显示分配给资产的资产',
    'show_assigned_assets_help' => '在 "查看用户->资产"、"查看用户->信息->打印所有已分配的资产 "和 "账户->查看已分配的资产 "中显示已分配资产。',
    'show_images_in_email'     => '在电子邮件中显示图片。',
    'show_images_in_email_help'   => '如果外部用户无法在邮件中通过你安装在VPN或内网的Snipe-IT加载图片，请取消此复选框。',
    'site_name'                 => '站点名称',
    'slack_botname'             => 'Slack Bot名称',
    'slack_channel'             => 'Slack频道',
    'slack_endpoint'            => 'Slack节点',
    'slack_integration'         => 'Slack设置',
    'slack_integration_help'    => 'Slack 集成是可选的，但如果您想要使用它，则需要端点和频道。 要配置 Slack 集成，您必须先 <a href=":slack_link" target="_new" rel="noopener">在您的 Slack 帐户上创建传入的 webhook</a> 。 点击 <strong>测试 Slack 集成</strong> 按钮在保存之前确认您的设置是正确的。 ',
    'slack_integration_help_button'    => '一旦你保存了你的Slack信息，就会出现一个测试按钮。',
    'slack_test_help'           => '测试您的Slack集成是否配置正确。你一定要先保存你的设置。',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => '支持页脚链接 ',
    'support_footer_help'       => '指定谁可以看到指向Snipe-IT支持信息和用户手册的链接',
    'version_footer'            => '页脚版本 ',
    'version_footer_help'       => '指定谁可以看到Snipe-IT版本和内部版本号。',
    'system'                    => '系统信息',
    'update'                    => '更新设置',
    'value'                     => '价值',
    'brand'                     => '品牌',
    'web_brand'                 => '网页品牌类型',
    'about_settings_title'      => '设置',
    'about_settings_text'       => '这些设置允许您自定义您的安装偏好',
    'labels_per_page'           => '每页显示',
    'label_dimensions'          => 'Label 尺寸（英尺）',
    'next_auto_tag_base'        => '下一个自动增量',
    'page_padding'              => '页面边框',
    'privacy_policy_link'       => '链接到隐私条款。',
    'privacy_policy'            => '隐私条款',
    'privacy_policy_link_help'  => '如果此处包含 url, 则将在应用程序页脚和系统发送的任何电子邮件中包含指向您的隐私策略的链接, 以符合 GDPR 的要求。 ',
    'purge'                     => '清除已标记删除的记录',
    'labels_display_bgutter'    => '标签底部装订线',
    'labels_display_sgutter'    => '标签侧装订线',
    'labels_fontsize'           => '标签字体大小',
    'labels_pagewidth'          => '标签宽度',
    'labels_pageheight'         => '标签宽度',
    'label_gutters'        => '标签间隔(英寸)',
    'page_dimensions'        => '页面尺寸(英寸)',
    'label_fields'          => '标签可见字段',
    'inches'        => '英尺',
    'width_w'        => '宽',
    'height_h'        => '高',
    'show_url_in_emails'                => '链接到Snipe-IT在电子邮件',
    'show_url_in_emails_help_text'      => '如果您不希望链接回电子邮件页脚中的Snipe-IT安装，请取消选中此框。如果您的大多数用户从未登录，则很有用',
    'text_pt'        => '磅',
    'thumbnail_max_h'   => '最大缩略图高度',
    'thumbnail_max_h_help'   => '以像素为单位的缩略图可能在列表视图中显示的最大高度。最小25，最高 500。',
    'two_factor'        => '两步验证',
    'two_factor_secret'        => '两步验证验证码',
    'two_factor_enrollment'        => '加入两步验证',
    'two_factor_enabled_text'        => '启用两步验证',
    'two_factor_reset'        => '重设两步验证密钥',
    'two_factor_reset_help'        => '此操作会强制用户再次通过 Google Authenticator 登记设备，此操作可以解决上一部移动设备丢失的问题。',
    'two_factor_reset_success'          => '成功重设两步验证设备',
    'two_factor_reset_error'          => '两步验证设备重设失败',
    'two_factor_enabled_warning'        => '启用两步验证将需要您立即用登记的移动设备验证身份。如您尚未设置两步验证，您现在可以登记您的设备。',
    'two_factor_enabled_help'        => '此操作将用 Google Authenticator 启用两步验证',
    'two_factor_optional'        => '可选项（如果允许，用户可以启用或禁用）',
    'two_factor_required'        => '强制所有用户启用',
    'two_factor_disabled'        => '已停用',
    'two_factor_enter_code'	=> '输入两步验证代码',
    'two_factor_config_complete'	=> '发送两步验证代码',
    'two_factor_enabled_edit_not_allowed' => '你的管理员不允许您编辑此设置。',
    'two_factor_enrollment_text'	=> "本系统强制两步验证，但您尚未登记您的移动设备。请启动您的 Google Authenticator 应用并扫描下方二维码以设置两步验证。在您完成后，请在下方输入生成的认证代码。",
    'require_accept_signature'      => '需要签名',
    'require_accept_signature_help_text'      => '启用此功能将需要用户亲自签署来接受一项资产。',
    'left'        => '左',
    'right'        => '右',
    'top'        => '顶部',
    'bottom'        => '底部',
    'vertical'        => '竖向',
    'horizontal'        => '水平',
    'unique_serial'                => '唯一的序列号',
    'unique_serial_help_text'                => '选中此框将强制对资产序列进行唯一性约束',
    'zerofill_count'        => '资产标签长度，包括补零',
    'username_format_help'   => '只有在没有提供用户名并且我们必须为您生成用户名时，导入过程才会使用此设置。',
);
