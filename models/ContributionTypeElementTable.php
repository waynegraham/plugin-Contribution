<?php
/**
 * @version $Id$
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @copyright Center for History and New Media, 2010
 * @package Contribution
 * @subpackage Models
 */

/**
 * Table that links types to elements.
 *
 * @package Contribution
 * @subpackage Models
 */
class ContributionTypeElementTable extends Omeka_Db_Table
{
    protected $_alias = 'cte';
    
    /**
     * Retrieves ContributionTypeElements associated with the given type.
     *
     * @param ContributionType|int $type ContributionType to search for
     * @return array Array of ContributionTypeElements
     */
    public function findByType($type)
    {
        if (is_int($type)) {
            $typeId = $type;
        } else {
            $typeId = $type->id;
        }
        
        return $this->findBySql('type_id = ?', array($typeId));
    }
    
    public function getSelect()
    {
        $select = parent::getSelect();
        $select->order('order ASC');
        return $select;
    }
} 