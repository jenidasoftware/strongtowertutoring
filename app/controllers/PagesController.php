<?php

class PagesController extends BaseController {

	public function home()
	
	{
		return View::make('home');
	}


	public function about()
	{
		return View::make('about');
	}


        public function contact()
        {
                return View::make('contact');
        }

        public function account()
        {
                return View::make('account');
        }

}

