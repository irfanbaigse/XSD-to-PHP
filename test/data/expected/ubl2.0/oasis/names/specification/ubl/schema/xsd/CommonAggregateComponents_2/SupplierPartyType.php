<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName SupplierPartyType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Supplier Party. Details
 * @xmlDefinition Information about the Supplier Party.
 * @xmlObjectClass Supplier Party
 */
class SupplierPartyType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Supplier Party. Customer Assigned_ Account Identifier. Identifier
	 * @Definition The customer's internal identifier for the supplier.
	 * @Cardinality 0..1
	 * @ObjectClass Supplier Party
	 * @PropertyTermQualifier Customer Assigned
	 * @PropertyTerm Account Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName CustomerAssignedAccountID
	 * @var CustomerAssignedAccountID
	 */
	public $CustomerAssignedAccountID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Supplier Party. Additional_ Account Identifier. Identifier
	 * @Definition The customer's internal identifier for the supplier.
	 * @Cardinality 0..n
	 * @ObjectClass Supplier Party
	 * @PropertyTermQualifier Additional
	 * @PropertyTerm Account Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs unbounded
	 * @xmlName AdditionalAccountID
	 * @var AdditionalAccountID
	 */
	public $AdditionalAccountID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Supplier Party. Data Sending Capability. Text
	 * @Definition Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
	 * @Cardinality 0..1
	 * @ObjectClass Supplier Party
	 * @PropertyTerm Data Sending Capability
	 * @RepresentationTerm Text
	 * @DataType Text. Type
	 * @Examples The customer's internal identifier for the supplier.
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName DataSendingCapability
	 * @var DataSendingCapability
	 */
	public $DataSendingCapability;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Supplier Party. Party
	 * @Definition An association to Party.
	 * @Cardinality 0..1
	 * @ObjectClass Supplier Party
	 * @PropertyTerm Party
	 * @AssociatedObjectClass Party
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName Party
	 * @var Party
	 */
	public $Party;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Supplier Party. Despatch_ Contact. Contact
	 * @Definition An association to Despatch Contact.
	 * @Cardinality 0..1
	 * @ObjectClass Supplier Party
	 * @PropertyTermQualifier Despatch
	 * @PropertyTerm Contact
	 * @AssociatedObjectClass Contact
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName DespatchContact
	 * @var DespatchContact
	 */
	public $DespatchContact;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Supplier Party. Accounting_ Contact. Contact
	 * @Definition An association to Supplier Accounting Contact.
	 * @Cardinality 0..1
	 * @ObjectClass Supplier Party
	 * @PropertyTermQualifier Accounting
	 * @PropertyTerm Contact
	 * @AssociatedObjectClass Contact
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName AccountingContact
	 * @var AccountingContact
	 */
	public $AccountingContact;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Supplier Party. Seller_ Contact. Contact
	 * @Definition An association to Seller.
	 * @Cardinality 0..1
	 * @ObjectClass Supplier Party
	 * @PropertyTermQualifier Seller
	 * @PropertyTerm Contact
	 * @AssociatedObjectClass Contact
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName SellerContact
	 * @var SellerContact
	 */
	public $SellerContact;


} // end class SupplierPartyType