@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        新規メモ作成
    </div>
    <!-- {{ route('store') }}と書くと=>/store -->
    <form class="card-body" id="delete-form" action="{{ route('store') }}" method="post">
      @csrf 
      <div class="form-group">
        <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力"></textarea>
      </div>
      @error('content')
        <div class="alert alert-danger">メモの内容を入力してや！</div>
      @enderror

      @foreach($tags as $t)
        <div class="form-check form-check-inline mb-3">
          <input class="form-check-input" type="checkbox" name="tags[]" id="{{ $t['id'] }}" value="{{ $t['id'] }}">
          <label class="form-check-label" for="{{ $t['id'] }}">{{ $t['name'] }}</label>
        </div>
      @endforeach
        <input type="text" name="new_tag" class="form-control w-50 mt-3" placeholder="新規タグを入力" />
        <button type="submit" class="btn btn-primary mt-3">保存</button>
    </form>
</div>
@endsection
