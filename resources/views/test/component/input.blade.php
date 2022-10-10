@extends('layouts.app')

@section('title', 'Input Component')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('dashboard')">Dashboard</x-breadcumb-link>
        <x-breadcumb-link :link="route('test-component.input')">Input Component</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')
    <x-card title="input components" class="" id="">
        <x-slot name="body">
            <div class="form__cols">
                <div class="">
                    <x-input type="text" name="input_components" />
                </div>
                <div class="">
                    <x-input type="text" name="required" required />
                </div>
                <div class="">
                    <x-input type="text" name="autocomplete" autocomplete="email" />
                </div>
                <div class="">
                    <x-input type="text" name="autofocus" autofocus />
                </div>
                <div class="">
                    <x-input type="text" name="disabled" disabled />
                </div>
                <div class="">
                    <x-input type="text" name="readonly" value="here form readonly" readonly />
                </div>
                <div class="">
                    <x-input type="text" name="value" value="Value Input" />
                </div>
                <div class="">
                    <x-input type="text" name="class" class="" id="" />
                </div>
                <div class="">
                    <x-input type="text" name="label" label="Hello From label" />
                </div>
                <div class="">
                    <x-input type="text" name="helpers" label="Helpers" helpers="Hello Helpers Here" />
                </div>
                <div class="">
                    <x-input type="text" name="state" label="state" onclick="click_event()" onchange="change_event()" onkeyup="keyup_event()" onblur="blur_event()" />
                </div>
            </div>

            <div class="form__cols mt-10">
                <div class="">
                    <x-input-file name="file" label="file" required />
                </div>
                <div class="">
                    <x-input-file name="input_components" />
                </div>
                <div class="">
                    <x-input-file name="required" required />
                </div>
                <div class="">
                    <x-input-file name="autofocus" autofocus />
                </div>
                <div class="">
                    <x-input-file name="disabled" disabled />
                </div>
                <div class="">
                    <x-input-file name="readonly" value="here form readonly" readonly />
                </div>
                <div class="">
                    <x-input-file name="value" value="Value Input" />
                </div>
                <div class="">
                    <x-input-file name="class" class="" id="" />
                </div>
                <div class="">
                    <x-input-file name="label" label="Hello From label" />
                </div>
                <div class="">
                    <x-input-file name="helpers" label="Helpers" helpers="Hello Helpers Here" />
                </div>
                <div class="">
                    <x-input-file name="multiple[]" label="Multiple" multiple />
                </div>
                <div class="">
                    <x-input-file name="state" label="state" onclick="click_event()" onchange="change_event()" onkeyup="keyup_event()" onblur="blur_event()" />
                </div>
            </div>

            <div class="form__cols mt-10">
                <div class="">
                    <x-input type="password" name="password" />
                </div>
                <div class="">
                    <x-input type="date" name="date" />
                </div>
                <div class="">
                    <x-input type="email" name="email" />
                </div>
                <div class="">
                    <x-input type="number" name="number" />
                </div>
                <div class="">
                    <x-input type="tel" name="tel" />
                </div>
                <div class="">
                    <x-input type="url" name="url" />
                </div>
                <div class="">
                    <x-input type="week" name="week" />
                </div>
                <div class="">
                    <x-input type="time" name="time" />
                </div>
                <div class="">
                    <x-input type="datetime-local" name="datetime-local" />
                </div>
                <div class="">
                    <x-input type="month" name="month" />
                </div>
            </div>
        </x-slot>
    </x-card>
    <x-card title="checkbox & radio & toggle" class="mt-5">
        <x-slot name="body">
            <div class="form__cols">
                <div class="">
                    <x-input-checkbox name="checkbox-1" label="checkbox" id="checkbox-1" />
                </div>
                <div class="">
                    <x-input-checkbox name="checkbox-2" label="checkbox cheked required" id="checkbox-2" checked required />
                </div>
                <div class="">
                    <x-input-checkbox name="checkbox-3" label="checkbox disabled" id="checkbox-3" disabled />
                </div>
                <div class="">
                    <x-input-checkbox name="checkbox-5" label="checkbox js state" id="checkbox-5" onclick="" onblur="" onchange="" />
                </div>
            </div>
            <div class="form__cols mt-10">
                <div class="">
                    <x-input-radio name="radio-1" label="radio" id="radio-1" />
                </div>
                <div class="">
                    <x-input-radio name="radio-1" label="radio cheked required" id="radio-2" checked required />
                </div>
                <div class="">
                    <x-input-radio name="radio-1" label="radio disabled" id="radio-3" disabled />
                </div>
                <div class="">
                    <x-input-radio name="radio-1" label="radio js state" id="radio-5" onclick="" onblur="" onchange="" />
                </div>
            </div>
            <div class="form__cols mt-10">
                <div class="">
                    <x-input-toggle name="toggle-1" label="togge" id="toggle-1" />
                </div>
                <div class="">
                    <x-input-toggle name="toggle-2" label="togge cheked required" id="toggle-2" checked required />
                </div>
                <div class="">
                    <x-input-toggle name="toggle-3" label="togge disabled" id="toggle-3" disabled />
                </div>
                <div class="">
                    <x-input-toggle name="toggle-4" label="togge js state" id="toggle-4" onclick="" onblur="" onchange="" />
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
