@extends('dashboard.layouts.master')

@php
    $title = __('lecture');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb', ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
            @component('dashboard.layouts.includes.card')
                @slot('tool')
                    <a href="{{ route('admin.lecture.create') }}" class="btn btn-primary d-grid float-end mb-2 ">
                        <i class="  bx bx-plus"> {{ __('Add') . ' ' . __('lecture') }}</i>

                    </a>
                @endslot

                @slot('content')
                    @component('dashboard.layouts.includes.table')
                        @slot('headers')
                            <td>#</td>
                            <td>{{ __('Title') }}</td>
                            <td>{{ __('Course') }}</td>
                            <td>{{ __('Actions') }}</td>
                        @endslot

                        @slot('data')
                            @if (isset($data))
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <b>{{ $item->title }}</b>
                                        </td>
                                        <td>
                                            {{ $item->course->title }}
                                        </td>

                                        <td class="d-flex gap-2">
                                            <a href="{{ route('admin.lecture.edit', $item->id) }}" class="btn  btn-primary btn-sm"><i
                                                    class="bx bx-edit"></i></a>
                                            <form action="{{ route('admin.lecture.delete', $item->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">
                                        <div class="text-center alert alert-warring">
                                            {{ __('No Data Found') }}
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>


    </div>
@endsection
