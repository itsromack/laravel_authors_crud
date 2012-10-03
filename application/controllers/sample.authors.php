<?php
class Authors_Controller extends Base_Controller
{
	public $restful = true;

	public $layout = 'layouts.default';

	public function get_index()
	{
		$view = View::make('authors.index', array('name' => 'Romack Natividad'))
			->with('age', '28');
		$view->location = 'California';
		$view['specialty'] = 'PHP';

		$this->layout->title = 'Authors and Books from Controller';
		$this->layout->content = $view;
	}
}