<?php
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 23:32:33 UTC 2018
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_FileContents
 * 
 * Properties:
 * <ul>
 * 
 * <li>Contents: string</li>
 * <li>FileType: string</li>
 * <li>Checksum: string</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_FileContents extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Contents' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FileType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Checksum' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Contents property.
     *
     * @return String Contents.
     */
    public function getContents()
    {
        return $this->_fields['Contents']['FieldValue'];
    }

    /**
     * Set the value of the Contents property.
     *
     * @param string contents
     * @return this instance
     */
    public function setContents($value)
    {
        $this->_fields['Contents']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Contents is set.
     *
     * @return true if Contents is set.
     */
    public function isSetContents()
    {
                return !is_null($this->_fields['Contents']['FieldValue']);
            }

    /**
     * Set the value of Contents, return this.
     *
     * @param contents
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withContents($value)
    {
        $this->setContents($value);
        return $this;
    }

    /**
     * Get the value of the FileType property.
     *
     * @return String FileType.
     */
    public function getFileType()
    {
        return $this->_fields['FileType']['FieldValue'];
    }

    /**
     * Set the value of the FileType property.
     *
     * @param string fileType
     * @return this instance
     */
    public function setFileType($value)
    {
        $this->_fields['FileType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FileType is set.
     *
     * @return true if FileType is set.
     */
    public function isSetFileType()
    {
                return !is_null($this->_fields['FileType']['FieldValue']);
            }

    /**
     * Set the value of FileType, return this.
     *
     * @param fileType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFileType($value)
    {
        $this->setFileType($value);
        return $this;
    }

    /**
     * Get the value of the Checksum property.
     *
     * @return String Checksum.
     */
    public function getChecksum()
    {
        return $this->_fields['Checksum']['FieldValue'];
    }

    /**
     * Set the value of the Checksum property.
     *
     * @param string checksum
     * @return this instance
     */
    public function setChecksum($value)
    {
        $this->_fields['Checksum']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Checksum is set.
     *
     * @return true if Checksum is set.
     */
    public function isSetChecksum()
    {
                return !is_null($this->_fields['Checksum']['FieldValue']);
            }

    /**
     * Set the value of Checksum, return this.
     *
     * @param checksum
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withChecksum($value)
    {
        $this->setChecksum($value);
        return $this;
    }

}
