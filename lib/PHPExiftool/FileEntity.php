<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use PHPExiftool\RDFParser;
use PHPExiftool\FileEntity;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPExiftool\Driver\Metadata\MetadataBag;

/**
 *
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class FileEntity implements \IteratorAggregate
{

    /**
     *
     * @var \DOMDocument
     */
    private $dom;

    /**
     *
     * @var \SplFileInfo
     */
    private $file;

    /**
     * Metadata already parsed, kept for the life of the entity.
     *
     * @var array
     */
    private $cache = array();

    /**
     *
     * @var RDFParser
     */
    private $parser;

    /**
     * Construct a new FileEntity
     *
     * @param  string       $file
     * @param  \DOMDocument $dom
     * @param  RDFParser    $parser
     * @return FileEntity
     */
    public function __construct($file, \DOMDocument $dom, RDFParser $parser)
    {
        $this->dom = $dom;
        $this->file = $file;

        $this->parser = $parser->open($dom->saveXML());

        return $this;
    }

    public function getIterator()
    {
        return $this->getMetadatas()->getIterator();
    }

    /**
     *
     * @var string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     *
     * @return MetadataBag
     */
    public function getMetadatas()
    {
        $key = realpath($this->file);

        if (array_key_exists($key, $this->cache)) {
            return $this->cache[$key];
        }

        $metadatas = $this->parser->ParseMetadatas();

        $this->cache[$key] = $metadatas;

        return $metadatas;
    }

    /**
     * Execute a user defined query to retrieve metadata
     *
     * @param string $query
     *
     * @return ValueInterface
     */
    public function executeQuery($query)
    {
        return $this->parser->Query($query);
    }
}
