<?php

namespace Arbor\Model\Hydrator;

interface HydratorInterface
{
    /**
     * @param ModelBase $model
     * @param array $arrayRepresentation
     * @return ModelBase
     */
    public function hydrateModel($model, $arrayRepresentation);

    /**
     * @param ModelBase $model
     * @param bool $abbreviate If set to true only entityType and href array keys will be included
     * @return array
     */
    public function extractArray($model, $abbreviate=false);
}