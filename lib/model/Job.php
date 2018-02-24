<?php

namespace pdfx\restful\client\model;

use druq\restful\client\core\DataObject;

/**
 * Class Job
 * @package pot\restful\v1\client\model
 * @property int ID
 * @property string LastEdited
 * @property string Created
 * @property string SourceURL
 * @property string DestURL
 * @property string Details
 * @property float Width
 * @property float Height
 * @property string Message
 * @property string MessageCode
 * @property string MessageType
 * @property float Progress
 */
class Job extends DataObject {

    private static $properties = array(
        'ID' => 'Int',
        'LastEdited' => 'String',
        'Created' => 'String',
        'SourceURL' => 'String(512)',
        'DestURL' => 'String(512)',
        'Details' => 'Text',
        'Width' => 'Float',
        'Height' => 'Float',
        'Message' => 'String(512)',
        'MessageCode' => 'String(128)',
        'MessageType' => 'String(40)',
        'Progress' => 'Float',
    );

    private static $has_many = array(
        'Previews' => 'File',
        'Reports' => 'File',
    );

}
