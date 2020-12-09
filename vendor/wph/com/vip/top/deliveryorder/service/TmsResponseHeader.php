<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsResponseHeader {
	
	static $_TSPEC;
	public $resultCode = null;
	public $resultMsg = null;
	public $costTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'resultCode'
			),
			2 => array(
			'var' => 'resultMsg'
			),
			3 => array(
			'var' => 'costTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['resultCode'])){
				
				$this->resultCode = $vals['resultCode'];
			}
			
			
			if (isset($vals['resultMsg'])){
				
				$this->resultMsg = $vals['resultMsg'];
			}
			
			
			if (isset($vals['costTime'])){
				
				$this->costTime = $vals['costTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsResponseHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("resultCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultCode);
				
			}
			
			
			
			
			if ("resultMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultMsg);
				
			}
			
			
			
			
			if ("costTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->costTime); 
				
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
		
		$xfer += $output->writeFieldBegin('resultCode');
		$xfer += $output->writeString($this->resultCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultMsg');
		$xfer += $output->writeString($this->resultMsg);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->costTime !== null) {
			
			$xfer += $output->writeFieldBegin('costTime');
			$xfer += $output->writeI64($this->costTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>