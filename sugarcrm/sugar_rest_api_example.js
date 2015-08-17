//////////////////////////////////////////
//
// Sugar Rest API References Options Calls
//
// http://backbonejs.org/#Sync
// http://handlebarsjs.com/block_helpers.html
//
//////////////////////////////////////////

// Check if extended APi function is registered in Rest accesing:  http://yoursugar/rest/v10/help

// Create URL
var url = app.api.buildURL('Module', 'read', options.attributes, options.params); // Exx: accounts
url = url + '/filter?max_num=4&'

// Filter Options: contains|starts|ends|equals
var filter = 'filter[0][$or][0][first_name][$starts]=' + queryStr + '&filter[0][$or][1][last_name][$starts]=' + queryStr + '';
filter += '&fields=id,account_id,full_name,first_name,last_name'


//app.api.call(method, url, null, callbacks, options.params);
var AjaxCall = app.api.call(
    "read",         // methods:  read|update|create|patch|delete      # http://backbonejs.org/#Sync
    url + filter,   // url
    null,           // data {} - params args
    {
        // callbacks here
        success: function (response) {

            console.log(response)

            // Example extra callbacks
            app.controller.context.trigger(
                'subpanel:reload',
                {
                    links: ['Module'], // Ex: notes
                    actionCommand: {

                        "1": app.api.call(
                            "update",
                            "rest/v10/Contacts/f110f2eb-dbeb-f2d5-8b05-548ea6d285c9?viewed=1",
                            {
                                "department": "test - " + new Date().getTime()
                            },
                            {
                                success: function (data) {

                                }
                            },
                            {
                                "data": "&viewed=1",
                                "dataType": "json",
                                "type": "PUT"
                            }
                        ),
                        "2": app.router.navigate (
                            App.router.buildRoute('Contacts', 'f110f2eb-dbeb-f2d5-8b05-548ea6d285c9', null),
                            {trigger: true}
                        )

                    }
                });

        },
        complete: function () {

        },
        error: function (response) {
            console.log(response)
        }
    },
    {
        "data": "&filter=" + filter,
        "dataType": "json",
        "type": "GET"
    }
);
