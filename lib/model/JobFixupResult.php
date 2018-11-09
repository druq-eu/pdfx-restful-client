<?php

namespace pdfx\restful\client\model;

use druq\restful\client\core\DataObject;

/**
 * Class JobFixupResult
 * @package pot\restful\v1\client\model
 * @property int ID
 * @property int FailCount
 * @property int SuccessCount
 * @property int JobFixupID
 * @property string Details
 * @property string SeverityName
 * @property string InPlaceFixupID
 */
class JobFixupResult extends DataObject {

    private static $properties = array(
        'ID' => 'Int',
        'FailCount' => 'Int',
        'SuccessCount' => 'Int',
        'JobFixupID' => 'Int',
        'Details' => 'Text',
        'SeverityName' => 'String(32)',
        'InPlaceFixupID' => 'String(32)',
    );

}
