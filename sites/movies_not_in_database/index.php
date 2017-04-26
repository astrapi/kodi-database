<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<?php include('../../config.php'); ?>
<?php include('../../header.php'); ?>
<body>

<?php include('../../nav.php'); ?>

<div ng-controller="customersCrtl">
<div class="container theme-showcase" role="main">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Filme nicht in Datenbank</h1>
            </div>
          </div>
    <div class="row">
        <div class="col-md-2">PageSize:
            <select ng-model="entryLimit" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-md-3">Filter:
            <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
        </div>
        <div class="col-md-4">
            <h5>Filtered {{ filtered.length }} of {{ totalItems}} total customers</h5>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12" ng-show="filteredItems > 0">
            <table class="table table-striped table-bordered">
            <thead>
            <th>strFilename&nbsp;<a ng-click="sort_by('strFilename');"><i class="glyphicon glyphicon-sort"></i></a></th>
						<th>strTitle&nbsp;<a ng-click="sort_by('strTitle');"><i class="glyphicon glyphicon-sort"></i></a></th>
						<th>strSize&nbsp;</th>
						<th>strPath&nbsp;<a ng-click="sort_by('strPath');"><i class="glyphicon glyphicon-sort"></i></a></th>
            </thead>
            <tbody>
                <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>{{data.strFilename}}</td>
                    <td>{{data.strTitle}}</td>
										<td>{{data.strSize}}</td>
                    <td>{{data.strPath}}</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-md-12" ng-show="filteredItems == 0">
            <div class="col-md-12">
                <h4>No customers found</h4>
            </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems > 0">    
            <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
            
            
        </div>
    </div>
</div>
</div>


      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>

<script src="<?php echo $url ?>/js/angular.min.js"></script>
<script src="<?php echo $url ?>/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="<?php echo $url ?>/app/app.js" one="<?php $_SERVER['REQUEST_URI'] ?>data.php"></script>  
</body>
</html>

