<?php

namespace Ahmeti\Ubl\Utils;

use Ahmeti\Ubl\ApplicationResponse;
use Ahmeti\Ubl\DespatchAdvice;
use Ahmeti\Ubl\Invoice;

abstract class UblHelper
{
    public function __construct(
        protected Invoice|DespatchAdvice|ApplicationResponse $object
    ) {}

    protected function toXml(object $object, string &$xml): void
    {
        $data = get_object_vars($object);

        foreach ($data as $key => $val) {
            if (is_object($val)) {
                $xml .= '<cac:'.$key.'>';
                $this->toXml($val, $xml);
                $xml .= '</cac:'.$key.'>';
            } else {
                if (is_array($val)) {
                    if (isset($val['val'])) {
                        $xml .= '<cbc:'.$key.' '.implode(' ', $val['attrs']).'>'.$val['val'].'</cbc:'.$key.'>';
                    } else {
                        foreach ($val as $v) {
                            if (is_object($v)) {
                                $xml .= '<cac:'.$key.'>';
                                $this->toXml($v, $xml);
                                $xml .= '</cac:'.$key.'>';
                            } else {
                                $xml .= '<cbc:'.$key.'>'.$v.'</cbc:'.$key.'>';
                            }
                        }
                    }
                } else {
                    if (! is_null($val)) {
                        if ($val === '') {
                            $xml .= '<cbc:'.$key.' />';
                        } else {
                            $xml .= '<cbc:'.$key.'>'.$val.'</cbc:'.$key.'>';
                        }
                    }
                }
            }
        }
    }

    protected function toNamespaces(array $namespaces): string
    {
        $ns = [];
        foreach ($namespaces as $key => $val) {
            $ns[] = $key.'="'.$val.'"';
        }

        return implode(' ', $ns);
    }

    protected function getUblExtensions(): string
    {
        return implode('', [
            '<ext:UBLExtensions>',
            '<ext:UBLExtension>',
            '<ext:ExtensionContent>',
            '<ds:Signature>',
            '<ds:SignedInfo>',
            '<ds:CanonicalizationMethod Algorithm=""/>',
            '<ds:SignatureMethod Algorithm=""/>',
            '<ds:Reference>',
            '<ds:DigestMethod Algorithm=""/>',
            '<ds:DigestValue/>',
            '</ds:Reference>',
            '</ds:SignedInfo>',
            '<ds:SignatureValue/>',
            '</ds:Signature>',
            '</ext:ExtensionContent>',
            '</ext:UBLExtension>',
            '</ext:UBLExtensions>',
        ]);
    }

    abstract public function getXML(): string;
}
