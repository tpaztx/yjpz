<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class GetReturnItemRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $return_sn = null;
	public $out_time_start = null;
	public $out_time_end = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'return_sn'
			),
			3 => array(
			'var' => 'out_time_start'
			),
			4 => array(
			'var' => 'out_time_end'
			),
			5 => array(
			'var' => 'page'
			),
			6 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['out_time_start'])){
				
				$this->out_time_start = $vals['out_time_start'];
			}
			
			
			if (isset($vals['out_time_end'])){
				
				$this->out_time_end = $vals['out_time_end'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetReturnItemRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("out_time_start" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time_start);
				
			}
			
			
			
			
			if ("out_time_end" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time_end);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->out_time_start !== null) {
			
			$xfer += $output->writeFieldBegin('out_time_start');
			$xfer += $output->writeString($this->out_time_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('out_time_end');
			$xfer += $output->writeString($this->out_time_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>