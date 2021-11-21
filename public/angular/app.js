angular.module('Stok', [], function () { })
    .controller('ProduitController', function ($scope) {
        $scope.nombreEnregistrement;
        $scope.setRange = function () {
            $scope.range = [];
            for (let i = 1; i <= $scope.nombreEnregistrement; i++) {
                $scope.range.push(i);
            }
        }
    });
