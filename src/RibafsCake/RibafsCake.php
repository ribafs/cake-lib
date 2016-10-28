<?php
namespace RibafsCake;
use Cake\ORM\TableRegistry;

class RibafsCake {

    public function allRegs($modelName){    
		$regs = TableRegistry::get($modelName);
		$query = $regs->find('all');
		return $query;      
    }        
        
    public function oneReg($modelName){    
		$reg = TableRegistry::get($modelName);
		$query = $reg->find()->where([$id]);//where(['name like' => "%$nome%"])->first();
		return $query;            
    }        

    public function countRegs($modelName){
		$count = TableRegistry::get($modelName);
		$query = $count->find();
		// Depois chamamos a contagem
		$total = $query->count();
		return $total;            
    }        

    public function allRegsFields($modelName, $fields=array()){ // Ex: ['id', 'nome', 'email']
		$regs = TableRegistry::get($modelName);
		$query = $regs->find();
		$flds = $query->select($fields);
		return $flds;            
    }
    
}
