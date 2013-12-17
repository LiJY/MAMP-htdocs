(function ($) {
  AjaxSolr.ResultWidget = AjaxSolr.AbstractWidget.extend({

    start: 0,

    beforeRequest: function () {
      $(this.target).html($('<img>').attr('src', 'images/ajax-loader.gif'));
    },

    facetLinks: function (facet_field, facet_values) {
      var links = [];
      if (facet_values) {
        for (var i = 0, l = facet_values.length; i < l; i++) {
          links.push(
            $('<a href="#"></a>')
            .text(facet_values[i])
            .click(this.facetHandler(facet_field, facet_values[i]))
            );
        }
      }
      return links;
    },

    facetHandler: function (facet_field, facet_value) {
      var self = this;
      return function () {
        self.manager.store.remove('fq');
        self.manager.store.addByValue('fq', facet_field + ':' + AjaxSolr.Parameter.escapeValue(facet_value));
        self.doRequest();
        return false;
      };
    },

    afterRequest: function () {
      $(this.target).empty();
      for (var i = 0, l = this.manager.response.response.docs.length; i < l; i++) {
        var doc = this.manager.response.response.docs[i];
        $(this.target).append(this.template(doc));
      }

      var items = [];
      items = items.concat(this.facetLinks(doc.Politiques));
      items = items.concat(this.facetLinks(doc.Thematiques1));
      items = items.concat(this.facetLinks(doc.Thematiques2));

      var $links = $('#links_' + doc.NumGP);
      $links.empty();
      for (var j = 0, m = items.length; j < m; j++) {
        $links.append($('<li></li>').append(items[j]));
      }
    },

    template: function (doc) {
      var snippet = '';

        snippet += '<ul class="infoComplet" style="display:none;">'
        snippet += '<li>' + 'Politiques : ' + doc.Politiques +'</li>';
        snippet += '<li>' + 'Thematiques1 : ' + doc.Thematiques1 +'</li>';
        snippet += '<li>' + 'Thematiques2 : ' + doc.Thematiques2 +'</li>';
        snippet += '</ul>'
        snippet += '<a href="#" class="more"> more</a>' + '</br>';






      var output = '<div><h2>' + doc.NumGP + " : " + doc.NomGP + '</h2>';
      output += '<p id="links_' + doc.NumGP + '" class="links"></p>';
      output += '<p>' + snippet + '</p></div>';
      return output;
    },

    init: function () {
      $(document).on('click', 'a.more', function () {
        var $this = $(this),
        ul = $this.parent().find('ul');

        if (ul.is(':visible')) {
          ul.hide();
          $this.text('more');
        }
        else {
          ul.show();
          $this.text('less');
        }

        return false;
      });
    },

  });
})(jQuery);