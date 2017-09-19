<?php  

class ItemsController extends AppController{
	var $uses = ['Items', 'Blogs'];
	 
	 public function index() {

		$NewItemData = $this->Items->getItemsNew();

        $this->set(compact('NewItemData','allBlogData'));
        $this->render('index');

        if ($this->request->is('post')) {
        	$request = $this->request->data;

        }

    }
}