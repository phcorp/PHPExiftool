<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ActiveDLightingMode extends AbstractTag
{

    protected $Id = 37;

    protected $Name = 'ActiveD-LightingMode';

    protected $FullName = 'NikonCapture::Exposure';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Active D-Lighting Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unchanged',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Normal',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Extra High',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Extra High 1',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Extra High 2',
        ),
    );
}
