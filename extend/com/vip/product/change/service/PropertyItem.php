<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\product\change\service;

class PropertyItem {
	
	static $_TSPEC;
	public $propName = null;
	public $propValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'propName'
			),
			2 => array(
			'var' => 'propValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['propName'])){
				
				$this->propName = $vals['propName'];
			}
			
			
			if (isset($vals['propValue'])){
				
				$this->propValue = $vals['propValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PropertyItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("propName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->propName);
				
			}
			
			
			
			
			if ("propValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->propValue);
				
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
		
		if($this->propName !== null) {
			
			$xfer += $output->writeFieldBegin('propName');
			$xfer += $output->writeString($this->propName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->propValue !== null) {
			
			$xfer += $output->writeFieldBegin('propValue');
			$xfer += $output->writeString($this->propValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>