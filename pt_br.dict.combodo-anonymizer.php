<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2018 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	// Dictionary entries go here
	'Anonymization:AnonymizeAll' => 'Anonymize All~~',
	'Anonymization:AnonymizeOne' => 'Anonymize~~',
	'Anonymization:OnePersonWarning' => 'Are you sure that you want to anonymize this Person? (this cannot be undone)~~',
	'Anonymization:ListOfPersonsWarning' => 'Are you sure that you want to anonymize %d Persons? (this cannot be undone)~~',
	'Anonymization:Confirmation' => 'Please confirm~~',
	'Anonymization:Information' => 'Information~~',
	'Anonymization:RefreshTheList' => 'Refresh the list to see the effect of anonymization...~~',
	'Anonymization:DoneOnePerson' => 'The contact has been anonymized...~~',
	'Anonymization:InProgress' => 'Anonymization in progress...~~',
	'Anonymization:Success' => 'Anonymization successful~~',
	'Anonymization:Error' => 'Anonymization FAILED~~',
	'Anonymization:Close' => 'Close~~',
	'Anonymization:Configuration' => 'Configuration~~',
	'Menu:ConfigAnonymizer' => 'Anonymization~~',
	'Anonymization:AutomationParameters' => 'Automatic anonymization~~',
	'Anonymization:NotificationsPurgeParameters' => 'Automatic purge of notifications~~',
	'Anonymization:AnonymizationDelay_Input' => 'Automatically anonymize Persons which are obsolete since more than %1$s days.~~',
	'Anonymization:PurgeDelay_Input' => 'Automatically delete all notifications emitted since more than %1$s days.~~',
	
	// Default values used during anonymization
	'Anonymization:Person:name' => 'Contact~~',
	'Anonymization:Person:first_name' => 'Anonymous~~',
	'Anonymization:Person:email' => '%1$s.%2$s%3$s@anony.mized',
));

//
// Class: Person
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Person/Attribute:anonymized' => 'Anonymized~~',
	'Class:Person/Attribute:anonymized+' => '~~',
));
