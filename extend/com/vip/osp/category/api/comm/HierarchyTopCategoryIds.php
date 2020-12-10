<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class HierarchyTopCategoryIds {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $categoryIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'categoryIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['categoryIdList'])){
				
				$this->categoryIdList = $vals['categoryIdList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HierarchyTopCategoryIds';
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
			
			
			
			
			if ("categoryIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryIdList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->categoryIdList[$_size1++] = $elem1;
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
		
		if($this->categoryIdList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIdList');
			
			if (!is_array($this->categoryIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryIdList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
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