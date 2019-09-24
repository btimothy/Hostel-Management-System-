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
/******/ 	return __webpack_require__(__webpack_require__.s = 65);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementorFrontend.Module.extend({

	getElementName: function getElementName() {
		return 'posts';
	},

	getSkinPrefix: function getSkinPrefix() {
		return 'classic_';
	},

	bindEvents: function bindEvents() {
		var cid = this.getModelCID();

		elementorFrontend.addListenerOnce(cid, 'resize', this.onWindowResize);
	},

	getClosureMethodsNames: function getClosureMethodsNames() {
		return elementorFrontend.Module.prototype.getClosureMethodsNames.apply(this, arguments).concat(['fitImages', 'onWindowResize', 'runMasonry']);
	},

	getDefaultSettings: function getDefaultSettings() {
		return {
			classes: {
				fitHeight: 'elementor-fit-height',
				hasItemRatio: 'elementor-has-item-ratio'
			},
			selectors: {
				postsContainer: '.elementor-posts-container',
				post: '.elementor-post',
				postThumbnail: '.elementor-post__thumbnail',
				postThumbnailImage: '.elementor-post__thumbnail img'
			}
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors');

		return {
			$postsContainer: this.$element.find(selectors.postsContainer),
			$posts: this.$element.find(selectors.post)
		};
	},

	fitImage: function fitImage($post) {
		var settings = this.getSettings(),
		    $imageParent = $post.find(settings.selectors.postThumbnail),
		    $image = $imageParent.find('img'),
		    image = $image[0];

		if (!image) {
			return;
		}

		var imageParentRatio = $imageParent.outerHeight() / $imageParent.outerWidth(),
		    imageRatio = image.naturalHeight / image.naturalWidth;

		$imageParent.toggleClass(settings.classes.fitHeight, imageRatio < imageParentRatio);
	},

	fitImages: function fitImages() {
		var $ = jQuery,
		    self = this,
		    itemRatio = getComputedStyle(this.$element[0], ':after').content,
		    settings = this.getSettings();

		this.elements.$postsContainer.toggleClass(settings.classes.hasItemRatio, !!itemRatio.match(/\d/));

		if (self.isMasonryEnabled()) {
			return;
		}

		this.elements.$posts.each(function () {
			var $post = $(this),
			    $image = $post.find(settings.selectors.postThumbnailImage);

			self.fitImage($post);

			$image.on('load', function () {
				self.fitImage($post);
			});
		});
	},

	setColsCountSettings: function setColsCountSettings() {
		var currentDeviceMode = elementorFrontend.getCurrentDeviceMode(),
		    settings = this.getElementSettings(),
		    skinPrefix = this.getSkinPrefix(),
		    colsCount;

		switch (currentDeviceMode) {
			case 'mobile':
				colsCount = settings[skinPrefix + 'columns_mobile'];
				break;
			case 'tablet':
				colsCount = settings[skinPrefix + 'columns_tablet'];
				break;
			default:
				colsCount = settings[skinPrefix + 'columns'];
		}

		this.setSettings('colsCount', colsCount);
	},

	isMasonryEnabled: function isMasonryEnabled() {
		return !!this.getElementSettings(this.getSkinPrefix() + 'masonry');
	},

	initMasonry: function initMasonry() {
		imagesLoaded(this.elements.$posts, this.runMasonry);
	},

	runMasonry: function runMasonry() {
		var elements = this.elements;

		elements.$posts.css({
			marginTop: '',
			transitionDuration: ''
		});

		this.setColsCountSettings();

		var colsCount = this.getSettings('colsCount'),
		    hasMasonry = this.isMasonryEnabled() && colsCount >= 2;

		elements.$postsContainer.toggleClass('elementor-posts-masonry', hasMasonry);

		if (!hasMasonry) {
			elements.$postsContainer.height('');

			return;
		}

		/* The `verticalSpaceBetween` variable is setup in a way that supports older versions of the portfolio widget */

		var verticalSpaceBetween = this.getElementSettings(this.getSkinPrefix() + 'row_gap.size');

		if ('' === this.getSkinPrefix() && '' === verticalSpaceBetween) {
			verticalSpaceBetween = this.getElementSettings(this.getSkinPrefix() + 'item_gap.size');
		}

		var masonry = new elementorFrontend.modules.Masonry({
			container: elements.$postsContainer,
			items: elements.$posts.filter(':visible'),
			columnsCount: this.getSettings('colsCount'),
			verticalSpaceBetween: verticalSpaceBetween
		});

		masonry.run();
	},

	run: function run() {
		// For slow browsers
		setTimeout(this.fitImages, 0);

		this.initMasonry();
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		this.bindEvents();

		this.run();
	},

	onWindowResize: function onWindowResize() {
		this.fitImages();

		this.runMasonry();
	},

	onElementChange: function onElementChange() {
		this.fitImages();

		setTimeout(this.runMasonry);
	}
});

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var FormSender = __webpack_require__(67),
    Form = FormSender.extend();

var RedirectAction = __webpack_require__(68);

module.exports = function ($scope) {
	new Form({ $element: $scope });
	new RedirectAction({ $element: $scope });
};

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var PostsHandler = __webpack_require__(3);

module.exports = PostsHandler.extend({
	getSkinPrefix: function getSkinPrefix() {
		return 'cards_';
	}
});

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementorFrontend.Module.extend({

	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				mainSwiper: '.elementor-main-swiper',
				swiperSlide: '.swiper-slide'
			},
			slidesPerView: {
				desktop: 3,
				tablet: 2,
				mobile: 1
			}
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors');

		var elements = {
			$mainSwiper: this.$element.find(selectors.mainSwiper)
		};

		elements.$mainSwiperSlides = elements.$mainSwiper.find(selectors.swiperSlide);

		return elements;
	},

	getSlidesCount: function getSlidesCount() {
		return this.elements.$mainSwiperSlides.length;
	},

	getInitialSlide: function getInitialSlide() {
		var editSettings = this.getEditSettings();

		return editSettings.activeItemIndex ? editSettings.activeItemIndex - 1 : 0;
	},

	getEffect: function getEffect() {
		return this.getElementSettings('effect');
	},

	getDeviceSlidesPerView: function getDeviceSlidesPerView(device) {
		var slidesPerViewKey = 'slides_per_view' + ('desktop' === device ? '' : '_' + device);

		return Math.min(this.getSlidesCount(), +this.getElementSettings(slidesPerViewKey) || this.getSettings('slidesPerView')[device]);
	},

	getSlidesPerView: function getSlidesPerView(device) {
		if ('slide' === this.getEffect()) {
			return this.getDeviceSlidesPerView(device);
		}

		return 1;
	},

	getDesktopSlidesPerView: function getDesktopSlidesPerView() {
		return this.getSlidesPerView('desktop');
	},

	getTabletSlidesPerView: function getTabletSlidesPerView() {
		return this.getSlidesPerView('tablet');
	},

	getMobileSlidesPerView: function getMobileSlidesPerView() {
		return this.getSlidesPerView('mobile');
	},

	getDeviceSlidesToScroll: function getDeviceSlidesToScroll(device) {
		var slidesToScrollKey = 'slides_to_scroll' + ('desktop' === device ? '' : '_' + device);

		return Math.min(this.getSlidesCount(), +this.getElementSettings(slidesToScrollKey) || 1);
	},

	getSlidesToScroll: function getSlidesToScroll(device) {
		if ('slide' === this.getEffect()) {
			return this.getDeviceSlidesToScroll(device);
		}

		return 1;
	},

	getDesktopSlidesToScroll: function getDesktopSlidesToScroll() {
		return this.getSlidesToScroll('desktop');
	},

	getTabletSlidesToScroll: function getTabletSlidesToScroll() {
		return this.getSlidesToScroll('tablet');
	},

	getMobileSlidesToScroll: function getMobileSlidesToScroll() {
		return this.getSlidesToScroll('mobile');
	},

	getSpaceBetween: function getSpaceBetween(device) {
		var propertyName = 'space_between';

		if (device && 'desktop' !== device) {
			propertyName += '_' + device;
		}

		return this.getElementSettings(propertyName).size || 0;
	},

	getSwiperOptions: function getSwiperOptions() {
		var elementSettings = this.getElementSettings();

		// TODO: Temp migration for old saved values since 2.2.0
		if ('progress' === elementSettings.pagination) {
			elementSettings.pagination = 'progressbar';
		}

		var swiperOptions = {
			grabCursor: true,
			initialSlide: this.getInitialSlide(),
			slidesPerView: this.getDesktopSlidesPerView(),
			slidesPerGroup: this.getDesktopSlidesToScroll(),
			spaceBetween: this.getSpaceBetween(),
			loop: 'yes' === elementSettings.loop,
			speed: elementSettings.speed,
			effect: this.getEffect()
		};

		if (elementSettings.show_arrows) {
			swiperOptions.navigation = {
				prevEl: '.elementor-swiper-button-prev',
				nextEl: '.elementor-swiper-button-next'
			};
		}

		if (elementSettings.pagination) {
			swiperOptions.pagination = {
				el: '.swiper-pagination',
				type: elementSettings.pagination,
				clickable: true
			};
		}

		if ('cube' !== this.getEffect()) {
			var breakpointsSettings = {},
			    breakpoints = elementorFrontend.config.breakpoints;

			breakpointsSettings[breakpoints.lg - 1] = {
				slidesPerView: this.getTabletSlidesPerView(),
				slidesPerGroup: this.getTabletSlidesToScroll(),
				spaceBetween: this.getSpaceBetween('tablet')
			};

			breakpointsSettings[breakpoints.md - 1] = {
				slidesPerView: this.getMobileSlidesPerView(),
				slidesPerGroup: this.getMobileSlidesToScroll(),
				spaceBetween: this.getSpaceBetween('mobile')
			};

			swiperOptions.breakpoints = breakpointsSettings;
		}

		if (!this.isEdit && elementSettings.autoplay) {
			swiperOptions.autoplay = {
				delay: elementSettings.autoplay_speed,
				disableOnInteraction: !!elementSettings.pause_on_interaction
			};
		}

		return swiperOptions;
	},

	updateSpaceBetween: function updateSpaceBetween(swiper, propertyName) {
		var deviceMatch = propertyName.match('space_between_(.*)'),
		    device = deviceMatch ? deviceMatch[1] : 'desktop',
		    newSpaceBetween = this.getSpaceBetween(device),
		    breakpoints = elementorFrontend.config.breakpoints;

		if ('desktop' !== device) {
			var breakpointDictionary = {
				tablet: breakpoints.lg - 1,
				mobile: breakpoints.md - 1
			};

			swiper.params.breakpoints[breakpointDictionary[device]].spaceBetween = newSpaceBetween;
		} else {
			swiper.originalParams.spaceBetween = newSpaceBetween;
		}

		swiper.params.spaceBetween = newSpaceBetween;

		swiper.update();
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		this.swipers = {};

		if (1 >= this.getSlidesCount()) {
			return;
		}

		this.swipers.main = new Swiper(this.elements.$mainSwiper, this.getSwiperOptions());
	},

	onElementChange: function onElementChange(propertyName) {
		if (1 >= this.getSlidesCount()) {
			return;
		}

		if (0 === propertyName.indexOf('width')) {
			this.swipers.main.update();
		}

		if (0 === propertyName.indexOf('space_between')) {
			this.updateSpaceBetween(this.swipers.main, propertyName);
		}
	},

	onEditSettingsChange: function onEditSettingsChange(propertyName) {
		if (1 >= this.getSlidesCount()) {
			return;
		}

		if ('activeItemIndex' === propertyName) {
			this.swipers.main.slideToLoop(this.getEditSettings('activeItemIndex') - 1);
		}
	}
});

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var Base = __webpack_require__(6),
    TestimonialCarousel;

