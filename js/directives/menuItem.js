ricettale.directive('menuItem', function() {
   return {
      restrict: 'E',
      scope: {
         info: '='
      },
      templateUrl: 'components/menuItem.html'
   };
});
