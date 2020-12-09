<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\product\change\service;

class ProductAndSkuChangeInfo {
	
	static $_TSPEC;
	public $barcode = null;
	public $vendorId = null;
	public $txNum = null;
	public $sn = null;
	public $skuId = null;
	public $name = null;
	public $brandId = null;
	public $brandName = null;
	public $brandLevel = null;
	public $unit = null;
	public $sizeName = null;
	public $corlor = null;
	public $category1Id = null;
	public $category1Name = null;
	public $category2Id = null;
	public $category2Name = null;
	public $category3Id = null;
	public $category3Name = null;
	public $isAirForbit = null;
	public $isEasyBreak = null;
	public $isLarge = null;
	public $isValuable = null;
	public $isExpMan = null;
	public $expBaseline = null;
	public $insuredDeadline = null;
	public $sellDeadline = null;
	public $shelfLife = null;
	public $accessoryInfo = null;
	public $areaOutput = null;
	public $taxRate = null;
	public $length = null;
	public $width = null;
	public $height = null;
	public $weight = null;
	public $temperature = null;
	public $isConsumptionTax = null;
	public $vendorName = null;
	public $labelLang = null;
	public $netWeight = null;
	public $grossWeight = null;
	public $usePdcExpireData = null;
	public $isLuxury = null;
	public $isAntiTheft = null;
	public $marketPrice = null;
	public $sexes = null;
	public $sex = null;
	public $seasons = null;
	public $season = null;
	public $listImage = null;
	public $inbLife = null;
	public $vendorSkuPropertyList = null;
	public $isSerialNumManage = null;
	public $serialNumLength = null;
	public $serialNumRule = null;
	public $storageConditions = null;
	public $suitDetails = null;
	public $isProductCatalogue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'txNum'
			),
			4 => array(
			'var' => 'sn'
			),
			5 => array(
			'var' => 'skuId'
			),
			6 => array(
			'var' => 'name'
			),
			7 => array(
			'var' => 'brandId'
			),
			8 => array(
			'var' => 'brandName'
			),
			9 => array(
			'var' => 'brandLevel'
			),
			10 => array(
			'var' => 'unit'
			),
			11 => array(
			'var' => 'sizeName'
			),
			12 => array(
			'var' => 'corlor'
			),
			13 => array(
			'var' => 'category1Id'
			),
			14 => array(
			'var' => 'category1Name'
			),
			15 => array(
			'var' => 'category2Id'
			),
			16 => array(
			'var' => 'category2Name'
			),
			17 => array(
			'var' => 'category3Id'
			),
			18 => array(
			'var' => 'category3Name'
			),
			19 => array(
			'var' => 'isAirForbit'
			),
			20 => array(
			'var' => 'isEasyBreak'
			),
			21 => array(
			'var' => 'isLarge'
			),
			22 => array(
			'var' => 'isValuable'
			),
			23 => array(
			'var' => 'isExpMan'
			),
			24 => array(
			'var' => 'expBaseline'
			),
			25 => array(
			'var' => 'insuredDeadline'
			),
			26 => array(
			'var' => 'sellDeadline'
			),
			27 => array(
			'var' => 'shelfLife'
			),
			28 => array(
			'var' => 'accessoryInfo'
			),
			29 => array(
			'var' => 'areaOutput'
			),
			30 => array(
			'var' => 'taxRate'
			),
			31 => array(
			'var' => 'length'
			),
			32 => array(
			'var' => 'width'
			),
			33 => array(
			'var' => 'height'
			),
			34 => array(
			'var' => 'weight'
			),
			35 => array(
			'var' => 'temperature'
			),
			36 => array(
			'var' => 'isConsumptionTax'
			),
			37 => array(
			'var' => 'vendorName'
			),
			38 => array(
			'var' => 'labelLang'
			),
			39 => array(
			'var' => 'netWeight'
			),
			40 => array(
			'var' => 'grossWeight'
			),
			41 => array(
			'var' => 'usePdcExpireData'
			),
			42 => array(
			'var' => 'isLuxury'
			),
			43 => array(
			'var' => 'isAntiTheft'
			),
			44 => array(
			'var' => 'marketPrice'
			),
			45 => array(
			'var' => 'sexes'
			),
			46 => array(
			'var' => 'sex'
			),
			47 => array(
			'var' => 'seasons'
			),
			48 => array(
			'var' => 'season'
			),
			49 => array(
			'var' => 'listImage'
			),
			50 => array(
			'var' => 'inbLife'
			),
			51 => array(
			'var' => 'vendorSkuPropertyList'
			),
			52 => array(
			'var' => 'isSerialNumManage'
			),
			53 => array(
			'var' => 'serialNumLength'
			),
			54 => array(
			'var' => 'serialNumRule'
			),
			55 => array(
			'var' => 'storageConditions'
			),
			56 => array(
			'var' => 'suitDetails'
			),
			57 => array(
			'var' => 'isProductCatalogue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['txNum'])){
				
				$this->txNum = $vals['txNum'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandLevel'])){
				
				$this->brandLevel = $vals['brandLevel'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['sizeName'])){
				
				$this->sizeName = $vals['sizeName'];
			}
			
			
			if (isset($vals['corlor'])){
				
				$this->corlor = $vals['corlor'];
			}
			
			
			if (isset($vals['category1Id'])){
				
				$this->category1Id = $vals['category1Id'];
			}
			
			
			if (isset($vals['category1Name'])){
				
				$this->category1Name = $vals['category1Name'];
			}
			
			
			if (isset($vals['category2Id'])){
				
				$this->category2Id = $vals['category2Id'];
			}
			
			
			if (isset($vals['category2Name'])){
				
				$this->category2Name = $vals['category2Name'];
			}
			
			
			if (isset($vals['category3Id'])){
				
				$this->category3Id = $vals['category3Id'];
			}
			
			
			if (isset($vals['category3Name'])){
				
				$this->category3Name = $vals['category3Name'];
			}
			
			
			if (isset($vals['isAirForbit'])){
				
				$this->isAirForbit = $vals['isAirForbit'];
			}
			
			
			if (isset($vals['isEasyBreak'])){
				
				$this->isEasyBreak = $vals['isEasyBreak'];
			}
			
			
			if (isset($vals['isLarge'])){
				
				$this->isLarge = $vals['isLarge'];
			}
			
			
			if (isset($vals['isValuable'])){
				
				$this->isValuable = $vals['isValuable'];
			}
			
			
			if (isset($vals['isExpMan'])){
				
				$this->isExpMan = $vals['isExpMan'];
			}
			
			
			if (isset($vals['expBaseline'])){
				
				$this->expBaseline = $vals['expBaseline'];
			}
			
			
			if (isset($vals['insuredDeadline'])){
				
				$this->insuredDeadline = $vals['insuredDeadline'];
			}
			
			
			if (isset($vals['sellDeadline'])){
				
				$this->sellDeadline = $vals['sellDeadline'];
			}
			
			
			if (isset($vals['shelfLife'])){
				
				$this->shelfLife = $vals['shelfLife'];
			}
			
			
			if (isset($vals['accessoryInfo'])){
				
				$this->accessoryInfo = $vals['accessoryInfo'];
			}
			
			
			if (isset($vals['areaOutput'])){
				
				$this->areaOutput = $vals['areaOutput'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['width'])){
				
				$this->width = $vals['width'];
			}
			
			
			if (isset($vals['height'])){
				
				$this->height = $vals['height'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['temperature'])){
				
				$this->temperature = $vals['temperature'];
			}
			
			
			if (isset($vals['isConsumptionTax'])){
				
				$this->isConsumptionTax = $vals['isConsumptionTax'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['labelLang'])){
				
				$this->labelLang = $vals['labelLang'];
			}
			
			
			if (isset($vals['netWeight'])){
				
				$this->netWeight = $vals['netWeight'];
			}
			
			
			if (isset($vals['grossWeight'])){
				
				$this->grossWeight = $vals['grossWeight'];
			}
			
			
			if (isset($vals['usePdcExpireData'])){
				
				$this->usePdcExpireData = $vals['usePdcExpireData'];
			}
			
			
			if (isset($vals['isLuxury'])){
				
				$this->isLuxury = $vals['isLuxury'];
			}
			
			
			if (isset($vals['isAntiTheft'])){
				
				$this->isAntiTheft = $vals['isAntiTheft'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['sexes'])){
				
				$this->sexes = $vals['sexes'];
			}
			
			
			if (isset($vals['sex'])){
				
				$this->sex = $vals['sex'];
			}
			
			
			if (isset($vals['seasons'])){
				
				$this->seasons = $vals['seasons'];
			}
			
			
			if (isset($vals['season'])){
				
				$this->season = $vals['season'];
			}
			
			
			if (isset($vals['listImage'])){
				
				$this->listImage = $vals['listImage'];
			}
			
			
			if (isset($vals['inbLife'])){
				
				$this->inbLife = $vals['inbLife'];
			}
			
			
			if (isset($vals['vendorSkuPropertyList'])){
				
				$this->vendorSkuPropertyList = $vals['vendorSkuPropertyList'];
			}
			
			
			if (isset($vals['isSerialNumManage'])){
				
				$this->isSerialNumManage = $vals['isSerialNumManage'];
			}
			
			
			if (isset($vals['serialNumLength'])){
				
				$this->serialNumLength = $vals['serialNumLength'];
			}
			
			
			if (isset($vals['serialNumRule'])){
				
				$this->serialNumRule = $vals['serialNumRule'];
			}
			
			
			if (isset($vals['storageConditions'])){
				
				$this->storageConditions = $vals['storageConditions'];
			}
			
			
			if (isset($vals['suitDetails'])){
				
				$this->suitDetails = $vals['suitDetails'];
			}
			
			
			if (isset($vals['isProductCatalogue'])){
				
				$this->isProductCatalogue = $vals['isProductCatalogue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductAndSkuChangeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("txNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txNum);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandLevel);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("sizeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeName);
				
			}
			
			
			
			
			if ("corlor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->corlor);
				
			}
			
			
			
			
			if ("category1Id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category1Id); 
				
			}
			
			
			
			
			if ("category1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1Name);
				
			}
			
			
			
			
			if ("category2Id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category2Id); 
				
			}
			
			
			
			
			if ("category2Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2Name);
				
			}
			
			
			
			
			if ("category3Id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category3Id); 
				
			}
			
			
			
			
			if ("category3Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3Name);
				
			}
			
			
			
			
			if ("isAirForbit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isAirForbit);
				
			}
			
			
			
			
			if ("isEasyBreak" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isEasyBreak);
				
			}
			
			
			
			
			if ("isLarge" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isLarge);
				
			}
			
			
			
			
			if ("isValuable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isValuable);
				
			}
			
			
			
			
			if ("isExpMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isExpMan);
				
			}
			
			
			
			
			if ("expBaseline" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expBaseline);
				
			}
			
			
			
			
			if ("insuredDeadline" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->insuredDeadline); 
				
			}
			
			
			
			
			if ("sellDeadline" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sellDeadline); 
				
			}
			
			
			
			
			if ("shelfLife" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shelfLife); 
				
			}
			
			
			
			
			if ("accessoryInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessoryInfo);
				
			}
			
			
			
			
			if ("areaOutput" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaOutput);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxRate);
				
			}
			
			
			
			
			if ("length" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->length); 
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->width); 
				
			}
			
			
			
			
			if ("height" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->height); 
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->weight); 
				
			}
			
			
			
			
			if ("temperature" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->temperature);
				
			}
			
			
			
			
			if ("isConsumptionTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isConsumptionTax);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("labelLang" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->labelLang);
				
			}
			
			
			
			
			if ("netWeight" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->netWeight); 
				
			}
			
			
			
			
			if ("grossWeight" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->grossWeight); 
				
			}
			
			
			
			
			if ("usePdcExpireData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->usePdcExpireData);
				
			}
			
			
			
			
			if ("isLuxury" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isLuxury);
				
			}
			
			
			
			
			if ("isAntiTheft" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isAntiTheft);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->marketPrice);
				
			}
			
			
			
			
			if ("sexes" == $schemeField){
				
				$needSkip = false;
				
				$this->sexes = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->sexes[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sex" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sex);
				
			}
			
			
			
			
			if ("seasons" == $schemeField){
				
				$needSkip = false;
				
				$this->seasons = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->seasons[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("season" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->season);
				
			}
			
			
			
			
			if ("listImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->listImage);
				
			}
			
			
			
			
			if ("inbLife" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inbLife); 
				
			}
			
			
			
			
			if ("vendorSkuPropertyList" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorSkuPropertyList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\product\change\service\PropertyItem();
						$elem2->read($input);
						
						$this->vendorSkuPropertyList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isSerialNumManage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isSerialNumManage);
				
			}
			
			
			
			
			if ("serialNumLength" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNumLength);
				
			}
			
			
			
			
			if ("serialNumRule" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNumRule);
				
			}
			
			
			
			
			if ("storageConditions" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storageConditions);
				
			}
			
			
			
			
			if ("suitDetails" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suitDetails);
				
			}
			
			
			
			
			if ("isProductCatalogue" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isProductCatalogue);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txNum !== null) {
			
			$xfer += $output->writeFieldBegin('txNum');
			$xfer += $output->writeString($this->txNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandLevel !== null) {
			
			$xfer += $output->writeFieldBegin('brandLevel');
			$xfer += $output->writeString($this->brandLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeName !== null) {
			
			$xfer += $output->writeFieldBegin('sizeName');
			$xfer += $output->writeString($this->sizeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->corlor !== null) {
			
			$xfer += $output->writeFieldBegin('corlor');
			$xfer += $output->writeString($this->corlor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category1Id !== null) {
			
			$xfer += $output->writeFieldBegin('category1Id');
			$xfer += $output->writeI32($this->category1Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category1Name !== null) {
			
			$xfer += $output->writeFieldBegin('category1Name');
			$xfer += $output->writeString($this->category1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category2Id !== null) {
			
			$xfer += $output->writeFieldBegin('category2Id');
			$xfer += $output->writeI32($this->category2Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category2Name !== null) {
			
			$xfer += $output->writeFieldBegin('category2Name');
			$xfer += $output->writeString($this->category2Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3Id !== null) {
			
			$xfer += $output->writeFieldBegin('category3Id');
			$xfer += $output->writeI32($this->category3Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3Name !== null) {
			
			$xfer += $output->writeFieldBegin('category3Name');
			$xfer += $output->writeString($this->category3Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAirForbit !== null) {
			
			$xfer += $output->writeFieldBegin('isAirForbit');
			$xfer += $output->writeString($this->isAirForbit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isEasyBreak !== null) {
			
			$xfer += $output->writeFieldBegin('isEasyBreak');
			$xfer += $output->writeString($this->isEasyBreak);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isLarge !== null) {
			
			$xfer += $output->writeFieldBegin('isLarge');
			$xfer += $output->writeString($this->isLarge);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isValuable !== null) {
			
			$xfer += $output->writeFieldBegin('isValuable');
			$xfer += $output->writeString($this->isValuable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isExpMan !== null) {
			
			$xfer += $output->writeFieldBegin('isExpMan');
			$xfer += $output->writeString($this->isExpMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expBaseline !== null) {
			
			$xfer += $output->writeFieldBegin('expBaseline');
			$xfer += $output->writeString($this->expBaseline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuredDeadline !== null) {
			
			$xfer += $output->writeFieldBegin('insuredDeadline');
			$xfer += $output->writeI32($this->insuredDeadline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellDeadline !== null) {
			
			$xfer += $output->writeFieldBegin('sellDeadline');
			$xfer += $output->writeI32($this->sellDeadline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shelfLife !== null) {
			
			$xfer += $output->writeFieldBegin('shelfLife');
			$xfer += $output->writeI32($this->shelfLife);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessoryInfo !== null) {
			
			$xfer += $output->writeFieldBegin('accessoryInfo');
			$xfer += $output->writeString($this->accessoryInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaOutput !== null) {
			
			$xfer += $output->writeFieldBegin('areaOutput');
			$xfer += $output->writeString($this->areaOutput);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeDouble($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->length !== null) {
			
			$xfer += $output->writeFieldBegin('length');
			$xfer += $output->writeI32($this->length);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->width !== null) {
			
			$xfer += $output->writeFieldBegin('width');
			$xfer += $output->writeI32($this->width);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->height !== null) {
			
			$xfer += $output->writeFieldBegin('height');
			$xfer += $output->writeI32($this->height);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI64($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->temperature !== null) {
			
			$xfer += $output->writeFieldBegin('temperature');
			$xfer += $output->writeString($this->temperature);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isConsumptionTax !== null) {
			
			$xfer += $output->writeFieldBegin('isConsumptionTax');
			$xfer += $output->writeString($this->isConsumptionTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->labelLang !== null) {
			
			$xfer += $output->writeFieldBegin('labelLang');
			$xfer += $output->writeString($this->labelLang);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->netWeight !== null) {
			
			$xfer += $output->writeFieldBegin('netWeight');
			$xfer += $output->writeI64($this->netWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossWeight !== null) {
			
			$xfer += $output->writeFieldBegin('grossWeight');
			$xfer += $output->writeI64($this->grossWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usePdcExpireData !== null) {
			
			$xfer += $output->writeFieldBegin('usePdcExpireData');
			$xfer += $output->writeString($this->usePdcExpireData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isLuxury !== null) {
			
			$xfer += $output->writeFieldBegin('isLuxury');
			$xfer += $output->writeString($this->isLuxury);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAntiTheft !== null) {
			
			$xfer += $output->writeFieldBegin('isAntiTheft');
			$xfer += $output->writeString($this->isAntiTheft);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeDouble($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sexes !== null) {
			
			$xfer += $output->writeFieldBegin('sexes');
			
			if (!is_array($this->sexes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sexes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sex !== null) {
			
			$xfer += $output->writeFieldBegin('sex');
			$xfer += $output->writeString($this->sex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seasons !== null) {
			
			$xfer += $output->writeFieldBegin('seasons');
			
			if (!is_array($this->seasons)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->seasons as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->season !== null) {
			
			$xfer += $output->writeFieldBegin('season');
			$xfer += $output->writeString($this->season);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->listImage !== null) {
			
			$xfer += $output->writeFieldBegin('listImage');
			$xfer += $output->writeString($this->listImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inbLife !== null) {
			
			$xfer += $output->writeFieldBegin('inbLife');
			$xfer += $output->writeI32($this->inbLife);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSkuPropertyList !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSkuPropertyList');
			
			if (!is_array($this->vendorSkuPropertyList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vendorSkuPropertyList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSerialNumManage !== null) {
			
			$xfer += $output->writeFieldBegin('isSerialNumManage');
			$xfer += $output->writeString($this->isSerialNumManage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serialNumLength !== null) {
			
			$xfer += $output->writeFieldBegin('serialNumLength');
			$xfer += $output->writeString($this->serialNumLength);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serialNumRule !== null) {
			
			$xfer += $output->writeFieldBegin('serialNumRule');
			$xfer += $output->writeString($this->serialNumRule);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storageConditions !== null) {
			
			$xfer += $output->writeFieldBegin('storageConditions');
			$xfer += $output->writeString($this->storageConditions);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suitDetails !== null) {
			
			$xfer += $output->writeFieldBegin('suitDetails');
			$xfer += $output->writeString($this->suitDetails);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isProductCatalogue !== null) {
			
			$xfer += $output->writeFieldBegin('isProductCatalogue');
			$xfer += $output->writeBool($this->isProductCatalogue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>