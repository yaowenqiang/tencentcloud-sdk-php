<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method array getDeviceNames() 获取设备名称列表（单次限制1000个）
 * @method void setDeviceNames(array $DeviceNames) 设置设备名称列表（单次限制1000个）
 */

/**
 *GetDeviceStatuses请求参数结构体
 */
class GetDeviceStatusesRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var array 设备名称列表（单次限制1000个）
     */
    public $DeviceNames;
    /**
     * @param string $ProductId 产品ID
     * @param array $DeviceNames 设备名称列表（单次限制1000个）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }
    }
}