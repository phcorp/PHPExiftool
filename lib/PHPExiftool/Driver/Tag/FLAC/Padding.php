<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Padding extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'Padding';

    protected $FullName = 'FLAC::Main';

    protected $GroupName = 'FLAC';

    protected $g0 = 'FLAC';

    protected $g1 = 'FLAC';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Padding';

    protected $flag_Binary = true;
}
