@extends('admin.layout')
@section('content')
<div id="main-content">
	<div class="page-title"><i class="icon-custom-left"></i>

		<h3><strong>查看</strong> 文章</h3>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="btn-group btn-group-justified">
						<div class="btn-group">
							<a href="<?php echo URL::to('admin/post/list'); ?>" class="btn btn-default">返回</a>
						</div>
						<div class="btn-group">
							<a href="<?php echo URL::to('admin/post/edit', array('id' => $post->id)); ?>"
							   class="btn btn-primary">编辑</a>
						</div>
						<div class="btn-group">
							<a href="<?php echo URL::to('admin/post/delete', array('id' => $post->id)); ?>"
							   class="btn btn-danger">删除</a>
						</div>
					</div>
					<hr/>
					<h1 class="panel-title"><?php echo $post->title; ?></h1>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="bd-blue" style="text-indent: 2em">
								<?php echo $post->content; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop