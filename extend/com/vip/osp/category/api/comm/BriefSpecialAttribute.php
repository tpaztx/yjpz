<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class BriefSpecialAttribute {
	
	static $_TSPEC;
	public $attriuteId = null;
	public $dataType = null;
	public $literal = null;
	public $optionlist = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attriuteId'
			),
			2 => array(
			'var' => 'dataType'
			),
			3 => array(
			'var' => 'literal'
			),
			4 => array(
			'var' => 'optionlist'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attriuteId'])){
				
				$this->attriuteId = $vals['attriuteId'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['literal'])){
				
				$this->literal = $vals['literal'];
			}
			
			
			if (isset($vals['optionlist'])){
				
				$this->optionlist = $vals['optionlist'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BriefSpecialAttribute';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attriuteId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attriuteId); 
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\osp\category\api\comm\DataType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->dataType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("literal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->literal);
				
			}
			
			
			
			
			if ("optionlist" == $schemeField){
				
				$needSkip = false;
				
				$this->optionlist = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\osp\category\api\comm\BriefSpecialOption();
						$elem0->read($input);
						
						$this->optionlist[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('attriuteId');
		$xfer += $output->writeI32($this->attriuteId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->dataType !== null) {
			
			$xfer += $output->writeFieldBegin('dataType');
			
			$em = new \com\vip\osp\category\api\comm\DataType; 
			$output->writeString($em::$__names[$this->dataType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->literal !== null) {
			
			$xfer += $output->writeFieldBegin('literal');
			$xfer += $output->writeString($this->literal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionlist !== null) {
			
			$xfer += $output->writeFieldBegin('optionlist');
			
			if (!is_array($this->optionlist)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->optionlist as $iter0){
				
				
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