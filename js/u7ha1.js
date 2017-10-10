var projectName = 'u7ha1';

// #region unknownWords
var unknownWords = {};
// #endregion unknownWords

; (function ($, window, document, undefined) {
   "use strict";

   // #region window
   if (typeof window === 'undefined'
      || window.Math !== Math) {
      if (typeof self !== 'undefined'
         && self.Math === Math) {
         window = self;
      } else {
         window = Function('return this')();
      }
   }
   // #endregion

   $.fn[projectName] = function (parameters) {
      // #region settings
      var settings = $.fn[projectName].settings = {};

      //***************************************************************
      // #region vocabulary
      var vocabulary = settings.vocabulary = {
         properties: {
            content: 'content',
            furigana: 'furigana',
            group: 'group',
            hanViet: 'han-viet',
            key: 'key',
            meaning: 'meaning',
            romanji: 'romanji'
         }
      };
      // #endregion vocabulary
      //***************************************************************

      //***************************************************************
      // #region classes
      var classes = settings.classes = {
         chapter: projectName + '-chapter',

         vocabulary: 'vocabulary',
         show: 'show',
         arrow: 'arrow'
      };

      $.each(vocabulary.properties, function (key, value) {
         classes[key] = value;
      });
      // #endregion classes
      //***************************************************************

      var ids = settings.ids = {
         moreInfo: 'more-info',
      };

      //***************************************************************
      // #region selectors
      var selectors = settings.selectors = {};

      $.each(ids, function (key, value) {
         selectors[key] = '#' + value;
      });

      $.each(classes, function (key, value) {
         selectors[key] = '.' + value;
      });
      // #endregion selectors
      //***************************************************************

      //***************************************************************
      // #region attributes
      var attributes = settings.attributes = {
         content: 'content',
         furigana: 'furigana',
         group: 'group',
         hanViet: 'han-viet',
         key: 'key',
         meaning: 'meaning',
         romanji: 'romanji'
      };
      // #endregion attributes
      //***************************************************************

      //***************************************************************
      // #region elements
      var elements = settings.elements = {
         $chapter: $(selectors.chapter),

         $moreInfoElement: $(selectors.moreInfo)
      }
      // #endregion elements
      //***************************************************************

      // #endregion settings

      // #region utilities
      var utilities = $.fn[projectName].utilities = {};

      utilities.moreInfo = {
         $owner: undefined,
         $element: elements.$moreInfoElement
      }

      utilities.addUnknownVocabularies = function (key) {
         if (!unknownWords.hasOwnProperty(key)) {
            unknownWords[key] = true;
         }

         return 0;
      }

      utilities.showUnknownVocabularies = function () {
         var output = '';

         $.each(unknownWords, function (key, value) {
            output += key + '\r\n';
         });

         console.log(output);
         //prompt('Ctrl+C', output);

         return 0;
      }

      utilities.initializeProperties = function ($vocabularyElement) {
         var key = $vocabularyElement.attr(attributes.key);

         if (data.hasOwnProperty(key)) {
            var currentVocabulary = data[key];

            $.each(vocabulary.properties, function (key, value) {
               $vocabularyElement.attr(value, currentVocabulary[value]);
            });
         }
         else {
            utilities.addUnknownVocabularies(key);
         }

         return 0;
      }

      utilities.vocabularies = function ($module) {
         $module.find(selectors.vocabulary).each(function () {
            var $vocabularyElement = $(this);

            $.each(vocabulary.properties, function (key, value) {
               var propertyElement = $vocabularyElement.find(selectors[key]);

               propertyElement.html($vocabularyElement.attr(value));
            });
         });

         return 0;
      }

      utilities.grammarAddContentElement = function ($vocabularyElement) {
         var
            $contentElement = $vocabularyElement.find(selectors.content),
            content = $vocabularyElement.attr(attributes.content);

         if ($contentElement.length !== 0) {
            $contentElement.html(content);
         } else {
            $vocabularyElement.html('<ruby class="' + classes.content + '">'
               + content
               + '</ruby>');
         }

         return 0;
      }

      utilities.grammarAddFuriganaElement = function ($vocabularyElement) {
         var
            $furiganaElement = $vocabularyElement.find(selectors.furigana),
            furigana = $vocabularyElement.attr(attributes.furigana);

         if ($furiganaElement.length !== 0) {
            $furiganaElement.html(furigana);
         } else {
            var $contentElement = $vocabularyElement.find(selectors.content);

            $contentElement.html($contentElement.html()
               + '<rt class="' + classes.furigana + '">'
               + furigana
               + '</rt>');
         }

         return 0;
      }

      utilities.grammarAddRomanjiElement = function ($vocabularyElement) {
         var
            $romanjiElement = $vocabularyElement.find(selectors.romanji),
            romanji = $vocabularyElement.attr(attributes.romanji);

         if ($romanjiElement.length !== 0) {
            $romanjiElement.html(romanji);
         } else {
            $vocabularyElement.html('<rb class="' + classes.romanji + '">'
               + romanji
               + '</rb>'
               + $vocabularyElement.html());
         }

         var height = $vocabularyElement.height(),
            fontSize = parseInt($vocabularyElement.css('font-size')),
            translateY = height - fontSize * 0.15;

         $romanjiElement = $vocabularyElement.find(selectors.romanji);

         $romanjiElement.css(
            'transform',
            'translateY(' + translateY + 'px)');

         return 0;
      }

      utilities.updateMoreInfoPosition = function () {
         var
            $owner = utilities.moreInfo.$owner,
            $element = elements.$moreInfoElement,
            $arrowElement = $element.find(selectors.arrow);

         if ($element.hasClass(classes.show)) {
            if (typeof $owner !== 'undefined') {
               var
                  offset = $owner.offset(),

                  ownerWidth = $owner.outerWidth(),
                  ownerHeight = $owner.outerHeight(),

                  scrollLeft = $(document).scrollLeft(),
                  scrollTop = $(document).scrollTop(),

                  windowWidth = $(window).width(),
                  windowHeight = $(window).height(),

                  elementWidth = $element.outerWidth(),
                  elementHeight = $element.outerHeight();

               var
                  left = offset.left + ownerWidth / 2 - elementWidth / 2 - scrollLeft,
                  bottom = windowHeight - offset.top + 10 + scrollTop;

               if (left < 0) {
                  left = 0;
               } else if (left + elementWidth > windowWidth) {
                  left = windowWidth - elementWidth;

                  if (left < 0) {
                     left = 0;
                  }
               }

               $element.css('left', left + 'px');
               $element.css('bottom', bottom + 'px');

               $arrowElement.css(
                  'left',
                  offset.left + ownerWidth / 2 - 10 + 'px');

               $element.addClass(classes.show);
            }
            else {
               $element.removeClass(classes.show);
            }
         }

         return 0;
      }

      utilities.showMoreInfo = function ($vocabularyElement) {
         utilities.moreInfo.$owner = $vocabularyElement;

         var $moreInfoElement = elements.$moreInfoElement;

         $.each(vocabulary.properties, function (key, value) {
            var propertyElement = $moreInfoElement.find(selectors[key]);

            if (propertyElement.length !== 0) {
               var property = $vocabularyElement.attr(value);

               propertyElement.html($vocabularyElement.attr(value));
            }
         });

         $moreInfoElement.addClass(classes.show);

         utilities.updateMoreInfoPosition();
      }

      utilities.hideMoreInfo = function () {
         var $moreInfoElement = elements.$moreInfoElement;

         $moreInfoElement.removeClass(classes.show);

         utilities.moreInfo.$owner = undefined;
      }

      utilities.moreInfo = function ($vocabularyElement) {
         $vocabularyElement.click(function () {
            if (elements.$moreInfoElement.hasClass(classes.show)) {
               utilities.hideMoreInfo();
            } else {
               utilities.showMoreInfo($vocabularyElement);
            }
         });

         $vocabularyElement.mouseenter(function () {
            utilities.showMoreInfo($vocabularyElement);
         });

         $vocabularyElement.mouseleave(function () {
            utilities.hideMoreInfo();
         });
      }

      utilities.grammar = function ($module) {
         $module.find(selectors.vocabulary).each(function () {
            var $vocabularyElement = $(this)

            utilities.grammarAddContentElement($vocabularyElement);

            utilities.grammarAddFuriganaElement($vocabularyElement);

            utilities.grammarAddRomanjiElement($vocabularyElement);

            utilities.moreInfo($vocabularyElement);
         });

         return 0;
      }

      utilities.initialize = function ($module) {
         $module.find(selectors.vocabulary).each(function () {
            var
               $vocabularyElement = $(this),
               key = $vocabularyElement.attr(attributes.key);

            if (typeof key !== 'undefined') {
               utilities.initializeProperties($vocabularyElement);
            }
         });

         return 0;
      }

      // #endregion utilities

      var
         $allModules = $(this),

         query = arguments[0],
         queryArguments = [].slice.call(arguments, 1),

         returnedValue = 0;

      $allModules.each(function () {
         var
            $module = $(this),

            settings = $.extend(true, {}, $.fn[projectName].settings, parameters);

         var module = {
            initialize: function () {
               utilities.initialize($module);

               utilities.showUnknownVocabularies();

               $(window).scroll(function () {
                  utilities.updateMoreInfoPosition();
               });

               return 0;
            },

            vocabularies: function () {
               utilities.vocabularies($module);

               return 0;
            },

            grammar: function () {
               utilities.grammar($module);

               return 0;
            }
         }

         module[parameters]();

         return (returnedValue !== undefined) ? returnedValue : this;
      });
   }
})(jQuery, window, document);
