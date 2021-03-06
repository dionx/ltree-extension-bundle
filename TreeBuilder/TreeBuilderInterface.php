<?php
/**
 * Created by PhpStorm.
 * User: levsemin
 * Date: 14.03.15
 * Time: 16:04
 */

namespace Slev\LtreeExtensionBundle\TreeBuilder;


interface TreeBuilderInterface
{
    /**
     * @param \Traversable|\Countable|array $list
     * @param string $pathName name of path property
     * @param null|string $parentPath path from parent entity
     * @param null|string $parentName parent property name
     * @param null|string $childrenName child property name
     * @return array|object
     */
    public function buildTree($list, $pathName, $parentPath=null, $parentName=null, $childrenName=null);
}