<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentInclusionSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentServicev17\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\UploadDocumentServicev17\SimpleType\ServiceCategoryType|string $ServiceCategory

 */
class ShipmentInclusionSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentInclusionSpecification';

    /**
     * Specifies which carrier should be included.
     *
     * @param \FedEx\UploadDocumentServicev17\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set ServiceCategory
     *
     * @param \FedEx\UploadDocumentServicev17\SimpleType\ServiceCategoryType|string $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->values['ServiceCategory'] = $serviceCategory;
        return $this;
    }
}
