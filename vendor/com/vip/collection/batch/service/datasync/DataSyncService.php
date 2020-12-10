<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\collection\batch\service\datasync;
interface DataSyncServiceIf{
	
	
	public function getRepaymentDateContractAllocationPlan( $partnerId, $repaymentDate, $page, $limit);
	
	public function healthCheck();
	
}

class _DataSyncServiceClient extends \Osp\Base\OspStub implements \com\vip\collection\batch\service\datasync\DataSyncServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.collection.batch.service.datasync.DataSyncService", "1.0.0");
	}
	
	
	public function getRepaymentDateContractAllocationPlan( $partnerId, $repaymentDate, $page, $limit){
		
		$this->send_getRepaymentDateContractAllocationPlan( $partnerId, $repaymentDate, $page, $limit);
		return $this->recv_getRepaymentDateContractAllocationPlan();
	}
	
	public function send_getRepaymentDateContractAllocationPlan( $partnerId, $repaymentDate, $page, $limit){
		
		$this->initInvocation("getRepaymentDateContractAllocationPlan");
		$args = new \com\vip\collection\batch\service\datasync\DataSyncService_getRepaymentDateContractAllocationPlan_args();
		
		$args->partnerId = $partnerId;
		
		$args->repaymentDate = $repaymentDate;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getRepaymentDateContractAllocationPlan(){
		
		$result = new \com\vip\collection\batch\service\datasync\DataSyncService_getRepaymentDateContractAllocationPlan_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\collection\batch\service\datasync\DataSyncService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\collection\batch\service\datasync\DataSyncService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class DataSyncService_getRepaymentDateContractAllocationPlan_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $repaymentDate = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'repaymentDate'
			),
			3 => array(
			'var' => 'page'
			),
			4 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['repaymentDate'])){
				
				$this->repaymentDate = $vals['repaymentDate'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->partnerId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->repaymentDate);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeString($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('repaymentDate');
		$xfer += $output->writeString($this->repaymentDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DataSyncService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DataSyncService_getRepaymentDateContractAllocationPlan_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\collection\batch\service\datasync\AllocationPlanResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DataSyncService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>