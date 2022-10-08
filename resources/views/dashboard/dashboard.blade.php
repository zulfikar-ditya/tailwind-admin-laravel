@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('dashboard')">Dashboard</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <x-card class="hover:scale-105 transition-all duration-300 hover:shadow-xl hover:-translate-y-2" bodyClass="border-none">
            <x-slot name="body">
                <h1 class="text__primary text-5xl">100K</h1>
                <h6>Total Users</h6>
            </x-slot>
        </x-card>
        <x-card class="hover:scale-105 transition-all duration-300 hover:shadow-xl hover:-translate-y-2" bodyClass="border-none">
            <x-slot name="body">
                <h1 class="text__primary text-5xl">100K</h1>
                <h6>Total Users</h6>
            </x-slot>
        </x-card>
        <x-card class="hover:scale-105 transition-all duration-300 hover:shadow-xl hover:-translate-y-2" bodyClass="border-none">
            <x-slot name="body">
                <h1 class="text__primary text-5xl">100K</h1>
                <h6>Total Users</h6>
            </x-slot>
        </x-card>
        <x-card class="hover:scale-105 transition-all duration-300 hover:shadow-xl hover:-translate-y-2" bodyClass="border-none">
            <x-slot name="body">
                <h1 class="text__primary text-5xl">100K</h1>
                <h6>Total Users</h6>
            </x-slot>
        </x-card>
    </div>
@endsection
