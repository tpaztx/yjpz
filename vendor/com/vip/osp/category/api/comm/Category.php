<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class Category {
	
	static $_TSPEC;
	public $categoryId = null;
	public $name = null;
	public $englishname = null;
	public $description = null;
	public $type = null;
	public $keywords = null;
	public $flags = null;
	public $hierarchyId = null;
	public $lastUpdateTime = null;
	public $relatedCategories = null;
	public $children = null;
	public $mapping = null;
	public $majorParentCategoryid = null;
	public $salveParentCategoryids = null;
	public $attributes = null;
	public $foreignname = null;
	public $image = null;
	public $linkaddress = null;
	public $flag = null;
	public $maxsalenum = null;
	public $minisalenum = null;
	public $showType = null;
	public $timeLineId = null;
	public $brands = null;
	public $subCatAttr = null;
	public $tagFilter = null;
	public $status = null;
	public $majorParents = null;
	public $salveParents = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
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
			'var' => 'keywords'
			),
			7 => array(
			'var' => 'flags'
			),
			8 => array(
			'var' => 'hierarchyId'
			),
			9 => array(
			'var' => 'lastUpdateTime'
			),
			10 => array(
			'var' => 'relatedCategories'
			),
			11 => array(
			'var' => 'children'
			),
			12 => array(
			'var' => 'mapping'
			),
			13 => array(
			'var' => 'majorParentCategoryid'
			),
			14 => array(
			'var' => 'salveParentCategoryids'
			),
			15 => array(
			'var' => 'attributes'
			),
			16 => array(
			'var' => 'foreignname'
			),
			17 => array(
			'var' => 'image'
			),
			18 => array(
			'var' => 'linkaddress'
			),
			19 => array(
			'var' => 'flag'
			),
			20 => array(
			'var' => 'maxsalenum'
			),
			21 => array(
			'var' => 'minisalenum'
			),
			22 => array(
			'var' => 'showType'
			),
			23 => array(
			'var' => 'timeLineId'
			),
			24 => array(
			'var' => 'brands'
			),
			25 => array(
			'var' => 'subCatAttr'
			),
			26 => array(
			'var' => 'tagFilter'
			),
			27 => array(
			'var' => 'status'
			),
			28 => array(
			'var' => 'majorParents'
			),
			29 => array(
			'var' => 'salveParents'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
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
			
			
			if (isset($vals['keywords'])){
				
				$this->keywords = $vals['keywords'];
			}
			
			
			if (isset($vals['flags'])){
				
				$this->flags = $vals['flags'];
			}
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['lastUpdateTime'])){
				
				$this->lastUpdateTime = $vals['lastUpdateTime'];
			}
			
			
			if (isset($vals['relatedCategories'])){
				
				$this->relatedCategories = $vals['relatedCategories'];
			}
			
			
			if (isset($vals['children'])){
				
				$this->children = $vals['children'];
			}
			
			
			if (isset($vals['mapping'])){
				
				$this->mapping = $vals['mapping'];
			}
			
			
			if (isset($vals['majorParentCategoryid'])){
				
				$this->majorParentCategoryid = $vals['majorParentCategoryid'];
			}
			
			
			if (isset($vals['salveParentCategoryids'])){
				
				$this->salveParentCategoryids = $vals['salveParentCategoryids'];
			}
			
			
			if (isset($vals['attributes'])){
				
				$this->attributes = $vals['attributes'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['image'])){
				
				$this->image = $vals['image'];
			}
			
			
			if (isset($vals['linkaddress'])){
				
				$this->linkaddress = $vals['linkaddress'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['maxsalenum'])){
				
				$this->maxsalenum = $vals['maxsalenum'];
			}
			
			
			if (isset($vals['minisalenum'])){
				
				$this->minisalenum = $vals['minisalenum'];
			}
			
			
			if (isset($vals['showType'])){
				
				$this->showType = $vals['showType'];
			}
			
			
			if (isset($vals['timeLineId'])){
				
				$this->timeLineId = $vals['timeLineId'];
			}
			
			
			if (isset($vals['brands'])){
				
				$this->brands = $vals['brands'];
			}
			
			
			if (isset($vals['subCatAttr'])){
				
				$this->subCatAttr = $vals['subCatAttr'];
			}
			
			
			if (isset($vals['tagFilter'])){
				
				$this->tagFilter = $vals['tagFilter'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['majorParents'])){
				
				$this->majorParents = $vals['majorParents'];
			}
			
			
			if (isset($vals['salveParents'])){
				
				$this->salveParents = $vals['salveParents'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Category';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
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
				
				$names = \com\vip\osp\category\api\comm\CategoryType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("keywords" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keywords);
				
			}
			
			
			
			
			if ("flags" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->flags); 
				
			}
			
			
			
			
			if ("hierarchyId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hierarchyId); 
				
			}
			
			
			
			
			if ("lastUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateTime); 
				
			}
			
			
			
			
			if ("relatedCategories" == $schemeField){
				
				$needSkip = false;
				
				$this->relatedCategories = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->relatedCategories[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("children" == $schemeField){
				
				$needSkip = false;
				
				$this->children = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\osp\category\api\comm\Category();
						$elem1->read($input);
						
						$this->children[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("mapping" == $schemeField){
				
				$needSkip = false;
				
				$this->mapping = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\osp\category\api\comm\CategoryMapping();
						$elem2->read($input);
						
						$this->mapping[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("majorParentCategoryid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->majorParentCategoryid); 
				
			}
			
			
			
			
			if ("salveParentCategoryids" == $schemeField){
				
				$needSkip = false;
				
				$this->salveParentCategoryids = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->salveParentCategoryids[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("attributes" == $schemeField){
				
				$needSkip = false;
				
				$this->attributes = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\osp\category\api\comm\Attribute();
						$elem4->read($input);
						
						$this->attributes[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("image" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image);
				
			}
			
			
			
			
			if ("linkaddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkaddress);
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->flag); 
				
			}
			
			
			
			
			if ("maxsalenum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxsalenum); 
				
			}
			
			
			
			
			if ("minisalenum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->minisalenum); 
				
			}
			
			
			
			
			if ("showType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->showType); 
				
			}
			
			
			
			
			if ("timeLineId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->timeLineId); 
				
			}
			
			
			
			
			if ("brands" == $schemeField){
				
				$needSkip = false;
				
				$this->brands = new \com\vip\osp\category\api\comm\Brands();
				$this->brands->read($input);
				
			}
			
			
			
			
			if ("subCatAttr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCatAttr);
				
			}
			
			
			
			
			if ("tagFilter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagFilter);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("majorParents" == $schemeField){
				
				$needSkip = false;
				
				$this->majorParents = new \com\vip\osp\category\api\comm\Parents();
				$this->majorParents->read($input);
				
			}
			
			
			
			
			if ("salveParents" == $schemeField){
				
				$needSkip = false;
				
				$this->salveParents = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \com\vip\osp\category\api\comm\Parents();
						$elem5->read($input);
						
						$this->salveParents[$_size5++] = $elem5;
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
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldBegin('type');
		
		$em = new \com\vip\osp\category\api\comm\CategoryType; 
		$output->writeString($em::$__names[$this->type]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->keywords !== null) {
			
			$xfer += $output->writeFieldBegin('keywords');
			$xfer += $output->writeString($this->keywords);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flags !== null) {
			
			$xfer += $output->writeFieldBegin('flags');
			$xfer += $output->writeI64($this->flags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lastUpdateTime');
		$xfer += $output->writeI64($this->lastUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->relatedCategories !== null) {
			
			$xfer += $output->writeFieldBegin('relatedCategories');
			
			if (!is_array($this->relatedCategories)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->relatedCategories as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->children !== null) {
			
			$xfer += $output->writeFieldBegin('children');
			
			if (!is_array($this->children)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->children as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mapping !== null) {
			
			$xfer += $output->writeFieldBegin('mapping');
			
			if (!is_array($this->mapping)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mapping as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->majorParentCategoryid !== null) {
			
			$xfer += $output->writeFieldBegin('majorParentCategoryid');
			$xfer += $output->writeI32($this->majorParentCategoryid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salveParentCategoryids !== null) {
			
			$xfer += $output->writeFieldBegin('salveParentCategoryids');
			
			if (!is_array($this->salveParentCategoryids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->salveParentCategoryids as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributes !== null) {
			
			$xfer += $output->writeFieldBegin('attributes');
			
			if (!is_array($this->attributes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attributes as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image !== null) {
			
			$xfer += $output->writeFieldBegin('image');
			$xfer += $output->writeString($this->image);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkaddress !== null) {
			
			$xfer += $output->writeFieldBegin('linkaddress');
			$xfer += $output->writeString($this->linkaddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flag !== null) {
			
			$xfer += $output->writeFieldBegin('flag');
			$xfer += $output->writeI32($this->flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxsalenum !== null) {
			
			$xfer += $output->writeFieldBegin('maxsalenum');
			$xfer += $output->writeI32($this->maxsalenum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->minisalenum !== null) {
			
			$xfer += $output->writeFieldBegin('minisalenum');
			$xfer += $output->writeI32($this->minisalenum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showType !== null) {
			
			$xfer += $output->writeFieldBegin('showType');
			$xfer += $output->writeI32($this->showType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeLineId !== null) {
			
			$xfer += $output->writeFieldBegin('timeLineId');
			$xfer += $output->writeI32($this->timeLineId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brands !== null) {
			
			$xfer += $output->writeFieldBegin('brands');
			
			if (!is_object($this->brands)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->brands->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subCatAttr !== null) {
			
			$xfer += $output->writeFieldBegin('subCatAttr');
			$xfer += $output->writeString($this->subCatAttr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagFilter !== null) {
			
			$xfer += $output->writeFieldBegin('tagFilter');
			$xfer += $output->writeString($this->tagFilter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->majorParents !== null) {
			
			$xfer += $output->writeFieldBegin('majorParents');
			
			if (!is_object($this->majorParents)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->majorParents->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salveParents !== null) {
			
			$xfer += $output->writeFieldBegin('salveParents');
			
			if (!is_array($this->salveParents)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->salveParents as $iter0){
				
				
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