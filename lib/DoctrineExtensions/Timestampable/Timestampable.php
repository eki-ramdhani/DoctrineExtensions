<?php

namespace DoctrineExtensions\Timestampable;

/**
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Timestampable
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @package DoctrineExtensions.Timestampable
 * @subpackage Timestampable
 * @link http://www.gediminasm.org
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
interface Timestampable
{
    // timestampable expects annotations on properties
    
    // Timestampable:OnCreate - dates which should be updated on creation
    // Timestampable:OnUpdate - dates which should be updated on update
    // Timestampable:OnChange(field="field", value="value") - dates which should be updated on changed property to value
    
    /**
     * example
     * 
     * @Timestampable:OnCreate
     * @Column(type="date")
     */
    //$created
}