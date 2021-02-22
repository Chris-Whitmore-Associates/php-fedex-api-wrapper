<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LabelSpecificationProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentServicev17\SimpleType\LabelSpecificationProcessingOptionType|string[] $Options

 */
class LabelSpecificationProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LabelSpecificationProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\UploadDocumentServicev17\SimpleType\LabelSpecificationProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
