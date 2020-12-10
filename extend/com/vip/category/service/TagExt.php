<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class TagExt {
	
	static $_TSPEC;
	public $tagId = null;
	public $type = null;
	public $name = null;
	public $value = null;
	public $status = null;
	public $createtime = null;
	public $lastupdatetime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagId'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'value'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'createtime'
			),
			7 => array(
			'var' => 'lastupdatetime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagId'])){
				
				$this->tagId = $vals['tagId'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['value'])){
				
				$this->value = $vals['value'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['createtime'])){
				
				$this->createtime = $vals['createtime'];
			}
			
			
			if (isset($vals['lastupdatetime'])){
				
				$this->lastupdatetime = $vals['lastupdatetime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagExt';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagId); 
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->value);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\Status::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->status = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("createtime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createtime); 
				
			}
			
			
			
			
			if ("lastupdatetime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastupdatetime); 
				
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
		
		if($this->tagId !== null) {
			
			$xfer += $output->writeFieldBegin('tagId');
			$xfer += $output->writeI32($this->tagId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeI32($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->value !== null) {
			
			$xfer += $output->writeFieldBegin('value');
			$xfer += $output->writeString($this->value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			$em = new \com\vip\category\service\Status; 
			$output->writeString($em::$__names[$this->status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createtime !== null) {
			
			$xfer += $output->writeFieldBegin('createtime');
			$xfer += $output->writeI64($this->createtime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastupdatetime !== null) {
			
			$xfer += $output->writeFieldBegin('lastupdatetime');
			$xfer += $output->writeI64($this->lastupdatetime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>