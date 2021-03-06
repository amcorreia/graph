<?php

namespace Fhaculty\Graph\Algorithm;

use Fhaculty\Graph\Algorithm\Base;
use Fhaculty\Graph\Vertex;

/**
 * Abstract base class for algorithms that operate on a given Vertex instance
 */
abstract class BaseVertex extends Base
{
    /**
     * Vertex to operate on
     *
     * @var Vertex
     */
    protected $vertex;

    /**
     * instantiate new algorithm
     *
     * @param Vertex $vertex Vertex to operate on
     */
    public function __construct(Vertex $vertex)
    {
        $this->vertex = $vertex;
    }
}
