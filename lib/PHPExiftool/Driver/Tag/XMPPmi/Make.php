<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPmi;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTag
{

    protected $Id = 'make';

    protected $Name = 'Make';

    protected $FullName = 'XMP::pmi';

    protected $GroupName = 'XMP-pmi';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-pmi';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Make';

    protected $flag_Avoid = true;
}
