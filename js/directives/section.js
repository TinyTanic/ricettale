ricettale.directive('section', function() {
   return {
      restrict: 'E',
      scope: {
         info: '='
      },
      templateUrl: 'components/section.html'
   };
});
