<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;
interface BipDiagramServiceIf{
	
	
	public function cronExportData();
	
	public function exportDiagramData2Csv(\com\vip\bip\report\service\ExportDiagramRequest $exportDiagramRequest);
	
	public function healthCheck();
	
	public function queryDiagram(\com\vip\bip\report\service\DiagramRequest $diagramRequest);
	
}

class _BipDiagramServiceClient extends \Osp\Base\OspStub implements \com\vip\bip\report\service\BipDiagramServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.bip.report.service.BipDiagramService", "1.0.0");
	}
	
	
	public function cronExportData(){
		
		$this->send_cronExportData();
		return $this->recv_cronExportData();
	}
	
	public function send_cronExportData(){
		
		$this->initInvocation("cronExportData");
		$args = new \com\vip\bip\report\service\BipDiagramService_cronExportData_args();
		
		$this->send_base($args);
	}
	
	public function recv_cronExportData(){
		
		$result = new \com\vip\bip\report\service\BipDiagramService_cronExportData_result();
		$this->receive_base($result);
		
	}
	
	
	public function exportDiagramData2Csv(\com\vip\bip\report\service\ExportDiagramRequest $exportDiagramRequest){
		
		$this->send_exportDiagramData2Csv( $exportDiagramRequest);
		return $this->recv_exportDiagramData2Csv();
	}
	
	public function send_exportDiagramData2Csv(\com\vip\bip\report\service\ExportDiagramRequest $exportDiagramRequest){
		
		$this->initInvocation("exportDiagramData2Csv");
		$args = new \com\vip\bip\report\service\BipDiagramService_exportDiagramData2Csv_args();
		
		$args->exportDiagramRequest = $exportDiagramRequest;
		
		$this->send_base($args);
	}
	
	public function recv_exportDiagramData2Csv(){
		
		$result = new \com\vip\bip\report\service\BipDiagramService_exportDiagramData2Csv_result();
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
		$args = new \com\vip\bip\report\service\BipDiagramService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\bip\report\service\BipDiagramService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryDiagram(\com\vip\bip\report\service\DiagramRequest $diagramRequest){
		
		$this->send_queryDiagram( $diagramRequest);
		return $this->recv_queryDiagram();
	}
	
	public function send_queryDiagram(\com\vip\bip\report\service\DiagramRequest $diagramRequest){
		
		$this->initInvocation("queryDiagram");
		$args = new \com\vip\bip\report\service\BipDiagramService_queryDiagram_args();
		
		$args->diagramRequest = $diagramRequest;
		
		$this->send_base($args);
	}
	
	public function recv_queryDiagram(){
		
		$result = new \com\vip\bip\report\service\BipDiagramService_queryDiagram_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class BipDiagramService_cronExportData_args {
	
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




class BipDiagramService_exportDiagramData2Csv_args {
	
	static $_TSPEC;
	public $exportDiagramRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'exportDiagramRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['exportDiagramRequest'])){
				
				$this->exportDiagramRequest = $vals['exportDiagramRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->exportDiagramRequest = new \com\vip\bip\report\service\ExportDiagramRequest();
			$this->exportDiagramRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->exportDiagramRequest !== null) {
			
			$xfer += $output->writeFieldBegin('exportDiagramRequest');
			
			if (!is_object($this->exportDiagramRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->exportDiagramRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class BipDiagramService_healthCheck_args {
	
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




class BipDiagramService_queryDiagram_args {
	
	static $_TSPEC;
	public $diagramRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'diagramRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['diagramRequest'])){
				
				$this->diagramRequest = $vals['diagramRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->diagramRequest = new \com\vip\bip\report\service\DiagramRequest();
			$this->diagramRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->diagramRequest !== null) {
			
			$xfer += $output->writeFieldBegin('diagramRequest');
			
			if (!is_object($this->diagramRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->diagramRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class BipDiagramService_cronExportData_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class BipDiagramService_exportDiagramData2Csv_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class BipDiagramService_healthCheck_result {
	
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




class BipDiagramService_queryDiagram_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>