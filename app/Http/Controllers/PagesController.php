<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {
	public function getIndex() {
		$posts = Post::orderBy('created_at','desc')->limit(5)->get();
		return view('pages.welcome')->withPosts($posts);
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