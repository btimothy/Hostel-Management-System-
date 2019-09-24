/*! elementor-pro - v2.2.5 - 11-12-2018 */
/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = function EditorModule() {
	var self = this;

	this.init = function () {
		jQuery(window).on('elementor:init', this.onElementorReady.bind(this));
	};

	this.getView = function (name) {
		var editor = elementor.getPanelView().getCurrentPageView();
		return editor.children.findByModelCid(this.getControl(name).cid);
	};

	this.getControl = function (name) {
		var editor = elementor.getPanelView().getCurrentPageView();
		return editor.collection.findWhere({ name: name });
	};

	this.onElementorReady = function () {
		self.onElementorInit();

		elementor.on('frontend:init', function () {
			self.onElementorFrontendInit();
		});

		elementor.on('preview:loaded', function () {
			self.onElementorPreviewLoaded();
		});
	};

	this.init();
};

EditorModule.prototype.onElementorInit = function () {};

EditorModule.prototype.onElementorPreviewLoaded = function () {};

EditorModule.prototype.onElementorFrontendInit = function () {};

EditorModule.extend = Backbone.View.extend;

module.exports = EditorModule;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.Module.extend({
	elementType: null,

	__construct: function __construct(elementType) {
		this.elementType = elementType;

		this.addEditorListener();
	},

	addEditorListener: function addEditorListener() {
		var self = this;

		if (self.onElementChange) {
			var eventName = 'change';

			if ('global' !== self.elementType) {
				eventName += ':' + self.elementType;
			}

			elementor.channels.editor.on(eventName, function (controlView, elementView) {
				self.onElementChange(controlView.model.get('name'), controlView, elementView);
			});
		}
	},

	getView: function getView(name) {
		var editor = elementor.getPanelView().getCurrentPageView();
		return editor.children.findByModelCid(this.getControl(name).cid);
	},

	getControl: function getControl(name) {
		var editor = elementor.getPanelView().getCurrentPageView();
		return editor.collection.findWhere({ name: name });
	},

	addControlSpinner: function addControlSpinner(name) {
		this.getView(name).$el.find(':input').attr('disabled', true);
		this.getView(name).$el.find('.elementor-control-title').after('<span class="elementor-control-spinner"><i class="fa fa-spinner fa-spin"></i>&nbsp;</span>');
	},

	removeControlSpinner: function removeControlSpinner(name) {
		this.getView(name).$el.find(':input').attr('disabled', false);
		this.getView(name).$el.find('elementor-control-spinner').remove();
	},

	addSectionListener: function addSectionListener(section, callback) {
		var self = this;

		elementor.channels.editor.on('section:activated', function (sectionName, editor) {
			var model = editor.getOption('editedElementView').getEditModel(),
			    currentElementType = model.get('elType'),
			    _arguments = arguments;

			if ('widget' === currentElementType) {
				currentElementType = model.get('widgetType');
			}

			if (self.elementType === currentElementType && section === sectionName) {
				setTimeout(function () {
					callback.apply(self, _arguments);
				}, 10);
			}
		});
	}
});

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({
	cache: {},

	getName: function getName() {
		return '';
	},

	fetchCache: function fetchCache(type, cacheKey, requestArgs) {
		var self = this;

		return elementorPro.ajax.addRequest('forms_panel_action_data', {
			data: requestArgs,
			success: function success(data) {
				self.cache[type] = _.extend({}, self.cache[type]);
				self.cache[type][cacheKey] = data[type];
			}
		});
	},

	updateOptions: function updateOptions(name, options) {
		if (this.getView(name)) {
			this.getControl(name).set('options', options);
			this.getView(name).render();
		}
	},

	onInit: function onInit() {
		this.addSectionListener('section_' + this.getName(), this.onSectionActive);
	},

	onSectionActive: function onSectionActive() {
		this.onApiUpdate();
	},

	onApiUpdate: function onApiUpdate() {}
});

/***/ }),
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementorPro = Marionette.Application.extend({
	config: {},

	modules: {},

	initModules: function initModules() {
		var QueryControl = __webpack_require__(10),
		    Forms = __webpack_require__(12),
		    Library = __webpack_require__(28),
		    CustomCSS = __webpack_require__(30),
		    GlobalWidget = __webpack_require__(32),
		    FlipBox = __webpack_require__(38),
		    ShareButtons = __webpack_require__(39),
		    AssetsManager = __webpack_require__(40),
		    ThemeElements = __webpack_require__(42),
		    ThemeBuilder = __webpack_require__(44);

		this.modules = {
			queryControl: new QueryControl(),
			forms: new Forms(),
			library: new Library(),
			customCSS: new CustomCSS(),
			globalWidget: new GlobalWidget(),
			flipBox: new FlipBox(),
			shareButtons: new ShareButtons(),
			assetsManager: new AssetsManager(),
			themeElements: new ThemeElements(),
			themeBuilder: new ThemeBuilder()
		};
	},

	ajax: {
		prepareArgs: function prepareArgs(args) {
			args[0] = 'pro_' + args[0];

			return args;
		},

		send: function send() {
			return elementorCommon.ajax.send.apply(elementorCommon.ajax, this.prepareArgs(arguments));
		},

		addRequest: function addRequest() {
			return elementorCommon.ajax.addRequest.apply(elementorCommon.ajax, this.prepareArgs(arguments));
		}
	},

	translate: function translate(stringKey, templateArgs) {
		return elementorCommon.translate(stringKey, null, templateArgs, this.config.i18n);
	},

	onStart: function onStart() {
		this.config = ElementorProConfig;

		this.initModules();

		jQuery(window).on('elementor:init', this.onElementorInit);
	},

	onElementorInit: function onElementorInit() {
		elementorPro.libraryRemoveGetProButtons();

		elementor.debug.addURLToWatch('elementor-pro/assets');
	},

	libraryRemoveGetProButtons: function libraryRemoveGetProButtons() {
		elementor.hooks.addFilter('elementor/editor/template-library/template/action-button', function (viewID, templateData) {
			return templateData.isPro && !elementorPro.config.isActive ? '#tmpl-elementor-pro-template-library-activate-license-button' : '#tmpl-elementor-template-library-insert-button';
		});
	}
});

window.elementorPro = new ElementorPro();

