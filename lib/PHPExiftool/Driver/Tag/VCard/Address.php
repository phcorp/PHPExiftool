<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\VCard;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Address extends AbstractTag
{

    protected $Id = 'Adr';

    protected $Name = 'Address';

    protected $FullName = 'VCard::Main';

    protected $GroupName = 'VCard';

    protected $g0 = 'VCard';

    protected $g1 = 'VCard';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Address';

    protected $local_g2 = 'Location';
}
