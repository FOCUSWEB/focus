@extends('admin.layout')
@section('pageLevelStyle')
<link rel="stylesheet" href="{{ Config::get('site.adminAssetsPath') }}plugins/datatables/dataTables.css">
<link rel="stylesheet" href="{{ Config::get('site.adminAssetsPath') }}plugins/datatables/dataTables.tableTools.css">
@stop
@section('pageLevelScripts')
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/bootstrap-switch/bootstrap-switch.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/datatables/dataTables.bootstrap.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/datatables/dataTables.tableTools.js"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}plugins/datatables/table.editable.html"></script>
<script src="{{ Config::get('site.adminAssetsPath') }}js/table_dynamic.js"></script>
@stop


@section('content')
<div id="main-content">
	<div class="page-title"><i class="icon-custom-left"></i>

		<h3><strong>Dynamic</strong> tables</h3>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading bg-red">
					<h3 class="panel-title"><strong>Sorting </strong> example</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
							<table cellpadding="0" cellspacing="0" border="0"
							       class="table table-striped table-hover table-dynamic">
								<thead>
								<tr>
									<th>ID</th>
									<th>名称</th>
									<th>描述</th>
									<th>操作</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($categories as $category) {
									; ?>
									<tr>
										<td><?php echo $category->id; ?></td>
										<td><?php echo $category->name; ?></td>
										<td><?php echo $category->description; ?></td>
										<td>
											<?php
											$buttonGroup = new TableButtonGroup();
											$buttonGroup->buttons = array(
												array(
													'label' => '查看',
													'url' => URL::to('admin/post/view', array('id' => $category->id)),
													'type' => 'default',
												),
												array(
													'label' => '更新',
													'url' => URL::to('admin/post/edit', array('id' => $category->id)),
													'type' => 'primary',
												),
												array(
													'label' => '删除',
													'url' => URL::to('admin/post/delete', array('id' => $category->id)),
													'type' => 'danger',
												),
											);
											$buttonGroup->make();
											?>
										</td>
									</tr>
								<?php }; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<a href="<?php echo URL::to('admin/category/create'); ?>" class="btn btn-success">添加分类</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@stop