<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\h5\order\vo;

class WpcStoreOrderTrackTimelineVO {
	
	static $_TSPEC;
	public $time = null;
	public $user = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2001 => array(
			'var' => 'time'
			),
			2002 => array(
			'var' => 'user'
			),
			2003 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['time'])){
				
				$this->time = $vals['time'];
			}
			
			
			if (isset($vals['user'])){
				
				$this->user = $vals['user'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcStoreOrderTrackTimelineVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->time);
				
			}
			
			
			
			
			if ("user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->time !== null) {
			
			$xfer += $output->writeFieldBegin('time');
			$xfer += $output->writeString($this->time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user !== null) {
			
			$xfer += $output->writeFieldBegin('user');
			$xfer += $output->writeString($this->user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>