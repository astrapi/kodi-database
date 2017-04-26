<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<?php include('../../config.php'); ?>
<?php include('../../header.php'); ?>
<body>

<?php include('../../nav.php'); ?>



<script src="<?php echo $url ?>/js/angular.min.js"></script>
<script src="<?php echo $url ?>/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="<?php echo $url ?>/app/app.js" one="<?php $_SERVER['REQUEST_URI'] ?>data.php"></script>  
</body>
</html>

