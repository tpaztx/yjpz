<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelAddressInfoVO {
	
	static $_TSPEC;
	public $areaCode = null;
	public $areaName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			18100 => array(
			'var' => 'areaCode'
			),
			18101 => array(
			'var' => 'areaName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['areaCode'])){
				
				$this->areaCode = $vals['areaCode'];
			}
			
			
			if (isset($vals['areaName'])){
				
				$this->areaName = $vals['areaName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelAddressInfoVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("areaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaCode);
				
			}
			
			
			
			
			if ("areaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaName);
				
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
		
		if($this->areaCode !== null) {
			
			$xfer += $output->writeFieldBegin('areaCode');
			$xfer += $output->writeString($this->areaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaName !== null) {
			
			$xfer += $output->writeFieldBegin('areaName');
			$xfer += $output->writeString($this->areaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>