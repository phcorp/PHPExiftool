<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class BeatSpliceParamsRiseInTimeDurationScale extends AbstractTag
{

    protected $Id = 'beatSpliceParamsRiseInTimeDurationScale';

    protected $Name = 'BeatSpliceParamsRiseInTimeDurationScale';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'rational';

    protected $Writable = true;

    protected $Description = 'Beat Splice Params Rise In Time Duration Scale';
}
