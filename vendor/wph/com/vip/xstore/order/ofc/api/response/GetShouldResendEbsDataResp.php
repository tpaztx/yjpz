<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\response;

class GetShouldResendEbsDataResp {
	
	static $_TSPEC;
	public $result = null;
	public $ofcEbsOrder = null;
	public $ofcEbsOrderReturn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'ofcEbsOrder'
			),
			3 => array(
			'var' => 'ofcEbsOrderReturn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['ofcEbsOrder'])){
				
				$this->ofcEbsOrder = $vals['ofcEbsOrder'];
			}
			
			
			if (isset($vals['ofcEbsOrderReturn'])){
				
				$this->ofcEbsOrderReturn = $vals['ofcEbsOrderReturn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetShouldResendEbsDataResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = new \com\vip\xstore\order\common\pojo\vo\Result();
				$this->result->read($input);
				
			}
			
			
			
			
			if ("ofcEbsOrder" == $schemeField){
				
				$needSkip = false;
				
				$this->ofcEbsOrder = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\xstore\order\common\pojo\vo\OfcEbsOrderVO();
						$elem1->read($input);
						
						$this->ofcEbsOrder[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ofcEbsOrderReturn" == $schemeField){
				
				$needSkip = false;
				
				$this->ofcEbsOrderReturn = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\xstore\order\common\pojo\vo\OfcEbsOrderReturnVO();
						$elem2->read($input);
						
						$this->ofcEbsOrderReturn[$_size2++] = $elem2;
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
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			
			if (!is_object($this->result)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->result->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ofcEbsOrder !== null) {
			
			$xfer += $output->writeFieldBegin('ofcEbsOrder');
			
			if (!is_array($this->ofcEbsOrder)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ofcEbsOrder as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ofcEbsOrderReturn !== null) {
			
			$xfer += $output->writeFieldBegin('ofcEbsOrderReturn');
			
			if (!is_array($this->ofcEbsOrderReturn)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ofcEbsOrderReturn as $iter0){
				
				
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