<?php
   require_once APP_PATH. '/model/LeidingModel.php';

class LeidingController {
    protected $leidingModel;
public function __construct() {
    $this->leidingModel = new LeidingModel();

}
   public function overview(){
        
        $Leiding = $this->leidingModel->GetLeiding();
        loadView("theme/header");
        loadView("leiding/overview", ['Leiding' => $Leiding]);
        loadView("theme/footer");
        
    }
    public function leidingInfo(){
         loadView("theme/header");
        if(isset($_GET['leiding'])){
            $getter = $_GET['leiding'];
            $info = $this->leidingModel->GetInfo($getter);
            loadView("leiding/leidinginfo", ["info" => $info] );
        }else{
            loadView("leiding/leidinginfo");
        }
        loadView("theme/footer");
          
        
    }
    public function create(){
        loadView("theme/header");
        
        loadView("theme/footer");
        }
        public function update(){
        loadView("theme/header");
       
        loadView("theme/footer");
        }
        public function delete(){
        loadView("theme/header");
       
        loadView("theme/footer");
        }
        
}
