<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class RentOrderHeader {
	
	static $_TSPEC;
	public $doc_no = null;
	public $doc_type = null;
	public $manual_code = null;
	public $plaza_code = null;
	public $origin = null;
	public $flow_status = null;
	public $sale_date = null;
	public $sale_sum = null;
	public $note = null;
	public $add_by = null;
	public $add_time = null;
	public $approve_by = null;
	public $approve_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'doc_no'
			),
			2 => array(
			'var' => 'doc_type'
			),
			3 => array(
			'var' => 'manual_code'
			),
			4 => array(
			'var' => 'plaza_code'
			),
			5 => array(
			'var' => 'origin'
			),
			6 => array(
			'var' => 'flow_status'
			),
			7 => array(
			'var' => 'sale_date'
			),
			8 => array(
			'var' => 'sale_sum'
			),
			9 => array(
			'var' => 'note'
			),
			10 => array(
			'var' => 'add_by'
			),
			11 => array(
			'var' => 'add_time'
			),
			12 => array(
			'var' => 'approve_by'
			),
			13 => array(
			'var' => 'approve_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['doc_no'])){
				
				$this->doc_no = $vals['doc_no'];
			}
			
			
			if (isset($vals['doc_type'])){
				
				$this->doc_type = $vals['doc_type'];
			}
			
			
			if (isset($vals['manual_code'])){
				
				$this->manual_code = $vals['manual_code'];
			}
			
			
			if (isset($vals['plaza_code'])){
				
				$this->plaza_code = $vals['plaza_code'];
			}
			
			
			if (isset($vals['origin'])){
				
				$this->origin = $vals['origin'];
			}
			
			
			if (isset($vals['flow_status'])){
				
				$this->flow_status = $vals['flow_status'];
			}
			
			
			if (isset($vals['sale_date'])){
				
				$this->sale_date = $vals['sale_date'];
			}
			
			
			if (isset($vals['sale_sum'])){
				
				$this->sale_sum = $vals['sale_sum'];
			}
			
			
			if (isset($vals['note'])){
				
				$this->note = $vals['note'];
			}
			
			
			if (isset($vals['add_by'])){
				
				$this->add_by = $vals['add_by'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['approve_by'])){
				
				$this->approve_by = $vals['approve_by'];
			}
			
			
			if (isset($vals['approve_time'])){
				
				$this->approve_time = $vals['approve_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RentOrderHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("doc_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->doc_no);
				
			}
			
			
			
			
			if ("doc_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->doc_type);
				
			}
			
			
			
			
			if ("manual_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->manual_code);
				
			}
			
			
			
			
			if ("plaza_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plaza_code);
				
			}
			
			
			
			
			if ("origin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin);
				
			}
			
			
			
			
			if ("flow_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->flow_status);
				
			}
			
			
			
			
			if ("sale_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_date);
				
			}
			
			
			
			
			if ("sale_sum" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sale_sum);
				
			}
			
			
			
			
			if ("note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->note);
				
			}
			
			
			
			
			if ("add_by" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_by);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_time);
				
			}
			
			
			
			
			if ("approve_by" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approve_by);
				
			}
			
			
			
			
			if ("approve_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approve_time);
				
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
		
		$xfer += $output->writeFieldBegin('doc_no');
		$xfer += $output->writeString($this->doc_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('doc_type');
		$xfer += $output->writeString($this->doc_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->manual_code !== null) {
			
			$xfer += $output->writeFieldBegin('manual_code');
			$xfer += $output->writeString($this->manual_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('plaza_code');
		$xfer += $output->writeString($this->plaza_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('origin');
		$xfer += $output->writeString($this->origin);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('flow_status');
		$xfer += $output->writeString($this->flow_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_date');
		$xfer += $output->writeString($this->sale_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_sum');
		$xfer += $output->writeDouble($this->sale_sum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->note !== null) {
			
			$xfer += $output->writeFieldBegin('note');
			$xfer += $output->writeString($this->note);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('add_by');
		$xfer += $output->writeString($this->add_by);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('add_time');
		$xfer += $output->writeString($this->add_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('approve_by');
		$xfer += $output->writeString($this->approve_by);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('approve_time');
		$xfer += $output->writeString($this->approve_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>