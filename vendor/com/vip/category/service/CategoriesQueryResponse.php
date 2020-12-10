<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoriesQueryResponse {
	
	static $_TSPEC;
	public $categories = null;
	public $isShowMap = null;
	public $pageModel = null;
	public $errorCodeMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categories'
			),
			2 => array(
			'var' => 'isShowMap'
			),
			3 => array(
			'var' => 'pageModel'
			),
			4 => array(
			'var' => 'errorCodeMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categories'])){
				
				$this->categories = $vals['categories'];
			}
			
			
			if (isset($vals['isShowMap'])){
				
				$this->isShowMap = $vals['isShowMap'];
			}
			
			
			if (isset($vals['pageModel'])){
				
				$this->pageModel = $vals['pageModel'];
			}
			
			
			if (isset($vals['errorCodeMessage'])){
				
				$this->errorCodeMessage = $vals['errorCodeMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoriesQueryResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categories" == $schemeField){
				
				$needSkip = false;
				
				$this->categories = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\Category();
						$elem0->read($input);
						
						$this->categories[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isShowMap" == $schemeField){
				
				$needSkip = false;
				
				$this->isShowMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = 0;
						$input->readI32($key1); 
						
						$val1 = 0;
						$input->readI32($val1); 
						
						$this->isShowMap[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("pageModel" == $schemeField){
				
				$needSkip = false;
				
				$this->pageModel = new \com\vip\category\service\PageModel();
				$this->pageModel->read($input);
				
			}
			
			
			
			
			if ("errorCodeMessage" == $schemeField){
				
				$needSkip = false;
				
				$this->errorCodeMessage = new \com\vip\category\service\ErrorCodeMessage();
				$this->errorCodeMessage->read($input);
				
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
		
		if($this->categories !== null) {
			
			$xfer += $output->writeFieldBegin('categories');
			
			if (!is_array($this->categories)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categories as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShowMap !== null) {
			
			$xfer += $output->writeFieldBegin('isShowMap');
			
			if (!is_array($this->isShowMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->isShowMap as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				$xfer += $output->writeI32($viter0);
				
			}
			
			$output->writeMapEnd();
			
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
		
		
		if($this->errorCodeMessage !== null) {
			
			$xfer += $output->writeFieldBegin('errorCodeMessage');
			
			if (!is_object($this->errorCodeMessage)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->errorCodeMessage->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>