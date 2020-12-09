<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class RelyContent {
	
	static $_TSPEC;
	public $work_order_no = null;
	public $content = null;
	public $is_complain = null;
	public $type = null;
	public $is_compromise = null;
	public $duty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'work_order_no'
			),
			2 => array(
			'var' => 'content'
			),
			10 => array(
			'var' => 'is_complain'
			),
			11 => array(
			'var' => 'type'
			),
			12 => array(
			'var' => 'is_compromise'
			),
			13 => array(
			'var' => 'duty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['work_order_no'])){
				
				$this->work_order_no = $vals['work_order_no'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['is_complain'])){
				
				$this->is_complain = $vals['is_complain'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['is_compromise'])){
				
				$this->is_compromise = $vals['is_compromise'];
			}
			
			
			if (isset($vals['duty'])){
				
				$this->duty = $vals['duty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RelyContent';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("work_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_order_no);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("is_complain" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_complain);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("is_compromise" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_compromise);
				
			}
			
			
			
			
			if ("duty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->duty);
				
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
		
		$xfer += $output->writeFieldBegin('work_order_no');
		$xfer += $output->writeString($this->work_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('content');
		$xfer += $output->writeString($this->content);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_complain !== null) {
			
			$xfer += $output->writeFieldBegin('is_complain');
			$xfer += $output->writeString($this->is_complain);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_compromise !== null) {
			
			$xfer += $output->writeFieldBegin('is_compromise');
			$xfer += $output->writeString($this->is_compromise);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->duty !== null) {
			
			$xfer += $output->writeFieldBegin('duty');
			$xfer += $output->writeString($this->duty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>