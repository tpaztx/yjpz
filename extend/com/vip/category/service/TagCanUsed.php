<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class TagCanUsed {
	
	static $_TSPEC;
	public $tagSn = null;
	public $isCanUsed = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagSn'
			),
			2 => array(
			'var' => 'isCanUsed'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['isCanUsed'])){
				
				$this->isCanUsed = $vals['isCanUsed'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagCanUsed';
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
			
			
			
			
			if ("isCanUsed" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isCanUsed);
				
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
		
		
		$xfer += $output->writeFieldBegin('isCanUsed');
		$xfer += $output->writeBool($this->isCanUsed);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>