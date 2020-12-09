<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class CanInvoicingByGroupResponseModel {
	
	static $_TSPEC;
	public $restulMesg = null;
	public $canInvoicingGroupResModelList = null;
	public $canInvoicingSummaryResModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'restulMesg'
			),
			2 => array(
			'var' => 'canInvoicingGroupResModelList'
			),
			3 => array(
			'var' => 'canInvoicingSummaryResModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['restulMesg'])){
				
				$this->restulMesg = $vals['restulMesg'];
			}
			
			
			if (isset($vals['canInvoicingGroupResModelList'])){
				
				$this->canInvoicingGroupResModelList = $vals['canInvoicingGroupResModelList'];
			}
			
			
			if (isset($vals['canInvoicingSummaryResModel'])){
				
				$this->canInvoicingSummaryResModel = $vals['canInvoicingSummaryResModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CanInvoicingByGroupResponseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("restulMesg" == $schemeField){
				
				$needSkip = false;
				
				$this->restulMesg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->restulMesg->read($input);
				
			}
			
			
			
			
			if ("canInvoicingGroupResModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->canInvoicingGroupResModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vei\service\CanInvoicingGroupResultModel();
						$elem0->read($input);
						
						$this->canInvoicingGroupResModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("canInvoicingSummaryResModel" == $schemeField){
				
				$needSkip = false;
				
				$this->canInvoicingSummaryResModel = new \com\vip\fcs\vei\service\CanInvoicingGroupResultModel();
				$this->canInvoicingSummaryResModel->read($input);
				
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
		
		if($this->restulMesg !== null) {
			
			$xfer += $output->writeFieldBegin('restulMesg');
			
			if (!is_object($this->restulMesg)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->restulMesg->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canInvoicingGroupResModelList !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingGroupResModelList');
			
			if (!is_array($this->canInvoicingGroupResModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->canInvoicingGroupResModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canInvoicingSummaryResModel !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingSummaryResModel');
			
			if (!is_object($this->canInvoicingSummaryResModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->canInvoicingSummaryResModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>