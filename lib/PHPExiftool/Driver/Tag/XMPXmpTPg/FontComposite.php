<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FontComposite extends AbstractTag
{

    protected $Id = 'FontsComposite';

    protected $Name = 'FontComposite';

    protected $FullName = 'XMP::xmpTPg';

    protected $GroupName = 'XMP-xmpTPg';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpTPg';

    protected $g2 = 'Image';

    protected $Type = 'boolean';

    protected $Writable = true;

    protected $Description = 'Font Composite';

    protected $flag_List = true;
}
