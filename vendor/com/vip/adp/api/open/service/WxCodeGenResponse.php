<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class WxCodeGenResponse {
	
	static $_TSPEC;
	public $wxCodeInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wxCodeInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wxCodeInfo'])){
				
				$this->wxCodeInfo = $vals['wxCodeInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WxCodeGenResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wxCodeInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->wxCodeInfo = new \com\vip\adp\api\open\service\WxCodeInfo();
				$this->wxCodeInfo->read($input);
				
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
		
		if($this->wxCodeInfo !== null) {
			
			$xfer += $output->writeFieldBegin('wxCodeInfo');
			
			if (!is_object($this->wxCodeInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->wxCodeInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>