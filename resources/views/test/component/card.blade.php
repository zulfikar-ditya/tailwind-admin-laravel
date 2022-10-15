@extends('layouts.app')

@section('title', 'Card')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('test-component.card')" active>Card</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')
    <x-card title="title" class="" id="">
        <x-slot name="img">
            <img src="https://images.pexels.com/photos/7267852/pexels-photo-7267852.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img__fit card__img" alt="">
        </x-slot>
        <x-slot name="head">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </x-slot>
        <x-slot name="body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste est excepturi nihil vel. Error accusantium, provident est, quis minus aspernatur perspiciatis saepe excepturi, repellat mollitia voluptas unde expedita aperiam.</p>
        </x-slot>
        <x-slot name="footer">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </x-slot>
    </x-card>

    <x-card title="title" class="mt-5" id="" headClass="border border-gray-300" headId="head-example">
        <x-slot name="body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste est excepturi nihil vel. Error accusantium, provident est, quis minus aspernatur perspiciatis saepe excepturi, repellat mollitia voluptas unde expedita aperiam.</p>
        </x-slot>
    </x-card>

    <x-card title="title" class="mt-5" id="" bodyClass="border border-gray-300" bodyId="body-example">
        <x-slot name="body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste est excepturi nihil vel. Error accusantium, provident est, quis minus aspernatur perspiciatis saepe excepturi, repellat mollitia voluptas unde expedita aperiam.</p>
        </x-slot>
    </x-card>
@endsection
