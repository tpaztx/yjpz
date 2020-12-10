<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\common;

class TimeRange {
	
	static $_TSPEC;
	public $type = null;
	public $start_time = null;
	public $end_time = null;
	public $start_date = null;
	public $end_date = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			80 => array(
			'var' => 'type'
			),
			81 => array(
			'var' => 'start_time'
			),
			82 => array(
			'var' => 'end_time'
			),
			83 => array(
			'var' => 'start_date'
			),
			84 => array(
			'var' => 'end_date'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['start_date'])){
				
				$this->start_date = $vals['start_date'];
			}
			
			
			if (isset($vals['end_date'])){
				
				$this->end_date = $vals['end_date'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TimeRange';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->type); 
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_time);
				
			}
			
			
			
			
			if ("start_date" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_date);
				
			}
			
			
			
			
			if ("end_date" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_date);
				
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
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeByte($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('start_time');
		$xfer += $output->writeString($this->start_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_time');
		$xfer += $output->writeString($this->end_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->start_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_date');
			$xfer += $output->writeI64($this->start_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_date');
			$xfer += $output->writeI64($this->end_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>