elementorPro.start();

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorPreviewLoaded: function onElementorPreviewLoaded() {
		elementor.addControlView('Query', __webpack_require__(11));
	}
});

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.controls.Select2.extend({

	cache: null,

	isTitlesReceived: false,

	getSelect2Placeholder: function getSelect2Placeholder() {
		return {
			id: '',
			text: elementorPro.translate('all')
		};
	},

	getSelect2DefaultOptions: function getSelect2DefaultOptions() {
		var self = this;

		return jQuery.extend(elementor.modules.controls.Select2.prototype.getSelect2DefaultOptions.apply(this, arguments), {
			ajax: {
				transport: function transport(params, success, failure) {
					var data = {
						q: params.data.q,
						filter_type: self.model.get('filter_type'),
						object_type: self.model.get('object_type'),
						include_type: self.model.get('include_type')
					};

					return elementorPro.ajax.addRequest('panel_posts_control_filter_autocomplete', {
						data: data,
						success: success,
						error: failure
					});
				},
				data: function data(params) {
					return {
						q: params.term,
						page: params.page
					};
				},
				cache: true
			},
			escapeMarkup: function escapeMarkup(markup) {
				return markup;
			},
			minimumInputLength: 1
		});
	},

	getValueTitles: function getValueTitles() {
		var self = this,
		    ids = this.getControlValue(),
		    filterType = this.model.get('filter_type');

		if (!ids || !filterType) {
			return;
		}

		if (!_.isArray(ids)) {
			ids = [ids];
		}

		elementorCommon.ajax.loadObjects({
			action: 'query_control_value_titles',
			ids: ids,
			data: {
				filter_type: filterType,
				object_type: self.model.get('object_type'),
				unique_id: '' + self.cid + filterType
			},
			before: function before() {
				self.addControlSpinner();
			},
			success: function success(data) {
				self.isTitlesReceived = true;

				self.model.set('options', data);

				self.render();
			}
		});
	},

	addControlSpinner: function addControlSpinner() {
		this.ui.select.prop('disabled', true);
		this.$el.find('.elementor-control-title').after('<span class="elementor-control-spinner">&nbsp;<i class="fa fa-spinner fa-spin"></i>&nbsp;</span>');
	},

	onReady: function onReady() {
		// Safari takes it's time to get the original select width
		setTimeout(elementor.modules.controls.Select2.prototype.onReady.bind(this));

		if (!this.isTitlesReceived) {
			this.getValueTitles();
		}
	}
});

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorInit: function onElementorInit() {
		var ReplyToField = __webpack_require__(13),
		    Recaptcha = __webpack_require__(14),
		    Shortcode = __webpack_require__(15),
		    MailerLite = __webpack_require__(16),
		    Mailchimp = __webpack_require__(17),
		    Drip = __webpack_require__(18),
		    ActiveCampaign = __webpack_require__(19),
		    GetResponse = __webpack_require__(20),
		    ConvertKit = __webpack_require__(21);

		this.replyToField = new ReplyToField();
		this.mailchimp = new Mailchimp('form');
		this.shortcode = new Shortcode('form');
		this.recaptcha = new Recaptcha('form');
		this.drip = new Drip('form');
		this.activecampaign = new ActiveCampaign('form');
		this.getresponse = new GetResponse('form');
		this.convertkit = new ConvertKit('form');
		this.mailerlite = new MailerLite('form');

		// Form fields
		var TimeField = __webpack_require__(22),
		    DateField = __webpack_require__(23),
		    AcceptanceField = __webpack_require__(24),
		    UploadField = __webpack_require__(25),
		    TelField = __webpack_require__(26);

		this.Fields = {
			time: new TimeField('form'),
			date: new DateField('form'),
			tel: new TelField('form'),
			acceptance: new AcceptanceField('form'),
			upload: new UploadField('form')
		};

		elementor.addControlView('Fields_map', __webpack_require__(27));
	}
});

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var editor, editedModel, replyToControl;

	var setReplyToControl = function setReplyToControl() {
		replyToControl = editor.collection.findWhere({ name: 'email_reply_to' });
	};

	var getReplyToView = function getReplyToView() {
		return editor.children.findByModelCid(replyToControl.cid);
	};

	var refreshReplyToElement = function refreshReplyToElement() {
		var replyToView = getReplyToView();

		if (replyToView) {
			replyToView.render();
		}
	};

	var updateReplyToOptions = function updateReplyToOptions() {
		var settingsModel = editedModel.get('settings'),
		    emailModels = settingsModel.get('form_fields').where({ field_type: 'email' }),
		    emailFields;

		emailModels = _.reject(emailModels, { field_label: '' });

		emailFields = _.map(emailModels, function (model) {
			return {
				id: model.get('_id'),
				label: elementorPro.translate('x_field', [model.get('field_label')])
			};
		});

		replyToControl.set('options', { '': replyToControl.get('options')[''] });

		_.each(emailFields, function (emailField) {
			replyToControl.get('options')[emailField.id] = emailField.label;
		});

		refreshReplyToElement();
	};

	var updateDefaultReplyTo = function updateDefaultReplyTo(settingsModel) {
		replyToControl.get('options')[''] = settingsModel.get('email_from');

		refreshReplyToElement();
	};

	var onFormFieldsChange = function onFormFieldsChange(changedModel) {
		// If it's repeater field
		if (changedModel.get('_id')) {
			if ('email' === changedModel.get('field_type')) {
				updateReplyToOptions();
			}
		}

		if (changedModel.changed.email_from) {
			updateDefaultReplyTo(changedModel);
		}
	};

	var onPanelShow = function onPanelShow(panel, model) {
		editor = panel.getCurrentPageView();

		editedModel = model;

		setReplyToControl();

		var settingsModel = editedModel.get('settings');

		settingsModel.on('change', onFormFieldsChange);

		updateDefaultReplyTo(settingsModel);

		updateReplyToOptions();
	};

	var init = function init() {
		elementor.hooks.addAction('panel/open_editor/widget/form', onPanelShow);
	};

	init();
};

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({

	renderField: function renderField(inputField, item) {
		var config = elementorPro.config.forms.recaptcha;
		inputField += '<div class="elementor-field">';

		if (config.enabled) {
			inputField += '<div class="elementor-g-recaptcha' + _.escape(item.css_classes) + '" data-sitekey="' + config.site_key + '" data-theme="' + item.recaptcha_style + '" data-size="' + item.recaptcha_size + '"></div>';
		} else {
			inputField += '<div class="elementor-alert">' + config.setup_message + '</div>';
		}

		inputField += '</div>';

		return inputField;
	},

	filterItem: function filterItem(item) {
		if ('recaptcha' === item.field_type) {
			item.field_label = false;
		}

		return item;
	},

	onInit: function onInit() {
		elementor.hooks.addFilter('elementor_pro/forms/content_template/item', this.filterItem);
		elementor.hooks.addFilter('elementor_pro/forms/content_template/field/recaptcha', this.renderField, 10, 2);
	}
});

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({
	getExistId: function getExistId(id) {
		var exist = this.getView('form_fields').collection.filter(function (model) {
			return id === model.get('_id');
		});

		return exist.length > 1;
	},

	onFieldChanged: function onFieldChanged(model, collection, eventArgs) {
		var self = this;

		_.defer(function () {
			var view = self.getView('form_fields').children.findByModel(model);

			// Capture remove item event.
			if (collection.changes.removed) {
				self.getView('form_fields').children.each(self.updateShortcode);
			} else {
				self.updateId(view, eventArgs && eventArgs.add);
				self.updateShortcode(view);
			}
		});
	},

	updateId: function updateId(view, isNewItem) {
		var id = view.model.get('_id'),
		    sanitizedId = id.replace(/[^\w]/, '_'),
		    fieldIndex = 1,
		    IdView = view.children.filter(function (childrenView) {
			return '_id' === childrenView.model.get('name');
		});

		while (sanitizedId !== id || isNewItem || !id || this.getExistId(id)) {
			if (sanitizedId !== id) {
				id = sanitizedId;
			} else {
				id = 'field_' + fieldIndex;
				sanitizedId = id;
			}

			view.model.attributes._id = id;
			IdView[0].render();
			IdView[0].$el.find('input').focus();
			fieldIndex++;
			isNewItem = false;
		}
	},

	updateShortcode: function updateShortcode(view) {
		var template = _.template('[field id="<%= id %>"]')({
			title: view.model.get('field_label'),
			id: view.model.get('_id')
		});

		view.$el.find('.elementor-form-field-shortcode').focus(function () {
			this.select();
		}).val(template);
	},

	onSectionActive: function onSectionActive() {
		var controlView = this.getView('form_fields');

		controlView.children.each(this.updateShortcode);

		if (!this.collectionEventsAttached) {
			controlView.collection.on('update', this.onFieldChanged);
			this.collectionEventsAttached = true;
		}
	},

	onInit: function onInit() {
		this.addSectionListener('section_form_fields', this.onSectionActive);
	}
});

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseIntegrationModule = __webpack_require__(2);

module.exports = BaseIntegrationModule.extend({
	fields: {},

	getName: function getName() {
		return 'mailerlite';
	},

	onElementChange: function onElementChange(setting) {
		switch (setting) {
			case 'mailerlite_api_key_source':
			case 'mailerlite_custom_api_key':
				this.onMailerliteApiKeyUpdate();
				break;
			case 'mailerlite_group':
				this.updateFieldsMapping();
				break;
		}
	},

	onMailerliteApiKeyUpdate: function onMailerliteApiKeyUpdate() {
		var self = this,
		    controlView = self.getView('mailerlite_custom_api_key'),
		    GlobalApiKeycontrolView = self.getView('mailerlite_api_key_source');

		if ('default' !== GlobalApiKeycontrolView.getControlValue() && '' === controlView.getControlValue()) {
			self.updateOptions('mailerlite_group', []);
			self.getView('mailerlite_group').setValue('');
			return;
		}

		self.addControlSpinner('mailerlite_group');

		self.getMailerliteCache('groups', 'groups', GlobalApiKeycontrolView.getControlValue()).done(function (data) {
			self.updateOptions('mailerlite_group', data.groups);
			self.fields = data.fields;
		});
	},

	updateFieldsMapping: function updateFieldsMapping() {
		var controlView = this.getView('mailerlite_group');

		if (!controlView.getControlValue()) {
			return;
		}

		var remoteFields = [{
			remote_label: elementor.translate('Email'),
			remote_type: 'email',
			remote_id: 'email',
			remote_required: true
		}, {
			remote_label: elementor.translate('Name'),
			remote_type: 'text',
			remote_id: 'name',
			remote_required: false
		}, {
			remote_label: elementor.translate('Last Name'),
			remote_type: 'text',
			remote_id: 'last_name',
			remote_required: false
		}, {
			remote_label: elementor.translate('Company'),
			remote_type: 'text',
			remote_id: 'company',
			remote_required: false
		}, {
			remote_label: elementor.translate('Phone'),
			remote_type: 'text',
			remote_id: 'phone',
			remote_required: false
		}, {
			remote_label: elementor.translate('Country'),
			remote_type: 'text',
			remote_id: 'country',
			remote_required: false
		}, {
			remote_label: elementor.translate('State'),
			remote_type: 'text',
			remote_id: 'state',
			remote_required: false
		}, {
			remote_label: elementor.translate('City'),
			remote_type: 'text',
			remote_id: 'city',
			remote_required: false
		}, {
			remote_label: elementor.translate('Zip'),
			remote_type: 'text',
			remote_id: 'zip',
			remote_required: false
		}];

		for (var field in this.fields) {
			if (this.fields.hasOwnProperty(field)) {
				remoteFields.push(this.fields[field]);
			}
		}

		this.getView('mailerlite_fields_map').updateMap(remoteFields);
	},

	getMailerliteCache: function getMailerliteCache(type, action, cacheKey, requestArgs) {
		if (_.has(this.cache[type], cacheKey)) {
			var data = {};
			data[type] = this.cache[type][cacheKey];
			return jQuery.Deferred().resolve(data);
		}

		requestArgs = _.extend({}, requestArgs, {
			service: 'mailerlite',
			mailerlite_action: action,
			custom_api_key: this.getView('mailerlite_custom_api_key').getControlValue(),
			api_key: this.getView('mailerlite_api_key_source').getControlValue()
		});

		return this.fetchCache(type, cacheKey, requestArgs);
	},

	onSectionActive: function onSectionActive() {
		BaseIntegrationModule.prototype.onSectionActive.apply(this, arguments);

		this.onMailerliteApiKeyUpdate();
	}

});

/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseIntegrationModule = __webpack_require__(2);

