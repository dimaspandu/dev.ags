<script src="<?php echo base_url(); ?>assets/modules/citizens/trashbag/js/trashbag.js"></script>
<script>
angular.module('sakkat_app', []).controller('trashbag_ctrl', function($scope, $http){
    //GET TRASHBAG LIST INTO TABLE
    var hole = '<?php echo base_url().'citizens/trashbag/pipe/loadTrashbagAPI/true'; ?>';
    
    $http.get(hole).then(function(response){
        var pipe = response.data; //console.log(pipe);
	$scope.trashbag_list = pipe; //all data
    });
});
</script>