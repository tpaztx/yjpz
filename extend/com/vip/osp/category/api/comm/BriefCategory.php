<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class BriefCategory {
	
	static $_TSPEC;
	public $categoryId = null;
	public $name = null;
	public $type = null;
	public $mapping = null;
	public $children = null;
	public $majorParentCategoryid = null;
	public $salveParentCategoryids = null;
	public $image = null;
	public $linkaddress = null;
	public $flag = null;
	public $showType = null;
	public $timeLineId = null;
	public $subCatAttr = null;
	public $attributeIds = null;
	public $tags = null;
	public $specialAttribute = null;
	public $brandList = null;
	public $hierarchyId = null;
	public $tagFilter = null;
	public $status = null;
	public $majorParents = null;
	public $salveParents = null;
	public $keywords = null;
	public $ptpTagFilter = null;
	public $ptpTagInfoList = null;
	
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
			'var' => 'type'
			),
			4 => array(
			'var' => 'mapping'
			),
			5 => array(
			'var' => 'children'
			),
			6 => array(
			'var' => 'majorParentCategoryid'
			),
			7 => array(
			'var' => 'salveParentCategoryids'
			),
			8 => array(
			'var' => 'image'
			),
			9 => array(
			'var' => 'linkaddress'
			),
			10 => array(
			'var' => 'flag'
			),
			11 => array(
			'var' => 'showType'
			),
			12 => array(
			'var' => 'timeLineId'
			),
			13 => array(
			'var' => 'subCatAttr'
			),
			14 => array(
			'var' => 'attributeIds'
			),
			15 => array(
			'var' => 'tags'
			),
			16 => array(
			'var' => 'specialAttribute'
			),
			17 => array(
			'var' => 'brandList'
			),
			18 => array(
			'var' => 'hierarchyId'
			),
			19 => array(
			'var' => 'tagFilter'
			),
			20 => array(
			'var' => 'status'
			),
			21 => array(
			'var' => 'majorParents'
			),
			22 => array(
			'var' => 'salveParents'
			),
			23 => array(
			'var' => 'keywords'
			),
			24 => array(
			'var' => 'ptpTagFilter'
			),
			25 => array(
			'var' => 'ptpTagInfoList'
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
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['mapping'])){
				
				$this->mapping = $vals['mapping'];
			}
			
			
			if (isset($vals['children'])){
				
				$this->children = $vals['children'];
			}
			
			
			if (isset($vals['majorParentCategoryid'])){
				
				$this->majorParentCategoryid = $vals['majorParentCategoryid'];
			}
			
			
			if (isset($vals['salveParentCategoryids'])){
				
				$this->salveParentCategoryids = $vals['salveParentCategoryids'];
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
			
			
			if (isset($vals['showType'])){
				
				$this->showType = $vals['showType'];
			}
			
			
			if (isset($vals['timeLineId'])){
				
				$this->timeLineId = $vals['timeLineId'];
			}
			
			
			if (isset($vals['subCatAttr'])){
				
				$this->subCatAttr = $vals['subCatAttr'];
			}
			
			
			if (isset($vals['attributeIds'])){
				
				$this->attributeIds = $vals['attributeIds'];
			}
			
			
			if (isset($vals['tags'])){
				
				$this->tags = $vals['tags'];
			}
			
			
			if (isset($vals['specialAttribute'])){
				
				$this->specialAttribute = $vals['specialAttribute'];
			}
			
			
			if (isset($vals['brandList'])){
				
				$this->brandList = $vals['brandList'];
			}
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
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
			
			
			if (isset($vals['keywords'])){
				
				$this->keywords = $vals['keywords'];
			}
			
			
			if (isset($vals['ptpTagFilter'])){
				
				$this->ptpTagFilter = $vals['ptpTagFilter'];
			}
			
			
			if (isset($vals['ptpTagInfoList'])){
				
				$this->ptpTagInfoList = $vals['ptpTagInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BriefCategory';
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
			
			
			
			
			if ("mapping" == $schemeField){
				
				$needSkip = false;
				
				$this->mapping = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\osp\category\api\comm\BriefCategoryMapping();
						$elem0->read($input);
						
						$this->mapping[$_size0++] = $elem0;
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
						
						$elem1 = new \com\vip\osp\category\api\comm\BriefCategory();
						$elem1->read($input);
						
						$this->children[$_size1++] = $elem1;
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
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->salveParentCategoryids[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
			
			
			
			
			if ("showType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->showType); 
				
			}
			
			
			
			
			if ("timeLineId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->timeLineId); 
				
			}
			
			
			
			
			if ("subCatAttr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCatAttr);
				
			}
			
			
			
			
			if ("attributeIds" == $schemeField){
				
				$needSkip = false;
				
				$this->attributeIds = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->attributeIds[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("tags" == $schemeField){
				
				$needSkip = false;
				
				$this->tags = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\osp\category\api\comm\BriefTag();
						$elem4->read($input);
						
						$this->tags[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("specialAttribute" == $schemeField){
				
				$needSkip = false;
				
				$this->specialAttribute = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \com\vip\osp\category\api\comm\BriefSpecialAttribute();
						$elem5->read($input);
						
						$this->specialAttribute[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("brandList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandList = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						$input->readString($elem6);
						
						$this->brandList[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("hierarchyId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hierarchyId); 
				
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
				$_size7 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem7 = null;
						
						$elem7 = new \com\vip\osp\category\api\comm\Parents();
						$elem7->read($input);
						
						$this->salveParents[$_size7++] = $elem7;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("keywords" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keywords);
				
			}
			
			
			
			
			if ("ptpTagFilter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ptpTagFilter);
				
			}
			
			
			
			
			if ("ptpTagInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->ptpTagInfoList = array();
				$_size8 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem8 = null;
						
						$elem8 = new \com\vip\osp\category\api\comm\PtpTagInfo();
						$elem8->read($input);
						
						$this->ptpTagInfoList[$_size8++] = $elem8;
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
		
		$xfer += $output->writeFieldBegin('type');
		
		$em = new \com\vip\osp\category\api\comm\CategoryType; 
		$output->writeString($em::$__names[$this->type]);  
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->subCatAttr !== null) {
			
			$xfer += $output->writeFieldBegin('subCatAttr');
			$xfer += $output->writeString($this->subCatAttr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeIds !== null) {
			
			$xfer += $output->writeFieldBegin('attributeIds');
			
			if (!is_array($this->attributeIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attributeIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tags !== null) {
			
			$xfer += $output->writeFieldBegin('tags');
			
			if (!is_array($this->tags)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tags as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialAttribute !== null) {
			
			$xfer += $output->writeFieldBegin('specialAttribute');
			
			if (!is_array($this->specialAttribute)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->specialAttribute as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandList !== null) {
			
			$xfer += $output->writeFieldBegin('brandList');
			
			if (!is_array($this->brandList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->keywords !== null) {
			
			$xfer += $output->writeFieldBegin('keywords');
			$xfer += $output->writeString($this->keywords);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ptpTagFilter !== null) {
			
			$xfer += $output->writeFieldBegin('ptpTagFilter');
			$xfer += $output->writeString($this->ptpTagFilter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ptpTagInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('ptpTagInfoList');
			
			if (!is_array($this->ptpTagInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ptpTagInfoList as $iter0){
				
				
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