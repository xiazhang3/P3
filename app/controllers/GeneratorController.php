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

	//This function requires "badcow/lorem-ipsum": "dev-master"
	public function postCreateParagraph(){
		$paraData = (int)Input::get('num_paragraph');


		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($paraData);

		//modify the usage accordingly
		echo '<p>'.implode('</p><p>', $paragraphs).'</p>';

	}

	//This function requires "fzaninotto/faker": "1.5.*@dev"
	public function postCreateUser() {
		$userData = (int)Input::get('num_user');

		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();
		
		for($i = 0; $i < $userData; $i++) {
		      echo '<p>'.$faker->name.'</p>';  
			  echo '<p>'.$faker->address.'</p>'; 
		      echo '<p>'.$faker->email.'</p>'; 
		      echo '<br>';
		}

	}


}