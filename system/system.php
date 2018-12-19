<?php
define(FOLDER_SYSTEM, 'system/');	// Cистемная папка

// Вывод страницы с Фатальной ошибкой
function error_page($h1, $p, $h5) {
	
	$mes = '<html><head><title>Ошибка</title><meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style/error.css"></head><body>
	<center><table width="800px"><tr><td>
		<table><tr>
			<td><img src="style/error_white.png" width="40" height="40"></td>
			<td><h1>'.$h1.'</h1></td>
		</tr></table>
	</td></tr>';
	if($p<>'')  $mes.='<tr><td><p>'.$p.'</p></td></tr>';
	if($h5<>'') $mes.='<tr><td><h5>'.$h5.'</h5></td></tr>';
	$mes .= '</table></center></body></html>';
	// Выводим страницу
	echo $mes; exit;
}


// Проверка существования и подгрузка файлов
function file_exists_include($name) {
	
	$path = $name.'.php';
	
	// Если файл существует выведим TRUE
	if( file_exists($path) ) include($path);
	// Если файла нет, перенаправляем на страницу ошибки с кодом
	else { 
		error_page(
			'Нет системного файла', 
			'Система не может найти важный файл. Обратитесь с Администратору.', 
			$name.'.php'
		);
	};
}


// Прикрепляем файлы
file_exists_include(FOLDER_SYSTEM.'define');		// Константы
file_exists_include(FOLDER_SYSTEM.'error');			// Файл с ошибками
file_exists_include(FOLDER_SYSTEM.'function');		// Функции


// Прикрепляем классы
file_exists_include(FOLDER_CLASS.'dbf');	// 
file_exists_include(FOLDER_CLASS.'log');	// 
file_exists_include(FOLDER_CLASS.'mysql');	// 



?>