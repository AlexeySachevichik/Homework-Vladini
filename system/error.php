<?
// Очищаем сессию
// unset($_SESSION['group']);

// Страница не найдена
if( $_GET['error']==404 ) {
	$h1='Ошибка 404';
	$p='Запрашиваемый url не был найден на сервере.<br><a href="'.SITE_HOST.'">&#8592; перейти на Главную страницу</a>';
	
	// Выводим страницу, и выходим из кода
	error_page($h1, $p, '');
};

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Список критических ошибок
function error_fatal($number) {
	
	// Группа, которая может просматривать доп.информацию
	$show_detail = isset($_SESSION['group']) and ( $_SESSION['group'] == SITE_AUTO_ADMIN_GROUP );
	
	// Общие системные сообщения
	$m01 = 'Обратитесь к Системному администратору.';
	$m02 = 'Нет связи с MySQL';
	
//////////////////////////////////////////////////////////////	
// Ошибка подключения к MySQl
	if ($number == 1) {
		$h1=$m02;
		$p='Невозможно отобразить страницу, так как связь с сервером MySQL отсутствует.';	
		// Если пользователь админ
		if ($show_detail) {
			$p .= ' Проверьте настройки.<br><a href="'.SITE_PHPMA.'" target="_blank">&#8592; перейти к phpMyAdmin</a>';
			$h5 =	'HOST : '.DATA_BASE_HOST.'<br>'.
					'NAME : '.DATA_BASE_NAME.'<br>'.
					'USER : '.DATA_BASE_USER.'<br>'.
					'PASS : '.DATA_BASE_PASS.'<br>';
		}
		// Все остальные поьзователи
		else $p .= ' '.$m01; $h5 = '';
	};
//////////////////////////////////////////////////////////////	
// Ошибка подключения к БазеДанных
	if ($number == 2) {
		$h1=$m02;
		$p='Невозможно отобразить страницу, запрашиваемая База Данных не найдена.';
	
		// Если пользователь админ
		if ($show_detail) $h5 = 'DataBase: <b>'.DATA_BASE_NAME.'</b>';
		// Все остальные поьзователи
		else $p .= ' '.$m01; $h5 = '';
	};

//////////////////////////////////////////////////////////////	
// Выводим страницу, и выходим из кода
error_page($h1, $p, $h5);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Список системных ошибок
function error_system($number){
	
	
	
	
	echo '<div id="error_messege"><h2>'.$h2.'</h2><p>'.$p.'</p></div>';
}

?>