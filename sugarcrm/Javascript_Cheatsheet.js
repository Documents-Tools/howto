
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

({
	// sugarCRM 7.X
	_renderFields: function(){
		this._super('_renderFields');
		var field = this.getField("field_a_c");
		if(field && this.model.get("field_b_c") ) {
			//if(field.tplName=="edit"){
			//field.setMode('readonly');
			field.setMode('disabled');
			//field.setMode('edit');
			//field.setMode('detail');
			//}
		}
	}
})



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
FieldName = FieldName.replace(/[^0-9]/g, '');


//---------------------------------------
// Remove digits
//---------------------------------------
FieldName = FieldName.replace(/[^a-zA-Z]/g, '');


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


//---------------------------------------
// Select by value
//---------------------------------------
$('#fild :input[value="123"]').show();


//---------------------------------------
// Match selected options from select tag element jQuery
//---------------------------------------

$("#select > option").each(function() {
	alert(this.text + ' ' + this.value);
});

$(function() {
	$("#select option").each(function(i){
		alert($(this).text() + " : " + $(this).val());
	});
});

$('#select').find('option').each(function(index,element){
	console.log(index);
	console.log(element.value);
	console.log(element.text);
});

$('#select option').each(function(index,element){
	console.log(index);
	console.log(element.value);
	console.log(element.text);
});

//---------------------------------------
// Match selected checkboxes from select tag element jQuery
//---------------------------------------

var maxSyncFields = $('.sync_statusbox').length;
var checked = 0;
for (var i = 0; i <= maxSyncFields; i++) {
	if ($('.sync_statusbox').eq(i).attr("checked") == "checked") {
		var fieldKey = $(".labelname").eq(i).attr("data-labelname");
		checked++;
	}
}



