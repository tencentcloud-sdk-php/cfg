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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对象类型
 *
 * @method integer getObjectTypeId() 获取对象类型ID
 * @method void setObjectTypeId(integer $ObjectTypeId) 设置对象类型ID
 * @method string getObjectTypeTitle() 获取对象类型名称
 * @method void setObjectTypeTitle(string $ObjectTypeTitle) 设置对象类型名称
 * @method string getObjectTypeLevelOne() 获取对象类型第一级
 * @method void setObjectTypeLevelOne(string $ObjectTypeLevelOne) 设置对象类型第一级
 * @method ObjectTypeConfig getObjectTypeParams() 获取对象类型参数
 * @method void setObjectTypeParams(ObjectTypeConfig $ObjectTypeParams) 设置对象类型参数
 * @method ObjectTypeJsonParse getObjectTypeJsonParse() 获取tke接口json解析规则，null不需要解析
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectTypeJsonParse(ObjectTypeJsonParse $ObjectTypeJsonParse) 设置tke接口json解析规则，null不需要解析
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getObjectHasNewAction() 获取是否包含新动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectHasNewAction(boolean $ObjectHasNewAction) 设置是否包含新动作
注意：此字段可能返回 null，表示取不到有效值。
 */
class ObjectType extends AbstractModel
{
    /**
     * @var integer 对象类型ID
     */
    public $ObjectTypeId;

    /**
     * @var string 对象类型名称
     */
    public $ObjectTypeTitle;

    /**
     * @var string 对象类型第一级
     */
    public $ObjectTypeLevelOne;

    /**
     * @var ObjectTypeConfig 对象类型参数
     */
    public $ObjectTypeParams;

    /**
     * @var ObjectTypeJsonParse tke接口json解析规则，null不需要解析
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectTypeJsonParse;

    /**
     * @var boolean 是否包含新动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectHasNewAction;

    /**
     * @param integer $ObjectTypeId 对象类型ID
     * @param string $ObjectTypeTitle 对象类型名称
     * @param string $ObjectTypeLevelOne 对象类型第一级
     * @param ObjectTypeConfig $ObjectTypeParams 对象类型参数
     * @param ObjectTypeJsonParse $ObjectTypeJsonParse tke接口json解析规则，null不需要解析
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ObjectHasNewAction 是否包含新动作
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("ObjectTypeTitle",$param) and $param["ObjectTypeTitle"] !== null) {
            $this->ObjectTypeTitle = $param["ObjectTypeTitle"];
        }

        if (array_key_exists("ObjectTypeLevelOne",$param) and $param["ObjectTypeLevelOne"] !== null) {
            $this->ObjectTypeLevelOne = $param["ObjectTypeLevelOne"];
        }

        if (array_key_exists("ObjectTypeParams",$param) and $param["ObjectTypeParams"] !== null) {
            $this->ObjectTypeParams = new ObjectTypeConfig();
            $this->ObjectTypeParams->deserialize($param["ObjectTypeParams"]);
        }

        if (array_key_exists("ObjectTypeJsonParse",$param) and $param["ObjectTypeJsonParse"] !== null) {
            $this->ObjectTypeJsonParse = new ObjectTypeJsonParse();
            $this->ObjectTypeJsonParse->deserialize($param["ObjectTypeJsonParse"]);
        }

        if (array_key_exists("ObjectHasNewAction",$param) and $param["ObjectHasNewAction"] !== null) {
            $this->ObjectHasNewAction = $param["ObjectHasNewAction"];
        }
    }
}
