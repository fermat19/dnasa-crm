<?php

namespace Core;

class Templates {

	public static function getHeader() {
		$file = ROOT.'public'.DS.'templates'.DS.'header.php';
		if (file_exists($file)) {
			require_once $file;

		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getSidebar() {
		$file = ROOT.'public'.DS.'templates'.DS.'sidebar.php';
		if (file_exists($file)) {
			#$v = \App\Functions\Auth::isAuth();
			#if ($v) {
				require_once $file;
			#}
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getNavbar() {
		$file = ROOT.'public'.DS.'templates'.DS.'navbar.php';
		if (file_exists($file)) {
			# $v = \App\Functions\Auth::isAuth();
			#if ($v) {
				require_once $file;
			#}
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getFooter() {
		$file = ROOT.'public'.DS.'templates'.DS.'footer.php';
		if (file_exists($file)) {
			require_once $file;
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getTopBody() {
		$file = ROOT.'public'.DS.'templates'.DS.'top_body.php';
		if (file_exists($file)) {
			require_once $file;
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getBotBody() {
		$file = ROOT.'public'.DS.'templates'.DS.'bot_body.php';
		if (file_exists($file)) {
			require_once $file;
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}


}