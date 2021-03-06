<?php
class ItemCtrl extends Controller{
   
    private $order;

    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Item();
        
        
    }

    public function index(){

        if ($_POST) {
            
            $this->updateDetails($_POST, $this->params[0]); 
           
            
         }
        $this->data['item'] = $this->model->load($this->params[0]);
        $this->data['index'] = $this->params[0];
    }
    
    public function createItem(){
        if ($_POST) { 
            $this->model->newItem($_POST);
            header('Location:'.ROOT_URL.'/order');
            exit();
        }
    }

    public function newItem($safePOST){
        $safePOST = array_map('trim', filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
        $this->data['err'] =  $this->model->newItem($safePOST);                 
    }

    public function deleteItem(){
        if ($_POST) { 
            $this->model->delete($_POST);
        }
    }

    public function updateDetails($safePOST, $index){
       
        $safePOST = array_map('trim', filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
        //$this->data['MSG'] =  $this->model->updateItemDetails($safePOST, $index);
        $this->model->updateItemDetails($safePOST, $index);
        header('Location:'.ROOT_URL.'/item/index/'.$this->params[0]);
        exit();
        
    }
    public function updateSills(){
        if($_POST){
            $this->model->updateItemSills($_POST);
        }
       
    }
}
?>