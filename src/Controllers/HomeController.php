<?php
namespace App\Controllers;

class HomeController{
		public function index(){
			include getView('welcome');
		}
}
