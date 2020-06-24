@extends('adminlte.master')

{{-- Custom Meta Tags --}}
@section('meta_tags')
@endsection
{{-- Title --}}
@section('title_prefix', config('app.prefix', ''))
@section('title', config('app.name', 'Laravel'))
@section('title_postfix', config('app.postfix', ''))

{{-- Custom Stylesheets (post css) --}}
@section('post_css')
@endsection

{{-- Body bootstrap class --}}
@section('classes_body')

@endsection
{{-- Body custom style or tag--}}
@section('body_data')
@endsection

@section('page_header')
@endsection

@section('content_style')
@endsection
@section('info','')

@section('page_header_link_text','breadcrumb')
@section('body')

@endsection

@section('copyright_right')
@endsection
<!-- Default to the left -->
@section('copyright')
@endsection

