@extends('admin_template')


@section('content')
    <p>This is the content</p>
    <p>
        {{ $notes or 'Nothing'}}
    </p>
@endsection
