<?php

declare(strict_types=1);

/*
 * This file is part of the RollerworksDatagrid package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Component\Datagrid\Twig\Renderer;

final class TwigRenderer extends DatagridRenderer
{
    public function __construct(TwigRendererEngine $engine)
    {
        parent::__construct($engine);
    }
}