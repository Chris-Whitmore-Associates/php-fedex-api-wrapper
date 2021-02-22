<?php
namespace FedEx\UploadDocumentServicev17\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CreditCardTransactionAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CreditCardTransactionAttributeType extends AbstractSimpleType
{
    const _ORIGINATED_BY_AUTHORIZED_PERSONNEL = 'ORIGINATED_BY_AUTHORIZED_PERSONNEL';
    const _ORIGINATED_BY_UNAUTHORIZED_PERSONNEL = 'ORIGINATED_BY_UNAUTHORIZED_PERSONNEL';
}
