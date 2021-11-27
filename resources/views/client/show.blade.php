@extends('layouts.layout')

@section('title', 'Prefil | Market App')

@section('content')
    <div class="bg">
        <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                @livewire('show-purchase-data')
            </div>
        </div>
    </div>
@endsection
