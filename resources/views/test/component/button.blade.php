@extends('layouts.app')

@section('title', 'Button')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('test-component.button')" active>Button</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')
    <x-card title="button">
        <x-slot name="body">
            <div class="form__cols">
                <div class="">
                    @foreach (['primary', 'warning', 'danger', 'success', 'info', 'light', 'dark'] as $item)
                        <div class="">
                            <x-button label="{{ $item }}" color="{{ $item }}" size="sm" />
                            <x-button label="{{ $item }}" color="{{ $item }}" />
                            <x-button label="{{ $item }}" color="{{ $item }}" size="lg" />
                            <x-button label="{{ $item }}" color="{{ $item }}" icon="user" fontawesome />
                            <x-button label="{{ $item }}" color="{{ $item }}" icon="user" fontawesome iconRight />
                            <x-button label="{{ $item }}" color="{{ $item }}" icon="user" />
                            <x-button label="{{ $item }}" color="{{ $item }}" icon="user" iconRight />
                            <x-button label="{{ $item }}" color="{{ $item }}" rounded />
                            <x-button label="{{ $item }}" color="{{ $item }}" block />
                        </div>
                    @endforeach
                </div>
                <div class="">
                    @foreach (['primary', 'warning', 'danger', 'success', 'info', 'light', 'dark'] as $item)
                        <div class="">
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" size="sm" />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" size="lg" />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" icon="user" fontawesome />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" icon="user" fontawesome iconRight />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" icon="user" />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" icon="user" iconRight />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" rounded />
                            <x-button label="{{ $item }}" style="outline" color="{{ $item }}" block />
                        </div>
                    @endforeach
                </div>
                <div class="">
                    @foreach (['primary', 'warning', 'danger', 'success', 'info', 'light', 'dark'] as $item)
                        <div class="">
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" size="sm" />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" size="lg" />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" icon="user" fontawesome />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" icon="user" fontawesome iconRight />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" icon="user" />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" icon="user" iconRight />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" rounded />
                            <x-button label="{{ $item }}" style="gradient" color="{{ $item }}" block />
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-10">
                <div class="form__cols">
                    <div class="">
                        <p>Disabled</p>
                        <x-button label="disabled" color="primary" disabled />
                    </div>
                    <div class="">
                        <p>Link</p>
                        <x-button link="https://zulfikar-ditya.vercel.app" label="Link" color="primary" />
                    </div>
                    <div class="">
                        <p>Badge</p>
                        <x-button bagde label="Badge" color="primary" />
                    </div>
                    <div class="">
                        <p>class & id</p>
                        <x-button label="class & id" class="text-primary" id="id-btn" color="primary" />
                    </div>
                    <div class="">
                        <p>Javascript State</p>
                        <x-button label="javascript state" color="primary" onclick="click_btn()" />
                    </div>
                    <div class="">
                        <p>Type</p>
                        <x-button type="submit" label="type" color="primary" />
                    </div>
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