TestimonialCarousel = Base.extend({

	getDefaultSettings: function getDefaultSettings() {
		var defaultSettings = Base.prototype.getDefaultSettings.apply(this, arguments);

		defaultSettings.slidesPerView = {
			desktop: 1,
			tablet: 1,
			mobile: 1
		};

		return defaultSettings;
	},

	getEffect: function getEffect() {
		return 'slide';
	}
});

module.exports = function ($scope) {
	new TestimonialCarousel({ $element: $scope });
};

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var StickyHandler = elementorFrontend.Module.extend({

	bindEvents: function bindEvents() {
		elementorFrontend.addListenerOnce(this.getUniqueHandlerID() + 'sticky', 'resize', this.run);
	},

	unbindEvents: function unbindEvents() {
		elementorFrontend.removeListeners(this.getUniqueHandlerID() + 'sticky', 'resize', this.run);
	},

	isActive: function isActive() {
		return undefined !== this.$element.data('sticky');
	},

	activate: function activate() {
		var elementSettings = this.getElementSettings(),
		    stickyOptions = {
			to: elementSettings.sticky,
			offset: elementSettings.sticky_offset,
			effectsOffset: elementSettings.sticky_effects_offset,
			classes: {
				sticky: 'elementor-sticky',
				stickyActive: 'elementor-sticky--active elementor-section--handles-inside',
				stickyEffects: 'elementor-sticky--effects',
				spacer: 'elementor-sticky__spacer'
			}
		},
		    $wpAdminBar = elementorFrontend.getElements('$wpAdminBar');

		if (elementSettings.sticky_parent) {
			stickyOptions.parent = '.elementor-widget-wrap';
		}

		if ($wpAdminBar.length && 'top' === elementSettings.sticky && 'fixed' === $wpAdminBar.css('position')) {
			stickyOptions.offset += $wpAdminBar.height();
		}

		this.$element.sticky(stickyOptions);
	},

	deactivate: function deactivate() {
		if (!this.isActive()) {
			return;
		}

		this.$element.sticky('destroy');
	},

	run: function run(refresh) {
		if (!this.getElementSettings('sticky')) {
			this.deactivate();

			return;
		}

		var currentDeviceMode = elementorFrontend.getCurrentDeviceMode(),
		    activeDevices = this.getElementSettings('sticky_on');

		if (-1 !== activeDevices.indexOf(currentDeviceMode)) {
			if (true === refresh) {
				this.reactivate();
			} else if (!this.isActive()) {
				this.activate();
			}
		} else {
			this.deactivate();
		}
	},

	reactivate: function reactivate() {
		this.deactivate();

		this.activate();
	},

	onElementChange: function onElementChange(settingKey) {
		if (-1 !== ['sticky', 'sticky_on'].indexOf(settingKey)) {
			this.run(true);
		}

		if (-1 !== ['sticky_offset', 'sticky_effects_offset', 'sticky_parent'].indexOf(settingKey)) {
			this.reactivate();
		}
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		this.run();
	},

	onDestroy: function onDestroy() {
		elementorFrontend.Module.prototype.onDestroy.apply(this, arguments);

		this.deactivate();
	}
});

module.exports = function ($scope) {
	new StickyHandler({ $element: $scope });
};

