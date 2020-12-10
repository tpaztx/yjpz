<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class AttributeWithValue {
	
	static $_TSPEC;
	public $attribute = null;
	public $attributeValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attribute'
			),
			2 => array(
			'var' => 'attributeValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attribute'])){
				
				$this->attribute = $vals['attribute'];
			}
			
			
			if (isset($vals['attributeValue'])){
				
				$this->attributeValue = $vals['attributeValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttributeWithValue';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attribute" == $schemeField){
				
				$needSkip = false;
				
				$this->attribute = new \com\vip\osp\category\api\comm\Attribute();
				$this->attribute->read($input);
				
			}
			
			
			
			
			if ("attributeValue" == $schemeField){
				
				$needSkip = false;
				
				$this->attributeValue = new \com\vip\osp\category\api\comm\AttributeValue();
				$this->attributeValue->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('attribute');
		
		if (!is_object($this->attribute)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->attribute->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attributeValue !== null) {
			
			$xfer += $output->writeFieldBegin('attributeValue');
			
			if (!is_object($this->attributeValue)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->attributeValue->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>