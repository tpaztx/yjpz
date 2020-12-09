<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\common;

class ApprovalFlowRequest {
	
	static $_TSPEC;
	public $source = null;
	public $client_id = null;
	public $pda_version = null;
	public $transferring_no = null;
	public $approval_flag = null;
	public $box_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			51 => array(
			'var' => 'source'
			),
			52 => array(
			'var' => 'client_id'
			),
			53 => array(
			'var' => 'pda_version'
			),
			1 => array(
			'var' => 'transferring_no'
			),
			2 => array(
			'var' => 'approval_flag'
			),
			3 => array(
			'var' => 'box_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['pda_version'])){
				
				$this->pda_version = $vals['pda_version'];
			}
			
			
			if (isset($vals['transferring_no'])){
				
				$this->transferring_no = $vals['transferring_no'];
			}
			
			
			if (isset($vals['approval_flag'])){
				
				$this->approval_flag = $vals['approval_flag'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApprovalFlowRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("client_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client_id);
				
			}
			
			
			
			
			if ("pda_version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pda_version);
				
			}
			
			
			
			
			if ("transferring_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_no);
				
			}
			
			
			
			
			if ("approval_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->approval_flag); 
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
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
		
		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeString($this->source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pda_version !== null) {
			
			$xfer += $output->writeFieldBegin('pda_version');
			$xfer += $output->writeString($this->pda_version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transferring_no');
		$xfer += $output->writeString($this->transferring_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('approval_flag');
		$xfer += $output->writeI32($this->approval_flag);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>