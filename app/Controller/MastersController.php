<?php
class MastersController extends AppController{
  var $uses = ['items','users','Reviews','Blogs','Orders','OrderLogs'];
    public $helpers = array('Form', 'Html', 'Js', 'Time');
     
     public function index() {

        // $NewItemData          = $this->Items->getItemsNew();
  //       $japaneaseVine        = $this->Items->getJapaneaseV();
  //       $ForeignCountriesVine = $this->Items->getForeignCountriesV();

  //       $this->set(compact('NewItemData','allBlogData','japaneaseVine','ForeignCountriesVine'));
        $this->render('index');

        if ($this->request->is('post')) {
          $request = $this->request->data;

        }
    }

    public function itemsMaster(){
    	$allItems = $this->Items->getAllItems();
    }
}