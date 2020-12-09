<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class Attrs {
	
	static $_TSPEC;
	public $attrId = null;
	public $attrName = null;
	public $dataType = null;
	public $attrMap = null;
	public $attrOptsList = null;
	public $operationType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attrId'
			),
			2 => array(
			'var' => 'attrName'
			),
			3 => array(
			'var' => 'dataType'
			),
			4 => array(
			'var' => 'attrMap'
			),
			5 => array(
			'var' => 'attrOptsList'
			),
			6 => array(
			'var' => 'operationType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attrId'])){
				
				$this->attrId = $vals['attrId'];
			}
			
			
			if (isset($vals['attrName'])){
				
				$this->attrName = $vals['attrName'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['attrMap'])){
				
				$this->attrMap = $vals['attrMap'];
			}
			
			
			if (isset($vals['attrOptsList'])){
				
				$this->attrOptsList = $vals['attrOptsList'];
			}
			
			
			if (isset($vals['operationType'])){
				
				$this->operationType = $vals['operationType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Attrs';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attrId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attrId); 
				
			}
			
			
			
			
			if ("attrName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attrName);
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\DataType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->dataType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("attrMap" == $schemeField){
				
				$needSkip = false;
				
				$this->attrMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->attrMap[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("attrOptsList" == $schemeField){
				
				$needSkip = false;
				
				$this->attrOptsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\category\service\AttrOpts();
						$elem1->read($input);
						
						$this->attrOptsList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("operationType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\OperationType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->operationType = $k;
						break;
					}
					
				}
				
				
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
		
		if($this->attrId !== null) {
			
			$xfer += $output->writeFieldBegin('attrId');
			$xfer += $output->writeI32($this->attrId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attrName !== null) {
			
			$xfer += $output->writeFieldBegin('attrName');
			$xfer += $output->writeString($this->attrName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataType !== null) {
			
			$xfer += $output->writeFieldBegin('dataType');
			
			$em = new \com\vip\category\service\DataType; 
			$output->writeString($em::$__names[$this->dataType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attrMap !== null) {
			
			$xfer += $output->writeFieldBegin('attrMap');
			
			if (!is_array($this->attrMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->attrMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attrOptsList !== null) {
			
			$xfer += $output->writeFieldBegin('attrOptsList');
			
			if (!is_array($this->attrOptsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attrOptsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operationType !== null) {
			
			$xfer += $output->writeFieldBegin('operationType');
			
			$em = new \com\vip\category\service\OperationType; 
			$output->writeString($em::$__names[$this->operationType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>