<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class ReportDeliveryInfo {
	
	static $_TSPEC;
	public $location_code = null;
	public $logistics_no = null;
	public $scan_type = null;
	public $scan_time = null;
	public $data_type = null;
	public $order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'location_code'
			),
			3 => array(
			'var' => 'logistics_no'
			),
			4 => array(
			'var' => 'scan_type'
			),
			5 => array(
			'var' => 'scan_time'
			),
			6 => array(
			'var' => 'data_type'
			),
			7 => array(
			'var' => 'order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['location_code'])){
				
				$this->location_code = $vals['location_code'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['scan_type'])){
				
				$this->scan_type = $vals['scan_type'];
			}
			
			
			if (isset($vals['scan_time'])){
				
				$this->scan_time = $vals['scan_time'];
			}
			
			
			if (isset($vals['data_type'])){
				
				$this->data_type = $vals['data_type'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReportDeliveryInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("location_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->location_code);
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("scan_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scan_type); 
				
			}
			
			
			
			
			if ("scan_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scan_time);
				
			}
			
			
			
			
			if ("data_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->data_type); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
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
		
		$xfer += $output->writeFieldBegin('location_code');
		$xfer += $output->writeString($this->location_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('logistics_no');
		$xfer += $output->writeString($this->logistics_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scan_type');
		$xfer += $output->writeI32($this->scan_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scan_time');
		$xfer += $output->writeString($this->scan_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('data_type');
		$xfer += $output->writeI32($this->data_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>