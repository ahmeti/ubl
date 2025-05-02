# UBL (Universal Business Language) 
Evrensel İş Dili (UBL), ISO/IEC 19845, tedarik zinciri, tedarik ve nakliye için satın alma emirleri, faturalar, nakliye lojistiği ve irsaliyeler gibi standart elektronik iş belgeleri ve bilgi modellerinin açık bir kütüphanesidir.

https://en.wikipedia.org/wiki/Universal_Business_Language

## Fatura UBL Oluşturma
```php
$invoice = new Ahmeti\Ubl\Invoice(
    UBLVersionID: '2.1', // Uluslararası fatura standardı 2.1
    CustomizationID: 'TR1.2', // GİB UBLTR olarak isimlendirdiği Türkiye'ye özgü 1.2 efatura formatını kullanıyor.
    ProfileID: 'TICARIFATURA', // Ticari, temel vb. çeşitleri var. Ticari faturalarda sistem yanıtı (application response) döner.
    ID: 'FIT2017000000021', // Fatura seri numarası
    CopyIndicator: 'false', // Kopyası mı, asıl süret mi olduğu belirlenir
    UUID: '1d7f3f8b-0b0b-4c8b-8b1f-7f6b1f6b1f6b', // Fatura UUID
    IssueDate: '2021-09-01', // Fatura tarihi Y-m-d
    IssueTime: '12:00:00', // Fatura saati H:i:s
    InvoiceTypeCode: 'SATIS', // Gönderilecek fatura çeşidi, satış, iade vs.
    Note: ['Test not'], // İsteğe bağlı not alanı
    DocumentCurrencyCode: 'TRY', // Efatura para birimi
    LineCountNumeric: 1, // Fatura kalemlerinin sayısı
    AdditionalDocumentReference: [
        // Fatura ID otomatik oluşacak ise bu alanı göndermelisiniz.
        new Ahmeti\Ubl\DocumentReference(
            ID: '000000000000001', // ERP Fatura ID
            IssueDate: '2021-09-01', // Fatura tarihi Y-m-d
            DocumentTypeCode: 'CUST_INV_ID' // Fatura tipi
        ),
    ],
    AccountingSupplierParty: new Ahmeti\Ubl\AccountingSupplierParty(
        Party: new Ahmeti\Ubl\Party(
            WebsiteURI: 'https://ahmeti.com.tr',
            PartyIdentification: new Ahmeti\Ubl\PartyIdentification(
                ID: ['val' => '12345678901', 'attrs' => ['schemeID="VKN"']]
            ),
            PartyName: new Ahmeti\Ubl\PartyName(
                Name: 'Ahmet İmamoğlu'
            ),
            Person: new Ahmeti\Ubl\Person(
                FirstName: 'Ahmet',
                FamilyName: 'İmamoğlu'
            ),
            PostalAddress: new Ahmeti\Ubl\PostalAddress(
                Room: 'kapi no',
                StreetName: 'cadde',
                BuildingName: 'bina',
                BuildingNumber: 'bina no',
                CitySubdivisionName: 'mahalle',
                CityName: 'şehir',
                PostalZone: 'posta kodu',
                Region: 'bölge',
                Country: new Ahmeti\Ubl\Country(
                    Name: 'Türkiye'
                )
            ),
            PartyTaxScheme: new Ahmeti\Ubl\PartyTaxScheme(
                TaxScheme: new Ahmeti\Ubl\TaxScheme(
                    Name: 'Nilüfer'
                )
            ),
            Contact: new Ahmeti\Ubl\Contact(
                Telephone: 'telefon',
                Telefax: 'faks',
                ElectronicMail: 'mail adresi'
            )
        )
    ),
    AccountingCustomerParty: new Ahmeti\Ubl\AccountingCustomerParty(
        Party: new Ahmeti\Ubl\Party(
            WebsiteURI: 'https://ahmeti.com.tr',
            PartyIdentification: new Ahmeti\Ubl\PartyIdentification(
                ID: ['val' => '12345678901', 'attrs' => ['schemeID="VKN"']]
            ),
            PartyName: new Ahmeti\Ubl\PartyName(
                Name: 'GIB'
            ),
            Person: new Ahmeti\Ubl\Person(
                FirstName: 'ADI',
                FamilyName: 'SOYADI'
            ),
            PostalAddress: new Ahmeti\Ubl\PostalAddress(
                Room: 'kapi no',
                StreetName: 'cadde',
                BuildingName: 'bina',
                BuildingNumber: 'bina no',
                CitySubdivisionName: 'mahalle',
                CityName: 'şehir',
                PostalZone: 'posta kodu',
                Region: 'asd',
                Country: new Ahmeti\Ubl\Country(
                    Name: 'Türkiye'
                )
            ),
            PartyTaxScheme: new Ahmeti\Ubl\PartyTaxScheme(
                TaxScheme: new Ahmeti\Ubl\TaxScheme(
                    Name: 'Nilüfer'
                )
            ),
            Contact: new Ahmeti\Ubl\Contact(
                Telephone: 'telefon',
                Telefax: 'faks',
                ElectronicMail: 'mail adresi'
            )
        )
    ),
    AllowanceCharge: new Ahmeti\Ubl\AllowanceCharge(
        ChargeIndicator: false,
        Amount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']]
    ),
    TaxTotal: new Ahmeti\Ubl\TaxTotal(
        TaxAmount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']],
        TaxSubtotal: new Ahmeti\Ubl\TaxSubtotal(
            TaxableAmount: ['val' => '0.99', 'attrs' => ['currencyID="TRY"']],
            TaxAmount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']],
            TaxCategory: new Ahmeti\Ubl\TaxCategory(
                TaxScheme: new Ahmeti\Ubl\TaxScheme(
                    Name: 'KDV',
                    TaxTypeCode: '0015'
                )
            )
        )
    ),
    LegalMonetaryTotal: new Ahmeti\Ubl\LegalMonetaryTotal(
        LineExtensionAmount: ['val' => '1', 'attrs' => ['currencyID="TRY"']],
        TaxExclusiveAmount: ['val' => '0.99', 'attrs' => ['currencyID="TRY"']],
        TaxInclusiveAmount: ['val' => '1', 'attrs' => ['currencyID="TRY"']],
        AllowanceTotalAmount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']],
        PayableAmount: ['val' => '1', 'attrs' => ['currencyID="TRY"']]
    ),
    InvoiceLine: [
        new Ahmeti\Ubl\InvoiceLine(
            ID: '1',
            InvoicedQuantity: ['val' => '1', 'attrs' => ['unitCode="CMT"']],
            LineExtensionAmount: ['val' => '0.99', 'attrs' => ['currencyID="TRY"']],
            AllowanceCharge: new Ahmeti\Ubl\AllowanceCharge(
                ChargeIndicator: false,
                MultiplierFactorNumeric: '0.01',
                Amount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']],
                BaseAmount: ['val' => '1', 'attrs' => ['currencyID="TRY"']],
            ),
            TaxTotal: new Ahmeti\Ubl\TaxTotal(
                TaxAmount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']],
                TaxSubtotal: new Ahmeti\Ubl\TaxSubtotal(
                    TaxableAmount: ['val' => '0.99', 'attrs' => ['currencyID="TRY"']],
                    TaxAmount: ['val' => '0.01', 'attrs' => ['currencyID="TRY"']],
                    Percent: 18,
                    TaxCategory: new Ahmeti\Ubl\TaxCategory(
                        TaxScheme: new Ahmeti\Ubl\TaxScheme(
                            Name: 'KDV',
                            TaxTypeCode: '0015'
                        )
                    )
                )
            ),
            Item: new Ahmeti\Ubl\Item(
                Name: 'Test Ürün',
                Description: 'Test Ürün Açıklaması',
            ),
            Price: new Ahmeti\Ubl\Price(
                PriceAmount: ['val' => '1', 'attrs' => ['currencyID="TRY"']]
            )
        ),
    ]
);

$xml = (new Ahmeti\Ubl\Utils\UblInvoice($invoice))->getXML();
```
