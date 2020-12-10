<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelSelectAddressVO {
	
	static $_TSPEC;
	public $info = null;
	public $childList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			18100 => array(
			'var' => 'info'
			),
			18101 => array(
			'var' => 'childList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['info'])){
				
				$this->info = $vals['info'];
			}
			
			
			if (isset($vals['childList'])){
				
				$this->childList = $vals['childList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelSelectAddressVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("info" == $schemeField){
				
				$needSkip = false;
				
				$this->info = new \com\vip\wpc\ospservice\channel\vo\WpcChannelAddressInfoVO();
				$this->info->read($input);
				
			}
			
			
			
			
			if ("childList" == $schemeField){
				
				$needSkip = false;
				
				$this->childList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelAddressInfoVO();
						$elem0->read($input);
						
						$this->childList[$_size0++] = $elem0;
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
		
		if($this->info !== null) {
			
			$xfer += $output->writeFieldBegin('info');
			
			if (!is_object($this->info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->childList !== null) {
			
			$xfer += $output->writeFieldBegin('childList');
			
			if (!is_array($this->childList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->childList as $iter0){
				
				
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