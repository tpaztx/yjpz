<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class OrderReceivingResponse {
	
	static $_TSPEC;
	public $success_count = null;
	public $success_list = null;
	public $error_count = null;
	public $error_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success_count'
			),
			2 => array(
			'var' => 'success_list'
			),
			3 => array(
			'var' => 'error_count'
			),
			4 => array(
			'var' => 'error_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success_count'])){
				
				$this->success_count = $vals['success_count'];
			}
			
			
			if (isset($vals['success_list'])){
				
				$this->success_list = $vals['success_list'];
			}
			
			
			if (isset($vals['error_count'])){
				
				$this->error_count = $vals['error_count'];
			}
			
			
			if (isset($vals['error_list'])){
				
				$this->error_list = $vals['error_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderReceivingResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->success_count); 
				
			}
			
			
			
			
			if ("success_list" == $schemeField){
				
				$needSkip = false;
				
				$this->success_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\jitx\OrderReceivingDetail();
						$elem1->read($input);
						
						$this->success_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("error_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->error_count); 
				
			}
			
			
			
			
			if ("error_list" == $schemeField){
				
				$needSkip = false;
				
				$this->error_list = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\jitx\OrderReceivingDetail();
						$elem2->read($input);
						
						$this->error_list[$_size2++] = $elem2;
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
		
		if($this->success_count !== null) {
			
			$xfer += $output->writeFieldBegin('success_count');
			$xfer += $output->writeI32($this->success_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success_list !== null) {
			
			$xfer += $output->writeFieldBegin('success_list');
			
			if (!is_array($this->success_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_count !== null) {
			
			$xfer += $output->writeFieldBegin('error_count');
			$xfer += $output->writeI32($this->error_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_list !== null) {
			
			$xfer += $output->writeFieldBegin('error_list');
			
			if (!is_array($this->error_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->error_list as $iter0){
				
				
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