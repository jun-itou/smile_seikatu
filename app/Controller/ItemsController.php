<?php  

class ItemsController extends AppController{
	var $uses = ['Items', 'Blogs'];
	 
	 public function index() {

		$NewItemData          = $this->Items->getItemsNew();
        $japaneaseVine        = $this->Items->getJapaneaseV();
        $ForeignCountriesVine = $this->Items->getForeignCountriesV();

        $this->set(compact('NewItemData','allBlogData','japaneaseVine','ForeignCountriesVine'));
        $this->render('index');

        if ($this->request->is('post')) {
        	$request = $this->request->data;

        }

    }
}