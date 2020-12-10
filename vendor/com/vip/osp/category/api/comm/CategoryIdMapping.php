<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class CategoryIdMapping {
	
	static $_TSPEC;
	public $preCategoryId = null;
	public $newCategoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'preCategoryId'
			),
			2 => array(
			'var' => 'newCategoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['preCategoryId'])){
				
				$this->preCategoryId = $vals['preCategoryId'];
			}
			
			
			if (isset($vals['newCategoryId'])){
				
				$this->newCategoryId = $vals['newCategoryId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryIdMapping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("preCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->preCategoryId); 
				
			}
			
			
			
			
			if ("newCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->newCategoryId); 
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->preCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('preCategoryId');
			$xfer += $output->writeI32($this->preCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('newCategoryId');
			$xfer += $output->writeI32($this->newCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>