<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderAttachment {
	
	static $_TSPEC;
	public $wo_no = null;
	public $creator = null;
	public $create_time = null;
	public $file_name = null;
	public $file_path = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'wo_no'
			),
			3 => array(
			'var' => 'creator'
			),
			4 => array(
			'var' => 'create_time'
			),
			5 => array(
			'var' => 'file_name'
			),
			6 => array(
			'var' => 'file_path'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['creator'])){
				
				$this->creator = $vals['creator'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['file_name'])){
				
				$this->file_name = $vals['file_name'];
			}
			
			
			if (isset($vals['file_path'])){
				
				$this->file_path = $vals['file_path'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderAttachment';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wo_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_no);
				
			}
			
			
			
			
			if ("creator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creator);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("file_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_name);
				
			}
			
			
			
			
			if ("file_path" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_path);
				
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
		
		if($this->wo_no !== null) {
			
			$xfer += $output->writeFieldBegin('wo_no');
			$xfer += $output->writeString($this->wo_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creator !== null) {
			
			$xfer += $output->writeFieldBegin('creator');
			$xfer += $output->writeString($this->creator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->file_name !== null) {
			
			$xfer += $output->writeFieldBegin('file_name');
			$xfer += $output->writeString($this->file_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->file_path !== null) {
			
			$xfer += $output->writeFieldBegin('file_path');
			$xfer += $output->writeString($this->file_path);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>