@extends('admin.layout')
<!--内容开始-->
@section('content')
<div id="main-content">
	<div class="page-title"><i class="icon-custom-left"></i>

		<h3><strong>编辑</strong> 文章</h3>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><strong>文章</strong> 主体</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php echo Form::model($category, array('route' => array('adminCategoryCreate')));
							?>
							<div class="form-group">
								<label class="form-label"><strong>名称</strong></label>
								<span class="tips"> 分类名称</span>

								<div class="controls">
									<?php echo Form::text('name', null, array('class' => 'form-control')); ?>
								</div>
								<?php echo $errors->first('name', '<ul id="parsley-11882143327966332"
								class="parsley-error-list"><li class="required" style="display: list-item;">:message</li></ul>'); ?>
							</div>
							<div class="form-group">
								<label for="content" class="form-label"><strong>描述</strong></label>
								<span class="tips">分类的描述</span>

								<div class="controls">
									<?php echo Form::textarea('description', null, array('class' => 'form-control')); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">附加 <strong>属性</strong></h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 m-b-40">
							<div class="form-group">
								<label class="form-label"><strong>分类目录</strong></label>
								<span class="tips">文章所在的目录</span>

								<div class="controls">
									<!--									--><?php //echo Form::select('categoryId', $categoryList, $post->categoryId, array()); ?>
								</div>
							</div>

							<div class="form-group">
								<label class="form-label"><strong>作者</strong></label>
								<span class="tips">当前用户</span>

								<div class="controls">
									<!--									--><?php //echo Form::select('authorId', $userList,
									//										Auth::user()->id,
									//										array());
									?>
								</div>
							</div>
							<div class="col-sm-9 col-sm-offset-3">
								<div class="pull-right">
									<?php echo Form::submit('添加', array('class' => 'btn btn-primary')); ?>
									<a href="<?php echo URL::to('admin/category/list'); ?>" class="btn
btn-default">取消</a>
								</div>
							</div>
							<?php echo Form::close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
<!--内容结束-->