/***/ }),
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */,
/* 38 */,
/* 39 */,
/* 40 */,
/* 41 */,
/* 42 */,
/* 43 */,
/* 44 */,
/* 45 */,
/* 46 */,
/* 47 */,
/* 48 */,
/* 49 */,
/* 50 */,
/* 51 */,
/* 52 */,
/* 53 */,
/* 54 */,
/* 55 */,
/* 56 */,
/* 57 */,
/* 58 */,
/* 59 */,
/* 60 */,
/* 61 */,
/* 62 */,
/* 63 */,
/* 64 */,
/* 65 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var ElementorProFrontend = function ElementorProFrontend($) {
	var self = this;

	this.config = ElementorProFrontendConfig;

	this.modules = {};

	var handlers = {
		form: __webpack_require__(66),
		countdown: __webpack_require__(72),
		posts: __webpack_require__(74),
		slides: __webpack_require__(76),
		share_buttons: __webpack_require__(78),
		nav_menu: __webpack_require__(80),
		animatedText: __webpack_require__(82),
		carousel: __webpack_require__(84),
		social: __webpack_require__(86),
		themeElements: __webpack_require__(88),
		themeBuilder: __webpack_require__(90),
		sticky: __webpack_require__(93),
		woocommerce: __webpack_require__(94),
		lightbox: __webpack_require__(96)
	};

	var addIeCompatibility = function addIeCompatibility() {
		var isIE = jQuery('body').hasClass('elementor-msie');

		if (!isIE) {
			return;
		}

		var $frontendCss = jQuery('#elementor-pro-css'),
		    msieCss = $frontendCss[0].outerHTML.replace('css/frontend', 'css/frontend-msie').replace('elementor-pro-css', 'elementor-pro-msie-css');

		$frontendCss.after(msieCss);
	};

	var initModules = function initModules() {
		self.modules = {};

		$.each(handlers, function (moduleName) {
			self.modules[moduleName] = new this($);
		});
	};

	this.init = function () {
		addIeCompatibility();
		$(window).on('elementor/frontend/init', initModules);
	};

	this.init();
};

window.elementorProFrontend = new ElementorProFrontend(jQuery);

/***/ }),
/* 66 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	elementorFrontend.hooks.addAction('frontend/element_ready/form.default', __webpack_require__(4));
	elementorFrontend.hooks.addAction('frontend/element_ready/subscribe.default', __webpack_require__(4));

	elementorFrontend.hooks.addAction('frontend/element_ready/form.default', __webpack_require__(69));

	elementorFrontend.hooks.addAction('frontend/element_ready/form.default', __webpack_require__(70));
	elementorFrontend.hooks.addAction('frontend/element_ready/form.default', __webpack_require__(71));
};

/***/ }),
/* 67 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementorFrontend.Module.extend({

	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				form: '.elementor-form',
				submitButton: '[type="submit"]'
			},
			action: 'elementor_pro_forms_send_form',
			ajaxUrl: elementorProFrontend.config.ajaxurl
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors'),
		    elements = {};

		elements.$form = this.$element.find(selectors.form);
		elements.$submitButton = elements.$form.find(selectors.submitButton);

		return elements;
	},

	bindEvents: function bindEvents() {
		this.elements.$form.on('submit', this.handleSubmit);
		var $fileInput = this.elements.$form.find('input[type=file]');
		if ($fileInput.length) {
			$fileInput.on('change', this.validateFileSize);
		}
	},

	validateFileSize: function validateFileSize(event) {
		var _this = this;

		var $field = jQuery(event.currentTarget),
		    files = $field[0].files;

		if (!files.length) {
			return;
		}

		var maxSize = parseInt($field.attr('data-maxsize')) * 1024 * 1024,
		    maxSizeMessage = $field.attr('data-maxsize-message');

		var filesArray = Array.prototype.slice.call(files);
		filesArray.forEach(function (file) {
			if (maxSize < file.size) {
				$field.parent().addClass('elementor-error').append('<span class="elementor-message elementor-message-danger elementor-help-inline elementor-form-help-inline" role="alert">' + maxSizeMessage + '</span>').find(':input').attr('aria-invalid', 'true');

				_this.elements.$form.trigger('error');
			}
		});
	},

	beforeSend: function beforeSend() {
		var $form = this.elements.$form;

		$form.animate({
			opacity: '0.45'
		}, 500).addClass('elementor-form-waiting');

		$form.find('.elementor-message').remove();

		$form.find('.elementor-error').removeClass('elementor-error');

		$form.find('div.elementor-field-group').removeClass('error').find('span.elementor-form-help-inline').remove().end().find(':input').attr('aria-invalid', 'false');

		this.elements.$submitButton.attr('disabled', 'disabled').find('> span').prepend('<span class="elementor-button-text elementor-form-spinner"><i class="fa fa-spinner fa-spin"></i>&nbsp;</span>');
	},

	getFormData: function getFormData() {
		var formData = new FormData(this.elements.$form[0]);
		formData.append('action', this.getSettings('action'));
		formData.append('referrer', location.toString());

		return formData;
	},

	onSuccess: function onSuccess(response) {
		var $form = this.elements.$form;

		this.elements.$submitButton.removeAttr('disabled').find('.elementor-form-spinner').remove();

		$form.animate({
			opacity: '1'
		}, 100).removeClass('elementor-form-waiting');

		if (!response.success) {
			if (response.data.errors) {
				jQuery.each(response.data.errors, function (key, title) {
					$form.find('#form-field-' + key).parent().addClass('elementor-error').append('<span class="elementor-message elementor-message-danger elementor-help-inline elementor-form-help-inline" role="alert">' + title + '</span>').find(':input').attr('aria-invalid', 'true');
				});

				$form.trigger('error');
			}
			$form.append('<div class="elementor-message elementor-message-danger" role="alert">' + response.data.message + '</div>');
		} else {
			$form.trigger('submit_success', response.data);

			// For actions like redirect page
			$form.trigger('form_destruct', response.data);

			$form.trigger('reset');

			if ('undefined' !== typeof response.data.message && '' !== response.data.message) {
				$form.append('<div class="elementor-message elementor-message-success" role="alert">' + response.data.message + '</div>');
			}
		}
	},

	onError: function onError(xhr, desc) {
		var $form = this.elements.$form;

		$form.append('<div class="elementor-message elementor-message-danger" role="alert">' + desc + '</div>');

		this.elements.$submitButton.html(this.elements.$submitButton.text()).removeAttr('disabled');

		$form.animate({
			opacity: '1'
		}, 100).removeClass('elementor-form-waiting');

		$form.trigger('error');
	},

	handleSubmit: function handleSubmit(event) {
		var self = this,
		    $form = this.elements.$form;

		event.preventDefault();

		if ($form.hasClass('elementor-form-waiting')) {
			return false;
		}

		this.beforeSend();

		jQuery.ajax({
			url: self.getSettings('ajaxUrl'),
			type: 'POST',
			dataType: 'json',
			data: self.getFormData(),
			processData: false,
			contentType: false,
			success: self.onSuccess,
			error: self.onError
		});
	}
});

/***/ }),
/* 68 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = elementorFrontend.Module.extend({
	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				form: '.elementor-form'
			}
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors'),
		    elements = {};

		elements.$form = this.$element.find(selectors.form);

		return elements;
	},

	bindEvents: function bindEvents() {
		this.elements.$form.on('form_destruct', this.handleSubmit);
	},

	handleSubmit: function handleSubmit(event, response) {
		if ('undefined' !== typeof response.data.redirect_url) {
			location.href = response.data.redirect_url;
		}
	}
});

/***/ }),
/* 69 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function ($scope) {
	var $element = $scope.find('.elementor-g-recaptcha:last');

	if (!$element.length) {
		return;
	}

	var addRecaptcha = function addRecaptcha($elementRecaptcha) {
		var widgetId = grecaptcha.render($elementRecaptcha[0], $elementRecaptcha.data()),
		    $form = $elementRecaptcha.parents('form');

		$elementRecaptcha.data('widgetId', widgetId);

		$form.on('reset error', function () {
			grecaptcha.reset($elementRecaptcha.data('widgetId'));
		});
	};

	var onRecaptchaApiReady = function onRecaptchaApiReady(callback) {
		if (window.grecaptcha && window.grecaptcha.render) {
			callback();
		} else {
			// If not ready check again by timeout..
			setTimeout(function () {
				onRecaptchaApiReady(callback);
			}, 350);
		}
	};

	onRecaptchaApiReady(function () {
		addRecaptcha($element);
	});
};

/***/ }),
/* 70 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function ($scope, $) {
	var $elements = $scope.find('.elementor-date-field');

	if (!$elements.length) {
		return;
	}

	var addDatePicker = function addDatePicker($element) {
		if ($($element).hasClass('elementor-use-native')) {
			return;
		}
		var options = {
			minDate: $($element).attr('min') || null,
			maxDate: $($element).attr('max') || null,
			allowInput: true
		};
		$element.flatpickr(options);
	};
	$.each($elements, function (i, $element) {
		addDatePicker($element);
	});
};

/***/ }),
/* 71 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function ($scope, $) {
	var $elements = $scope.find('.elementor-time-field');

	if (!$elements.length) {
		return;
	}

	var addTimePicker = function addTimePicker($element) {
		if ($($element).hasClass('elementor-use-native')) {
			return;
		}
		$element.flatpickr({
			noCalendar: true,
			enableTime: true,
			allowInput: true
		});
	};
	$.each($elements, function (i, $element) {
		addTimePicker($element);
	});
};

/***/ }),
/* 72 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	elementorFrontend.hooks.addAction('frontend/element_ready/countdown.default', __webpack_require__(73));
};

/***/ }),
/* 73 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var CountDown = elementorFrontend.Module.extend({

	cache: null,

	cacheElements: function cacheElements() {
		var $countDown = this.$element.find('.elementor-countdown-wrapper');

		this.cache = {
			$countDown: $countDown,
			timeInterval: null,
			elements: {
				$countdown: $countDown.find('.elementor-countdown-wrapper'),
				$daysSpan: $countDown.find('.elementor-countdown-days'),
				$hoursSpan: $countDown.find('.elementor-countdown-hours'),
				$minutesSpan: $countDown.find('.elementor-countdown-minutes'),
				$secondsSpan: $countDown.find('.elementor-countdown-seconds'),
				$expireMessage: $countDown.parent().find('.elementor-countdown-expire--message')
			},
			data: {
				id: this.$element.data('id'),
				endTime: new Date($countDown.data('date') * 1000),
				actions: $countDown.data('expire-actions'),
				evergreenInterval: $countDown.data('evergreen-interval')
			}
		};
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		this.cacheElements();

		if (0 < this.cache.data.evergreenInterval) {
			this.cache.data.endTime = this.getEvergreenDate();
		}

		this.initializeClock();
	},

	updateClock: function updateClock() {
		var self = this,
		    timeRemaining = this.getTimeRemaining(this.cache.data.endTime);

		jQuery.each(timeRemaining.parts, function (timePart) {
			var $element = self.cache.elements['$' + timePart + 'Span'];
			var partValue = this.toString();

			if (1 === partValue.length) {
				partValue = 0 + partValue;
			}

			if ($element.length) {
				$element.text(partValue);
			}
		});

		if (timeRemaining.total <= 0) {
			clearInterval(this.cache.timeInterval);
			this.runActions();
		}
	},

	initializeClock: function initializeClock() {
		var self = this;
		this.updateClock();

		this.cache.timeInterval = setInterval(function () {
			self.updateClock();
		}, 1000);
	},

	runActions: function runActions() {
		var self = this;

		// Trigger general event for 3rd patry actions
		self.$element.trigger('countdown_expire', self.$element);

		if (!this.cache.data.actions) {
			return;
		}

		this.cache.data.actions.forEach(function (action) {
			switch (action.type) {
				case 'hide':
					self.cache.$countDown.hide();
					break;
				case 'redirect':
					if (action.redirect_url) {
						window.location.href = action.redirect_url;
					}
					break;
				case 'message':
					self.cache.elements.$expireMessage.show();
					break;
			}
		});
	},

	getTimeRemaining: function getTimeRemaining(endTime) {
		var timeRemaining = endTime - new Date();
		var seconds = Math.floor(timeRemaining / 1000 % 60),
		    minutes = Math.floor(timeRemaining / 1000 / 60 % 60),
		    hours = Math.floor(timeRemaining / (1000 * 60 * 60) % 24),
		    days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));

		if (days < 0 || hours < 0 || minutes < 0) {
			seconds = minutes = hours = days = 0;
		}

		return {
			total: timeRemaining,
			parts: {
				days: days,
				hours: hours,
				minutes: minutes,
				seconds: seconds
			}
		};
	},

	getEvergreenDate: function getEvergreenDate() {
		var self = this,
		    id = this.cache.data.id,
		    interval = this.cache.data.evergreenInterval,
		    dueDateKey = id + '-evergreen_due_date',
		    intervalKey = id + '-evergreen_interval',
		    localData = {
			dueDate: localStorage.getItem(dueDateKey),
			interval: localStorage.getItem(intervalKey)
		},
		    initEvergreen = function initEvergreen() {
			var evergreenDueDate = new Date();
			self.cache.data.endTime = evergreenDueDate.setSeconds(evergreenDueDate.getSeconds() + interval);
			localStorage.setItem(dueDateKey, self.cache.data.endTime);
			localStorage.setItem(intervalKey, interval);
			return self.cache.data.endTime;
		};

		if (null === localData.dueDate && null === localData.interval) {
			return initEvergreen();
		}

		if (null !== localData.dueDate && interval !== parseInt(localData.interval, 10)) {
			return initEvergreen();
		}

		if (localData.dueDate > 0 && parseInt(localData.interval, 10) === interval) {
			return localData.dueDate;
		}
	}
});

module.exports = function ($scope) {
	new CountDown({ $element: $scope });
};

/***/ }),
/* 74 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var PostsModule = __webpack_require__(3),
	    CardsModule = __webpack_require__(5),
	    PortfolioModule = __webpack_require__(75);

	elementorFrontend.hooks.addAction('frontend/element_ready/posts.classic', function ($scope) {
		new PostsModule({ $element: $scope });
	});

	elementorFrontend.hooks.addAction('frontend/element_ready/posts.cards', function ($scope) {
		new CardsModule({ $element: $scope });
	});

	elementorFrontend.hooks.addAction('frontend/element_ready/portfolio.default', function ($scope) {
		if (!$scope.find('.elementor-portfolio').length) {
			return;
		}

		new PortfolioModule({ $element: $scope });
	});
};

/***/ }),
/* 75 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var PostsHandler = __webpack_require__(3);

module.exports = PostsHandler.extend({
	getElementName: function getElementName() {
		return 'portfolio';
	},

	getSkinPrefix: function getSkinPrefix() {
		return '';
	},

	getDefaultSettings: function getDefaultSettings() {
		var settings = PostsHandler.prototype.getDefaultSettings.apply(this, arguments);

		settings.transitionDuration = 450;

		jQuery.extend(settings.classes, {
			active: 'elementor-active',
			item: 'elementor-portfolio-item',
			ghostItem: 'elementor-portfolio-ghost-item'
		});

		return settings;
	},

	getDefaultElements: function getDefaultElements() {
		var elements = PostsHandler.prototype.getDefaultElements.apply(this, arguments);

		elements.$filterButtons = this.$element.find('.elementor-portfolio__filter');

		return elements;
	},

	getOffset: function getOffset(itemIndex, itemWidth, itemHeight) {
		var settings = this.getSettings(),
		    itemGap = this.elements.$postsContainer.width() / settings.colsCount - itemWidth;

		itemGap += itemGap / (settings.colsCount - 1);

		return {
			start: (itemWidth + itemGap) * (itemIndex % settings.colsCount),
			top: (itemHeight + itemGap) * Math.floor(itemIndex / settings.colsCount)
		};
	},

	getClosureMethodsNames: function getClosureMethodsNames() {
		var baseClosureMethods = PostsHandler.prototype.getClosureMethodsNames.apply(this, arguments);

		return baseClosureMethods.concat(['onFilterButtonClick']);
	},

	filterItems: function filterItems(term) {
		var $posts = this.elements.$posts,
		    activeClass = this.getSettings('classes.active'),
		    termSelector = '.elementor-filter-' + term;

		if ('__all' === term) {
			$posts.addClass(activeClass);

			return;
		}

		$posts.not(termSelector).removeClass(activeClass);

		$posts.filter(termSelector).addClass(activeClass);
	},

	removeExtraGhostItems: function removeExtraGhostItems() {
		var settings = this.getSettings(),
		    $shownItems = this.elements.$posts.filter(':visible'),
		    emptyColumns = (settings.colsCount - $shownItems.length % settings.colsCount) % settings.colsCount,
		    $ghostItems = this.elements.$postsContainer.find('.' + settings.classes.ghostItem);

		$ghostItems.slice(emptyColumns).remove();
	},

	handleEmptyColumns: function handleEmptyColumns() {
		this.removeExtraGhostItems();

		var settings = this.getSettings(),
		    $shownItems = this.elements.$posts.filter(':visible'),
		    $ghostItems = this.elements.$postsContainer.find('.' + settings.classes.ghostItem),
		    emptyColumns = (settings.colsCount - ($shownItems.length + $ghostItems.length) % settings.colsCount) % settings.colsCount;

		for (var i = 0; i < emptyColumns; i++) {
			this.elements.$postsContainer.append(jQuery('<div>', { class: settings.classes.item + ' ' + settings.classes.ghostItem }));
		}
	},

	showItems: function showItems($activeHiddenItems) {
		$activeHiddenItems.show();

		setTimeout(function () {
			$activeHiddenItems.css({
				opacity: 1
			});
		});
	},

	hideItems: function hideItems($inactiveShownItems) {
		$inactiveShownItems.hide();
	},

	arrangeGrid: function arrangeGrid() {
		var $ = jQuery,
		    self = this,
		    settings = self.getSettings(),
		    $activeItems = self.elements.$posts.filter('.' + settings.classes.active),
		    $inactiveItems = self.elements.$posts.not('.' + settings.classes.active),
		    $shownItems = self.elements.$posts.filter(':visible'),
		    $activeOrShownItems = $activeItems.add($shownItems),
		    $activeShownItems = $activeItems.filter(':visible'),
		    $activeHiddenItems = $activeItems.filter(':hidden'),
		    $inactiveShownItems = $inactiveItems.filter(':visible'),
		    itemWidth = $shownItems.outerWidth(),
		    itemHeight = $shownItems.outerHeight();

		self.elements.$posts.css('transition-duration', settings.transitionDuration + 'ms');

		self.showItems($activeHiddenItems);

		if (self.isEdit) {
			self.fitImages();
		}

		self.handleEmptyColumns();

		if (self.isMasonryEnabled()) {
			self.hideItems($inactiveShownItems);

			self.showItems($activeHiddenItems);

			self.handleEmptyColumns();

			self.runMasonry();

			return;
		}

		$inactiveShownItems.css({
			opacity: 0,
			transform: 'scale3d(0.2, 0.2, 1)'
		});

		$activeShownItems.each(function () {
			var $item = $(this),
			    currentOffset = self.getOffset($activeOrShownItems.index($item), itemWidth, itemHeight),
			    requiredOffset = self.getOffset($shownItems.index($item), itemWidth, itemHeight);

			if (currentOffset.start === requiredOffset.start && currentOffset.top === requiredOffset.top) {
				return;
			}

			requiredOffset.start -= currentOffset.start;

			requiredOffset.top -= currentOffset.top;

			if (elementorFrontend.config.is_rtl) {
				requiredOffset.start *= -1;
			}

			$item.css({
				transitionDuration: '',
				transform: 'translate3d(' + requiredOffset.start + 'px, ' + requiredOffset.top + 'px, 0)'
			});
		});

		setTimeout(function () {
			$activeItems.each(function () {
				var $item = $(this),
				    currentOffset = self.getOffset($activeOrShownItems.index($item), itemWidth, itemHeight),
				    requiredOffset = self.getOffset($activeItems.index($item), itemWidth, itemHeight);

				$item.css({
					transitionDuration: settings.transitionDuration + 'ms'
				});

				requiredOffset.start -= currentOffset.start;

				requiredOffset.top -= currentOffset.top;

				if (elementorFrontend.config.is_rtl) {
					requiredOffset.start *= -1;
				}

				setTimeout(function () {
					$item.css('transform', 'translate3d(' + requiredOffset.start + 'px, ' + requiredOffset.top + 'px, 0)');
				});
			});
		});

		setTimeout(function () {
			self.hideItems($inactiveShownItems);

			$activeItems.css({
				transitionDuration: '',
				transform: 'translate3d(0px, 0px, 0px)'
			});

			self.handleEmptyColumns();
		}, settings.transitionDuration);
	},

	activeFilterButton: function activeFilterButton(filter) {
		var activeClass = this.getSettings('classes.active'),
		    $filterButtons = this.elements.$filterButtons,
		    $button = $filterButtons.filter('[data-filter="' + filter + '"]');

		$filterButtons.removeClass(activeClass);

		$button.addClass(activeClass);
	},

	setFilter: function setFilter(filter) {
		this.activeFilterButton(filter);

		this.filterItems(filter);

		this.arrangeGrid();
	},

	refreshGrid: function refreshGrid() {
		this.setColsCountSettings();

		this.arrangeGrid();
	},

	bindEvents: function bindEvents() {
		PostsHandler.prototype.bindEvents.apply(this, arguments);

		this.elements.$filterButtons.on('click', this.onFilterButtonClick);
	},

	isMasonryEnabled: function isMasonryEnabled() {
		return !!this.getElementSettings('masonry');
	},

	run: function run() {
		PostsHandler.prototype.run.apply(this, arguments);

		this.setColsCountSettings();

		this.setFilter('__all');

		this.handleEmptyColumns();
	},

	onFilterButtonClick: function onFilterButtonClick(event) {
		this.setFilter(jQuery(event.currentTarget).data('filter'));
	},

	onWindowResize: function onWindowResize() {
		PostsHandler.prototype.onWindowResize.apply(this, arguments);

		this.refreshGrid();
	},

	onElementChange: function onElementChange(propertyName) {
		PostsHandler.prototype.onElementChange.apply(this, arguments);

		if ('classic_item_ratio' === propertyName) {
			this.refreshGrid();
		}
	}
});

/***/ }),
/* 76 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	elementorFrontend.hooks.addAction('frontend/element_ready/slides.default', __webpack_require__(77));
};

/***/ }),
/* 77 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var SlidesHandler = elementorFrontend.Module.extend({
	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				slider: '.elementor-slides',
				slideContent: '.elementor-slide-content'
			},
			classes: {
				animated: 'animated'
			},
			attributes: {
				dataSliderOptions: 'slider_options',
				dataAnimation: 'animation'
			}
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors');

		return {
			$slider: this.$element.find(selectors.slider)
		};
	},

	initSlider: function initSlider() {
		var $slider = this.elements.$slider;

		if (!$slider.length) {
			return;
		}

		$slider.slick($slider.data(this.getSettings('attributes.dataSliderOptions')));
	},

	goToActiveSlide: function goToActiveSlide() {
		this.elements.$slider.slick('slickGoTo', this.getEditSettings('activeItemIndex') - 1);
	},

	onPanelShow: function onPanelShow() {
		var $slider = this.elements.$slider;

		$slider.slick('slickPause');

		// On switch between slides while editing. stop again.
		$slider.on('afterChange', function () {
			$slider.slick('slickPause');
		});
	},

	bindEvents: function bindEvents() {
		var $slider = this.elements.$slider,
		    settings = this.getSettings(),
		    animation = $slider.data(settings.attributes.dataAnimation);

		if (!animation) {
			return;
		}

		if (elementorFrontend.isEditMode()) {
			elementor.hooks.addAction('panel/open_editor/widget/slides', this.onPanelShow);
		}

		$slider.on({
			beforeChange: function beforeChange() {
				var $sliderContent = $slider.find(settings.selectors.slideContent);

				$sliderContent.removeClass(settings.classes.animated + ' ' + animation).hide();
			},
			afterChange: function afterChange(event, slick, currentSlide) {
				var $currentSlide = jQuery(slick.$slides.get(currentSlide)).find(settings.selectors.slideContent);

				$currentSlide.show().addClass(settings.classes.animated + ' ' + animation);
			}
		});
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		this.initSlider();

		if (this.isEdit) {
			this.goToActiveSlide();
		}
	},

	onEditSettingsChange: function onEditSettingsChange(propertyName) {
		if ('activeItemIndex' === propertyName) {
			this.goToActiveSlide();
		}
	}
});

module.exports = function ($scope) {
	new SlidesHandler({ $element: $scope });
};

/***/ }),
/* 78 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	if (!elementorFrontend.isEditMode()) {
		elementorFrontend.hooks.addAction('frontend/element_ready/share-buttons.default', __webpack_require__(79));
	}
};

/***/ }),
/* 79 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var HandlerModule = elementorFrontend.Module,
    ShareButtonsHandler;

ShareButtonsHandler = HandlerModule.extend({
	onInit: function onInit() {
		HandlerModule.prototype.onInit.apply(this, arguments);

		var elementSettings = this.getElementSettings(),
		    classes = this.getSettings('classes'),
		    isCustomURL = elementSettings.share_url && elementSettings.share_url.url,
		    shareLinkSettings = {
			classPrefix: classes.shareLinkPrefix
		};

		if (isCustomURL) {
			shareLinkSettings.url = elementSettings.share_url.url;
		} else {
			shareLinkSettings.url = location.href;
			shareLinkSettings.title = elementorFrontend.config.post.title;
			shareLinkSettings.text = elementorFrontend.config.post.excerpt;
		}

		/**
   * Ad Blockers may block the share script. (/assets/lib/social-share/social-share.js).
   */
		if (!this.elements.$shareButton.shareLink) {
			return;
		}

		this.elements.$shareButton.shareLink(shareLinkSettings);

		var shareCountProviders = jQuery.map(elementorProFrontend.config.shareButtonsNetworks, function (network, networkName) {
			return network.has_counter ? networkName : null;
		});

		if (!ElementorProFrontendConfig.hasOwnProperty('donreach')) {
			return;
		}

		this.elements.$shareCounter.shareCounter({
			url: isCustomURL ? elementSettings.share_url.url : location.href,
			providers: shareCountProviders,
			classPrefix: classes.shareCounterPrefix,
			formatCount: true
		});
	},
	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				shareButton: '.elementor-share-btn',
				shareCounter: '.elementor-share-btn__counter'
			},
			classes: {
				shareLinkPrefix: 'elementor-share-btn_',
				shareCounterPrefix: 'elementor-share-btn__counter_'
			}
		};
	},
	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors');

		return {
			$shareButton: this.$element.find(selectors.shareButton),
			$shareCounter: this.$element.find(selectors.shareCounter)
		};
	}
});

