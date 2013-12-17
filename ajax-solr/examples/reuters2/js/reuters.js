var Manager;

(function ($) {

	$(function () {
		Manager = new AjaxSolr.Manager({
			solrUrl: 'http://localhost:8983/solr/reuters/'
		});
		Manager.addWidget(new AjaxSolr.ResultWidget({
			id: 'result',
			target: '#docs'
		}));

		// step 3
		Manager.addWidget(new AjaxSolr.PagerWidget({
			id: 'pager',
			target: '#pager',
			prevLabel: '&lt;',
			nextLabel: '&gt;',
			innerWindow: 1,
			renderHeader: function (perPage, offset, total) {
				$('#pager-header').html($('<span></span>').text('displaying ' + Math.min(total, offset + 1) + ' to ' + Math.min(total, offset + perPage) + ' of ' + total));
			}
		}));


		// step 5
		Manager.addWidget(new AjaxSolr.CurrentSearchWidget({
			id: 'currentsearch',
			target: '#selection',
		}));

		// step 6 search bar free text

		// Manager.addWidget(new AjaxSolr.TextWidget({
		// 	id: 'text',
		// 	target: '#search'
		// }));

		// step 7 replace step 6 by this

		Manager.addWidget(new AjaxSolr.AutocompleteWidget({
			id: 'text',
			target: '#search',
			fields: [ 'topics', 'organisations', 'exchanges' ]
		}));

		// step 9 calendar

		Manager.addWidget(new AjaxSolr.CalendarWidget({
			id: 'calendar',
			target: '#calendar',
			field: 'date'
		}));


		// step 4
		var fields = [ 'topics', 'organisations', 'exchanges' ];
		for (var i = 0, l = fields.length; i < l; i++) {
			Manager.addWidget(new AjaxSolr.TagcloudWidget({
				id: fields[i],
				target: '#' + fields[i],
				field: fields[i]
			}));
		}

		Manager.init();
		Manager.store.addByValue('q', '*:*');


		var params = {
			facet: true,
			'facet.field': [ 'topics', 'organisations', 'exchanges' ],
			'facet.limit': 20,
			'facet.mincount': 1,
			'f.topics.facet.limit': 50,
			'json.nl': 'map',
			'facet.date': 'date',
			'facet.date.start': '1987-01-01T00:00:00.000Z/DAY',
			'facet.date.end': '1987-12-31T00:00:00.000Z/DAY+1DAY',
			'facet.date.gap': '+1DAY',
		};

		for (var name in params) {
			Manager.store.addByValue(name, params[name]);
		}

		Manager.doRequest();






	});



})(jQuery);
