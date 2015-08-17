
/////////////////////////////////////////////////
///
/// Javascript mini Cheatsheet
///
////////////////////////////////////////////////

//---------------------------------------
// Match
//---------------------------------------
if(location.href.match(/#YourString/)){
    // ...do someting
}
if (element.toString().indexOf("#YourString") != -1) {
    //...do someting
}


//---------------------------------------
// Regex V1
//---------------------------------------
// var regexEmail = "[a-zA-Z0-9._%+-]+@[A-Z0-9.-]+\.[a-zA-Z]{2,4}"
var text = location.href;
var regex = /#(.*)+/g;
var match = regex.exec(text);
var SomeId = match[0].replace("#YourString/","");


//---------------------------------------
// Regex V2
//---------------------------------------
var arr = text.match(/#(.*)+/g) || [""]; //could also use null for empty value
var SomeId = arr[0].replace("#YourString/","");


//---------------------------------------
// Set value to child
//---------------------------------------
$('[data-fieldname="somefield_c"]').children().children().attr('readonly',true);


//---------------------------------------
// Search recursive in DOM
//---------------------------------------
$(this).parent().parent().parent().find('input.somefield:first').val();
$(this).parent().closest('input.somefield').val();


//---------------------------------------
// Remove chars
//---------------------------------------
var FieldName = FieldName.replace(/(\(\(0\)\)|\(0\))/g, function (m) {
    return m == '(0)' ? '' : m
});
FieldName = FieldName.replace(/\D/g, '');


//---------------------------------------
// Loop through objects
//---------------------------------------
_.each(data, function(item, index){
    //...do someting
});
$.each(data, function( index, value ) {
    // ...do someting
});


//---------------------------------------
// Split string
//---------------------------------------
var someVar    = element.toString().split('#YourString/');


//---------------------------------------
// Replace string
//---------------------------------------
var someVar    = element.toString().replace('x','');
