<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class CreatePoDeliveryResp {
	
	static $_TSPEC;
	public $storage_no = null;
	public $logistics_no = null;
	public $delivery_method = null;
	public $arrival_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storage_no'
			),
			2 => array(
			'var' => 'logistics_no'
			),
			3 => array(
			'var' => 'delivery_method'
			),
			4 => array(
			'var' => 'arrival_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['delivery_method'])){
				
				$this->delivery_method = $vals['delivery_method'];
			}
			
			
			if (isset($vals['arrival_time'])){
				
				$this->arrival_time = $vals['arrival_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreatePoDeliveryResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storage_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_no);
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("delivery_method" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_method);
				
			}
			
			
			
			
			if ("arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrival_time);
				
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
		
		if($this->storage_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_no');
			$xfer += $output->writeString($this->storage_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_method !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_method');
			$xfer += $output->writeString($this->delivery_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('arrival_time');
			$xfer += $output->writeString($this->arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>