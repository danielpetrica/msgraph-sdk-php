<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OmaSettingStringXml File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* OmaSettingStringXml class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OmaSettingStringXml extends OmaSetting
{
    /**
    * Gets the fileName
    * File name associated with the Value property (.xml).
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    * File name associated with the Value property (.xml).
    *
    * @param string $val The value of the fileName
    *
    * @return OmaSettingStringXml
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * Value. (UTF8 encoded byte array)
    *
    * @return \GuzzleHttp\Psr7\Stream The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "Microsoft\Graph\Beta\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * Value. (UTF8 encoded byte array)
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the value
    *
    * @return OmaSettingStringXml The OmaSettingStringXml
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}