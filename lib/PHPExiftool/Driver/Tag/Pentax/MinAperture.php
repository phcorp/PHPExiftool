<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MinAperture extends AbstractTag
{

    protected $Id = '0.2';

    protected $Name = 'MinAperture';

    protected $FullName = 'Pentax::LensData';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Min Aperture';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 22,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 32,
        ),
        4 => array(
            'Id' => 4,
            'Label' => 45,
        ),
        6 => array(
            'Id' => 6,
            'Label' => 16,
        ),
    );
}
