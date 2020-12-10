<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class ReplyWorkOrderRequest {
	
	static $_TSPEC;
	public $wo_no = null;
	public $scene_code = null;
	public $type = null;
	public $content = null;
	public $work_attachments = null;
	public $additions = null;
	public $assistant_id = null;
	public $assistant_name = null;
	public $vendor_id = null;
	public $warehouse_code = null;
	public $is_our_duty = null;
	public $verification_results = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wo_no'
			),
			2 => array(
			'var' => 'scene_code'
			),
			3 => array(
			'var' => 'type'
			),
			4 => array(
			'var' => 'content'
			),
			7 => array(
			'var' => 'work_attachments'
			),
			8 => array(
			'var' => 'additions'
			),
			9 => array(
			'var' => 'assistant_id'
			),
			10 => array(
			'var' => 'assistant_name'
			),
			11 => array(
			'var' => 'vendor_id'
			),
			12 => array(
			'var' => 'warehouse_code'
			),
			13 => array(
			'var' => 'is_our_duty'
			),
			14 => array(
			'var' => 'verification_results'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['scene_code'])){
				
				$this->scene_code = $vals['scene_code'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['work_attachments'])){
				
				$this->work_attachments = $vals['work_attachments'];
			}
			
			
			if (isset($vals['additions'])){
				
				$this->additions = $vals['additions'];
			}
			
			
			if (isset($vals['assistant_id'])){
				
				$this->assistant_id = $vals['assistant_id'];
			}
			
			
			if (isset($vals['assistant_name'])){
				
				$this->assistant_name = $vals['assistant_name'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['is_our_duty'])){
				
				$this->is_our_duty = $vals['is_our_duty'];
			}
			
			
			if (isset($vals['verification_results'])){
				
				$this->verification_results = $vals['verification_results'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReplyWorkOrderRequest';
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
			
			
			
			
			if ("scene_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scene_code);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("work_attachments" == $schemeField){
				
				$needSkip = false;
				
				$this->work_attachments = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vsl\WorkOrderInputAttachment();
						$elem0->read($input);
						
						$this->work_attachments[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("additions" == $schemeField){
				
				$needSkip = false;
				
				$this->additions = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\vsl\WorkOrderInputAddition();
						$elem1->read($input);
						
						$this->additions[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("assistant_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assistant_id);
				
			}
			
			
			
			
			if ("assistant_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assistant_name);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("is_our_duty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_our_duty); 
				
			}
			
			
			
			
			if ("verification_results" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->verification_results);
				
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
		
		$xfer += $output->writeFieldBegin('wo_no');
		$xfer += $output->writeString($this->wo_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scene_code');
		$xfer += $output->writeString($this->scene_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('content');
		$xfer += $output->writeString($this->content);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->work_attachments !== null) {
			
			$xfer += $output->writeFieldBegin('work_attachments');
			
			if (!is_array($this->work_attachments)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->work_attachments as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->additions !== null) {
			
			$xfer += $output->writeFieldBegin('additions');
			
			if (!is_array($this->additions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->additions as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assistant_id !== null) {
			
			$xfer += $output->writeFieldBegin('assistant_id');
			$xfer += $output->writeString($this->assistant_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assistant_name !== null) {
			
			$xfer += $output->writeFieldBegin('assistant_name');
			$xfer += $output->writeString($this->assistant_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		$xfer += $output->writeString($this->warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_our_duty !== null) {
			
			$xfer += $output->writeFieldBegin('is_our_duty');
			$xfer += $output->writeI32($this->is_our_duty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->verification_results !== null) {
			
			$xfer += $output->writeFieldBegin('verification_results');
			$xfer += $output->writeString($this->verification_results);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>