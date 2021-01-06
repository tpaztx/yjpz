<?php


namespace app\common\model;


use think\Model;

class PriceChange extends Model
{
    //改价模型

    // 表名
    protected $name = 'price_change';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    // 追加属性
    protected $append = [

    ];
    //批量商品改价
    public function changePriceArray($store_id,$goodsList)
    {
        if(!empty($goodsList)){
            foreach ($goodsList as &$item){
                $goodId = $this->where(['store_id'=>$store_id,'type'=>3,'object_id'=>$item['goodId']])->find();
                $adId = $this->where(['store_id'=>$store_id,'type'=>2,'object_id'=>$item['adId']])->find();
                $all = $this->where(['store_id'=>$store_id,'type'=>1])->find();
                $goodSizes = $item['sizes_json'];

                if(!empty($goodSizes)){
                    foreach ($goodSizes as &$size){
                        if($goodId){
                            switch ($goodId['symbol']){
                                case '+':
                                    $size['suggestPrice'] += $goodId['number'];
                                    break;
                                case '-':
                                    $size['suggestPrice'] *=$goodId['number'];
                                    break;
                                case '*':
                                    $size['suggestPrice'] = $size['suggestPrice']+($size['suggestPrice']*$goodId['number']);
                                    break;
                                default:
                                    break;
                            }
                        }
                        if($adId && !$goodId){
                            switch ($adId['symbol']){
                                case '+':
                                    $size['suggestPrice'] += $adId['number'];
                                    break;
                                case '-':
                                    $size['suggestPrice'] *=$adId['number'];
                                    break;
                                case '*':
                                    $size['suggestPrice'] = $size['suggestPrice']+($size['suggestPrice']*$adId['number']);
                                    break;
                                default:
                                    break;
                            }
                        }
                        if(!$adId && !$goodId){
                            switch ($all['symbol']){
                                case '+':
                                    $size['suggestPrice'] += $all['number'];
                                    break;
                                case '-':
                                    $size['suggestPrice'] *=$all['number'];
                                    break;
                                case '*':
                                    $size['suggestPrice'] = $size['suggestPrice']+($size['suggestPrice']*$all['number']);
                                    break;
                                default:
                                    break;
                            }
                        }
                    }
                }
                $item['sizes_json'] = \GuzzleHttp\json_encode($goodSizes);
            }
        }
        return $goodsList;
    }

    //单个商品改价
    public function changePrice($store_id,$goods)
    {
        if($goods){
                $goodId = $this->where(['store_id'=>$store_id,'type'=>3,'object_id'=>$goods['goodId']])->find();
                $adId = $this->where(['store_id'=>$store_id,'type'=>2,'object_id'=>$goods['adId']])->find();
                $all = $this->where(['store_id'=>$store_id,'type'=>1])->find();
                $goodSizes = $goods['sizes_json'];
                if(!empty($goodSizes)){
                    foreach ($goodSizes as &$size){
                        if($goodId){
                            switch ($goodId['symbol']){
                                case '+':
                                    $size['suggestPrice'] += $goodId['number'];
                                    break;
                                case '-':
                                    $size['suggestPrice'] *=$goodId['number'];
                                    break;
                                case '*':
                                    $size['suggestPrice'] = $size['suggestPrice']+($size['suggestPrice']*$goodId['number']);
                                    break;
                                default:
                                    break;
                            }
                        }
                        if($adId && !$goodId){
                            switch ($adId['symbol']){
                                case '+':
                                    $size['suggestPrice'] += $adId['number'];
                                    break;
                                case '-':
                                    $size['suggestPrice'] *=$adId['number'];
                                    break;
                                case '*':
                                    $size['suggestPrice'] = $size['suggestPrice']+($size['suggestPrice']*$adId['number']);
                                    break;
                                default:
                                    break;
                            }
                        }
                        if(!$adId && !$goodId){
                            switch ($all['symbol']){
                                case '+':
                                    $size['suggestPrice'] += $all['number'];
                                    break;
                                case '-':
                                    $size['suggestPrice'] *=$all['number'];
                                    break;
                                case '*':
                                    $size['suggestPrice'] = $size['suggestPrice']+($size['suggestPrice']*$all['number']);
                                    break;
                                default:
                                    break;
                            }
                        }
                    }
                }
                $goods['sizes_json']=\GuzzleHttp\json_encode($goodSizes);
            }
        return $goods;
    }
}