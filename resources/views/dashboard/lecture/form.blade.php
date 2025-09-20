@php
    $title = $resource->id ? __('Edit') . ' ' . __('lecture') : __('Add') . ' ' . __('lecture');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form"
                action="{{ $resource->id ? route('admin.lecture.update', $resource->id) : route('admin.lecture.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-12 d-none">
                        <div class="form-group">
                            <label for="lecture">
                                {{ __('lecture') }}
                            </label>
                        </div>
                    </div>
                    {{-- clearfix --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="video">
                                {{ __('video') }}
                            </label>
                            {!! Form::text("file", old("file", optional($resource)->file), [
                                    'class' => 'form-control',
                                ]) !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="video">
                                {{ __('video') }}
                            </label>
                            {!! Form::text("file", old("file", optional($resource)->file), [
                                    'class' => 'form-control',
                                ]) !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {{-- lesson_id --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="lesson_id">
                                {{ __('lesson') }}
                            </label>
                            <select name="lesson_id" id="" class="form-control">
                                @foreach ($lessons as $lesson  )
                                    <option value="{{ $lesson->id }}" {{ $resource->lesson_id == $lesson->id ? 'selected' : '' }}>{{ $lesson->title }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('title' . ' ' . $locale) }}
                                </label>
                                {!! Form::text("{$locale}[title]", old("{$locale}[title]", optional($resource->translate($locale))->title), [
                                    'class' => 'form-control',
                                ]) !!}
                            </div>
                        </div>
                    @endforeach
                    {{-- age and lecture_duration and group_size --}}
                    
                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('description' . ' ' . $locale) }}
                                </label>
                                {!! Form::textarea(
                                    "{$locale}[description]",
                                    old("{$locale}[description]", optional($resource->translate($locale))->description),
                                    [
                                        'class' => 'form-control tinymce_ar',
                                    ],
                                ) !!}
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
@section('js')
    <script>
        $('#type').on('change', function() {
            if ($(this).val() == 'image') {
                $('#div-image').removeClass('d-none');
                $('#div-video').addClass('d-none');
            } else if ($(this).val() == 'video') {
                $('#div-video').removeClass('d-none');
                $('#div-image').addClass('d-none');
            }
        });
    </script>
@endsection
