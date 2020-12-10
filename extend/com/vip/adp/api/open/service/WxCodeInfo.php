<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class WxCodeInfo {
	
	static $_TSPEC;
	public $vipWxUrl = null;
	public $vipWxCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vipWxUrl'
			),
			2 => array(
			'var' => 'vipWxCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vipWxUrl'])){
				
				$this->vipWxUrl = $vals['vipWxUrl'];
			}
			
			
			if (isset($vals['vipWxCode'])){
				
				$this->vipWxCode = $vals['vipWxCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WxCodeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vipWxUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipWxUrl);
				
			}
			
			
			
			
			if ("vipWxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipWxCode);
				
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
		
		if($this->vipWxUrl !== null) {
			
			$xfer += $output->writeFieldBegin('vipWxUrl');
			$xfer += $output->writeString($this->vipWxUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipWxCode !== null) {
			
			$xfer += $output->writeFieldBegin('vipWxCode');
			$xfer += $output->writeString($this->vipWxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>