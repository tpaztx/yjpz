<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class AttributesReturn {
	
	static $_TSPEC;
	public $attributeList = null;
	public $pageModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeList'
			),
			2 => array(
			'var' => 'pageModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeList'])){
				
				$this->attributeList = $vals['attributeList'];
			}
			
			
			if (isset($vals['pageModel'])){
				
				$this->pageModel = $vals['pageModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttributesReturn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attributeList" == $schemeField){
				
				$needSkip = false;
				
				$this->attributeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\Attribute();
						$elem0->read($input);
						
						$this->attributeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("pageModel" == $schemeField){
				
				$needSkip = false;
				
				$this->pageModel = new \com\vip\category\service\PageModel();
				$this->pageModel->read($input);
				
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
		
		if($this->attributeList !== null) {
			
			$xfer += $output->writeFieldBegin('attributeList');
			
			if (!is_array($this->attributeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attributeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageModel !== null) {
			
			$xfer += $output->writeFieldBegin('pageModel');
			
			if (!is_object($this->pageModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>