<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcOrderReturnProgressVO {
	
	static $_TSPEC;
	public $returnProgressDesc = null;
	public $returnProgressTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnProgressDesc'
			),
			2 => array(
			'var' => 'returnProgressTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnProgressDesc'])){
				
				$this->returnProgressDesc = $vals['returnProgressDesc'];
			}
			
			
			if (isset($vals['returnProgressTime'])){
				
				$this->returnProgressTime = $vals['returnProgressTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderReturnProgressVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnProgressDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnProgressDesc);
				
			}
			
			
			
			
			if ("returnProgressTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnProgressTime);
				
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
		
		if($this->returnProgressDesc !== null) {
			
			$xfer += $output->writeFieldBegin('returnProgressDesc');
			$xfer += $output->writeString($this->returnProgressDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnProgressTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnProgressTime');
			$xfer += $output->writeString($this->returnProgressTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>