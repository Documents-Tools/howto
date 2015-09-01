########################################################
##
## SugarCRM Query Get All Emails related with Contact
##
########################################################

SELECT l1.email_address FROM contacts
LEFT JOIN email_addr_bean_rel l1_1 ON contacts.id=l1_1.bean_id
AND l1_1.deleted=0
#AND l1_1.primary_address = '1'
AND l1_1.bean_module = 'Contacts'
LEFT JOIN email_addresses l1 ON l1.id=l1_1.email_address_id AND l1.deleted=0
WHERE contacts.deleted=0 AND contacts.id= 'ffcd0f4b-b3a2-b523-9382-55b910c7dec2'

########################################################
##
## SugarCRM Query Get All Contacts with Primary Email
##
########################################################

SELECT * FROM contacts
LEFT JOIN email_addr_bean_rel l1_1 ON contacts.id=l1_1.bean_id AND l1_1.deleted=0 AND l1_1.primary_address = '1' AND l1_1.bean_module = 'Contacts'
LEFT JOIN email_addresses l1 ON l1.id=l1_1.email_address_id AND l1.deleted=0
WHERE ((((coalesce(LENGTH(contacts.first_name),0) > 0) )
AND ((coalesce(LENGTH(contacts.last_name),0) > 0) )
AND ((coalesce(LENGTH(l1.email_address),0) > 0) )))
AND contacts.deleted=0

