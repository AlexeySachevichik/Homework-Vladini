<?php
class Mysql
{
var
	$name;		// Имя таблицы
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
// Подключение к MySQL
function connect() {

	// Подключаемся к MySQL
	if ( mysql_connect(DATA_BASE_HOST, DATA_BASE_USER, DATA_BASE_PASS) )
	{
		// Подключаемся к DataBase
		if( mysql_select_db(DATA_BASE_NAME) ) return TRUE;
		// Если не удалось подключится к DataBase
		else error_fatal(2);
	}
	// Если не удалось подключится к MySQL
	else error_fatal(1);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
// Проверка существования Таблицы
function exists_table($name) {
	$sql = '';
	
}



}
/*
class Mysql_Create_Table
{
	var
		$Mysql = new Mysql; // Подключаем объект Mysql

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
// Создание таблицы пользователей
function users(){
	$sql_01 = 'CREATE TABLE IF NOT EXISTS `users` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`login` varchar(200) COLLATE utf8_bin NOT NULL,
				`group` int(1) NOT NULL,
				`password` varchar(200) COLLATE utf8_bin NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;';
	$sql_02 = ;
	
	// Если подключение работает
	if( $Mysql->connect() ) {
		
	}
	// Если таблица не создана
	else error_system(1);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
// Проверка существования таблицы

	
}
*/
?>