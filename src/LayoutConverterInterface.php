<?php

declare(strict_types=1);

namespace Windwalker\Renderer;

/**
 * Interface LayoutConverterInterface
 */
interface LayoutConverterInterface
{
    /**
     * Convert CompositeRenderer `foo.bar.yoo` layout path to engine style.
     *
     * @param  string  $layout
     * @param  string  $ext
     *
     * @return  string
     */
    public function handleLayout(string $layout, string $ext): string;
}
