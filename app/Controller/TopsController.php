<?php  

class TopsController extends AppController{

	public $scaffold;

	 public function index() {

        // 変数をビューへ渡す
        $vines_data = array();
        $this->set('vines_data', $vines_data);

        $this->render('index');
    }
}