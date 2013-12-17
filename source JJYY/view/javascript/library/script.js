
$(document).ready(function(){
    //js pour liste des indicateur
    $('#listIndicator').accordion({collapsible:true});

    //js pour les tabs
    $( "#listIndicator div ul" ).selectable({
      stop: function() {
        var result = $( "#select-result" ).empty();
        $( ".ui-selected", this ).each(function() {
          var index = $( "#selectable li" ).index( this );
          result.append( " #" + ( index + 1 ) );
        });
      }
    });

          $('.tabBody:not(:first)').hide();
          $('.tabs li:first').addClass('active');
          $('.tabs li').click(function(){
            $(this).addClass('active').siblings('li.active').removeClass('active');
            $('.tabBody').hide();
            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn('slow');
            return false;
          });
//pour le selecteurs des années sur tab "table"
$("#yearSelector").multiselect({ 
   selectedText: " Years (#/#)"
});
$("#yearSelector").multiselect({ 
   noneSelectedText: "Years"
});
$('.ui-multiselect').width(150);

//pour le selecteurs des années sur tab "graph"
$("#yearSelector2").multiselect({ 
   selectedText: " Years (#/#)"
});
$("#yearSelector2").multiselect({ 
   noneSelectedText: "Years"
});
$('.ui-multiselect').width(150);

//pour le selecteurs des colonnes
$(".colonnes").multiselect({ 
   selectedText: " Colonne (#/#)"
});
$(".colonnes").multiselect({ 
   noneSelectedText: "Colonne"
});
$('.ui-multiselect').width(150);





// Charts visualization control
 $('#tableExample').visualize({type: 'pie', width: '620px',height: '300px'})
           .appendTo('#graphDisplay');
 $('#tableExample').visualize({type: 'bar', width: '620px',height: '300px'})
           .appendTo('#graphDisplay');
 $('#tableExample').visualize({type: 'area', width: '620px',height: '300px'})
           .appendTo('#graphDisplay');
 $('#tableExample').visualize({type: 'line', width: '620px',height: '300px'})
           .appendTo('#graphDisplay');

    $(".visualize-pie").show();
    $(".visualize-bar").hide();
    $(".visualize-area").hide();
    $(".visualize-line").hide();

$("#graphSelector").change(function(){
  var value = this.value;
switch(value)
{
case "pie":
    $(".visualize-pie").show();
    $(".visualize-bar").hide();
    $(".visualize-area").hide();
    $(".visualize-line").hide();
  break;
case "bar":
    $(".visualize-pie").hide();
    $(".visualize-bar").show();
    $(".visualize-area").hide();
    $(".visualize-line").hide();
  break;
case "area":
    $(".visualize-pie").hide();
    $(".visualize-bar").hide();
    $(".visualize-area").show();
    $(".visualize-line").hide();
  break;
case "line":
    $(".visualize-pie").hide();
    $(".visualize-bar").hide();
    $(".visualize-area").hide();
    $(".visualize-line").show();   
  break;  
  default:
    $(".visualize-pie").hide();
    $(".visualize-bar").hide();
    $(".visualize-area").hide();
    $(".visualize-line").hide();  
}
});
});
