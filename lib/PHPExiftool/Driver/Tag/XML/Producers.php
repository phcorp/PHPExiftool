<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Producers extends AbstractTag
{

    protected $Id = 'producers//name';

    protected $Name = 'Producers';

    protected $FullName = 'PLIST::Main';

    protected $GroupName = 'XML';

    protected $g0 = 'PLIST';

    protected $g1 = 'XML';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Producers';

    protected $flag_List = true;
}
