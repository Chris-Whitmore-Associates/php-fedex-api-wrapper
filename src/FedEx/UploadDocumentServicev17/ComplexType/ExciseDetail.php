<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExciseDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $Category
 * @property ExciseCondition[] $Conditions
 * @property Measure[] $Measures

 */
class ExciseDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExciseDetail';

    /**
     * Set Category
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->values['Category'] = $category;
        return $this;
    }

    /**
     * Set Conditions
     *
     * @param ExciseCondition[] $conditions
     * @return $this
     */
    public function setConditions(array $conditions)
    {
        $this->values['Conditions'] = $conditions;
        return $this;
    }

    /**
     * Set Measures
     *
     * @param Measure[] $measures
     * @return $this
     */
    public function setMeasures(array $measures)
    {
        $this->values['Measures'] = $measures;
        return $this;
    }
}
