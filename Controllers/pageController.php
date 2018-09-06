<?php 
class pageController extends Controller{
	public function __construct(){
		Controller::__construct();
	}
	public function home($str = null){
		Controller::$view->view('home',$str);
	}
	public function olke(){
		Controller::$view->view('olke');
	}
	public function siyaset(){
		Controller::$view->view('siyaset');
	}
	public function kriminal(){
		Controller::$view->view('kriminal');
	}
	public function sou_biznes(){
		Controller::$view->view('sou_biznes');
	}
	public function Idman(){
		Controller::$view->view('Idman');
	}
	public function maraqli(){
		Controller::$view->view('maraqli');
	}
	public function login(){
		Controller::$view->view('login');
	}
	public function register(){
		Controller::$view->view('register');
	}
	public function add_login(){
		Controller::$view->view('add_login');
	}
	public function add_register(){
		Controller::$view->view('add_register');
	}
	public function single(){
		Controller::$view->view('single');
	}
	public function exitt(){
		Controller::$view->view('exitt');
	}
	
	public function existsMethod($str){
		if (method_exists($this, $str)) {
			return true;
		}
		else{
			return false;
		}
	}
}


?>