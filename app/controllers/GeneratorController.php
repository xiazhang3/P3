<?php

class GeneratorController extends BaseController {
	public function showIndex(){
		return View::make('index');
	}

	public function getCreateParagraph() {
		return View::make('paragraph');
	}


	public function getCreateUser() {
		return View::make('user');
	}

	public function postCreateParagraph(){
		return 'hello';
	}

	public function postCreateUser() {
		return 'heloo';
	}


}