<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveShape extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'ToneCurveShape';

    protected $FullName = 'CanonVRD::ToneCurve';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Tone Curve Shape';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Curve',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Straight',
        ),
    );
}
