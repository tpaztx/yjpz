<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\log;

class UploadData {
	
	static $_TSPEC;
	public $data = null;
	public $data_type = null;
	public $timestamp = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'data'
			),
			2 => array(
			'var' => 'data_type'
			),
			3 => array(
			'var' => 'timestamp'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
			if (isset($vals['data_type'])){
				
				$this->data_type = $vals['data_type'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data);
				
			}
			
			
			
			
			if ("data_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_type);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->timestamp); 
				
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
		
		$xfer += $output->writeFieldBegin('data');
		$xfer += $output->writeString($this->data);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('data_type');
		$xfer += $output->writeString($this->data_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('timestamp');
		$xfer += $output->writeI64($this->timestamp);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>