<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPhotomech;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class TimeCreated extends AbstractTag
{

    protected $Id = 'TimeCreated';

    protected $Name = 'TimeCreated';

    protected $FullName = 'PhotoMechanic::XMP';

    protected $GroupName = 'XMP-photomech';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-photomech';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Time Created';

    protected $local_g2 = 'Time';

    protected $flag_Avoid = true;
}
