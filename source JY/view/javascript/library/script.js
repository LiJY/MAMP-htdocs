
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



});
