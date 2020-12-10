<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class MallStoreQueryReq {
	
	static $_TSPEC;
	public $mall_code = null;
	public $offline_store_id = null;
	public $offline_store_name = null;
	public $pagination = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mall_code'
			),
			2 => array(
			'var' => 'offline_store_id'
			),
			3 => array(
			'var' => 'offline_store_name'
			),
			4 => array(
			'var' => 'pagination'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['offline_store_id'])){
				
				$this->offline_store_id = $vals['offline_store_id'];
			}
			
			
			if (isset($vals['offline_store_name'])){
				
				$this->offline_store_name = $vals['offline_store_name'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MallStoreQueryReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("offline_store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_id);
				
			}
			
			
			
			
			if ("offline_store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_name);
				
			}
			
			
			
			
			if ("pagination" == $schemeField){
				
				$needSkip = false;
				
				$this->pagination = new \vipapis\shanshan\outlet\Pagination();
				$this->pagination->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('mall_code');
		$xfer += $output->writeString($this->mall_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->offline_store_id !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_id');
			$xfer += $output->writeString($this->offline_store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offline_store_name !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_name');
			$xfer += $output->writeString($this->offline_store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pagination');
		
		if (!is_object($this->pagination)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pagination->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>