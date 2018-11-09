<?php

namespace pdfx\restful\client\model;

use druq\restful\client\core\DataObject;

/**
 * Class JobFixup
 * @package pot\restful\v1\client\model
 * @property int ID
 * @property string Title
 * @property string Description
 */
class JobFixup extends DataObject {

    private static $properties = array(
        'ID' => 'Int',
        'Title' => 'String(256)',
        'Description' => 'Text',
    );

}
