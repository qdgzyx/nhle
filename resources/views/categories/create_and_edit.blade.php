@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          类别 /
          @if($category->id)
            编辑 #{{ $category->id }}
          @else
            新建
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($category->id)
          <form action="{{ route('categories.update', $category->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('categories.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                	<label for="name-field">名称</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $category->name ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="description-field">说明</label>
                	<textarea name="description" id="description-field" class="form-control" rows="3">{{ old('description', $category->description ) }}</textarea>
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">保存</button>
            <a class="btn btn-link float-xs-right" href="{{ route('categories.index') }}"> <-返回</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
