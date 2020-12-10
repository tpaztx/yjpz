<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class Attribute {
	
	static $_TSPEC;
	public $attributeid = null;
	public $name = null;
	public $englishname = null;
	public $textlength = null;
	public $foreignname = null;
	public $type = null;
	public $dataType = null;
	public $unit = null;
	public $description = null;
	public $status = null;
	public $createtime = null;
	public $lastupdatetime = null;
	public $aliases = null;
	public $options = null;
	public $tagExts = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeid'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'englishname'
			),
			4 => array(
			'var' => 'textlength'
			),
			5 => array(
			'var' => 'foreignname'
			),
			6 => array(
			'var' => 'type'
			),
			7 => array(
			'var' => 'dataType'
			),
			8 => array(
			'var' => 'unit'
			),
			9 => array(
			'var' => 'description'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'createtime'
			),
			12 => array(
			'var' => 'lastupdatetime'
			),
			13 => array(
			'var' => 'aliases'
			),
			14 => array(
			'var' => 'options'
			),
			15 => array(
			'var' => 'tagExts'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeid'])){
				
				$this->attributeid = $vals['attributeid'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['englishname'])){
				
				$this->englishname = $vals['englishname'];
			}
			
			
			if (isset($vals['textlength'])){
				
				$this->textlength = $vals['textlength'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
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
			
			
			if (isset($vals['aliases'])){
				
				$this->aliases = $vals['aliases'];
			}
			
			
			if (isset($vals['options'])){
				
				$this->options = $vals['options'];
			}
			
			
			if (isset($vals['tagExts'])){
				
				$this->tagExts = $vals['tagExts'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Attribute';
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
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("englishname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->englishname);
				
			}
			
			
			
			
			if ("textlength" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->textlength); 
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
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
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\DataType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->dataType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
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
			
			
			
			
			if ("aliases" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aliases);
				
			}
			
			
			
			
			if ("options" == $schemeField){
				
				$needSkip = false;
				
				$this->options = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\Option();
						$elem0->read($input);
						
						$this->options[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("tagExts" == $schemeField){
				
				$needSkip = false;
				
				$this->tagExts = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\category\service\TagExt();
						$elem1->read($input);
						
						$this->tagExts[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->textlength !== null) {
			
			$xfer += $output->writeFieldBegin('textlength');
			$xfer += $output->writeI32($this->textlength);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			
			$em = new \com\vip\category\service\AttributeType; 
			$output->writeString($em::$__names[$this->type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataType !== null) {
			
			$xfer += $output->writeFieldBegin('dataType');
			
			$em = new \com\vip\category\service\DataType; 
			$output->writeString($em::$__names[$this->dataType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
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
		
		
		if($this->aliases !== null) {
			
			$xfer += $output->writeFieldBegin('aliases');
			$xfer += $output->writeString($this->aliases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->options !== null) {
			
			$xfer += $output->writeFieldBegin('options');
			
			if (!is_array($this->options)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->options as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagExts !== null) {
			
			$xfer += $output->writeFieldBegin('tagExts');
			
			if (!is_array($this->tagExts)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagExts as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>