<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class Attribute {
	
	static $_TSPEC;
	public $attriuteId = null;
	public $name = null;
	public $englishname = null;
	public $description = null;
	public $type = null;
	public $dataType = null;
	public $unit = null;
	public $sort = null;
	public $flags = null;
	public $parentAttributeId = null;
	public $options = null;
	public $attributegroup = null;
	public $foreignname = null;
	public $textlength = null;
	public $screeningstatus = null;
	public $starttime = null;
	public $endtime = null;
	public $flag = null;
	public $charactersetid = null;
	public $dependenceStatus = null;
	public $leakageStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attriuteId'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'englishname'
			),
			4 => array(
			'var' => 'description'
			),
			5 => array(
			'var' => 'type'
			),
			6 => array(
			'var' => 'dataType'
			),
			7 => array(
			'var' => 'unit'
			),
			8 => array(
			'var' => 'sort'
			),
			9 => array(
			'var' => 'flags'
			),
			10 => array(
			'var' => 'parentAttributeId'
			),
			11 => array(
			'var' => 'options'
			),
			12 => array(
			'var' => 'attributegroup'
			),
			13 => array(
			'var' => 'foreignname'
			),
			14 => array(
			'var' => 'textlength'
			),
			15 => array(
			'var' => 'screeningstatus'
			),
			16 => array(
			'var' => 'starttime'
			),
			17 => array(
			'var' => 'endtime'
			),
			18 => array(
			'var' => 'flag'
			),
			19 => array(
			'var' => 'charactersetid'
			),
			20 => array(
			'var' => 'dependenceStatus'
			),
			21 => array(
			'var' => 'leakageStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attriuteId'])){
				
				$this->attriuteId = $vals['attriuteId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['englishname'])){
				
				$this->englishname = $vals['englishname'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
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
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['flags'])){
				
				$this->flags = $vals['flags'];
			}
			
			
			if (isset($vals['parentAttributeId'])){
				
				$this->parentAttributeId = $vals['parentAttributeId'];
			}
			
			
			if (isset($vals['options'])){
				
				$this->options = $vals['options'];
			}
			
			
			if (isset($vals['attributegroup'])){
				
				$this->attributegroup = $vals['attributegroup'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['textlength'])){
				
				$this->textlength = $vals['textlength'];
			}
			
			
			if (isset($vals['screeningstatus'])){
				
				$this->screeningstatus = $vals['screeningstatus'];
			}
			
			
			if (isset($vals['starttime'])){
				
				$this->starttime = $vals['starttime'];
			}
			
			
			if (isset($vals['endtime'])){
				
				$this->endtime = $vals['endtime'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['charactersetid'])){
				
				$this->charactersetid = $vals['charactersetid'];
			}
			
			
			if (isset($vals['dependenceStatus'])){
				
				$this->dependenceStatus = $vals['dependenceStatus'];
			}
			
			
			if (isset($vals['leakageStatus'])){
				
				$this->leakageStatus = $vals['leakageStatus'];
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
			
			
			if ("attriuteId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attriuteId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("englishname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->englishname);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\osp\category\api\comm\AttributeType::$__names;
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
				
				$names = \com\vip\osp\category\api\comm\DataType::$__names;
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
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("flags" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->flags); 
				
			}
			
			
			
			
			if ("parentAttributeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->parentAttributeId); 
				
			}
			
			
			
			
			if ("options" == $schemeField){
				
				$needSkip = false;
				
				$this->options = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\osp\category\api\comm\Option();
						$elem0->read($input);
						
						$this->options[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("attributegroup" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributegroup);
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("textlength" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->textlength); 
				
			}
			
			
			
			
			if ("screeningstatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->screeningstatus); 
				
			}
			
			
			
			
			if ("starttime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->starttime); 
				
			}
			
			
			
			
			if ("endtime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endtime); 
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->flag);
				
			}
			
			
			
			
			if ("charactersetid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->charactersetid); 
				
			}
			
			
			
			
			if ("dependenceStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dependenceStatus); 
				
			}
			
			
			
			
			if ("leakageStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leakageStatus); 
				
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
		
		$xfer += $output->writeFieldBegin('attriuteId');
		$xfer += $output->writeI32($this->attriuteId);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			
			$em = new \com\vip\osp\category\api\comm\AttributeType; 
			$output->writeString($em::$__names[$this->type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataType !== null) {
			
			$xfer += $output->writeFieldBegin('dataType');
			
			$em = new \com\vip\osp\category\api\comm\DataType; 
			$output->writeString($em::$__names[$this->dataType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flags !== null) {
			
			$xfer += $output->writeFieldBegin('flags');
			$xfer += $output->writeI64($this->flags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentAttributeId !== null) {
			
			$xfer += $output->writeFieldBegin('parentAttributeId');
			$xfer += $output->writeI32($this->parentAttributeId);
			
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
		
		
		if($this->attributegroup !== null) {
			
			$xfer += $output->writeFieldBegin('attributegroup');
			$xfer += $output->writeString($this->attributegroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->textlength !== null) {
			
			$xfer += $output->writeFieldBegin('textlength');
			$xfer += $output->writeI32($this->textlength);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->screeningstatus !== null) {
			
			$xfer += $output->writeFieldBegin('screeningstatus');
			$xfer += $output->writeI32($this->screeningstatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->starttime !== null) {
			
			$xfer += $output->writeFieldBegin('starttime');
			$xfer += $output->writeI64($this->starttime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endtime !== null) {
			
			$xfer += $output->writeFieldBegin('endtime');
			$xfer += $output->writeI64($this->endtime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flag !== null) {
			
			$xfer += $output->writeFieldBegin('flag');
			$xfer += $output->writeBool($this->flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->charactersetid !== null) {
			
			$xfer += $output->writeFieldBegin('charactersetid');
			$xfer += $output->writeI32($this->charactersetid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dependenceStatus !== null) {
			
			$xfer += $output->writeFieldBegin('dependenceStatus');
			$xfer += $output->writeI32($this->dependenceStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leakageStatus !== null) {
			
			$xfer += $output->writeFieldBegin('leakageStatus');
			$xfer += $output->writeI32($this->leakageStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>