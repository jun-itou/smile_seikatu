<?php 

class ProductController extends AppController{
    // public $uses =array('Product');

    // public function index($ItemsID = null){
    //     $this ->paginate =array(
    //         'conditions' => array('ItemsID' => $ItemsID),
    //         'limit' =>5
    //         );
    //     $products = $this->paginate();
    //     debug($products);exit;
    //     if(!$products){
    //         $this->Session->setFlash("ヒットしませんでした");
    //         //$this->redirect($this->referer(array('action'=>'index')));
    //     }else{
    //         $this ->set(compact('products'));
    //     }

    

    public function index() {
        if($this->request->is('post')) {
            $search = '%'.$this->request->data['kana'].'%';
            $conditions = $search ? array('Items_kanji LIKE' => $search) : array();
        } else {
            $conditions = array();
        }

        $this->paginate = [
            'limit' => 9,
            'conditions' => $conditions,
        ];

        $products = $this->paginate(
            );

        if (!$products) {
            $this->Session->setFlash('ヒットしませんでした');
        }

        $this->set(compact('products'));
    }
}


        //$this->autoLayout = false;//...デフォルト取る

 ?>