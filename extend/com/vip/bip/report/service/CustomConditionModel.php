<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class CustomConditionModel {
	
	static $_TSPEC;
	public $param = null;
	public $expression = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			2 => array(
			'var' => 'expression'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
			if (isset($vals['expression'])){
				
				$this->expression = $vals['expression'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomConditionModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("param" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->param);
				
			}
			
			
			
			
			if ("expression" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expression);
				
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
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			$xfer += $output->writeString($this->param);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expression !== null) {
			
			$xfer += $output->writeFieldBegin('expression');
			$xfer += $output->writeString($this->expression);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>