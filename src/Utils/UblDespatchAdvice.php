<?php

namespace Ahmeti\Ubl\Utils;

class UblDespatchAdvice extends UblHelper
{
    public function getXML(): string
    {
        $namespaces = [
            'xmlns:ubltr' => 'urn:oasis:names:specification:ubl:schema:xsd:TurkishCustomizationExtensionComponents',
            'xmlns:qdt' => 'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2',
            'xmlns:cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
            'xmlns:cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
            'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            'xmlns:ccts' => 'urn:un:unece:uncefact:documentation:2',
            'xmlns:ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
            'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
            'xmlns:udt' => 'urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2',
            'xmlns' => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2',
            'xmlns:q1' => 'urn:oasis:names:specification:ubl:schema:xsd:DespatchAdvice-2',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<q1:DespatchAdvice '.$this->toNamespaces($namespaces).'>';
        $xml .= $this->getUblExtensions();
        $this->toXml($this->object, $xml);
        $xml .= '</q1:DespatchAdvice>';

        return $xml;
    }

    public function getApplicationResponseXML(): string
    {
        $namespaces = [
            'xmlns:ubltr' => 'urn:oasis:names:specification:ubl:schema:xsd:TurkishCustomizationExtensionComponents',
            'xmlns:qdt' => 'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2',
            'xmlns:cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
            'xmlns:cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
            'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            'xmlns:ccts' => 'urn:un:unece:uncefact:documentation:2',
            'xmlns:ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
            'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
            'xmlns:udt' => 'urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2',
            'xmlns' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
            'xmlns:q1' => 'urn:oasis:names:specification:ubl:schema:xsd:DespatchAdvice-2',
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<ApplicationResponse '.$this->toNamespaces($namespaces).'>';
        $this->toXml($this->object, $xml);
        $xml .= '</ApplicationResponse>';

        return $xml;
    }
}
