<script src="<?php echo base_url(); ?>assets/modules/trashline/js/trashline.js"></script>
<script>
angular.module('sakkat_app', []).controller('trashline_ctrl', function($scope, $http){
    //GET ITEM LIST SELECT
    var hole = '<?php echo base_url().'citizens/trashline/pipe/loadItemListAPI/true'; ?>';
    
    $http.get(hole).then(function(response){
        var pipe = response.data; //console.log(pipe);
	$scope.item_list = pipe; //all data
    });
    
    //GET TRASHLINE
    var hole = '<?php echo base_url().'citizens/trashline/pipe/loadTrashlineAPI/true'; ?>';
    
    $http.get(hole).then(function(response){
	var pipe = response.data; //console.log(pipe);
	$scope.trashline = pipe; //all data
    });
    
    //DETAIL TRASH
    $scope.pick_trash = function(trashline_ID){
	var trashline_ID = trashline_ID;
	var dataPost = trashline_ID;
	var hole = '<?php echo base_url().'citizens/trashline/pipe/loadTrashlineDetailAPI/'; ?>'+dataPost;
	
	$http.get(hole).then(function(response){
	    var pipe = response.data; //console.log(pipe);
	    $scope.trashline_detail = pipe; //all data
	    $scope.trashline_ID = pipe.trashline_ID;
	    $scope.category_name = pipe.category_name;
	    $scope.item_name = pipe.item_name;
	    $scope.headline = pipe.headline;
	    
	    var filter_detail = {
	        "By":pipe.by,
		"Description":pipe.description,
	        "Weight":pipe.weight+" Kg",
	        "Price Range":"Rp "+pipe.price_range+",-",
	        "Address":pipe.address,
	        "Address Detail":is_empty(pipe.address_detail),
	        "Phone":pipe.phone
	    };
	    $scope.trashline_detail = filter_detail; //filtered data
	});
    };
});
</script>