<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class PhotosHdrMetadata extends \Google\Model
{
  protected $baseFormatType = PhotosHdrMetadataBaseFormat::class;
  protected $baseFormatDataType = '';
  protected $gainmapType = PhotosHdrMetadataGainmap::class;
  protected $gainmapDataType = '';

  /**
   * @param PhotosHdrMetadataBaseFormat
   */
  public function setBaseFormat(PhotosHdrMetadataBaseFormat $baseFormat)
  {
    $this->baseFormat = $baseFormat;
  }
  /**
   * @return PhotosHdrMetadataBaseFormat
   */
  public function getBaseFormat()
  {
    return $this->baseFormat;
  }
  /**
   * @param PhotosHdrMetadataGainmap
   */
  public function setGainmap(PhotosHdrMetadataGainmap $gainmap)
  {
    $this->gainmap = $gainmap;
  }
  /**
   * @return PhotosHdrMetadataGainmap
   */
  public function getGainmap()
  {
    return $this->gainmap;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PhotosHdrMetadata::class, 'Google_Service_Contentwarehouse_PhotosHdrMetadata');
