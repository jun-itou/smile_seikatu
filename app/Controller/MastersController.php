<?php
class MastersController extends AppController{

  var $uses = ['Items'];
    public $helpers = array('Form', 'Html', 'Js', 'Time');
     
     public function index() {

        $this->render('index');

        if ($this->request->is('post')) {
          $request = $this->request->data;

        }
    }

    public function itemsMaster(){
    	$this->loadModel('Items');
    	$allItems = $this->Items->getAllItems();
    	$this->set(compact('allItems'));
    	$this->render('itemsMaster');
    }

    public function createItem(){
        if ($this->request->is('post') != "") {
                $this->request->data['Items']['Img'] = $this->imgUp();
            if ($this->Items->save($this->request->data)) {
                $this->Session->setFlash('保存したよ');
                return $this->redirect('itemsMaster');
            }else{
                $this->Session->setFlash('失敗');
                return; 
            }
        }
    }

    public function imgUp(){
        if($this->request->data['Items']['Category_flg'] == 1){
            $path = "/smile_seikatu/app/webroot/product/japanese";
            $return_path = "/product/japanese/";
        }else if($this->request->data['Items']['Category_flg'] == 2){
            $path = "/smile_seikatu/app/webroot/product/world";
            $return_path = "/product/world/";
        }else{
             $this->Session->setFlash('画像が登録できませんでした');
             return;
        }
        //画像保存先のパス
        $image = $this->request->data['Items']['Img_data'];
        if(!$this->Items->validate){
            return;
        }
        if(!move_uploaded_file($image['tmp_name'], $path . DS . $image['name'])){
            echo "fss";exit;
        }

        return $return_path.$image['name'];
    }
}