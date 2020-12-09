<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;
interface GlVoucherServiceIf{
	
	
	public function getBySrcHeaderId( $srcHeaderId, $sourceName);
	
	public function getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName);
	
	public function healthCheck();
	
	public function insertGlVoucher( $vouchers);
	
}

class _GlVoucherServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\osp\ebs\gl\service\GlVoucherServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.osp.ebs.gl.service.GlVoucherService", "1.0.0");
	}
	
	
	public function getBySrcHeaderId( $srcHeaderId, $sourceName){
		
		$this->send_getBySrcHeaderId( $srcHeaderId, $sourceName);
		return $this->recv_getBySrcHeaderId();
	}
	
	public function send_getBySrcHeaderId( $srcHeaderId, $sourceName){
		
		$this->initInvocation("getBySrcHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getBySrcHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName){
		
		$this->send_getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName);
		return $this->recv_getStatusBySrcHeaderId();
	}
	
	public function send_getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName){
		
		$this->initInvocation("getStatusBySrcHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getStatusBySrcHeaderId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->operationCode = $operationCode;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getStatusBySrcHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getStatusBySrcHeaderId_result();
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
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function insertGlVoucher( $vouchers){
		
		$this->send_insertGlVoucher( $vouchers);
		return $this->recv_insertGlVoucher();
	}
	
	public function send_insertGlVoucher( $vouchers){
		
		$this->initInvocation("insertGlVoucher");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_insertGlVoucher_args();
		
		$args->vouchers = $vouchers;
		
		$this->send_base($args);
	}
	
	public function recv_insertGlVoucher(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_insertGlVoucher_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class GlVoucherService_getBySrcHeaderId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getStatusBySrcHeaderId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $operationCode = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'operationCode'
			),
			3 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['operationCode'])){
				
				$this->operationCode = $vals['operationCode'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operationCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operationCode');
		$xfer += $output->writeString($this->operationCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_healthCheck_args {
	
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




class GlVoucherService_insertGlVoucher_args {
	
	static $_TSPEC;
	public $vouchers = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vouchers'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vouchers'])){
				
				$this->vouchers = $vals['vouchers'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->vouchers = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
					$elem0->read($input);
					
					$this->vouchers[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vouchers');
		
		if (!is_array($this->vouchers)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vouchers as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getBySrcHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlJeHeadersModel();
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




class GlVoucherService_getStatusBySrcHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
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




class GlVoucherService_healthCheck_result {
	
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




class GlVoucherService_insertGlVoucher_result {
	
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
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = '';
					$input->readString($val0);
					
					$this->success[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>