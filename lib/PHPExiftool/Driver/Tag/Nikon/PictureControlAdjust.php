<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PictureControlAdjust extends AbstractTag
{

    protected $Id = 48;

    protected $Name = 'PictureControlAdjust';

    protected $FullName = 'Nikon::PictureControl';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Picture Control Adjust';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Default Settings',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Quick Adjust',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Full Control',
        ),
    );
}
