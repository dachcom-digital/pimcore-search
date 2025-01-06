<?php

/*
 * This source file is available under two different licenses:
 *   - GNU General Public License version 3 (GPLv3)
 *   - DACHCOM Commercial License (DCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) DACHCOM.DIGITAL AG (https://www.dachcom-digital.com)
 * @license    GPLv3 and DCL
 */

namespace DynamicSearchBundle\Registry;

use DynamicSearchBundle\Document\Definition\DocumentDefinitionBuilderInterface;
use DynamicSearchBundle\Filter\Definition\FilterDefinitionBuilderInterface;

interface DefinitionBuilderRegistryInterface
{
    /**
     * @return array<int, DocumentDefinitionBuilderInterface>
     */
    public function getAllDocumentDefinitionBuilder(): array;

    /**
     * @return array<int, FilterDefinitionBuilderInterface>
     */
    public function getAllFilterDefinitionBuilder(): array;
}
