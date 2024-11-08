<?php

namespace NFePHP\NFSe\Counties\M3170206;

/**
 * Classe para a comunicação com os webservices da
 * Cidade de Uberlandia MG
 * conforme o modelo DSFNET
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Counties\M3170206\Tools
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use NFePHP\NFSe\Models\Dsfnet\Tools as ToolsDsfnet;

class Tools extends ToolsDsfnet
{
    /**
     * Webservices URL
     * @var array
     */
    protected $url = [
        1 => 'https://nfsews.uberlandia.mg.gov.br:8003/nfse-ws/soap/nfse',
        2 => ''
    ];
    /**
     * County Namespace
     * @var string
     */
    protected $xmlns = 'http://proces.wsnfe2.dsfnet.com.br';

    /**
     * Soap Version
     * @var int
     */
    protected $soapversion = SOAP_1_1;
    /**
     * SIAFI County Cod
     * @var int
     */
    protected $codcidade = 5403;
    /**
     * Indicates when use CDATA string on message
     * @var boolean
     */
    protected $withcdata = true;
    /**
     * Encription signature algorithm
     * @var string
     */
    protected $algorithm = OPENSSL_ALGO_SHA1;
    /**
     * Version of schemas
     * @var int
     */
    protected $versao = 1;
    /**
     * namespaces for soap envelope
     * @var array
     */
    protected $namespaces = [
        1 => [
            'xmlns:xsi' => "http://www.w3.org/2001/XMLSchema-instance",
            'xmlns:xsd' => "http://www.w3.org/2001/XMLSchema",
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns' => "http://proces.wsnfe2.dsfnet.com.br"
        ],
        2  => []
    ];
}
