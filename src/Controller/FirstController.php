<?php 
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;
   use Cake\Auth\DefaultPasswordHasher;
class FirstController extends AppController{

	public function index(){
		// $this->autoRender=false;
		$this->set("name", "Abhishek Puri");
		$a= array("name"=>"Abhi", "place"=>"Amritsar");
		$this->set("data", $a);
	
	}
	public function demo(){
		// $this->autoRender=false;
			}
}

?> 