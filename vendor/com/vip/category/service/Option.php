<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class Option {
	
	static $_TSPEC;
	public $attributeid = null;
	public $optionid = null;
	public $name = null;
	public $englishname = null;
	public $foreignname = null;
	public $externaldata = null;
	public $type = null;
	public $description = null;
	public $hierarchyGroup = null;
	public $status = null;
	public $sort = null;
	public $remarks = null;
	public $createtime = null;
	public $lastupdatetime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeid'
			),
			2 => array(
			'var' => 'optionid'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'englishname'
			),
			5 => array(
			'var' => 'foreignname'
			),
			6 => array(
			'var' => 'externaldata'
			),
			7 => array(
			'var' => 'type'
			),
			8 => array(
			'var' => 'description'
			),
			9 => array(
			'var' => 'hierarchyGroup'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'sort'
			),
			12 => array(
			'var' => 'remarks'
			),
			13 => array(
			'var' => 'createtime'
			),
			14 => array(
			'var' => 'lastupdatetime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeid'])){
				
				$this->attributeid = $vals['attributeid'];
			}
			
			
			if (isset($vals['optionid'])){
				
				$this->optionid = $vals['optionid'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['englishname'])){
				
				$this->englishname = $vals['englishname'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['externaldata'])){
				
				$this->externaldata = $vals['externaldata'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['hierarchyGroup'])){
				
				$this->hierarchyGroup = $vals['hierarchyGroup'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['remarks'])){
				
				$this->remarks = $vals['remarks'];
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
		
		return 'Option';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attributeid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attributeid); 
				
			}
			
			
			
			
			if ("optionid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionid); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("englishname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->englishname);
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("externaldata" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externaldata);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\AttributeType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("hierarchyGroup" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hierarchyGroup);
				
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
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("remarks" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remarks);
				
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
		
		if($this->attributeid !== null) {
			
			$xfer += $output->writeFieldBegin('attributeid');
			$xfer += $output->writeI32($this->attributeid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionid !== null) {
			
			$xfer += $output->writeFieldBegin('optionid');
			$xfer += $output->writeI32($this->optionid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->englishname !== null) {
			
			$xfer += $output->writeFieldBegin('englishname');
			$xfer += $output->writeString($this->englishname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externaldata !== null) {
			
			$xfer += $output->writeFieldBegin('externaldata');
			$xfer += $output->writeString($this->externaldata);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			
			$em = new \com\vip\category\service\AttributeType; 
			$output->writeString($em::$__names[$this->type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hierarchyGroup !== null) {
			
			$xfer += $output->writeFieldBegin('hierarchyGroup');
			$xfer += $output->writeString($this->hierarchyGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			$em = new \com\vip\category\service\Status; 
			$output->writeString($em::$__names[$this->status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remarks !== null) {
			
			$xfer += $output->writeFieldBegin('remarks');
			$xfer += $output->writeString($this->remarks);
			
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