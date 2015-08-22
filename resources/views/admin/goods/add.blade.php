@extends('admin.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">添加商品</div>

                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ URL('admin/goods/store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>商品名称</label>
                            <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
                        </div>
                        <div class="form-group">
                            <label>类别</label>
                            <select class="selectpicker">
                                <option>男士披肩</option>
                                <option>男士寸衫</option>
                                <option>男士短袖</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>品牌</label>
                            <select class="selectpicker">
                                <option>Dior</option>
                                <option>CK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>市场价</label>
                            <input type="email" name="email" class="form-control" style="width: 300px;">
                        </div>
                        <div class="form-group">
                            <label>销售价</label>
                            <input type="text" name="website" class="form-control" style="width: 300px;">
                        </div>
                        <div class="form-group">
                            <label>上传图片</label>

                        </div>
                        <div class="form-group">
                            <label>库存</label>
                            <input type="number" id="number" class="info-box-number"/>
                        </div>
                        <div class="form-group">
                            <label>推荐</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>热卖</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>置顶</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>简介</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>描述</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success col-lg-12">添加</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection