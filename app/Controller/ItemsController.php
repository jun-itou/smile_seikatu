<?php  

class ItemsController extends AppController{
    var $uses = ['Items', 'Blogs'];

    public function index() {

        $this->autoLayout = false;

        $NewItemData          = $this->Items->getItemsNew();
        $japaneaseVine        = $this->Items->getJapaneaseV();
        $ForeignCountriesVine = $this->Items->getForeignCountriesV();

        $this->set(compact('NewItemData','allBlogData','japaneaseVine','ForeignCountriesVine'));
        $this->render('index');

        if ($this->request->is('post')) {
            $request = $this->request->data;

        }

    }

    public function itemDetail() {
        $this->autoLayout = false;
        // $ItemID = $this->request->data('Item.ID');
        $ItemID = '3';

        $allItems = $this->Items->find('all');

        $detailItem = array();
        foreach ($allItems as $items) {
            foreach ($items as $item) {
                if ($item['ItemsID'] === $ItemID) {
                    $detailItem = $item;
                    break;
                }
            }
        }

        $this->set('detailItem', $detailItem);

    }

}