module.exports = function ($scope) {
	new ShareButtonsHandler({ $element: $scope });
};

/***/ }),
/* 80 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	if (jQuery.fn.smartmenus) {
		// Override the default stupid detection
		jQuery.SmartMenus.prototype.isCSSOn = function () {
			return true;
		};

		if (elementorFrontend.config.is_rtl) {
			jQuery.fn.smartmenus.defaults.rightToLeftSubMenus = true;
		}
	}

	elementorFrontend.hooks.addAction('frontend/element_ready/nav-menu.default', __webpack_require__(81));
};

/***/ }),
/* 81 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var MenuHandler = elementorFrontend.Module.extend({

	stretchElement: null,

	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				menu: '.elementor-nav-menu',
				anchorLink: '.elementor-nav-menu--main .elementor-item-anchor',
				dropdownMenu: '.elementor-nav-menu__container.elementor-nav-menu--dropdown',
				menuToggle: '.elementor-menu-toggle'
			}
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors'),
		    elements = {};

		elements.$menu = this.$element.find(selectors.menu);
		elements.$anchorLink = this.$element.find(selectors.anchorLink);
		elements.$dropdownMenu = this.$element.find(selectors.dropdownMenu);
		elements.$dropdownMenuFinalItems = elements.$dropdownMenu.find('.menu-item:not(.menu-item-has-children) > a');
		elements.$menuToggle = this.$element.find(selectors.menuToggle);

		return elements;
	},

	bindEvents: function bindEvents() {
		if (!this.elements.$menu.length) {
			return;
		}

		this.elements.$menuToggle.on('click', this.toggleMenu.bind(this));

		if (this.getElementSettings('full_width')) {
			this.elements.$dropdownMenuFinalItems.on('click', this.toggleMenu.bind(this, false));
		}

		elementorFrontend.addListenerOnce(this.$element.data('model-cid'), 'resize', this.stretchMenu);
	},

	initStretchElement: function initStretchElement() {
		this.stretchElement = new elementorFrontend.modules.StretchElement({ element: this.elements.$dropdownMenu });
	},

	toggleMenu: function toggleMenu(show) {
		var isDropdownVisible = this.elements.$menuToggle.hasClass('elementor-active');

		if ('boolean' !== typeof show) {
			show = !isDropdownVisible;
		}

		this.elements.$menuToggle.toggleClass('elementor-active', show);

		if (show && this.getElementSettings('full_width')) {
			this.stretchElement.stretch();
		}
	},

	followMenuAnchors: function followMenuAnchors() {
		var self = this;

		self.elements.$anchorLink.each(function () {
			if (location.pathname === this.pathname && '' !== this.hash) {
				self.followMenuAnchor(jQuery(this));
			}
		});
	},

	followMenuAnchor: function followMenuAnchor($element) {
		var anchorSelector = $element[0].hash,

		// `decodeURIComponent` for UTF8 characters in the hash.
		$anchor = jQuery(decodeURIComponent(anchorSelector)),
		    offset = -300;

		if (!$anchor.length) {
			return;
		}

		if (!$anchor.hasClass('elementor-menu-anchor')) {
			var halfViewport = jQuery(window).height() / 2;
			offset = -$anchor.outerHeight() + halfViewport;
		}

		elementorFrontend.waypoint($anchor, function (direction) {
			if ('down' === direction) {
				$element.addClass('elementor-item-active');
			} else {
				$element.removeClass('elementor-item-active');
			}
		}, { offset: '50%', triggerOnce: false });

		elementorFrontend.waypoint($anchor, function (direction) {
			if ('down' === direction) {
				$element.removeClass('elementor-item-active');
			} else {
				$element.addClass('elementor-item-active');
			}
		}, { offset: offset, triggerOnce: false });
	},

	stretchMenu: function stretchMenu() {
		if (this.getElementSettings('full_width')) {
			this.stretchElement.stretch();

			this.elements.$dropdownMenu.css('top', this.elements.$menuToggle.outerHeight());
		} else {
			this.stretchElement.reset();
		}
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		if (!this.elements.$menu.length) {
			return;
		}

		this.elements.$menu.smartmenus({
			subIndicatorsText: '<i class="fa"></i>',
			subIndicatorsPos: 'append',
			subMenusMaxWidth: '1000px'
		});

		this.initStretchElement();

		this.stretchMenu();

		if (!elementorFrontend.isEditMode()) {
			this.followMenuAnchors();
		}
	},

	onElementChange: function onElementChange(propertyName) {
		if ('full_width' === propertyName) {
			this.stretchMenu();
		}
	}
});

module.exports = function ($scope) {
	new MenuHandler({ $element: $scope });
};

/***/ }),
/* 82 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/animated-headline.default', __webpack_require__(83));
};

/***/ }),
/* 83 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var AnimatedHeadlineHandler = elementorFrontend.Module.extend({
	svgPaths: {
		circle: ['M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7'],
		underline_zigzag: ['M9.3,127.3c49.3-3,150.7-7.6,199.7-7.4c121.9,0.4,189.9,0.4,282.3,7.2C380.1,129.6,181.2,130.6,70,139 c82.6-2.9,254.2-1,335.9,1.3c-56,1.4-137.2-0.3-197.1,9'],
		x: ['M497.4,23.9C301.6,40,155.9,80.6,4,144.4', 'M14.1,27.6c204.5,20.3,393.8,74,467.3,111.7'],
		strikethrough: ['M3,75h493.5'],
		curly: ['M3,146.1c17.1-8.8,33.5-17.8,51.4-17.8c15.6,0,17.1,18.1,30.2,18.1c22.9,0,36-18.6,53.9-18.6 c17.1,0,21.3,18.5,37.5,18.5c21.3,0,31.8-18.6,49-18.6c22.1,0,18.8,18.8,36.8,18.8c18.8,0,37.5-18.6,49-18.6c20.4,0,17.1,19,36.8,19 c22.9,0,36.8-20.6,54.7-18.6c17.7,1.4,7.1,19.5,33.5,18.8c17.1,0,47.2-6.5,61.1-15.6'],
		diagonal: ['M13.5,15.5c131,13.7,289.3,55.5,475,125.5'],
		double: ['M8.4,143.1c14.2-8,97.6-8.8,200.6-9.2c122.3-0.4,287.5,7.2,287.5,7.2', 'M8,19.4c72.3-5.3,162-7.8,216-7.8c54,0,136.2,0,267,7.8'],
		double_underline: ['M5,125.4c30.5-3.8,137.9-7.6,177.3-7.6c117.2,0,252.2,4.7,312.7,7.6', 'M26.9,143.8c55.1-6.1,126-6.3,162.2-6.1c46.5,0.2,203.9,3.2,268.9,6.4'],
		underline: ['M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7']
	},

	getDefaultSettings: function getDefaultSettings() {
		var settings = {
			animationDelay: 2500,
			//letters effect
			lettersDelay: 50,
			//typing effect
			typeLettersDelay: 150,
			selectionDuration: 500,
			//clip effect
			revealDuration: 600,
			revealAnimationDelay: 1500
		};

		settings.typeAnimationDelay = settings.selectionDuration + 800;

		settings.selectors = {
			headline: '.elementor-headline',
			dynamicWrapper: '.elementor-headline-dynamic-wrapper'
		};

		settings.classes = {
			dynamicText: 'elementor-headline-dynamic-text',
			dynamicLetter: 'elementor-headline-dynamic-letter',
			textActive: 'elementor-headline-text-active',
			textInactive: 'elementor-headline-text-inactive',
			letters: 'elementor-headline-letters',
			animationIn: 'elementor-headline-animation-in',
			typeSelected: 'elementor-headline-typing-selected'
		};

		return settings;
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors');

		return {
			$headline: this.$element.find(selectors.headline),
			$dynamicWrapper: this.$element.find(selectors.dynamicWrapper)
		};
	},

	getNextWord: function getNextWord($word) {
		return $word.is(':last-child') ? $word.parent().children().eq(0) : $word.next();
	},

	switchWord: function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('elementor-headline-text-active').addClass('elementor-headline-text-inactive');

		$newWord.removeClass('elementor-headline-text-inactive').addClass('elementor-headline-text-active');
	},

	singleLetters: function singleLetters() {
		var classes = this.getSettings('classes');

		this.elements.$dynamicText.each(function () {
			var $word = jQuery(this),
			    letters = $word.text().split(''),
			    isActive = $word.hasClass(classes.textActive);

			$word.empty();

			letters.forEach(function (letter) {
				var $letter = jQuery('<span>', { class: classes.dynamicLetter }).text(letter);

				if (isActive) {
					$letter.addClass(classes.animationIn);
				}

				$word.append($letter);
			});

			$word.css('opacity', 1);
		});
	},

	showLetter: function showLetter($letter, $word, bool, duration) {
		var self = this,
		    classes = this.getSettings('classes');

		$letter.addClass(classes.animationIn);

		if (!$letter.is(':last-child')) {
			setTimeout(function () {
				self.showLetter($letter.next(), $word, bool, duration);
			}, duration);
		} else if (!bool) {
			setTimeout(function () {
				self.hideWord($word);
			}, self.getSettings('animationDelay'));
		}
	},

	hideLetter: function hideLetter($letter, $word, bool, duration) {
		var self = this,
		    settings = this.getSettings();

		$letter.removeClass(settings.classes.animationIn);

		if (!$letter.is(':last-child')) {
			setTimeout(function () {
				self.hideLetter($letter.next(), $word, bool, duration);
			}, duration);
		} else if (bool) {
			setTimeout(function () {
				self.hideWord(self.getNextWord($word));
			}, self.getSettings('animationDelay'));
		}
	},

	showWord: function showWord($word, $duration) {
		var self = this,
		    settings = self.getSettings(),
		    animationType = self.getElementSettings('animation_type');

		if ('typing' === animationType) {
			self.showLetter($word.find('.' + settings.classes.dynamicLetter).eq(0), $word, false, $duration);

			$word.addClass(settings.classes.textActive).removeClass(settings.classes.textInactive);
		} else if ('clip' === animationType) {
			self.elements.$dynamicWrapper.animate({ width: $word.width() + 10 }, settings.revealDuration, function () {
				setTimeout(function () {
					self.hideWord($word);
				}, settings.revealAnimationDelay);
			});
		}
	},

	hideWord: function hideWord($word) {
		var self = this,
		    settings = self.getSettings(),
		    classes = settings.classes,
		    letterSelector = '.' + classes.dynamicLetter,
		    animationType = self.getElementSettings('animation_type'),
		    nextWord = self.getNextWord($word);

		if ('typing' === animationType) {
			self.elements.$dynamicWrapper.addClass(classes.typeSelected);

			setTimeout(function () {
				self.elements.$dynamicWrapper.removeClass(classes.typeSelected);

				$word.addClass(settings.classes.textInactive).removeClass(classes.textActive).children(letterSelector).removeClass(classes.animationIn);
			}, settings.selectionDuration);
			setTimeout(function () {
				self.showWord(nextWord, settings.typeLettersDelay);
			}, settings.typeAnimationDelay);
		} else if (self.elements.$headline.hasClass(classes.letters)) {
			var bool = $word.children(letterSelector).length >= nextWord.children(letterSelector).length;

			self.hideLetter($word.find(letterSelector).eq(0), $word, bool, settings.lettersDelay);

			self.showLetter(nextWord.find(letterSelector).eq(0), nextWord, bool, settings.lettersDelay);
		} else if ('clip' === animationType) {
			self.elements.$dynamicWrapper.animate({ width: '2px' }, settings.revealDuration, function () {
				self.switchWord($word, nextWord);
				self.showWord(nextWord);
			});
		} else {
			self.switchWord($word, nextWord);

			setTimeout(function () {
				self.hideWord(nextWord);
			}, settings.animationDelay);
		}
	},

	animateHeadline: function animateHeadline() {
		var self = this,
		    animationType = self.getElementSettings('animation_type'),
		    $dynamicWrapper = self.elements.$dynamicWrapper;

		if ('clip' === animationType) {
			$dynamicWrapper.width($dynamicWrapper.width() + 10);
		} else if ('typing' !== animationType) {
			//assign to .elementor-headline-dynamic-wrapper the width of its longest word
			var width = 0;

			self.elements.$dynamicText.each(function () {
				var wordWidth = jQuery(this).width();

				if (wordWidth > width) {
					width = wordWidth;
				}
			});

			$dynamicWrapper.css('width', width);
		}

		//trigger animation
		setTimeout(function () {
			self.hideWord(self.elements.$dynamicText.eq(0));
		}, self.getSettings('animationDelay'));
	},

	getSvgPaths: function getSvgPaths(pathName) {
		var pathsInfo = this.svgPaths[pathName],
		    $paths = jQuery();

		pathsInfo.forEach(function (pathInfo) {
			$paths = $paths.add(jQuery('<path>', { d: pathInfo }));
		});

		return $paths;
	},

	fillWords: function fillWords() {
		var elementSettings = this.getElementSettings(),
		    classes = this.getSettings('classes'),
		    $dynamicWrapper = this.elements.$dynamicWrapper;

		if ('rotate' === elementSettings.headline_style) {
			var rotatingText = (elementSettings.rotating_text || '').split('\n');

			rotatingText.forEach(function (word, index) {
				var $dynamicText = jQuery('<span>', { class: classes.dynamicText }).html(word.replace(/ /g, '&nbsp;'));

				if (!index) {
					$dynamicText.addClass(classes.textActive);
				}

				$dynamicWrapper.append($dynamicText);
			});
		} else {
			var $dynamicText = jQuery('<span>', { class: classes.dynamicText + ' ' + classes.textActive }).text(elementSettings.highlighted_text),
			    $svg = jQuery('<svg>', {
				xmlns: 'http://www.w3.org/2000/svg',
				viewBox: '0 0 500 150',
				preserveAspectRatio: 'none'
			}).html(this.getSvgPaths(elementSettings.marker));

			$dynamicWrapper.append($dynamicText, $svg[0].outerHTML);
		}

		this.elements.$dynamicText = $dynamicWrapper.children('.' + classes.dynamicText);
	},

	rotateHeadline: function rotateHeadline() {
		var settings = this.getSettings();

		//insert <span> for each letter of a changing word
		if (this.elements.$headline.hasClass(settings.classes.letters)) {
			this.singleLetters();
		}

		//initialise headline animation
		this.animateHeadline();
	},

	initHeadline: function initHeadline() {
		if ('rotate' === this.getElementSettings('headline_style')) {
			this.rotateHeadline();
		}
	},

	onInit: function onInit() {
		elementorFrontend.Module.prototype.onInit.apply(this, arguments);

		this.fillWords();

		this.initHeadline();
	}
});

module.exports = function ($scope) {
	new AnimatedHeadlineHandler({ $element: $scope });
};

/***/ }),
/* 84 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	elementorFrontend.hooks.addAction('frontend/element_ready/media-carousel.default', __webpack_require__(85));
	elementorFrontend.hooks.addAction('frontend/element_ready/testimonial-carousel.default', __webpack_require__(7));
	elementorFrontend.hooks.addAction('frontend/element_ready/reviews.default', __webpack_require__(7));
};

/***/ }),
/* 85 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var Base = __webpack_require__(6),
    MediaCarousel;

MediaCarousel = Base.extend({

	slideshowSpecialElementSettings: ['slides_per_view', 'slides_per_view_tablet', 'slides_per_view_mobile'],

	isSlideshow: function isSlideshow() {
		return 'slideshow' === this.getElementSettings('skin');
	},

	getDefaultSettings: function getDefaultSettings() {
		var defaultSettings = Base.prototype.getDefaultSettings.apply(this, arguments);

		if (this.isSlideshow()) {
			defaultSettings.selectors.thumbsSwiper = '.elementor-thumbnails-swiper';

			defaultSettings.slidesPerView = {
				desktop: 5,
				tablet: 4,
				mobile: 3
			};
		}

		return defaultSettings;
	},

	getElementSettings: function getElementSettings(setting) {
		if (-1 !== this.slideshowSpecialElementSettings.indexOf(setting) && this.isSlideshow()) {
			setting = 'slideshow_' + setting;
		}

		return Base.prototype.getElementSettings.call(this, setting);
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors'),
		    defaultElements = Base.prototype.getDefaultElements.apply(this, arguments);

		if (this.isSlideshow()) {
			defaultElements.$thumbsSwiper = this.$element.find(selectors.thumbsSwiper);
		}

		return defaultElements;
	},

	getEffect: function getEffect() {
		if ('coverflow' === this.getElementSettings('skin')) {
			return 'coverflow';
		}

		return Base.prototype.getEffect.apply(this, arguments);
	},

	getSlidesPerView: function getSlidesPerView(device) {
		if (this.isSlideshow()) {
			return 1;
		}

		if ('coverflow' === this.getElementSettings('skin')) {
			return this.getDeviceSlidesPerView(device);
		}

		return Base.prototype.getSlidesPerView.apply(this, arguments);
	},

	getSwiperOptions: function getSwiperOptions() {
		var options = Base.prototype.getSwiperOptions.apply(this, arguments);

		if (this.isSlideshow()) {
			options.loopedSlides = this.getSlidesCount();

			delete options.pagination;
			delete options.breakpoints;
		}

		return options;
	},

	onInit: function onInit() {
		Base.prototype.onInit.apply(this, arguments);

		var slidesCount = this.getSlidesCount();

		if (!this.isSlideshow() || 1 >= slidesCount) {
			return;
		}

		var elementSettings = this.getElementSettings(),
		    loop = 'yes' === elementSettings.loop,
		    breakpointsSettings = {},
		    breakpoints = elementorFrontend.config.breakpoints,
		    desktopSlidesPerView = this.getDeviceSlidesPerView('desktop');

		breakpointsSettings[breakpoints.lg - 1] = {
			slidesPerView: this.getDeviceSlidesPerView('tablet'),
			spaceBetween: this.getSpaceBetween('tablet')
		};

		breakpointsSettings[breakpoints.md - 1] = {
			slidesPerView: this.getDeviceSlidesPerView('mobile'),
			spaceBetween: this.getSpaceBetween('mobile')
		};

		var thumbsSliderOptions = {
			slidesPerView: desktopSlidesPerView,
			initialSlide: this.getInitialSlide(),
			centeredSlides: elementSettings.centered_slides,
			slideToClickedSlide: true,
			spaceBetween: this.getSpaceBetween(),
			loopedSlides: slidesCount,
			loop: loop,
			onSlideChangeEnd: function onSlideChangeEnd(swiper) {
				if (loop) {
					swiper.fixLoop();
				}
			},
			breakpoints: breakpointsSettings
		};

		this.swipers.main.controller.control = this.swipers.thumbs = new Swiper(this.elements.$thumbsSwiper, thumbsSliderOptions);

		this.swipers.thumbs.controller.control = this.swipers.main;
	},

	onElementChange: function onElementChange(propertyName) {
		if (1 >= this.getSlidesCount()) {
			return;
		}

		if (!this.isSlideshow()) {
			Base.prototype.onElementChange.apply(this, arguments);

			return;
		}

		if (0 === propertyName.indexOf('width')) {
			this.swipers.main.update();
			this.swipers.thumbs.update();
		}

		if (0 === propertyName.indexOf('space_between')) {
			this.updateSpaceBetween(this.swipers.thumbs, propertyName);
		}
	}
});

module.exports = function ($scope) {
	new MediaCarousel({ $element: $scope });
};

/***/ }),
/* 86 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var facebookHandler = __webpack_require__(87);

module.exports = function () {
	elementorFrontend.hooks.addAction('frontend/element_ready/facebook-button.default', facebookHandler);
	elementorFrontend.hooks.addAction('frontend/element_ready/facebook-comments.default', facebookHandler);
	elementorFrontend.hooks.addAction('frontend/element_ready/facebook-embed.default', facebookHandler);
	elementorFrontend.hooks.addAction('frontend/element_ready/facebook-page.default', facebookHandler);
};

/***/ }),
/* 87 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var config = ElementorProFrontendConfig.facebook_sdk,
    loadSDK = function loadSDK() {
	// Don't load in parallel
	if (config.isLoading || config.isLoaded) {
		return;
	}

	config.isLoading = true;

	jQuery.ajax({
		url: 'https://connect.facebook.net/' + config.lang + '/sdk.js',
		dataType: 'script',
		cache: true,
		success: function success() {
			FB.init({
				appId: config.app_id,
				version: 'v2.10',
				xfbml: false
			});
			config.isLoaded = true;
			config.isLoading = false;
			jQuery(document).trigger('fb:sdk:loaded');
		}
	});
};

module.exports = function ($scope) {
	loadSDK();
	// On FB SDK is loaded, parse current element
	var parse = function parse() {
		$scope.find('.elementor-widget-container div').attr('data-width', $scope.width() + 'px');
		FB.XFBML.parse($scope[0]);
	};

	if (config.isLoaded) {
		parse();
	} else {
		jQuery(document).on('fb:sdk:loaded', parse);
	}
};

/***/ }),
/* 88 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/search-form.default', __webpack_require__(89));
};

/***/ }),
/* 89 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var SearchBerHandler = elementorFrontend.Module.extend({

    getDefaultSettings: function getDefaultSettings() {
        return {
            selectors: {
                wrapper: '.elementor-search-form',
                container: '.elementor-search-form__container',
                icon: '.elementor-search-form__icon',
                input: '.elementor-search-form__input',
                toggle: '.elementor-search-form__toggle',
                submit: '.elementor-search-form__submit',
                closeButton: '.dialog-close-button'
            },
            classes: {
                isFocus: 'elementor-search-form--focus',
                isFullScreen: 'elementor-search-form--full-screen',
                lightbox: 'elementor-lightbox'
            }
        };
    },

    getDefaultElements: function getDefaultElements() {
        var selectors = this.getSettings('selectors'),
            elements = {};

        elements.$wrapper = this.$element.find(selectors.wrapper);
        elements.$container = this.$element.find(selectors.container);
        elements.$input = this.$element.find(selectors.input);
        elements.$icon = this.$element.find(selectors.icon);
        elements.$toggle = this.$element.find(selectors.toggle);
        elements.$submit = this.$element.find(selectors.submit);
        elements.$closeButton = this.$element.find(selectors.closeButton);

        return elements;
    },

    bindEvents: function bindEvents() {
        var self = this,
            $container = self.elements.$container,
            $closeButton = self.elements.$closeButton,
            $input = self.elements.$input,
            $wrapper = self.elements.$wrapper,
            $icon = self.elements.$icon,
            skin = this.getElementSettings('skin'),
            classes = this.getSettings('classes');

        if ('full_screen' === skin) {
            // Activate full-screen mode on click
            self.elements.$toggle.on('click', function () {
                $container.toggleClass(classes.isFullScreen).toggleClass(classes.lightbox);
                $input.focus();
            });

            // Deactivate full-screen mode on click or on esc.
            $container.on('click', function (event) {
                if ($container.hasClass(classes.isFullScreen) && $container[0] === event.target) {
                    $container.removeClass(classes.isFullScreen).removeClass(classes.lightbox);
                }
            });
            $closeButton.on('click', function () {
                $container.removeClass(classes.isFullScreen).removeClass(classes.lightbox);
            });
            elementorFrontend.getElements('$document').keyup(function (event) {
                var ESC_KEY = 27;

                if (ESC_KEY === event.keyCode) {
                    if ($container.hasClass(classes.isFullScreen)) {
                        $container.click();
                    }
                }
            });
        } else {
            // Apply focus style on wrapper element when input is focused
            $input.on({
                focus: function focus() {
                    $wrapper.addClass(classes.isFocus);
                },
                blur: function blur() {
                    $wrapper.removeClass(classes.isFocus);
                }
            });
        }

        if ('minimal' === skin) {
            // Apply focus style on wrapper element when icon is clicked in minimal skin
            $icon.on('click', function () {
                $wrapper.addClass(classes.isFocus);
                $input.focus();
            });
        }
    }
});

module.exports = function ($scope) {
    new SearchBerHandler({ $element: $scope });
};

/***/ }),
/* 90 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var PostsArchiveClassic = __webpack_require__(91),
	    PostsArchiveCards = __webpack_require__(92);

	elementorFrontend.hooks.addAction('frontend/element_ready/archive-posts.archive_classic', function ($scope) {
		new PostsArchiveClassic({ $element: $scope });
	});

	elementorFrontend.hooks.addAction('frontend/element_ready/archive-posts.archive_cards', function ($scope) {
		new PostsArchiveCards({ $element: $scope });
	});

	jQuery(function () {
		// Go to elementor element - if the URL is something like http://domain.com/any-page?preview=true&theme_template_id=6479
		var match = location.search.match(/theme_template_id=(\d*)/),
		    $element = match ? jQuery('.elementor-' + match[1]) : [];
		if ($element.length) {
			jQuery('html, body').animate({
				scrollTop: $element.offset().top - window.innerHeight / 2
			});
		}
	});
};

/***/ }),
/* 91 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var PostsClassicHandler = __webpack_require__(3);

module.exports = PostsClassicHandler.extend({

	getElementName: function getElementName() {
		return 'archive-posts';
	},

	getSkinPrefix: function getSkinPrefix() {
		return 'archive_classic_';
	}
});

/***/ }),
/* 92 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var PostsCardHandler = __webpack_require__(5);

module.exports = PostsCardHandler.extend({

	getElementName: function getElementName() {
		return 'archive-posts';
	},

	getSkinPrefix: function getSkinPrefix() {
		return 'archive_cards_';
	}
});

/***/ }),
/* 93 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/section', __webpack_require__(8));
    elementorFrontend.hooks.addAction('frontend/element_ready/widget', __webpack_require__(8));
};

/***/ }),
/* 94 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	elementorFrontend.hooks.addAction('frontend/element_ready/woocommerce-menu-cart.default', __webpack_require__(95));

	if (elementorFrontend.isEditMode()) {
		return;
	}

	jQuery(document.body).on('wc_fragments_loaded wc_fragments_refreshed', function () {
		jQuery('div.elementor-widget-woocommerce-menu-cart').each(function () {
			elementorFrontend.elementsHandler.runReadyTrigger(jQuery(this));
		});
	});
};

/***/ }),
/* 95 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var SearchBerHandler = elementorFrontend.Module.extend({

	getDefaultSettings: function getDefaultSettings() {
		return {
			selectors: {
				container: '.elementor-menu-cart__container',
				toggle: '.elementor-menu-cart__toggle .elementor-button',
				closeButton: '.elementor-menu-cart__close-button'
			},
			classes: {
				isShown: 'elementor-menu-cart--shown',
				lightbox: 'elementor-lightbox'
			}
		};
	},

	getDefaultElements: function getDefaultElements() {
		var selectors = this.getSettings('selectors'),
		    elements = {};

		elements.$container = this.$element.find(selectors.container);
		elements.$toggle = this.$element.find(selectors.toggle);
		elements.$closeButton = this.$element.find(selectors.closeButton);

		return elements;
	},

	bindEvents: function bindEvents() {
		var self = this,
		    $container = self.elements.$container,
		    $closeButton = self.elements.$closeButton,
		    classes = this.getSettings('classes');

		// Activate full-screen mode on click
		self.elements.$toggle.on('click', function (event) {
			event.preventDefault();
			$container.toggleClass(classes.isShown);
		});

		// Deactivate full-screen mode on click or on esc.
		$container.on('click', function (event) {
			if ($container.hasClass(classes.isShown) && $container[0] === event.target) {
				$container.removeClass(classes.isShown);
			}
		});

		$closeButton.on('click', function () {
			$container.removeClass(classes.isShown);
		});

		elementorFrontend.getElements('$document').keyup(function (event) {
			var ESC_KEY = 27;

			if (ESC_KEY === event.keyCode) {
				if ($container.hasClass(classes.isShown)) {
					$container.click();
				}
			}
		});
	}
});

module.exports = function ($scope) {
	new SearchBerHandler({ $element: $scope });
};

/***/ }),
/* 96 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function () {
	var LightBox = __webpack_require__(97);
	this.dynamicTags = {
		lightbox: new LightBox()
	};
};

/***/ }),
/* 97 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var DynamicLightbox = elementorFrontend.Module.__super__.constructor.extend({

	selectors: {
		lightbox: 'a[href^="\!\#elementor-lightbox|"]'
	},

	bindEvents: function bindEvents() {
		elementorFrontend.getElements('$document').on('click', this.selectors.lightbox, this.triggerLightbox);
	},

	triggerLightbox: function triggerLightbox(event) {
		event.preventDefault();
		var settingsString = jQuery(event.currentTarget).attr('href');

		settingsString = settingsString.replace('!#elementor-lightbox|', '');
		var lightboxSettings = JSON.parse(settingsString);

		if ('video' === lightboxSettings.type && '' === lightboxSettings.url) {
			return;
		}

		elementorFrontend.utils.lightbox.showModal(lightboxSettings);
	}
});

module.exports = DynamicLightbox;

/***/ })
/******/ ]);
//# sourceMappingURL=frontend.js.map