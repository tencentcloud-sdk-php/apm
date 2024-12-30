<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmInstances请求参数结构体
 *
 * @method array getTags() 获取Tag 列表
 * @method void setTags(array $Tags) 设置Tag 列表
 * @method string getInstanceName() 获取搜索业务系统名
 * @method void setInstanceName(string $InstanceName) 设置搜索业务系统名
 * @method array getInstanceIds() 获取过滤业务系统 ID
 * @method void setInstanceIds(array $InstanceIds) 设置过滤业务系统 ID
 * @method integer getDemoInstanceFlag() 获取是否查询官方 Demo 业务系统
 * @method void setDemoInstanceFlag(integer $DemoInstanceFlag) 设置是否查询官方 Demo 业务系统
 * @method integer getAllRegionsFlag() 获取是否查询全地域业务系统
 * @method void setAllRegionsFlag(integer $AllRegionsFlag) 设置是否查询全地域业务系统
 */
class DescribeApmInstancesRequest extends AbstractModel
{
    /**
     * @var array Tag 列表
     */
    public $Tags;

    /**
     * @var string 搜索业务系统名
     */
    public $InstanceName;

    /**
     * @var array 过滤业务系统 ID
     */
    public $InstanceIds;

    /**
     * @var integer 是否查询官方 Demo 业务系统
     */
    public $DemoInstanceFlag;

    /**
     * @var integer 是否查询全地域业务系统
     */
    public $AllRegionsFlag;

    /**
     * @param array $Tags Tag 列表
     * @param string $InstanceName 搜索业务系统名
     * @param array $InstanceIds 过滤业务系统 ID
     * @param integer $DemoInstanceFlag 是否查询官方 Demo 业务系统
     * @param integer $AllRegionsFlag 是否查询全地域业务系统
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DemoInstanceFlag",$param) and $param["DemoInstanceFlag"] !== null) {
            $this->DemoInstanceFlag = $param["DemoInstanceFlag"];
        }

        if (array_key_exists("AllRegionsFlag",$param) and $param["AllRegionsFlag"] !== null) {
            $this->AllRegionsFlag = $param["AllRegionsFlag"];
        }
    }
}
