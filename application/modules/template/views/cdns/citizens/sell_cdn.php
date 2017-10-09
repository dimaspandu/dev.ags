<script src="<?php echo base_url(); ?>assets/modules/citizens/sell/js/sell.js"></script>
<script>
angular.module('sakkat_app', []).controller('sell_ctrl', function($scope, $http){
    var hole = '<?php echo base_url().'citizens/sell/pipe/loadItemListAPI/true'; ?>';
    
    $http.get(hole).then(function(response){
        var pipe = response.data; //console.log(pipe);
	$scope.item_list = pipe; //all data
    });
    
    $scope.price_range = '0'; //default

    $scope.refresh_price = function(){
        var itemID = document.getElementById('itemID').value;
        var weightID = document.getElementById('weightID').value;
	var paraPost = itemID+'-'+weightID;
        var hole = '<?php echo base_url().'citizens/sell/pipe/loadPriceRangeAPI/'; ?>'+paraPost;

        $http.get(hole).then(function(response){
          var pipe = response.data; //console.log(pipe);
	  var price_range = pipe.price_range;
	  $scope.price_range = price_range;
        });
    };
    
    var hole = '<?php echo base_url().'citizens/sell/userData/'; ?>';
    
    $http.get(hole).then(function(response){
	var pipe = response.data;
	$scope.fullname = pipe.fullname;
	$scope.address = pipe.address;
	$scope.address_detail = pipe.address_detail;
	$scope.phone = pipe.phone;
    });
});
</script>