module.exports = BaseIntegrationModule.extend({
	getName: function getName() {
		return 'mailchimp';
	},

	onElementChange: function onElementChange(setting) {
		switch (setting) {
			case 'mailchimp_api_key_source':
			case 'mailchimp_api_key':
				this.onApiUpdate();
				break;
			case 'mailchimp_list':
				this.onMailchimpListUpdate();
				break;
		}
	},

	onApiUpdate: function onApiUpdate() {
		var self = this,
		    controlView = self.getView('mailchimp_api_key'),
		    GlobalApiKeycontrolView = self.getView('mailchimp_api_key_source');

		if ('default' !== GlobalApiKeycontrolView.getControlValue() && '' === controlView.getControlValue()) {
			self.updateOptions('mailchimp_list', []);
			self.getView('mailchimp_list').setValue('');
			return;
		}

		self.addControlSpinner('mailchimp_list');

		self.getMailchimpCache('lists', 'lists', GlobalApiKeycontrolView.getControlValue()).done(function (data) {
			self.updateOptions('mailchimp_list', data.lists);
		});
	},

	onMailchimpListUpdate: function onMailchimpListUpdate() {
		this.updateOptions('mailchimp_groups', []);
		this.getView('mailchimp_groups').setValue('');
		this.updatMailchimpList();
	},

	updatMailchimpList: function updatMailchimpList() {
		var self = this,
		    controlView = self.getView('mailchimp_list');

		if (!controlView.getControlValue()) {
			return;
		}

		self.addControlSpinner('mailchimp_groups');

		self.getMailchimpCache('list_details', 'list_details', controlView.getControlValue(), {
			mailchimp_list: controlView.getControlValue()
		}).done(function (data) {
			self.updateOptions('mailchimp_groups', data.list_details.groups);
			self.getView('mailchimp_fields_map').updateMap(data.list_details.fields);
		});
	},

	getMailchimpCache: function getMailchimpCache(type, action, cacheKey, requestArgs) {
		if (_.has(this.cache[type], cacheKey)) {
			var data = {};
			data[type] = this.cache[type][cacheKey];
			return jQuery.Deferred().resolve(data);
		}

		requestArgs = _.extend({}, requestArgs, {
			service: 'mailchimp',
			mailchimp_action: action,
			api_key: this.getView('mailchimp_api_key').getControlValue(),
			use_global_api_key: this.getView('mailchimp_api_key_source').getControlValue()
		});

		return this.fetchCache(type, cacheKey, requestArgs);
	},

	onSectionActive: function onSectionActive() {
		BaseIntegrationModule.prototype.onSectionActive.apply(this, arguments);

		this.updatMailchimpList();
	}
});

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseIntegrationModule = __webpack_require__(2);

module.exports = BaseIntegrationModule.extend({
	getName: function getName() {
		return 'drip';
	},

	onElementChange: function onElementChange(setting) {
		switch (setting) {
			case 'drip_api_token_source':
			case 'drip_custom_api_token':
				this.onApiUpdate();
				break;
			case 'drip_account':
				this.onDripAccountsUpdate();
				break;
		}
	},

	onApiUpdate: function onApiUpdate() {
		var self = this,
		    controlView = self.getView('drip_api_token_source'),
		    customControlView = self.getView('drip_custom_api_token');

		if ('default' !== controlView.getControlValue() && '' === customControlView.getControlValue()) {
			self.updateOptions('drip_account', []);
			self.getView('drip_account').setValue('');
			return;
		}

		self.addControlSpinner('drip_account');

		self.getDripCache('accounts', 'accounts', controlView.getControlValue()).done(function (data) {
			self.updateOptions('drip_account', data.accounts);
		});
	},

	onDripAccountsUpdate: function onDripAccountsUpdate() {
		this.updateFieldsMapping();
	},

	updateFieldsMapping: function updateFieldsMapping() {
		var controlView = this.getView('drip_account');

		if (!controlView.getControlValue()) {
			return;
		}

		var remoteFields = {
			remote_label: elementor.translate('Email'),
			remote_type: 'email',
			remote_id: 'email',
			remote_required: true
		};

		this.getView('drip_fields_map').updateMap([remoteFields]);
	},

	getDripCache: function getDripCache(type, action, cacheKey, requestArgs) {
		if (_.has(this.cache[type], cacheKey)) {
			var data = {};
			data[type] = this.cache[type][cacheKey];
			return jQuery.Deferred().resolve(data);
		}

		requestArgs = _.extend({}, requestArgs, {
			service: 'drip',
			drip_action: action,
			api_token: this.getView('drip_api_token_source').getControlValue(),
			custom_api_token: this.getView('drip_custom_api_token').getControlValue()
		});

		return this.fetchCache(type, cacheKey, requestArgs);
	}
});

/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseIntegrationModule = __webpack_require__(2);

module.exports = BaseIntegrationModule.extend({
	fields: {},

	getName: function getName() {
		return 'activecampaign';
	},

	onElementChange: function onElementChange(setting) {
		switch (setting) {
			case 'activecampaign_api_credentials_source':
			case 'activecampaign_api_key':
			case 'activecampaign_api_url':
				this.onApiUpdate();
				break;
			case 'activecampaign_list':
				this.onListUpdate();
				break;
		}
	},

	onApiUpdate: function onApiUpdate() {
		var self = this,
		    apikeyControlView = self.getView('activecampaign_api_key'),
		    apiUrlControlView = self.getView('activecampaign_api_url'),
		    apiCredControlView = self.getView('activecampaign_api_credentials_source');

		if ('default' !== apiCredControlView.getControlValue() && ('' === apikeyControlView.getControlValue() || '' === apiUrlControlView.getControlValue())) {
			self.updateOptions('activecampaign_list', []);
			self.getView('activecampaign_list').setValue('');
			return;
		}

		self.addControlSpinner('activecampaign_list');

		self.getActiveCampaignCache('lists', 'activecampaign_list', apiCredControlView.getControlValue()).done(function (data) {
			self.updateOptions('activecampaign_list', data.lists);
			self.fields = data.fields;
		});
	},

	onListUpdate: function onListUpdate() {
		this.updateFieldsMapping();
	},

	updateFieldsMapping: function updateFieldsMapping() {
		var controlView = this.getView('activecampaign_list');

		if (!controlView.getControlValue()) {
			return;
		}

		var remoteFields = [{
			remote_label: elementor.translate('Email'),
			remote_type: 'email',
			remote_id: 'email',
			remote_required: true
		}, {
			remote_label: elementor.translate('First Name'),
			remote_type: 'text',
			remote_id: 'first_name',
			remote_required: false
		}, {
			remote_label: elementor.translate('Last Name'),
			remote_type: 'text',
			remote_id: 'last_name',
			remote_required: false
		}, {
			remote_label: elementor.translate('Phone'),
			remote_type: 'text',
			remote_id: 'phone',
			remote_required: false
		}, {
			remote_label: elementor.translate('Organization name'),
			remote_type: 'text',
			remote_id: 'orgname',
			remote_required: false
		}];

		for (var field in this.fields) {
			if (this.fields.hasOwnProperty(field)) {
				remoteFields.push(this.fields[field]);
			}
		}

		this.getView('activecampaign_fields_map').updateMap(remoteFields);
	},

	getActiveCampaignCache: function getActiveCampaignCache(type, action, cacheKey, requestArgs) {
		if (_.has(this.cache[type], cacheKey)) {
			var data = {};
			data[type] = this.cache[type][cacheKey];
			return jQuery.Deferred().resolve(data);
		}

		requestArgs = _.extend({}, requestArgs, {
			service: 'activecampaign',
			activecampaign_action: action,
			api_key: this.getView('activecampaign_api_key').getControlValue(),
			api_url: this.getView('activecampaign_api_url').getControlValue(),
			api_cred: this.getView('activecampaign_api_credentials_source').getControlValue()
		});

		return this.fetchCache(type, cacheKey, requestArgs);
	}
});

/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseIntegrationModule = __webpack_require__(2);

module.exports = BaseIntegrationModule.extend({
	getName: function getName() {
		return 'getresponse';
	},

	onElementChange: function onElementChange(setting) {
		switch (setting) {
			case 'getresponse_custom_api_key':
			case 'getresponse_api_key_source':
				this.onApiUpdate();
				break;
			case 'getresponse_list':
				this.onGetResonseListUpdate();
				break;
		}
	},

	onApiUpdate: function onApiUpdate() {
		var self = this,
		    controlView = self.getView('getresponse_api_key_source'),
		    customControlView = self.getView('getresponse_custom_api_key');

		if ('default' !== controlView.getControlValue() && '' === customControlView.getControlValue()) {
			self.updateOptions('getresponse_list', []);
			self.getView('getresponse_list').setValue('');
			return;
		}

		self.addControlSpinner('getresponse_list');

		self.getCache('lists', 'lists', controlView.getControlValue()).done(function (data) {
			self.updateOptions('getresponse_list', data.lists);
		});
	},

	onGetResonseListUpdate: function onGetResonseListUpdate() {
		this.updatGetResonseList();
	},

	updatGetResonseList: function updatGetResonseList() {
		var self = this,
		    controlView = self.getView('getresponse_list');

		if (!controlView.getControlValue()) {
			return;
		}

		self.addControlSpinner('getresponse_fields_map');

		self.getCache('fields', 'get_fields', controlView.getControlValue(), {
			getresponse_list: controlView.getControlValue()
		}).done(function (data) {
			self.getView('getresponse_fields_map').updateMap(data.fields);
		});
	},

	getCache: function getCache(type, action, cacheKey, requestArgs) {
		if (_.has(this.cache[type], cacheKey)) {
			var data = {};
			data[type] = this.cache[type][cacheKey];
			return jQuery.Deferred().resolve(data);
		}

		requestArgs = _.extend({}, requestArgs, {
			service: 'getresponse',
			getresponse_action: action,
			api_key: this.getView('getresponse_api_key_source').getControlValue(),
			custom_api_key: this.getView('getresponse_custom_api_key').getControlValue()
		});

		return this.fetchCache(type, cacheKey, requestArgs);
	},

	onSectionActive: function onSectionActive() {
		BaseIntegrationModule.prototype.onSectionActive.apply(this, arguments);

		this.updatGetResonseList();
	}
});

