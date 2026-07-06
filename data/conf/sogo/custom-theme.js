/* Zoho-like theme for SOGo (mailcow custom hook)
 * Mounted into the SOGo container as WebServerResources/js/theme.js
 * (see docker-compose.yml). Changes the Angular Material color palette.
 * Layout/spacing tweaks live in custom-sogo.js (injected CSS).
 */
(function() {
  'use strict';
  angular.module('SOGo.Common')
    .config(configure);

  configure.$inject = ['$mdThemingProvider'];
  function configure($mdThemingProvider) {
    // Zoho primary blue (~#2c6fdb). Extend the stock 'blue' palette so every
    // hue stays consistent, then override the hues we actually use.
    var zohoBlue = $mdThemingProvider.extendPalette('blue', {
      '400': '2C6FDB',
      '500': '2C6FDB',
      '600': '215AB8',
      '700': '1B4C9E',
      'A700': '215AB8',
      'contrastDefaultColor': 'light'
    });

    // Light, near-white background like Zoho's panes.
    var zohoGrey = $mdThemingProvider.extendPalette('grey', {
      '50':  'FFFFFF',
      '100': 'F4F6F9',
      '200': 'EDF1F6',
      '300': 'E1E7EF'
    });

    $mdThemingProvider.definePalette('zoho-blue', zohoBlue);
    $mdThemingProvider.definePalette('zoho-grey', zohoGrey);

    $mdThemingProvider.theme('default')
      .primaryPalette('zoho-blue', {
        'default': '500',
        'hue-1':   '400',
        'hue-2':   '600',
        'hue-3':   '700'
      })
      .accentPalette('zoho-blue', {
        'default': '500',
        'hue-1':   '400',
        'hue-2':   '600',
        'hue-3':   'A700'
      })
      .backgroundPalette('zoho-grey');

    $mdThemingProvider.generateThemesOnDemand(false);
  }
})();
