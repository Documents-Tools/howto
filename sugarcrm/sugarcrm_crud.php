<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 30.11.15
 * Time: 09:21
 */


/*
---------------------------------------------------
Create Custom Random ID
---------------------------------------------------
*/

if(empty($bean->id))
{
	$bean->id = create_guid();
	$bean->new_with_id = true;
}
/*
---------------------------------------------------
Identifying New from Existing Records
---------------------------------------------------
*/
if (!isset($bean->fetched_row['id'])){
	//new record
}
else{
	//existing record
}
# or
if (!empty($this->bean->fetched_row['id'])) {
	// record is new
}
//Or yet another to check for the elusive record
else if (!is_array($this->bean->fetched_row)) {
	// record is new
}


/*
---------------------------------------------------
Saving a Bean with a Specific Id
---------------------------------------------------
*/
//Create bean
$bean = BeanFactory::newBean($module);
//Set the record id
$bean->id = '38c90c70-7788-13a2-668d-513e2b8df5e1';
$bean->new_with_id = true;
//Populate bean fields
$bean->name = 'Example Record';
//Save
$bean->save();

/*
---------------------------------------------------
Obtaining the Id of a Recently Saved Bean
---------------------------------------------------
*/
//Create bean
$bean = BeanFactory::newBean($module);
//Populate bean fields
$bean->name = 'Example Record';
//Save
$bean->save();
//Retrieve the bean id
$record_id = $bean->id;

/*
---------------------------------------------------
Delete Record
---------------------------------------------------
*/
$focus->retrieve('the record id');
$focus->mark_deleted();
$focus->save();

/*
---------------------------------------------------
Update
---------------------------------------------------
*/
$focus->retrieve('the record id');
$focus->name = 'Tom';
$focus->city = 'Baltimore';
$focus->save();

/*
---------------------------------------------------
Get RelationShep
---------------------------------------------------
*/
$focus = new Account();
$focus->retrieve('my record id');
$focus->load_relationship('contacts');

$list = array();
foreach ($focus->contacts->getBeans() as $contact) {
	$list[$contact->id] = $contact;
}

/*
---------------------------------------------------
Add and Delete RelationShep
---------------------------------------------------
*/

$focus = new Account();
$focus->retrieve('my account id');
$focus->load_relationship('contacts');
$focus->contacts->add('my contact id');
$focus->save();

$focus = new Account();
$focus->retrieve('my account id');
$focus->load_relationship('contacts');
$focus->contacts->delete($focus->id, 'my contact id');
$focus->save();

/*
---------------------------------------------------
Insert Record with Custom ID
---------------------------------------------------
*/
$current_id = $bean->fetched_row['id'];
$focus = BeanFactory::getBean('Account', $current_id);
$focus->id = create_guid();
$focus->new_with_id = true;
$focus->save();


/*
---------------------------------------------------
Include Bean Class
---------------------------------------------------
*/
global $beanList;
global $beanFiles;
include_once ($beanFiles [ $bean_name ]) ;

$focus = new $bean_name();
$focus->retrieve($bean_id);
$focus->some_field = 'new value';
$focus->save();


/**
 * https://developer.sugarcrm.com/2012/03/23/howto-using-the-bean-instead-of-sql-all-the-time/
 * http://developer.sugarcrm.com/2012/03/23/howto-using-the-bean-instead-of-sql-all-the-time/
 * http://www.geekgumbo.com/2014/10/07/sugarcrm-the-sugarbean/
 * http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.5/Application_Framework/Teams/Manipulating_Teams_Programatically/
 * http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.7/Application_Framework/SugarBean/Fetching_Relationships/
 * http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.5/Application_Framework/SugarBean/CRUD_Handling/
 */