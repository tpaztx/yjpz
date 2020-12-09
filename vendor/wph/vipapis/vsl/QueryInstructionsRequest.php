<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class QueryInstructionsRequest {
	
	static $_TSPEC;
	public $warehouse_code = null;
	public $create_time_begin = null;
	public $create_time_end = null;
	public $page = null;
	public $limit = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_code'
			),
			2 => array(
			'var' => 'create_time_begin'
			),
			3 => array(
			'var' => 'create_time_end'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'limit'
			),
			6 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['create_time_begin'])){
				
				$this->create_time_begin = $vals['create_time_begin'];
			}
			
			
			if (isset($vals['create_time_end'])){
				
				$this->create_time_end = $vals['create_time_end'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryInstructionsRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("create_time_begin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time_begin);
				
			}
			
			
			
			
			if ("create_time_end" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time_end);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
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
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		$xfer += $output->writeString($this->warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time_begin');
		$xfer += $output->writeString($this->create_time_begin);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time_end');
		$xfer += $output->writeString($this->create_time_end);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>