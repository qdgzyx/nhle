@extends('layouts.app')

@section('content')
<div class="row mb-5">
  <div class="col-lg-9 col-md-9 category-list">
    <div class="card ">

      <div class="card-header bg-transparent">
        <h1>
          类别
          <a class="btn btn-success float-xs-right" href="{{ route('categories.create') }}">新建</a>
        </h1>
      </div>

      <div class="card-body">
        @if($categories->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">序号ID</th>
                <th>名称</th> <th>说明</th>
                <th class="text-xs-right">操作</th>
              </tr>
            </thead>

            <tbody>
              @foreach($categories as $category)
              <tr>
                <td class="text-xs-center"><strong>{{$category->id}}</strong></td>

                <td>{{$category->name}}</td> <td>{{$category->description}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('categories.show', $category->id) }}">
                    查看
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('categories.edit', $category->id) }}">
                    编辑
                  </a>

                  <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">删除 </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $categories->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">没有数据y!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
