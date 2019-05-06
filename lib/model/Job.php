<?php

namespace pdfx\restful\client\model;

use druq\restful\client\core\DataObject;
use druq\restful\client\core\DataObjectList;

/**
 * Class Job
 * @package pot\restful\v1\client\model
 * @property int ID
 * @property string LastEdited
 * @property string Created
 * @property string ResourceURL
 * @property string SourceURL
 * @property string DestURL
 * @property string Details
 * @property float Width
 * @property float Height
 * @property string Message
 * @property string MessageCode
 * @property string MessageType
 * @property string ClientJobID
 * @property float Progress
 * @property array|DataObjectList|File[] Previews ids array, collection or Files list
 * @property array|DataObjectList|File[] Reports ids array, collection or Files list
 * @property array|DataObjectList|JobFixupResult[] JobFixupResults ids array, collection or JobFixupResults list
 */
class Job extends DataObject {

    private static $properties = array(
        'ID' => 'Int',
        'LastEdited' => 'String',
        'Created' => 'String',
        'SourceURL' => 'String(512)',
        'ResourceURL' => 'String(512)',
        'DestURL' => 'String(512)',
        'Details' => 'Text',
        'Width' => 'Float',
        'Height' => 'Float',
        'Message' => 'String(512)',
        'MessageCode' => 'String(128)',
        'MessageType' => 'String(40)',
        'Progress' => 'Float',
        'ClientJobID' => 'String(32)',
    );

    private static $has_many = array(
        'Previews' => 'File',
        'Reports' => 'File',
        'JobFixupResults' => 'JobFixupResult',
    );

}
