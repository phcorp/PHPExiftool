<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMwgKw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class HierarchicalKeywords3Applied extends AbstractTag
{

    protected $Id = 'KeywordsHierarchyChildrenChildrenApplied';

    protected $Name = 'HierarchicalKeywords3Applied';

    protected $FullName = 'MWG::Keywords';

    protected $GroupName = 'XMP-mwg-kw';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-mwg-kw';

    protected $g2 = 'Image';

    protected $Type = 'boolean';

    protected $Writable = true;

    protected $Description = 'Hierarchical Keywords 3 Applied';

    protected $flag_List = true;
}
