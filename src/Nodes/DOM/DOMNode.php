<?php

namespace sailenicolas\Readability\Nodes\DOM;

use sailenicolas\Readability\Nodes\NodeTrait;

/**
 * @method getAttribute($attribute)
 * @method hasAttribute($attribute)
 */
class DOMNode extends \DOMNode
{
    use NodeTrait;
}
