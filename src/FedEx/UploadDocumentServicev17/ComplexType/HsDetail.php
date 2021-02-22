<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * HsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $Code
 * @property string $Description
 * @property string[] $UnitsOfMeasure
 * @property ExciseDetail[] $ExciseDetails
 * @property \FedEx\UploadDocumentServicev17\SimpleType\InternationalCommercialTermsType|string[] $InCoTerms
 * @property string $Ancestry

 */
class HsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HsDetail';

    /**
     * Set Code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set UnitsOfMeasure
     *
     * @param string $unitsOfMeasure
     * @return $this
     */
    public function setUnitsOfMeasure($unitsOfMeasure)
    {
        $this->values['UnitsOfMeasure'] = $unitsOfMeasure;
        return $this;
    }

    /**
     * Set ExciseDetails
     *
     * @param ExciseDetail[] $exciseDetails
     * @return $this
     */
    public function setExciseDetails(array $exciseDetails)
    {
        $this->values['ExciseDetails'] = $exciseDetails;
        return $this;
    }

    /**
     * Set InCoTerms
     *
     * @param \FedEx\UploadDocumentServicev17\SimpleType\InternationalCommercialTermsType[]|string[] $inCoTerms
     * @return $this
     */
    public function setInCoTerms(array $inCoTerms)
    {
        $this->values['InCoTerms'] = $inCoTerms;
        return $this;
    }

    /**
     * Concatenated descriptions of parent harmonized codes.
     *
     * @param string $ancestry
     * @return $this
     */
    public function setAncestry($ancestry)
    {
        $this->values['Ancestry'] = $ancestry;
        return $this;
    }
}
