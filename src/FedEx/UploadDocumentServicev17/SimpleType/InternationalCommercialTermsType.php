<?php
namespace FedEx\UploadDocumentServicev17\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Should this be a subset, or should it be the complete list of all standard values (about a dozen)?
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class InternationalCommercialTermsType extends AbstractSimpleType
{
    const _CFR = 'CFR';
    const _CIF = 'CIF';
    const _CIP = 'CIP';
    const _CPT = 'CPT';
    const _DAF = 'DAF';
    const _DAP = 'DAP';
    const _DAT = 'DAT';
    const _DDP = 'DDP';
    const _DDU = 'DDU';
    const _DEQ = 'DEQ';
    const _DES = 'DES';
    const _EXW = 'EXW';
    const _FAS = 'FAS';
    const _FCA = 'FCA';
    const _FOB = 'FOB';
}
