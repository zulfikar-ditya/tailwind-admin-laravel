@extends('layouts.app')

@section('title', 'Table')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('test-component.table')" active>table</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')
    <x-table class="">
        <x-slot name="head">
            <th>#</th>
            <th>Name</th>
            <th></th>
        </x-slot>
        <x-slot name="body">
            @php
                $faker = \Faker\Factory::create('id_ID');
            @endphp
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $faker->name }}</td>
                    <td class="float-right">
                        <x-button color="danger" size="sm" icon="trash" target="modal-delete-{{ $i }}" />
                        <x-modal-delete target="modal-delete-{{ $i }}" link="" />
                    </td>
                </tr>
            @endfor
        </x-slot>
    </x-table>
    @foreach (['primary', 'warning', 'danger', 'success', 'info', 'light', 'dark', 'default'] as $item)
        <div class="mt-5">
            <x-table color="{{ $item }}" class="">
                <x-slot name="head">
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                </x-slot>
                <x-slot name="body">
                    @php
                        $faker = \Faker\Factory::create('id_ID');
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $faker->name }}</td>
                            <td class="float-right">
                                <x-button color="danger" size="sm" icon="trash" target="modal-delete-{{ $i }}" />
                                <x-modal-delete target="modal-delete-{{ $i }}" link="" />
                            </td>
                        </tr>
                    @endfor
                </x-slot>
            </x-table>
        </div>
    @endforeach

    <div class="mt-10">
        <x-table class="">

            <x-slot name="caption">
                <x-button label="Create" color="primary" size="lg" icon="plus" fontawesome rounded target="create-modal" />
                <x-modal target="create-modal" title="create data" headColor="primary">
                    <x-slot name="body">
                        <div class="">
                            <x-input label="Name" name="" required autofocus />
                            <x-input label="email" name="" required />
                        </div>
                    </x-slot>
                    <x-slot name="footer">
                        <x-button label="Create" color="primary" size="sm" icon="plus" fontawesome target="create-modal" />
                    </x-slot>
                </x-modal>
            </x-slot>
            <x-slot name="head">
                <th>#</th>
                <th>Name</th>
                <th></th>
            </x-slot>
            <x-slot name="body">
                @php
                    $faker = \Faker\Factory::create('id_ID');
                @endphp
                @for ($i = 1; $i <= 5; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $faker->name }}</td>
                        <td class="float-right">
                            <x-button color="danger" size="sm" icon="trash" target="modal-delete-{{ $i }}" />
                            <x-modal-delete target="modal-delete-{{ $i }}" link="" />
                        </td>
                    </tr>
                @endfor
            </x-slot>
            <x-slot name="footer">
                <td colspan="3" class="p-5">
                    <nav aria-label="Page navigation example" class="float-right">
                        <ul class="inline-flex -space-x-px">
                            <li>
                                <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </td>
            </x-slot>
        </x-table>
    </div>
@endsection
