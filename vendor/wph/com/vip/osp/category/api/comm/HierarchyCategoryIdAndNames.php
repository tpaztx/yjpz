<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class HierarchyCategoryIdAndNames {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $categoryId = null;
	public $cateIdAndNameList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'categoryId'
			),
			3 => array(
			'var' => 'cateIdAndNameList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['cateIdAndNameList'])){
				
				$this->cateIdAndNameList = $vals['cateIdAndNameList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HierarchyCategoryIdAndNames';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("hierarchyId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hierarchyId); 
				
			}
			
			
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
			}
			
			
			
			
			if ("cateIdAndNameList" == $schemeField){
				
				$needSkip = false;
				
				$this->cateIdAndNameList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\osp\category\api\comm\CategoryIdAndName();
						$elem1->read($input);
						
						$this->cateIdAndNameList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cateIdAndNameList !== null) {
			
			$xfer += $output->writeFieldBegin('cateIdAndNameList');
			
			if (!is_array($this->cateIdAndNameList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cateIdAndNameList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>