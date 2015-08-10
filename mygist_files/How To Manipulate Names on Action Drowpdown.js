//////////////////////////////////////////////////
//
// How To Manipulate Names on Action Drowpdown Sugar7 with Javascript
//
//////////////////////////////////////////////////

({
    extendsFrom: 'RecordView',
    events: {
        'click [track="click:actiondropdown"]': "UpdateMyButton"
    },
    initialize: function (options) {
        this._super('initialize', [options]);

    },
    UpdateMyButton:  function () {
       
	var NewButton = "New Action Name";
        var obMenuLst = $('.actions .dropdown-menu li span a'); // actions btn-group detail
         $.each(obMenuLst,function(index,item){
    
            if(item.innerHTML.match(/DefaultNameBttn/)){
                $('.actions .dropdown-menu li span a').eq(index).text(NewButton)
            }
        });

    },
    _dispose: function () {
        this._super('_dispose');
    }
})