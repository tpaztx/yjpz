<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class TagEx {
	
	static $_TSPEC;
	public $tagSn = null;
	public $tagCategoryBindings = null;
	public $validDays = null;
	public $bindingType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagSn'
			),
			2 => array(
			'var' => 'tagCategoryBindings'
			),
			3 => array(
			'var' => 'validDays'
			),
			4 => array(
			'var' => 'bindingType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['tagCategoryBindings'])){
				
				$this->tagCategoryBindings = $vals['tagCategoryBindings'];
			}
			
			
			if (isset($vals['validDays'])){
				
				$this->validDays = $vals['validDays'];
			}
			
			
			if (isset($vals['bindingType'])){
				
				$this->bindingType = $vals['bindingType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagEx';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagSn); 
				
			}
			
			
			
			
			if ("tagCategoryBindings" == $schemeField){
				
				$needSkip = false;
				
				$this->tagCategoryBindings = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\TagCategoryBinding();
						$elem0->read($input);
						
						$this->tagCategoryBindings[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("validDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->validDays); 
				
			}
			
			
			
			
			if ("bindingType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->bindingType); 
				
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
		
		if($this->tagSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagSn');
			$xfer += $output->writeI32($this->tagSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagCategoryBindings !== null) {
			
			$xfer += $output->writeFieldBegin('tagCategoryBindings');
			
			if (!is_array($this->tagCategoryBindings)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagCategoryBindings as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validDays !== null) {
			
			$xfer += $output->writeFieldBegin('validDays');
			$xfer += $output->writeI32($this->validDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindingType !== null) {
			
			$xfer += $output->writeFieldBegin('bindingType');
			$xfer += $output->writeByte($this->bindingType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>