/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseIntegrationModule = __webpack_require__(2);

module.exports = BaseIntegrationModule.extend({

	getName: function getName() {
		return 'convertkit';
	},

	onElementChange: function onElementChange(setting) {
		switch (setting) {
			case 'convertkit_api_key_source':
			case 'convertkit_custom_api_key':
				this.onApiUpdate();
				break;
			case 'convertkit_form':
				this.onListUpdate();
				break;
		}
	},

	onApiUpdate: function onApiUpdate() {
		var self = this,
		    apiKeyControlView = self.getView('convertkit_api_key_source'),
		    customApikeyControlView = self.getView('convertkit_custom_api_key');

		if ('default' !== apiKeyControlView.getControlValue() && '' === customApikeyControlView.getControlValue()) {
			self.updateOptions('convertkit_form', []);
			self.getView('convertkit_form').setValue('');
			return;
		}

		self.addControlSpinner('convertkit_form');

		self.getConvertKitCache('data', 'convertkit_get_forms', apiKeyControlView.getControlValue()).done(function (data) {
			self.updateOptions('convertkit_form', data.data.forms);
			self.updateOptions('convertkit_tags', data.data.tags);
		});
	},

	onListUpdate: function onListUpdate() {
		this.updateFieldsMapping();
	},

	updateFieldsMapping: function updateFieldsMapping() {
		var controlView = this.getView('convertkit_form');

		if (!controlView.getControlValue()) {
			return;
		}

		var remoteFields = [{
			remote_label: elementor.translate('Email'),
			remote_type: 'email',
			remote_id: 'email',
			remote_required: true
		}, {
			remote_label: elementor.translate('First Name'),
			remote_type: 'text',
			remote_id: 'first_name',
			remote_required: false
		}];
		this.getView('convertkit_fields_map').updateMap(remoteFields);
	},

	getConvertKitCache: function getConvertKitCache(type, action, cacheKey, requestArgs) {
		if (_.has(this.cache[type], cacheKey)) {
			var data = {};
			data[type] = this.cache[type][cacheKey];
			return jQuery.Deferred().resolve(data);
		}

		requestArgs = _.extend({}, requestArgs, {
			service: 'convertkit',
			convertkit_action: action,
			api_key: this.getView('convertkit_api_key_source').getControlValue(),
			custom_api_key: this.getView('convertkit_custom_api_key').getControlValue()
		});

		return this.fetchCache(type, cacheKey, requestArgs);
	}
});

/***/ }),
/* 22 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({

	renderField: function renderField(inputField, item, i, settings) {
		var itemClasses = _.escape(item.css_classes),
		    required = '',
		    placeholder = '';

		if (item.required) {
			required = 'required';
		}

		if (item.placeholder) {
			placeholder = ' placeholder="' + item.placeholder + '"';
		}

		if ('yes' === item.use_native_time) {
			itemClasses += ' elementor-use-native';
		}

		return '<input size="1" type="time"' + placeholder + ' class="elementor-field-textual elementor-time-field elementor-field elementor-size-' + settings.input_size + ' ' + itemClasses + '" name="form_field_' + i + '" id="form_field_' + i + '" ' + required + ' >';
	},

	onInit: function onInit() {
		elementor.hooks.addFilter('elementor_pro/forms/content_template/field/time', this.renderField, 10, 4);
	}
});

/***/ }),
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({

	renderField: function renderField(inputField, item, i, settings) {
		var itemClasses = _.escape(item.css_classes),
		    required = '',
		    min = '',
		    max = '',
		    placeholder = '';

		if (item.required) {
			required = 'required';
		}

		if (item.min_date) {
			min = ' min="' + item.min_date + '"';
		}

		if (item.max_date) {
			max = ' max="' + item.max_date + '"';
		}

		if (item.placeholder) {
			placeholder = ' placeholder="' + item.placeholder + '"';
		}

		if ('yes' === item.use_native_date) {
			itemClasses += ' elementor-use-native';
		}

		return '<input size="1"' + min + max + placeholder + ' pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" type="date" class="elementor-field-textual elementor-date-field elementor-field elementor-size-' + settings.input_size + ' ' + itemClasses + '" name="form_field_' + i + '" id="form_field_' + i + '" ' + required + ' >';
	},

	onInit: function onInit() {
		elementor.hooks.addFilter('elementor_pro/forms/content_template/field/date', this.renderField, 10, 4);
	}
});

/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({

	renderField: function renderField(inputField, item, i, settings) {
		var itemClasses = _.escape(item.css_classes),
		    required = '',
		    label = '',
		    checked = '';

		if (item.required) {
			required = 'required';
		}

		if (item.acceptance_text) {
			label = '<label for="form_field_' + i + '">' + item.acceptance_text + '</label>';
		}

		if (item.checked_by_default) {
			checked = ' checked="checked"';
		}

		return '<div class="elementor-field-subgroup">' + '<span class="elementor-field-option">' + '<input size="1" type="checkbox"' + checked + ' class="elementor-acceptance-field elementor-field elementor-size-' + settings.input_size + ' ' + itemClasses + '" name="form_field_' + i + '" id="form_field_' + i + '" ' + required + ' > ' + label + '</span></div>';
	},

	onInit: function onInit() {
		elementor.hooks.addFilter('elementor_pro/forms/content_template/field/acceptance', this.renderField, 10, 4);
	}
});

