<?php 
class TourokuController extends AppController{
    //public $uses= array('Touroku');
    public function index(){
        $option=array(
            'admin'=>'Admin',
            'auther'=>'Auther');
        $this->set('option',$option);

        if($this->request->is('post')){
            if($this->Touroku->save($this->request->data)){
                $this->Flash->success(__('追加されました!'));
                return $this->redirect(array('action' =>'index'));            
            }
            $this->Flash->error(__('うまく追加できていないよ!'));
         }
    }
} 