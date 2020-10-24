@extends('layout.index')
@section('title', 'ページタイトル')
@section('description', 'description')
@section('body')
<div id="blogarea">
    @foreach (@$pagination as $k => $v)
    <span class=""><a href="{{ route('detail', ['id' => $v['id']]) }}">{{$v['title']}}</a></span>
    @endforeach
</div>
{{ $pagination->links('pagination::bootstrap-4') }}
@endsection