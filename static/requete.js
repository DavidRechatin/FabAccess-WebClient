

// jsoncallback({demandes: 6490, offres: 16804, membres:32908, posts:364558, docs:864});


$.getJSON( "static/test.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "#bodyyy" );
});
// alert("ok");



        // $.getJSON("static/test.json", function(result){
        //     $.each(result, function(i, field){
        //         $("#bodyyy").append(field + " ");
        //     });
        //   });
