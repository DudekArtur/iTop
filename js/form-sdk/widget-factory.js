/**
 * Widgets Factory.
 *
 * @package FormSDK
 * @since 3.2.0
 */
const iTopFormWidgetFactory = new function(){

	/**
	 * Widgets auto installation.
	 *
	 * @constructor
	 */
	const AutoInstall = function() {
		console.log('iTopFormWidgetFactory AutoInstall');

		// widgets catalog
		const WIDGETS = {
			SELECT: {name: 'SelectWidget', builder: CreateSelectWidget},
			TEXT: {name: 'TextWidget', builder: CreateTextWidget},
			AREA: {name: 'AreaWidget', builder: CreateAreaWidget}
		}

		// instantiate widgets...
		for (const widgetsKey in WIDGETS) {

			// widget configuration
			const aWidgetConfiguration = WIDGETS[widgetsKey];

			// instantiate widget
			$(`[data-widget="${aWidgetConfiguration.name}"]`).each(function (e) {
				const oElement = $(this);
				if (!oElement.data('widget-state-initialized')) {
					const sId = oElement.attr('id');
					const aOptions = oElement.data('widget-options');
					aWidgetConfiguration.builder(sId, aOptions);
					console.log(aWidgetConfiguration.name, sId, aOptions);
					oElement.data('widget-state-initialized', true);
				}
			});
		}

	}

	/**
	 * CreateTextWidget.
	 *
	 * @param {string} sId
	 * @param {array} aOptions
	 * @constructor
	 */
	const CreateTextWidget = function(sId, aOptions){

		if(aOptions['pattern'] !== undefined){

			const oElement = $(`#${sId}`);
			const oMask = IMask(oElement[0],
				{
					mask: aOptions['pattern'],
					lazy: false,
				}
			);
			oMask.on('accept', () => {
				masked = oMask.masked;
				oElement.closest('div').toggleClass('complete', masked.isComplete)
			});
		}

	};

	/**
	 * CreateAreaWidget.
	 *
	 * @param {string} sId
	 * @param {array} aOptions
	 * @constructor
	 */
	const CreateAreaWidget = function(sId, aOptions){

		editor = CKEDITOR.replace(sId, {
			language: 'fr',
			stylesSet: 'my_styles',
			toolbarCanCollapse: false,
			toolbarGroups: [
				{ name: 'tools'},
				{ name: 'styles'},
				{ name: 'basicstyles'},
				{ name: 'links'},
				{ name: 'paragraph', groups: ['list', 'blocks']},
				{ name: 'insert'},
			],
			// Remove the redundant buttons from toolbar groups defined above. Format
			removeButtons: 'Subscript,Superscript,Anchor,Specialchar,PasteFromWord,Styles,Font,FontSize'
		});

	};

	/**
	 * CreateSelectAjaxWidget.
	 *
	 * @param {string} sId
	 * @param {array} aOptions
	 * @constructor
	 */
	const CreateSelectWidget = function(sId, aOptions)
	{
		const aPlugins = {};

		if(aOptions['max_items'] != '1'){
			aPlugins['remove_button'] = {
				title:'Remove this item',
			};
		}

		new TomSelect(`#${sId}`, {
			valueField: aOptions['value_field'],
			labelField: aOptions['label_field'],
			searchField: aOptions['search_field'],
			maxItems: aOptions['max_items'],
			preload: aOptions['preload'],
			plugins: aPlugins,
			loadThrottle: 200,
			load: function(query, callback) {
				let sUrl = aOptions['url'];
				if(!sUrl.includes('?')){
					sUrl += '?';
				}
				sUrl += '&'  + aOptions['query_parameter'] + '=' + encodeURIComponent(query);
				fetch(sUrl)
					.then(response => response.json())
					.then(json => {
						callback(json.items);
					}).catch(()=>{
					callback();
				});
			}
		});
	};

	return {
		AutoInstall
	}
};
