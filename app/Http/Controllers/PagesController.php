<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$fullname = "Ene Sorin";
		$data = [];
		$data['email'] = "ene.sorin94@gmail.com";
		$data['telephone'] = "0731322142";
		return view('pages.about')->withFullname($fullname)->withData($data);
	} 

	public function getContact() {
		return view('pages.contact');
	}
}