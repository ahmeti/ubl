<?php

namespace Ahmeti\Ubl;

class UblInvoiceHelper extends UblHelper
{
    public function getXML(): string
    {
        $namespaces = [
            'xmlns' => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2',
            'xmlns:cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
            'xmlns:cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
            'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            'xmlns:ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
            'xmlns:ns8' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
            'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
            'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            'xsi:schemaLocation' => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2 UBL-Invoice-2.1.xsd',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<Invoice '.$this->toNamespaces($namespaces).'>';
        $xml .= $this->getUblExtensions();
        $this->toXml($this->object, $xml);
        $xml .= '</Invoice>';

        return $xml;
    }

    public function getApplicationResponseXML(): string
    {
        $namespaces = [
            'xmlns' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
            'xmlns:cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
            'xmlns:cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
            'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            'xmlns:ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
            'xmlns:ns8' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
            'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
            'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            'xsi:schemaLocation' => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2 UBL-Invoice-2.1.xsd',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<ApplicationResponse '.$this->toNamespaces($namespaces).'>';
        $this->toXml($this->object, $xml);
        $xml .= '</ApplicationResponse>';

        return $xml;
    }
}
