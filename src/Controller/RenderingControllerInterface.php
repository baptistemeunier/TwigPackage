<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2018 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

declare(strict_types=1);

namespace Berlioz\Package\Twig\Controller;

use Berlioz\Core\CoreAwareInterface;

/**
 * Interface RenderingControllerInterface.
 *
 * @package Berlioz\Package\Twig\Controller
 */
interface RenderingControllerInterface extends CoreAwareInterface
{
    /**
     * Do render of templates.
     *
     * @param string  $name      Filename of template
     * @param mixed[] $variables Variables for template
     *
     * @return string Output content
     * @throws \Berlioz\Core\Exception\BerliozException
     * @throws \Twig_Error
     */
    public function render(string $name, array $variables = []): string;
}