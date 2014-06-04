@extends('admin.layout')
@section('pageLevelStyle')
<link href="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/datetimepicker/jquery.datetimepicker.css"
      rel="stylesheet">
<link href="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/pickadate/themes/default.css" rel="stylesheet">
<link href="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/pickadate/themes/default.date.css"
      rel="stylesheet">
<link href="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/pickadate/themes/default.time.css"
      rel="stylesheet">
@stop
@section('pageLevelScripts')
<script
	src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/datetimepicker/jquery.datetimepicker.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/pickadate/picker.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/pickadate/picker.date.js"></script>
<script src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/pickadate/picker.time.js"></script>
@stop
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
                            <?php echo Form::model($post, array('route' => array('adminPostEdit', $post->id)));
                            ?>
                            <div class="form-group">
                                <label class="form-label"><strong>标题</strong></label>
                                <span class="tips"> 文章标题</span>

                                <div class="controls">
                                    <?php echo Form::text('title', null, array('class' => 'form-control')); ?>
                                </div>
                                <?php echo $errors->first('title', '<ul id="parsley-11882143327966332" class="parsley-error-list"><li class="required" style="display: list-item;">:message</li></ul>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="content" class="form-label"><strong>内容</strong></label>
                                <span class="tips">文章内容</span>

                                <div class="controls">
                                    <?php echo Form::textarea('content', null, array('id' => 'content')); ?>
                                    <script type="text/javascript"
                                            src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/ueditor/ueditor.config.js"></script>
                                    <script type="text/javascript"
                                            src="<?php echo Config::get('site.adminAssetsPath'); ?>plugins/ueditor/ueditor.all.js"></script>
                                    <script type="text/javascript">
                                        var ue = UE.getEditor('content');
                                    </script>
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
                                    <?php echo Form::select('categoryId', $categoryList, $post->categoryId, array()); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label"><strong>作者</strong></label>
                                <span class="tips">当前用户</span>

                                <div class="controls">
                                    <?php echo Form::select('authorId', $userList,
                                        Auth::user()->id,
                                        array()); ?>
                                </div>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="pull-right">
                                    <?php echo Form::submit('保存', array('class' => 'btn btn-primary')); ?>
                                    <a href="#" class="btn btn-default">取消</a>
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