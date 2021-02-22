<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtCommodityTax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $HarmonizedCode
 * @property HsDetail[] $AlternateHarmonizedCodes
 * @property EdtTaxDetail[] $Taxes
 * @property Money $Total

 */
class EdtCommodityTax extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EdtCommodityTax';

    /**
     * Set HarmonizedCode
     *
     * @param string $harmonizedCode
     * @return $this
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->values['HarmonizedCode'] = $harmonizedCode;
        return $this;
    }

    /**
     * Set AlternateHarmonizedCodes
     *
     * @param HsDetail[] $alternateHarmonizedCodes
     * @return $this
     */
    public function setAlternateHarmonizedCodes(array $alternateHarmonizedCodes)
    {
        $this->values['AlternateHarmonizedCodes'] = $alternateHarmonizedCodes;
        return $this;
    }

    /**
     * Set Taxes
     *
     * @param EdtTaxDetail[] $taxes
     * @return $this
     */
    public function setTaxes(array $taxes)
    {
        $this->values['Taxes'] = $taxes;
        return $this;
    }

    /**
     * Set Total
     *
     * @param Money $total
     * @return $this
     */
    public function setTotal(Money $total)
    {
        $this->values['Total'] = $total;
        return $this;
    }
}
