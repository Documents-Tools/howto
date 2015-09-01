/**
* Created by emil on 18.08.15.
*/



// Get info user
// -----------------------------------------------------
var u_id 		= app.user.id; // if (u_id == 'seed_jim_id') {}
var u_fullname 	= app.user.get("full_name");


// Get info admin + manager
// -----------------------------------------------------
var isManager       = app.user.get('is_manager');
var isAdmin         = app.user.type; // admin?
if(isAdmin=="admin"){} // admin|user


// Get info user by id
// -----------------------------------------------------
var user         = app.data.createBean('Users', {id: app.user.id});
//var acls         = app.user.getAcls().Contacts,hasAccess=(!_.has(acls,'access')||acls.access=='yes')....


// Modify acl info
// -----------------------------------------------------
var usrAcl          = App.user.getAcls();
usrAcl.Accounts.create = 'no';
App.user.set("acls", usrAcl);


// Get preferences
// -----------------------------------------------------
var usrPref = app.user.getPreference('email_client_preference');
this.model.set('assigned_user_id', app.user.id);
//app.user.set(data.initData.userData);


// Get info and roles from user by id
/*  Author: Angel Magaña - cheleguanaco@cheleguanaco.com
 *
 *   This Gist can be used within a Sugar 7 Controller to retrieve a user's
 *   security Roles
 *   http://cheleguanaco.blogspot.de/2014/04/sugarcrm-cookbook-retrieving-user-roles.html
 *
 */
// -----------------------------------------------------
var user = app.data.createBean('Users', {id: app.user.id});
user.fetch();
var user_roles = user.getRelatedCollection('aclroles');
user_roles.fetch({relate:true});


