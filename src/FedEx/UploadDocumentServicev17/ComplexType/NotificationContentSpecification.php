<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationContentSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentServicev17\SimpleType\NotificationContentType|string[] $Exclusions

 */
class NotificationContentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NotificationContentSpecification';

    /**
     * Set Exclusions
     *
     * @param \FedEx\UploadDocumentServicev17\SimpleType\NotificationContentType[]|string[] $exclusions
     * @return $this
     */
    public function setExclusions(array $exclusions)
    {
        $this->values['Exclusions'] = $exclusions;
        return $this;
    }
}
