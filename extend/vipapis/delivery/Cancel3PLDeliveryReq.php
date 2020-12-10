<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class Cancel3PLDeliveryReq {
	
	static $_TSPEC;
	public $operator_id = null;
	public $storage_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Cancel3PLDeliveryReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("operator_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operator_id); 
				
			}
			
			
			
			
			if ("storage_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_no);
				
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>