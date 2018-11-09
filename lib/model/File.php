<?php

namespace pdfx\restful\client\model;

use druq\restful\client\core\DataObject;

/**
 * Class File
 * @package pot\restful\v1\client\model
 * @property int ID
 * @property string URL
 */
class File extends DataObject {

    private static $properties = array(
        'ID' => 'Int',
        'URL' => 'String(512)',
    );

}
