<?php
// Настройки сайта
define(SITE_HOST,		'http://'.$_SERVER["HTTP_HOST"]);	// Имя хоста сайта
define(SITE_FOLDER, 	$_SERVER["DOCUMENT_ROOT"]);			// Путь к главной папке
define(SITE_PHPMA, 		'http://localhost/Tools/phpmyadmin/index.php');			// Путь phpMyAdmin
define(SITE_TIMEZONE, 	"Europe/Minsk");					// Часовой пояс сайта
define(SITE_AUTO_ADMIN_NAME, 	'admin');					// авто имя Администратора
define(SITE_AUTO_ADMIN_PASS, 	'0304');					// авто пароль Администратора
define(SITE_AUTO_ADMIN_GROUP, 	'admin');					// авто группа Администраторов

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
// Константы для MySQL
define(DATA_BASE_HOST, "localhost");
define(DATA_BASE_NAME, "verespro");
define(DATA_BASE_USER, "admin");
define(DATA_BASE_PASS, "0304");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
// Пути к папкам
define(FOLDER_CLASS,	'class/');						// Папка классов
define(FOLDER_SCRIPT,	'script/');						// Папка скриптов
define(FOLDER_STYLE,	'style/');						// Папка стилей

define(FOLDER_LOG_ERROR,	FOLDER_SYSTEM.'log/error/');	// Папка ошибок
define(FOLDER_LOG_SUCSES,	FOLDER_SYSTEM.'log/sucses/');	// Папка успеха
define(FOLDER_LOG_MESSEGE,	FOLDER_SYSTEM.'log/messege/');	// Папка оповещений

define(FOLDER_SQL,			FOLDER_SYSTEM.'sql/');			// Папка бэкапа SQL


?>