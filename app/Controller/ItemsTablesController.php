<?php  

class ItemsTablesController extends AppController{

	 // public $uses = ['ItemsTable'];
	 
	 public function index() {

        // 変数をビューへ渡す
        $vines_data = $this->ItemsTable->find('all');

        $this->set('vines_data', $vines_data);

        $this->render('index');

    }
}