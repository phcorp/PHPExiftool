<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class VideoAvgFrameRate extends AbstractTag
{

    protected $Id = 7;

    protected $Name = 'VideoAvgFrameRate';

    protected $FullName = 'QuickTime::VideoProf';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'fixed32u';

    protected $Writable = false;

    protected $Description = 'Video Avg Frame Rate';
}