/***/ }),
/* 25 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({

	renderField: function renderField(inputField, item, i, settings) {
		var itemClasses = _.escape(item.css_classes),
		    required = '',
		    multiple = '',
		    fieldName = 'form_field_';

		if (item.required) {
			required = 'required';
		}
		if (item.allow_multiple_upload) {
			multiple = ' multiple="multiple"';
			fieldName += '[]';
		}

		return '<input size="1"  type="file" class="elementor-file-field elementor-field elementor-size-' + settings.input_size + ' ' + itemClasses + '" name="' + fieldName + '" id="form_field_' + i + '" ' + required + multiple + ' >';
	},

	onInit: function onInit() {
		elementor.hooks.addFilter('elementor_pro/forms/content_template/field/upload', this.renderField, 10, 4);
	}
});

/***/ }),
/* 26 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementEditorModule = __webpack_require__(1);

module.exports = ElementEditorModule.extend({

	renderField: function renderField(inputField, item, i, settings) {
		var itemClasses = _.escape(item.css_classes),
		    required = '',
		    placeholder = '';

		if (item.required) {
			required = 'required';
		}

		if (item.placeholder) {
			placeholder = ' placeholder="' + item.placeholder + '"';
		}

		itemClasses = 'elementor-field-textual ' + itemClasses;

		return '<input size="1" type="' + item.field_type + '" class="elementor-field-textual elementor-field elementor-size-' + settings.input_size + ' ' + itemClasses + '" name="form_field_' + i + '" id="form_field_' + i + '" ' + required + ' ' + placeholder + ' pattern="[0-9()-]" >';
	},

	onInit: function onInit() {
		elementor.hooks.addFilter('elementor_pro/forms/content_template/field/tel', this.renderField, 10, 4);
	}
});

/***/ }),
/* 27 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.controls.Repeater.extend({
	onBeforeRender: function onBeforeRender() {
		this.$el.hide();
	},

	updateMap: function updateMap(fields) {
		var self = this,
		    savedMapObject = {};

		self.collection.each(function (model) {
			savedMapObject[model.get('remote_id')] = model.get('local_id');
		});

		self.collection.reset();

		_.each(fields, function (field) {
			var model = {
				remote_id: field.remote_id,
				remote_label: field.remote_label,
				remote_type: field.remote_type ? field.remote_type : '',
				remote_required: field.remote_required ? field.remote_required : false,
				local_id: savedMapObject[field.remote_id] ? savedMapObject[field.remote_id] : ''
			};

			self.collection.add(model);
		});

		self.render();
	},

	onRender: function onRender() {
		elementor.modules.controls.Base.prototype.onRender.apply(this, arguments);

		var self = this;

		self.children.each(function (view) {
			var localFieldsControl = view.children.last(),
			    options = {
				'': '- ' + elementor.translate('None') + ' -'
			},
			    label = view.model.get('remote_label');

			if (view.model.get('remote_required')) {
				label += '<span class="elementor-required">*</span>';
			}

			_.each(self.elementSettingsModel.get('form_fields').models, function (model, index) {
				// If it's an email field, add only email fields from thr form
				var remoteType = view.model.get('remote_type');

				if ('text' !== remoteType && remoteType !== model.get('field_type')) {
					return;
				}

				options[model.get('_id')] = model.get('field_label') || 'Field #' + (index + 1);
			});

			localFieldsControl.model.set('label', label);
			localFieldsControl.model.set('options', options);
			localFieldsControl.render();

			view.$el.find('.elementor-repeater-row-tools').hide();
			view.$el.find('.elementor-repeater-row-controls').removeClass('elementor-repeater-row-controls').find('.elementor-control').css({
				paddingBottom: 0
			});
		});

		self.$el.find('.elementor-button-wrapper').remove();

		if (self.children.length) {
			self.$el.show();
		}
	}
});

/***/ }),
/* 28 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorPreviewLoaded: function onElementorPreviewLoaded() {
		var EditButton = __webpack_require__(29);
		this.editButton = new EditButton();
	}
});

/***/ }),
/* 29 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var self = this;

	self.onPanelShow = function (panel) {
		var model = panel.content.currentView.collection.findWhere({ name: 'template_id' });
		self.templateIdView = panel.content.currentView.children.findByModelCid(model.cid);

		// Change Edit link on render & on change template.
		self.templateIdView.elementSettingsModel.on('change', self.onTemplateIdChange);
		self.templateIdView.on('render', self.onTemplateIdChange);
	};

	self.onTemplateIdChange = function () {
		var templateID = self.templateIdView.elementSettingsModel.get('template_id'),
		    $editButton = self.templateIdView.$el.find('.elementor-edit-template');

		if (!templateID) {
			$editButton.remove();
			return;
		}

		var editUrl = ElementorConfig.home_url + '?p=' + templateID + '&elementor';

		if ($editButton.length) {
			$editButton.prop('href', editUrl);
		} else {
			$editButton = jQuery('<a />', {
				target: '_blank',
				class: 'elementor-button elementor-button-default elementor-edit-template',
				href: editUrl,
				html: '<i class="fa fa-pencil" /> ' + ElementorProConfig.i18n.edit_template
			});

			self.templateIdView.$el.find('.elementor-control-input-wrapper').after($editButton);
		}
	};

	self.init = function () {
		elementor.hooks.addAction('panel/open_editor/widget/template', self.onPanelShow);
	};

	self.init();
};

/***/ }),
/* 30 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorInit: function onElementorInit() {
		var CustomCss = __webpack_require__(31);
		this.customCss = new CustomCss();
	}
});

/***/ }),
/* 31 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var self = this;

	self.init = function () {
		elementor.hooks.addFilter('editor/style/styleText', self.addCustomCss);

		elementor.settings.page.model.on('change', self.addPageCustomCss);

		elementor.on('preview:loaded', self.addPageCustomCss);
	};

	self.addPageCustomCss = function () {
		var customCSS = elementor.settings.page.model.get('custom_css');

		if (customCSS) {
			customCSS = customCSS.replace(/selector/g, elementor.config.settings.page.cssWrapperSelector);
			elementor.settings.page.getControlsCSS().elements.$stylesheetElement.append(customCSS);
		}
	};

	self.addCustomCss = function (css, view) {
		var model = view.getEditModel(),
		    customCSS = model.get('settings').get('custom_css');

		if (customCSS) {
			css += customCSS.replace(/selector/g, '.elementor-element.elementor-element-' + view.model.id);
		}

		return css;
	};

	self.init();
};

/***/ }),
/* 32 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	globalModels: {},

	panelWidgets: null,

	templatesAreSaved: true,

	addGlobalWidget: function addGlobalWidget(id, args) {
		args = _.extend({}, args, {
			categories: [],
			icon: elementor.config.widgets[args.widgetType].icon,
			widgetType: args.widgetType,
			custom: {
				templateID: id
			}
		});

		var globalModel = this.createGlobalModel(id, args);

		return this.panelWidgets.add(globalModel);
	},

	createGlobalModel: function createGlobalModel(id, modelArgs) {
		var globalModel = new elementor.modules.elements.models.Element(modelArgs),
		    settingsModel = globalModel.get('settings');

		globalModel.set('id', id);

		settingsModel.on('change', _.bind(this.onGlobalModelChange, this));

		return this.globalModels[id] = globalModel;
	},

	onGlobalModelChange: function onGlobalModelChange() {
		this.templatesAreSaved = false;
	},

	setWidgetType: function setWidgetType() {
		elementor.hooks.addFilter('element/view', function (DefaultView, model) {
			if (model.get('templateID')) {
				return __webpack_require__(33);
			}

			return DefaultView;
		});

		elementor.hooks.addFilter('element/model', function (DefaultModel, attrs) {
			if (attrs.templateID) {
				return __webpack_require__(34);
			}

			return DefaultModel;
		});
	},

	registerTemplateType: function registerTemplateType() {
		elementor.templates.registerTemplateType('widget', {
			showInLibrary: false,
			saveDialog: {
				title: elementorPro.translate('global_widget_save_title'),
				description: elementorPro.translate('global_widget_save_description')
			},
			prepareSavedData: function prepareSavedData(data) {
				data.widgetType = data.content[0].widgetType;

				return data;
			},
			ajaxParams: {
				success: this.onWidgetTemplateSaved.bind(this)
			}
		});
	},

	addSavedWidgetsToPanel: function addSavedWidgetsToPanel() {
		var self = this;

		self.panelWidgets = new Backbone.Collection();

		_.each(elementorPro.config.widget_templates, function (templateArgs, id) {
			self.addGlobalWidget(id, templateArgs);
		});

		elementor.hooks.addFilter('panel/elements/regionViews', function (regionViews) {
			_.extend(regionViews.global, {
				view: __webpack_require__(35),
				options: {
					collection: self.panelWidgets
				}
			});

			return regionViews;
		});
	},

	addPanelPage: function addPanelPage() {
		elementor.getPanelView().addPage('globalWidget', {
			view: __webpack_require__(37)
		});
	},

	getGlobalModels: function getGlobalModels(id) {
		if (!id) {
			return this.globalModels;
		}

		return this.globalModels[id];
	},

	saveTemplates: function saveTemplates() {
		if (!Object.keys(this.globalModels).length) {
			return;
		}

		var templatesData = [],
		    self = this;

		_.each(this.globalModels, function (templateModel, id) {
			if ('loaded' !== templateModel.get('settingsLoadedStatus')) {
				return;
			}

			var data = {
				content: JSON.stringify([templateModel.toJSON({ removeDefault: true })]),
				source: 'local',
				type: 'widget',
				id: id
			};

			templatesData.push(data);
		});

		if (!templatesData.length) {
			return;
		}

		elementorCommon.ajax.addRequest('update_templates', {
			data: {
				templates: templatesData
			},
			success: function success() {
				self.templatesAreSaved = true;
			}
		});
	},

	setSaveButton: function setSaveButton() {
		if (elementor.saver) {
			elementor.saver.on('before:save:publish', _.bind(this.saveTemplates, this));
			elementor.saver.on('before:save:private', _.bind(this.saveTemplates, this));
		} else {
			// TODO: remove. Backward Compatibility for Elementor < 1.8
			elementor.getPanelView().footer.currentView.ui.buttonSave.on('click', this.saveTemplates.bind(this));
		}
	},

	requestGlobalModelSettings: function requestGlobalModelSettings(globalModel, callback) {
		elementor.templates.requestTemplateContent('local', globalModel.get('id'), {
			success: function success(data) {
				globalModel.set('settingsLoadedStatus', 'loaded').trigger('settings:loaded');

				var settings = data.content[0].settings,
				    settingsModel = globalModel.get('settings');

				// Don't track it in History
				if (elementor.history) {
					elementor.history.history.setActive(false);
				}

				settingsModel.handleRepeaterData(settings);

				settingsModel.set(settings);

				if (callback) {
					callback(globalModel);
				}

				if (elementor.history) {
					elementor.history.history.setActive(true);
				}
			}
		});
	},

	setWidgetContextMenuSaveAction: function setWidgetContextMenuSaveAction() {
		elementor.hooks.addFilter('elements/widget/contextMenuGroups', function (groups, widget) {
			var saveGroup = _.findWhere(groups, { name: 'save' }),
			    saveAction = _.findWhere(saveGroup.actions, { name: 'save' });

			saveAction.callback = widget.save.bind(widget);

			delete saveAction.shortcut;

			return groups;
		});
	},

	onElementorInit: function onElementorInit() {
		this.setWidgetType();

		this.registerTemplateType();

		this.setWidgetContextMenuSaveAction();
	},

	onElementorFrontendInit: function onElementorFrontendInit() {
		this.addSavedWidgetsToPanel();
	},

	onElementorPreviewLoaded: function onElementorPreviewLoaded() {
		this.addPanelPage();
		this.setSaveButton();
	},

	onWidgetTemplateSaved: function onWidgetTemplateSaved(data) {
		if (elementor.history) {
			elementor.history.history.startItem({
				title: elementor.config.widgets[data.widgetType].title,
				type: elementorPro.translate('linked_to_global')
			});
		}

		var widgetModel = elementor.templates.getLayout().modalContent.currentView.model,
		    widgetModelIndex = widgetModel.collection.indexOf(widgetModel);

		elementor.templates.closeModal();

		data.elType = data.type;
		data.settings = widgetModel.get('settings').attributes;

		var globalModel = this.addGlobalWidget(data.template_id, data),
		    globalModelAttributes = globalModel.attributes;

		widgetModel.collection.add({
			id: elementor.helpers.getUniqueID(),
			elType: globalModelAttributes.type,
			templateID: globalModelAttributes.template_id,
			widgetType: 'global'
		}, { at: widgetModelIndex }, true);

		widgetModel.destroy();

		var panel = elementor.getPanelView();

		panel.setPage('elements');

		panel.getCurrentPageView().activateTab('global');

		if (elementor.history) {
			elementor.history.history.endItem();
		}
	}
});

/***/ }),
/* 33 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var WidgetView = elementor.modules.elements.views.Widget,
    GlobalWidgetView;

GlobalWidgetView = WidgetView.extend({

	globalModel: null,

	className: function className() {
		return WidgetView.prototype.className.apply(this, arguments) + ' elementor-global-widget elementor-global-' + this.model.get('templateID');
	},

	initialize: function initialize() {
		var self = this,
		    previewSettings = self.model.get('previewSettings'),
		    globalModel = self.getGlobalModel();

		if (previewSettings) {
			globalModel.set('settingsLoadedStatus', 'loaded').trigger('settings:loaded');

			var settingsModel = globalModel.get('settings');

			settingsModel.handleRepeaterData(previewSettings);

			settingsModel.set(previewSettings, { silent: true });
		} else {
			var globalSettingsLoadedStatus = globalModel.get('settingsLoadedStatus');

			if (!globalSettingsLoadedStatus) {
				globalModel.set('settingsLoadedStatus', 'pending');

				elementorPro.modules.globalWidget.requestGlobalModelSettings(globalModel);
			}

			if ('loaded' !== globalSettingsLoadedStatus) {
				self.$el.addClass('elementor-loading');
			}

			globalModel.on('settings:loaded', function () {
				self.$el.removeClass('elementor-loading');

				self.render();
			});
		}

		WidgetView.prototype.initialize.apply(self, arguments);
	},

	getGlobalModel: function getGlobalModel() {
		if (!this.globalModel) {
			this.globalModel = elementorPro.modules.globalWidget.getGlobalModels(this.model.get('templateID'));
		}

		return this.globalModel;
	},

	getEditModel: function getEditModel() {
		return this.getGlobalModel();
	},

	getHTMLContent: function getHTMLContent(html) {
		if ('loaded' === this.getGlobalModel().get('settingsLoadedStatus')) {
			return WidgetView.prototype.getHTMLContent.call(this, html);
		}

		return '';
	},

	serializeModel: function serializeModel() {
		var globalModel = this.getGlobalModel();

		return globalModel.toJSON.apply(globalModel, _.rest(arguments));
	},

	edit: function edit() {
		elementor.getPanelView().setPage('globalWidget', 'Global Editing', { editedView: this });
	},

	unlink: function unlink() {
		var globalModel = this.getGlobalModel();

		elementor.history.history.startItem({
			title: globalModel.getTitle(),
			type: elementorPro.translate('unlink_widget')
		});

		var newModel = new elementor.modules.elements.models.Element({
			elType: 'widget',
			widgetType: globalModel.get('widgetType'),
			id: elementor.helpers.getUniqueID(),
			settings: elementor.helpers.cloneObject(globalModel.get('settings').attributes),
			defaultEditSettings: elementor.helpers.cloneObject(globalModel.get('editSettings').attributes)
		});

		this._parent.addChildModel(newModel, { at: this.model.collection.indexOf(this.model) });

		var newWidget = this._parent.children.findByModelCid(newModel.cid);

		this.model.destroy();

		if (elementor.history) {
			elementor.history.history.endItem();
		}

		if (newWidget.edit) {
			newWidget.edit();
		}

		newModel.trigger('request:edit');
	},

	onEditRequest: function onEditRequest() {
		elementor.getPanelView().setPage('globalWidget', 'Global Editing', { editedView: this });
	}
});

module.exports = GlobalWidgetView;

/***/ }),
/* 34 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.elements.models.Element.extend({
	initialize: function initialize() {
		this.set({ widgetType: 'global' }, { silent: true });

		elementor.modules.elements.models.Element.prototype.initialize.apply(this, arguments);

		elementorFrontend.config.elements.data[this.cid].on('change', this.onSettingsChange.bind(this));
	},

	initSettings: function initSettings() {
		var globalModel = this.getGlobalModel(),
		    settingsModel = globalModel.get('settings');

		this.set('settings', settingsModel);

		elementorFrontend.config.elements.data[this.cid] = settingsModel;

		elementorFrontend.config.elements.editSettings[this.cid] = globalModel.get('editSettings');
	},

	initEditSettings: function initEditSettings() {},

	getGlobalModel: function getGlobalModel() {
		var templateID = this.get('templateID');

		return elementorPro.modules.globalWidget.getGlobalModels(templateID);
	},

	getTitle: function getTitle() {
		var title = this.getSetting('_title');

		if (!title) {
			title = this.getGlobalModel().get('title');
		}

		var global = elementorPro.translate('global');

		title = title.replace(new RegExp('\\(' + global + '\\)$'), '');

		return title + ' (' + global + ')';
	},

	getIcon: function getIcon() {
		return this.getGlobalModel().getIcon();
	},

	onSettingsChange: function onSettingsChange(model) {
		if (!model.changed.elements) {
			this.set('previewSettings', model.toJSON({ removeDefault: true }), { silent: true });
		}
	},

	onDestroy: function onDestroy() {
		var panel = elementor.getPanelView(),
		    currentPageName = panel.getCurrentPageName();

		if (-1 !== ['editor', 'globalWidget'].indexOf(currentPageName)) {
			panel.setPage('elements');
		}
	}
});

/***/ }),
/* 35 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.layouts.panel.pages.elements.views.Elements.extend({
	id: 'elementor-global-templates',

	getEmptyView: function getEmptyView() {
		if (this.collection.length) {
			return null;
		}

		return __webpack_require__(36);
	},

	onFilterEmpty: function onFilterEmpty() {}
});

/***/ }),
/* 36 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var GlobalWidgetsView = elementor.modules.layouts.panel.pages.elements.views.Global;

module.exports = GlobalWidgetsView.extend({
	template: '#tmpl-elementor-panel-global-widget-no-templates',

	id: 'elementor-panel-global-widget-no-templates',

	className: 'elementor-nerd-box elementor-panel-nerd-box'
});

/***/ }),
/* 37 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = Marionette.ItemView.extend({
	id: 'elementor-panel-global-widget',

	template: '#tmpl-elementor-panel-global-widget',

	ui: {
		editButton: '#elementor-global-widget-locked-edit .elementor-button',
		unlinkButton: '#elementor-global-widget-locked-unlink .elementor-button',
		loading: '#elementor-global-widget-loading'
	},

	events: {
		'click @ui.editButton': 'onEditButtonClick',
		'click @ui.unlinkButton': 'onUnlinkButtonClick'
	},

	initialize: function initialize() {
		this.initUnlinkDialog();
	},

	buildUnlinkDialog: function buildUnlinkDialog() {
		var self = this;

		return elementorCommon.dialogsManager.createWidget('confirm', {
			id: 'elementor-global-widget-unlink-dialog',
			headerMessage: elementorPro.translate('unlink_widget'),
			message: elementorPro.translate('dialog_confirm_unlink'),
			position: {
				my: 'center center',
				at: 'center center'
			},
			strings: {
				confirm: elementorPro.translate('unlink'),
				cancel: elementorPro.translate('cancel')
			},
			onConfirm: function onConfirm() {
				self.getOption('editedView').unlink();
			}
		});
	},

	initUnlinkDialog: function initUnlinkDialog() {
		var dialog;

		this.getUnlinkDialog = function () {
			if (!dialog) {
				dialog = this.buildUnlinkDialog();
			}

			return dialog;
		};
	},

	editGlobalModel: function editGlobalModel() {
		var editedView = this.getOption('editedView');

		elementor.getPanelView().openEditor(editedView.getEditModel(), editedView);
	},

	onEditButtonClick: function onEditButtonClick() {
		var self = this,
		    editedView = self.getOption('editedView'),
		    editedModel = editedView.getEditModel();

		if ('loaded' === editedModel.get('settingsLoadedStatus')) {
			self.editGlobalModel();

			return;
		}

		self.ui.loading.removeClass('elementor-hidden');

		elementorPro.modules.globalWidget.requestGlobalModelSettings(editedModel, function () {
			self.ui.loading.addClass('elementor-hidden');

			self.editGlobalModel();
		});
	},

	onUnlinkButtonClick: function onUnlinkButtonClick() {
		this.getUnlinkDialog().show();
	}
});

/***/ }),
/* 38 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorInit: function onElementorInit() {
		elementor.channels.editor.on('section:activated', this.onSectionActivated);
	},

	onSectionActivated: function onSectionActivated(sectionName, editor) {
		var editedElement = editor.getOption('editedElementView');

		if ('flip-box' !== editedElement.model.get('widgetType')) {
			return;
		}

		var isSideBSection = -1 !== ['section_side_b_content', 'section_style_b'].indexOf(sectionName);

		editedElement.$el.toggleClass('elementor-flip-box--flipped', isSideBSection);

		var $backLayer = editedElement.$el.find('.elementor-flip-box__back');

		if (isSideBSection) {
			$backLayer.css('transition', 'none');
		}

		if (!isSideBSection) {
			setTimeout(function () {
				$backLayer.css('transition', '');
			}, 10);
		}
	}
});

/***/ }),
/* 39 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	config: elementorPro.config.shareButtonsNetworks,

	networksClassDictionary: {
		google: 'fa fa-google-plus',
		pocket: 'fa fa-get-pocket',
		email: 'fa fa-envelope'
	},

	getNetworkClass: function getNetworkClass(networkName) {
		return this.networksClassDictionary[networkName] || 'fa fa-' + networkName;
	},

	getNetworkTitle: function getNetworkTitle(buttonSettings) {
		return buttonSettings.text || this.config[buttonSettings.button].title;
	},

	hasCounter: function hasCounter(networkName, settings) {
		return 'icon' !== settings.view && 'yes' === settings.show_counter && this.config[networkName].has_counter;
	}
});

/***/ }),
/* 40 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorInit: function onElementorInit() {
		var FontsManager = __webpack_require__(41);

		this.assets = {
			font: new FontsManager()
		};
	}
});

/***/ }),
/* 41 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.Module.extend({

	_enqueuedFonts: [],
	_enqueuedTypekit: false,

	onFontChange: function onFontChange(fontType, font) {
		if ('custom' !== fontType && 'typekit' !== fontType) {
			return;
		}

		if (-1 !== this._enqueuedFonts.indexOf(font)) {
			return;
		}

		if ('typekit' === fontType && this._enqueuedTypekit) {
			return;
		}

		this.getCustomFont(fontType, font);
	},

	getCustomFont: function getCustomFont(fontType, font) {
		elementorPro.ajax.addRequest('assets_manager_panel_action_data', {
			data: {
				service: 'font',
				type: fontType,
				font: font
			},
			success: function success(data) {
				if (data.font_face) {
					elementor.$previewContents.find('style:last').after('<style type="text/css">' + data.font_face + '</style>');
				}

				if (data.font_url) {
					elementor.$previewContents.find('link:last').after('<link href="' + data.font_url + '" rel="stylesheet" type="text/css">');
				}
			}
		});

		this._enqueuedFonts.push(font);

		if ('typekit' === fontType) {
			this._enqueuedTypekit = true;
		}
	},

	onInit: function onInit() {
		elementor.channels.editor.on('font:insertion', this.onFontChange.bind(this));
	}
});

/***/ }),
/* 42 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({
	onElementorPreviewLoaded: function onElementorPreviewLoaded() {
		var CommentsSkin = __webpack_require__(43);
		this.commentsSkin = new CommentsSkin();
	}
});

/***/ }),
/* 43 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var self = this;

	self.onPanelShow = function (panel, model) {
		var settingsModel = model.get('settings');

		// If no skins - set the skin to `theme_comments`.
		if (!settingsModel.controls._skin.default) {
			settingsModel.set('_skin', 'theme_comments');
		}
	};

	self.init = function () {
		elementor.hooks.addAction('panel/open_editor/widget/post-comments', self.onPanelShow);
	};

	self.init();
};

/***/ }),
/* 44 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var EditorModule = __webpack_require__(0);

module.exports = EditorModule.extend({

	onElementorInit: function onElementorInit() {
		elementor.addControlView('Conditions_repeater', __webpack_require__(45));

		elementor.hooks.addFilter('panel/footer/behaviors', this.addFooterBehavior);

		this.initConditionsLayout();
	},

	addFooterBehavior: function addFooterBehavior(behaviors) {
		if (elementorPro.config.theme_builder) {
			var ProSaverBehavior = __webpack_require__(47);
			behaviors.saver = {
				behaviorClass: ProSaverBehavior
			};
		}

		return behaviors;
	},

	saveAndReload: function saveAndReload() {
		elementor.saver.saveAutoSave({
			onSuccess: function onSuccess() {
				elementor.dynamicTags.cleanCache();
				elementor.reloadPreview();
			}
		});
	},

	onApplyPreview: function onApplyPreview() {
		this.saveAndReload();
	},

	onPageSettingsChange: function onPageSettingsChange(model) {
		if (model.changed.preview_type) {
			model.set({
				preview_id: '',
				preview_search_term: ''
			});
			this.updatePreviewIdOptions(true);
		}

		if (!_.isUndefined(model.changed.page_template)) {
			elementor.saver.saveAutoSave({
				onSuccess: function onSuccess() {
					elementor.reloadPreview();

					elementor.once('preview:loaded', function () {
						elementor.getPanelView().setPage('page_settings');
					});
				}
			});
		}
	},

	updatePreviewIdOptions: function updatePreviewIdOptions(render) {
		var previewType = elementor.settings.page.model.get('preview_type');
		if (!previewType) {
			return;
		}
		previewType = previewType.split('/');

		var currentView = elementor.getPanelView().getCurrentPageView(),
		    controlModel = currentView.collection.findWhere({
			name: 'preview_id'
		});

		if ('author' === previewType[1]) {
			controlModel.set({
				filter_type: 'author',
				object_type: 'author'
			});
		} else if ('taxonomy' === previewType[0]) {
			controlModel.set({
				filter_type: 'taxonomy',
				object_type: previewType[1]
			});
		} else if ('single' === previewType[0]) {
			controlModel.set({
				filter_type: 'post',
				object_type: previewType[1]
			});
		} else {
			controlModel.set({
				filter_type: '',
				object_type: ''
			});
		}

		if (true === render) {
			// Can be model.
			var controlView = currentView.children.findByModel(controlModel);

			controlView.render();

			controlView.$el.toggle(!!controlModel.get('filter_type'));
		}
	},

	onElementorPreviewLoaded: function onElementorPreviewLoaded() {
		if (!elementorPro.config.theme_builder) {
			return;
		}

		elementor.getPanelView().on('set:page:page_settings', this.updatePreviewIdOptions);

		elementor.settings.page.model.on('change', this.onPageSettingsChange.bind(this));

		elementor.channels.editor.on('elementorThemeBuilder:ApplyPreview', this.onApplyPreview.bind(this));

		// Scroll to Editor. Timeout according to preview resize css animation duration.
		setTimeout(function () {
			elementor.$previewContents.find('html, body').animate({
				scrollTop: elementor.$previewContents.find('#elementor').offset().top - elementor.$preview[0].contentWindow.innerHeight / 2
			});
		}, 500);
	},

	showConditionsModal: function showConditionsModal() {
		var ThemeTemplateConditionsView = __webpack_require__(48),
		    themeBuilderModule = elementorPro.config.theme_builder,
		    settings = themeBuilderModule.settings;

		var model = new elementor.modules.elements.models.BaseSettings(settings, {
			controls: themeBuilderModule.template_conditions.controls
		});

		this.conditionsLayout.modalContent.show(new ThemeTemplateConditionsView({
			model: model,
			controls: model.controls
		}));

		this.conditionsLayout.showModal();
	},

	initConditionsLayout: function initConditionsLayout() {
		var ConditionsLayout = __webpack_require__(50);

		this.conditionsLayout = new ConditionsLayout();
	}
});

/***/ }),
/* 45 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var RepeaterRowView = __webpack_require__(46);

module.exports = elementor.modules.controls.Repeater.extend({

	childView: RepeaterRowView,

	updateActiveRow: function updateActiveRow() {},

	initialize: function initialize() {
		elementor.modules.controls.Repeater.prototype.initialize.apply(this, arguments);

		this.config = elementorPro.config.theme_builder;

		this.updateConditionsOptions(this.config.settings.template_type);
	},

	checkConflicts: function checkConflicts(model) {
		var modelId = model.get('_id'),
		    rowId = 'elementor-condition-id-' + modelId,
		    errorMessageId = 'elementor-conditions-conflict-message-' + modelId,
		    $error = jQuery('#' + errorMessageId);

		// On render - the row isn't exist, so don't cache it.
		jQuery('#' + rowId).removeClass('elementor-error');

		$error.remove();

		elementorPro.ajax.addRequest('theme_builder_conditions_check_conflicts', {
			unique_id: rowId,
			data: {
				condition: model.toJSON({ removeDefaults: true })
			},
			success: function success(data) {
				if (!_.isEmpty(data)) {
					jQuery('#' + rowId).addClass('elementor-error').after('<div id="' + errorMessageId + '" class="elementor-conditions-conflict-message">' + data + '</div>');
				}
			}
		});
	},

	updateConditionsOptions: function updateConditionsOptions(templateType) {
		var self = this,
		    conditionType = self.config.types[templateType].condition_type,
		    options = {};

		_([conditionType]).each(function (conditionId, conditionIndex) {
			var conditionConfig = self.config.conditions[conditionId],
			    group = {
				label: conditionConfig.label,
				options: {}
			};

			group.options[conditionId] = conditionConfig.all_label;

			_(conditionConfig.sub_conditions).each(function (subConditionId) {
				group.options[subConditionId] = self.config.conditions[subConditionId].label;
			});

			options[conditionIndex] = group;
		});

		var fields = this.model.get('fields');

		fields[1].default = conditionType;

		if ('general' === conditionType) {
			fields[1].groups = options;
		} else {
			fields[2].groups = options;
		}
	},

	togglePublishButtonState: function togglePublishButtonState() {
		var conditionsModalUI = elementorPro.modules.themeBuilder.conditionsLayout.modalContent.currentView.ui,
		    $publishButton = conditionsModalUI.publishButton,
		    $publishButtonTitle = conditionsModalUI.publishButtonTitle;

		if (this.collection.length) {
			$publishButton.addClass('elementor-button-success');

			$publishButtonTitle.text(elementor.translate('publish'));
		} else {
			$publishButton.removeClass('elementor-button-success');

			$publishButtonTitle.text(elementorPro.translate('save_without_conditions'));
		}
	},

	onRender: function onRender() {
		this.ui.btnAddRow.text(elementorPro.translate('add_condition'));

		var self = this;

		this.collection.each(function (model) {
			self.checkConflicts(model);
		});

		_.defer(this.togglePublishButtonState.bind(this));
	},

	// Overwrite thr original + checkConflicts.
	onRowControlChange: function onRowControlChange(model) {
		this.checkConflicts(model);
	},

	onRowUpdate: function onRowUpdate() {
		elementor.modules.controls.Repeater.prototype.onRowUpdate.apply(this, arguments);

		this.togglePublishButtonState();
	}
});

/***/ }),
/* 46 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.controls.RepeaterRow.extend({

	template: '#tmpl-elementor-theme-builder-conditions-repeater-row',

	childViewContainer: '.elementor-theme-builder-conditions-repeater-row-controls',

	id: function id() {
		return 'elementor-condition-id-' + this.model.get('_id');
	},

	onBeforeRender: function onBeforeRender() {
		var subNameModel = this.collection.findWhere({
			name: 'sub_name'
		}),
		    subIdModel = this.collection.findWhere({
			name: 'sub_id'
		}),
		    subConditionConfig = this.config.conditions[this.model.attributes.sub_name];

		subNameModel.attributes.groups = this.getOptions();

		if (subConditionConfig && subConditionConfig.controls) {
			_(subConditionConfig.controls).each(function (control) {
				subIdModel.set(control);
				subIdModel.set('name', 'sub_id');
			});
		}
	},

	initialize: function initialize() {
		elementor.modules.controls.RepeaterRow.prototype.initialize.apply(this, arguments);

		this.config = elementorPro.config.theme_builder;
	},

	updateOptions: function updateOptions() {
		if (this.model.changed.name) {
			this.model.set({
				sub_name: '',
				sub_id: ''
			});
		}

		if (this.model.changed.name || this.model.changed.sub_name) {
			this.model.set('sub_id', '');

			var subIdModel = this.collection.findWhere({
				name: 'sub_id'
			});

			subIdModel.set({
				type: 'select',
				options: {
					'': 'All'
				}
			});

			this.render();
		}

		if (this.model.changed.type) {
			this.setTypeAttribute();
		}
	},

	getOptions: function getOptions() {
		var self = this,
		    conditionConfig = self.config.conditions[this.model.get('name')];

		if (!conditionConfig) {
			return;
		}

		var options = {
			'': conditionConfig.all_label
		};

		_(conditionConfig.sub_conditions).each(function (conditionId, conditionIndex) {
			var subConditionConfig = self.config.conditions[conditionId],
			    group;

			if (!subConditionConfig) {
				return;
			}

			if (subConditionConfig.sub_conditions.length) {
				group = {
					label: subConditionConfig.label,
					options: {}
				};
				group.options[conditionId] = subConditionConfig.all_label;

				_(subConditionConfig.sub_conditions).each(function (subConditionId) {
					group.options[subConditionId] = self.config.conditions[subConditionId].label;
				});

				// Use a sting key - to keep order
				options['key' + conditionIndex] = group;
			} else {
				options[conditionId] = subConditionConfig.label;
			}
		});

		return options;
	},

	setTypeAttribute: function setTypeAttribute() {
		var typeView = this.children.findByModel(this.collection.findWhere({ name: 'type' }));

		typeView.$el.attr('data-elementor-condition-type', typeView.getControlValue());
	},

	onRender: function onRender() {
		var nameModel = this.collection.findWhere({
			name: 'name'
		}),
		    subNameModel = this.collection.findWhere({
			name: 'sub_name'
		}),
		    subIdModel = this.collection.findWhere({
			name: 'sub_id'
		}),
		    nameView = this.children.findByModel(nameModel),
		    subNameView = this.children.findByModel(subNameModel),
		    subIdView = this.children.findByModel(subIdModel),
		    conditionConfig = this.config.conditions[this.model.attributes.name],
		    subConditionConfig = this.config.conditions[this.model.attributes.sub_name],
		    typeConfig = this.config.types[this.config.settings.template_type];

		if (typeConfig.condition_type === nameView.getControlValue() && 'general' !== nameView.getControlValue() && !_.isEmpty(conditionConfig.sub_conditions)) {
			nameView.$el.hide();
		}

		if (!conditionConfig || _.isEmpty(conditionConfig.sub_conditions) && _.isEmpty(conditionConfig.controls) || !nameView.getControlValue() || 'general' === nameView.getControlValue()) {
			subNameView.$el.hide();
		}

		if (!subConditionConfig || _.isEmpty(subConditionConfig.controls) || !subNameView.getControlValue()) {
			subIdView.$el.hide();
		}

		// Avoid set a `single` for a-l-l singular types. (conflicted with 404 & custom cpt like Shops and Events plugins).
		if ('singular' === typeConfig.condition_type) {
			if ('' === subNameView.getControlValue()) {
				subNameView.setValue('post');
			}
		}

		this.setTypeAttribute();
	},

	onModelChange: function onModelChange() {
		elementor.modules.controls.RepeaterRow.prototype.onModelChange.apply(this, arguments);

		this.updateOptions();
	}
});

/***/ }),
/* 47 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var SaverBehavior = elementor.modules.components.saver.behaviors.FooterSaver;

module.exports = SaverBehavior.extend({
	ui: function ui() {
		var ui = SaverBehavior.prototype.ui.apply(this, arguments);

		ui.menuConditions = '#elementor-pro-panel-saver-conditions';
		ui.buttonPreviewSettings = '#elementor-panel-footer-theme-builder-button-preview-settings';
		ui.buttonOpenPreview = '#elementor-panel-footer-theme-builder-button-open-preview';

		return ui;
	},

	events: function events() {
		var events = SaverBehavior.prototype.events.apply(this, arguments);

		delete events['click @ui.buttonPreview'];

		events['click @ui.menuConditions'] = 'onClickMenuConditions';
		events['click @ui.buttonPreviewSettings'] = 'onClickButtonPreviewSettings';
		events['click @ui.buttonOpenPreview'] = 'onClickButtonPreview';

		return events;
	},

	initialize: function initialize() {
		SaverBehavior.prototype.initialize.apply(this, arguments);

		elementor.settings.page.model.on('change', this.onChangeLocation.bind(this));
	},

	onRender: function onRender() {
		SaverBehavior.prototype.onRender.apply(this, arguments);

		var $menuConditions = jQuery('<div>', {
			id: 'elementor-pro-panel-saver-conditions',
			class: 'elementor-panel-footer-sub-menu-item',
			html: '<i class="elementor-icon fa fa-paper-plane"></i>' + '<span class="elementor-title">' + elementorPro.translate('display_conditions') + '</span>'
		});

		this.ui.menuConditions = $menuConditions;

		this.toggleMenuConditions();

		this.ui.saveTemplate.before($menuConditions);

		this.ui.buttonPreview.tipsy('disable').html(jQuery('#tmpl-elementor-theme-builder-button-preview').html()).addClass('elementor-panel-footer-theme-builder-buttons-wrapper elementor-toggle-state');
	},

	toggleMenuConditions: function toggleMenuConditions() {
		this.ui.menuConditions.toggle(!!elementorPro.config.theme_builder.settings.location);
	},

	onChangeLocation: function onChangeLocation(settings) {
		if (!_.isUndefined(settings.changed.location)) {
			elementorPro.config.theme_builder.settings.location = settings.changed.location;
			this.toggleMenuConditions();
		}
	},

	onClickMenuConditions: function onClickMenuConditions() {
		elementorPro.modules.themeBuilder.showConditionsModal();
	},

	onClickButtonPublish: function onClickButtonPublish() {
		var hasConditions = elementorPro.config.theme_builder.settings.conditions.length,
		    hasLocation = elementorPro.config.theme_builder.settings.location,
		    isDraft = 'draft' === elementor.settings.page.model.get('post_status');
		if (hasConditions && !isDraft || !hasLocation) {
			SaverBehavior.prototype.onClickButtonPublish.apply(this, arguments);
		} else {
			elementorPro.modules.themeBuilder.showConditionsModal();
		}
	},

	onClickButtonPreviewSettings: function onClickButtonPreviewSettings() {
		var panel = elementor.getPanelView();
		panel.setPage('page_settings');
		panel.getCurrentPageView().activateSection('preview_settings');
		panel.getCurrentPageView()._renderChildren();
	}
});

/***/ }),
/* 48 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var inlineControlsStack = __webpack_require__(49);

module.exports = inlineControlsStack.extend({
	id: 'elementor-theme-builder-conditions-view',

	template: '#tmpl-elementor-theme-builder-conditions-view',

	childViewContainer: '#elementor-theme-builder-conditions-controls',

	ui: function ui() {
		var ui = inlineControlsStack.prototype.ui.apply(this, arguments);

		ui.publishButton = '#elementor-theme-builder-conditions__publish';

		ui.publishButtonTitle = '#elementor-theme-builder-conditions__publish__title';

		return ui;
	},

	events: {
		'click @ui.publishButton': 'onClickPublish'
	},

	templateHelpers: function templateHelpers() {
		return {
			title: elementorPro.translate('conditions_title'),
			description: elementorPro.translate('conditions_description')
		};
	},

	childViewOptions: function childViewOptions() {
		return {
			elementSettingsModel: this.model
		};
	},

	onClickPublish: function onClickPublish(event) {
		var self = this,
		    $button = jQuery(event.currentTarget),
		    data = this.model.toJSON({ removeDefault: true });

		event.stopPropagation();

		$button.attr('disabled', true).addClass('elementor-button-state');

		// Publish.
		elementorPro.ajax.addRequest('theme_builder_save_conditions', {
			data: data,
			success: function success() {
				elementorPro.config.theme_builder.settings.conditions = self.model.get('conditions');
				elementor.saver.publish();
			},
			complete: function complete() {
				self.afterAjax($button);
			}
		});
	},

	afterAjax: function afterAjax($button) {
		$button.attr('disabled', false).removeClass('elementor-button-state');

		elementorPro.modules.themeBuilder.conditionsLayout.modal.hide();
	}
});

/***/ }),
/* 49 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementor.modules.views.ControlsStack.extend({
	activeTab: 'content',

	activeSection: 'settings',

	initialize: function initialize() {
		this.collection = new Backbone.Collection(_.values(this.options.controls));
	},

	filter: function filter(model) {
		if ('section' === model.get('type')) {
			return true;
		}

		var section = model.get('section');

		return !section || section === this.activeSection;
	},

	childViewOptions: function childViewOptions() {
		return {
			elementSettingsModel: this.model
		};
	}
});

/***/ }),
/* 50 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var BaseModalLayout = elementor.modules.components.templateLibrary.views.BaseModalLayout;

module.exports = BaseModalLayout.extend({

	getModalOptions: function getModalOptions() {
		return {
			id: 'elementor-conditions-modal'
		};
	},

	getLogoOptions: function getLogoOptions() {
		return {
			title: elementorPro.translate('display_conditions')
		};
	},

	initialize: function initialize() {
		BaseModalLayout.prototype.initialize.apply(this, arguments);

		this.showLogo();
	}
});

/***/ })
/******/ ]);
//# sourceMappingURL=editor.js.map