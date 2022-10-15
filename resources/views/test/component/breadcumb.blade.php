@extends('layouts.app')

@section('title', 'Breadcumb')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('test-component.breadcumb')" active>Breadcumb</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')

    <x-breadcumb>
        <x-breadcumb-link :link="route('test-component.breadcumb')">Breadcumb</x-breadcumb-link>
        <x-breadcumb-link :link="route('test-component.breadcumb')" active>Breadcumb</x-breadcumb-link>
    </x-breadcumb>
@endsection
