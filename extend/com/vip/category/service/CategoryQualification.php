<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryQualification {
	
	static $_TSPEC;
	public $categoryId = null;
	public $qualificationId = null;
	public $qualificationName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'qualificationId'
			),
			3 => array(
			'var' => 'qualificationName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['qualificationId'])){
				
				$this->qualificationId = $vals['qualificationId'];
			}
			
			
			if (isset($vals['qualificationName'])){
				
				$this->qualificationName = $vals['qualificationName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryQualification';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
			}
			
			
			
			
			if ("qualificationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->qualificationId); 
				
			}
			
			
			
			
			if ("qualificationName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->qualificationName);
				
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
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qualificationId');
		$xfer += $output->writeI64($this->qualificationId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->qualificationName !== null) {
			
			$xfer += $output->writeFieldBegin('qualificationName');
			$xfer += $output->writeString($this->qualificationName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>