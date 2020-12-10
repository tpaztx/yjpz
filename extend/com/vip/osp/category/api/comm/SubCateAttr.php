<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class SubCateAttr {
	
	static $_TSPEC;
	public $categoryId = null;
	public $subCatAttr = null;
	public $tagFilter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'subCatAttr'
			),
			3 => array(
			'var' => 'tagFilter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['subCatAttr'])){
				
				$this->subCatAttr = $vals['subCatAttr'];
			}
			
			
			if (isset($vals['tagFilter'])){
				
				$this->tagFilter = $vals['tagFilter'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubCateAttr';
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
			
			
			
			
			if ("subCatAttr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCatAttr);
				
			}
			
			
			
			
			if ("tagFilter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagFilter);
				
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
		
		if($this->subCatAttr !== null) {
			
			$xfer += $output->writeFieldBegin('subCatAttr');
			$xfer += $output->writeString($this->subCatAttr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagFilter !== null) {
			
			$xfer += $output->writeFieldBegin('tagFilter');
			$xfer += $output->writeString($this->tagFilter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>