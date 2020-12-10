<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class AttributeValue {
	
	static $_TSPEC;
	public $literal = null;
	public $options = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'literal'
			),
			2 => array(
			'var' => 'options'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['literal'])){
				
				$this->literal = $vals['literal'];
			}
			
			
			if (isset($vals['options'])){
				
				$this->options = $vals['options'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttributeValue';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("literal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->literal);
				
			}
			
			
			
			
			if ("options" == $schemeField){
				
				$needSkip = false;
				
				$this->options = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\osp\category\api\comm\Option();
						$elem0->read($input);
						
						$this->options[$_size0++] = $elem0;
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
		
		if($this->literal !== null) {
			
			$xfer += $output->writeFieldBegin('literal');
			$xfer += $output->writeString($this->literal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->options !== null) {
			
			$xfer += $output->writeFieldBegin('options');
			
			if (!is_array($this->options)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->options as $iter0){
				
				
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