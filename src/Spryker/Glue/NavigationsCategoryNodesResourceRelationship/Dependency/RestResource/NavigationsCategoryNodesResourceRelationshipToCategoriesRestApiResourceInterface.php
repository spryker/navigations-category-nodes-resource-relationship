<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\NavigationsCategoryNodesResourceRelationship\Dependency\RestResource;

use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface;

interface NavigationsCategoryNodesResourceRelationshipToCategoriesRestApiResourceInterface
{
    public function findCategoryNodeById(int $nodeId, string $locale): ?RestResourceInterface;
}
