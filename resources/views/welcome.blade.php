<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-sky-50 dark:bg-zinc-900 text-gray-900 dark:text-white">

    <div class="fixed hidden md:block inset-x-5 inset-y-5 w-80" id="sidebar">
        <aside class="" aria-label="Sidebar">
            <div class="overflow-y-auto py-5 px-3 bg-sky-400 rounded dark:bg-sky-800 h-[96vh] text-white shadow-md">
                <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Laravel Admin</span>
                </a>
                <hr>
                <ul class="space-y-2 mt-7">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-white rounded-lg dark:text-white hover:bg-sky-50 hover:text-sky-400 dark:hover:text-gray-500">
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <div class="flex p-5">

        <main class="w-full ml-0 md:ml-80 pl-5">

            <nav class="bg-sky-400 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-sky-800 z-50">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <button data-collapse-toggle="sidebar" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="sidebar" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block ml-auto md:w-auto" id="navbar-default">
                        <ul class="flex flex-col p-4 mt-4 bg-sky-400 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:bg-sky-400 dark:bg-sky-800">
                            <li>
                                <a href="#" class="block py-2 pr-4 pl-3 bg-sky-400 rounded md:bg-transparent md:p-0 text-white" aria-current="page">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="mt-5">
                <!-- Breadcrumb -->
                <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Flowbite</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="mt-5">
                    <h1 class="text-6xl">Hello World</h1>

                    <div class="mt-10">
                        <h5 class="text-2xl ">Input</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                            <div class="">
                                <p>Default</p>
                                <x-input type="text" name="input_components" />
                            </div>
                            <div class="">
                                <p>Required</p>
                                <x-input type="text" name="required" required />
                            </div>
                            <div class="">
                                <p>Autofocus</p>
                                <x-input type="text" name="autofocus" autofocus />
                            </div>
                            <div class="">
                                <p>Disabled</p>
                                <x-input type="text" name="disabled" disabled />
                            </div>
                            <div class="">
                                <p>readonly</p>
                                <x-input type="text" name="readonly" value="here form readonly" readonly />
                            </div>
                            <div class="">
                                <p>value</p>
                                <x-input type="text" name="value" value="Value Input" />
                            </div>
                            <div class="">
                                <p>class & id</p>
                                <x-input type="text" name="class" class="" id="" />
                            </div>
                            <div class="">
                                <p>custom label</p>
                                <x-input type="text" name="label" label="Hello From label" />
                            </div>
                            <div class="">
                                <p>helpers text</p>
                                <x-input type="text" name="helpers" label="Helpers" helpers="Hello Helpers Here" />
                            </div>
                            <div class="">
                                <p>js state</p>
                                <x-input type="text" name="state" label="state" onclick="click_event()" onchange="change_event()" onkeyup="keyup_event()" onblur="blur_event()" />
                            </div>
                        </div>

                        <div class="mt-10">
                            <h5 class="text-2xl">Button</h5>
                            <div class="flex flex-wrap">
                                <div class="w-full md:w-4/12">
                                    <div class="row">
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="Primary" color="primary" size="sm" />
                                                <x-button label="Primary" color="primary" />
                                                <x-button label="Primary" color="primary" size="lg" />
                                                <x-button label="Primary" color="primary" rounded />
                                                <x-button label="Primary" color="primary" icon="user" fontawesome />
                                                <x-button label="Primary" color="primary" icon="user" fontawesome iconRight />
                                                <x-button label="Primary" color="primary" icon="user" />
                                                <x-button label="Primary" color="primary" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="danger" color="danger" size="sm" />
                                                <x-button label="danger" color="danger" />
                                                <x-button label="danger" color="danger" size="lg" />
                                                <x-button label="danger" color="danger" rounded />
                                                <x-button label="danger" color="danger" icon="user" fontawesome />
                                                <x-button label="danger" color="danger" icon="user" fontawesome iconRight />
                                                <x-button label="danger" color="danger" icon="user" />
                                                <x-button label="danger" color="danger" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="warning" color="warning" size="sm" />
                                                <x-button label="warning" color="warning" />
                                                <x-button label="warning" color="warning" size="lg" />
                                                <x-button label="warning" color="warning" rounded />
                                                <x-button label="warning" color="warning" icon="user" fontawesome />
                                                <x-button label="warning" color="warning" icon="user" fontawesome iconRight />
                                                <x-button label="warning" color="warning" icon="user" />
                                                <x-button label="warning" color="warning" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="success" color="success" size="sm" />
                                                <x-button label="success" color="success" />
                                                <x-button label="success" color="success" size="lg" />
                                                <x-button label="success" color="success" rounded />
                                                <x-button label="success" color="success" icon="user" fontawesome />
                                                <x-button label="success" color="success" icon="user" fontawesome iconRight />
                                                <x-button label="success" color="success" icon="user" />
                                                <x-button label="success" color="success" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="info" color="info" size="sm" />
                                                <x-button label="info" color="info" />
                                                <x-button label="info" color="info" size="lg" />
                                                <x-button label="info" color="info" rounded />
                                                <x-button label="info" color="info" icon="user" fontawesome />
                                                <x-button label="info" color="info" icon="user" fontawesome iconRight />
                                                <x-button label="info" color="info" icon="user" />
                                                <x-button label="info" color="info" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="light" color="light" size="sm" />
                                                <x-button label="light" color="light" />
                                                <x-button label="light" color="light" size="lg" />
                                                <x-button label="light" color="light" rounded />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="secondary" color="secondary" size="sm" />
                                                <x-button label="secondary" color="secondary" />
                                                <x-button label="secondary" color="secondary" size="lg" />
                                                <x-button label="secondary" color="secondary" rounded />
                                                <x-button label="secondary" color="secondary" icon="user" fontawesome />
                                                <x-button label="secondary" color="secondary" icon="user" fontawesome iconRight />
                                                <x-button label="secondary" color="secondary" icon="user" />
                                                <x-button label="secondary" color="secondary" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="dark" color="dark" size="sm" />
                                                <x-button label="dark" color="dark" />
                                                <x-button label="dark" color="dark" size="lg" />
                                                <x-button label="dark" color="dark" rounded />
                                                <x-button label="dark" color="dark" icon="user" fontawesome />
                                                <x-button label="dark" color="dark" icon="user" fontawesome iconRight />
                                                <x-button label="dark" color="dark" icon="user" />
                                                <x-button label="dark" color="dark" icon="user" iconRight />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/12">
                                    <div class="row">
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="primary" style="outline" color="primary" size="sm" />
                                                <x-button label="primary" style="outline" color="primary" />
                                                <x-button label="primary" style="outline" color="primary" size="lg" />
                                                <x-button label="primary" style="outline" color="primary" rounded />
                                                <x-button label="primary" color="primary" style="outline" icon="user" fontawesome />
                                                <x-button label="primary" color="primary" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="primary" color="primary" style="outline" icon="user" />
                                                <x-button label="primary" color="primary" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="danger" style="outline" color="danger" size="sm" />
                                                <x-button label="danger" style="outline" color="danger" />
                                                <x-button label="danger" style="outline" color="danger" size="lg" />
                                                <x-button label="danger" style="outline" color="danger" rounded />
                                                <x-button label="danger" color="danger" style="outline" icon="user" fontawesome />
                                                <x-button label="danger" color="danger" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="danger" color="danger" style="outline" icon="user" />
                                                <x-button label="danger" color="danger" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="warning" style="outline" color="warning" size="sm" />
                                                <x-button label="warning" style="outline" color="warning" />
                                                <x-button label="warning" style="outline" color="warning" size="lg" />
                                                <x-button label="warning" style="outline" color="warning" rounded />
                                                <x-button label="warning" color="warning" style="outline" icon="user" fontawesome />
                                                <x-button label="warning" color="warning" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="warning" color="warning" style="outline" icon="user" />
                                                <x-button label="warning" color="warning" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="success" style="outline" color="success" size="sm" />
                                                <x-button label="success" style="outline" color="success" />
                                                <x-button label="success" style="outline" color="success" size="lg" />
                                                <x-button label="success" style="outline" color="success" rounded />
                                                <x-button label="success" color="success" style="outline" icon="user" fontawesome />
                                                <x-button label="success" color="success" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="success" color="success" style="outline" icon="user" />
                                                <x-button label="success" color="success" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="info" style="outline" color="info" size="sm" />
                                                <x-button label="info" style="outline" color="info" />
                                                <x-button label="info" style="outline" color="info" size="lg" />
                                                <x-button label="info" style="outline" color="info" rounded />
                                                <x-button label="info" color="info" style="outline" icon="user" fontawesome />
                                                <x-button label="info" color="info" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="info" color="info" style="outline" icon="user" />
                                                <x-button label="info" color="info" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="light" style="outline" color="light" size="sm" />
                                                <x-button label="light" style="outline" color="light" />
                                                <x-button label="light" style="outline" color="light" size="lg" />
                                                <x-button label="light" style="outline" color="light" rounded />
                                                <x-button label="light" color="light" style="outline" icon="user" fontawesome />
                                                <x-button label="light" color="light" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="light" color="light" style="outline" icon="user" />
                                                <x-button label="light" color="light" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="secondary" style="outline" color="secondary" size="sm" />
                                                <x-button label="secondary" style="outline" color="secondary" />
                                                <x-button label="secondary" style="outline" color="secondary" size="lg" />
                                                <x-button label="secondary" style="outline" color="secondary" rounded />
                                                <x-button label="secondary" color="secondary" style="outline" icon="user" fontawesome />
                                                <x-button label="secondary" color="secondary" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="secondary" color="secondary" style="outline" icon="user" />
                                                <x-button label="secondary" color="secondary" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="dark" style="outline" color="dark" size="sm" />
                                                <x-button label="dark" style="outline" color="dark" />
                                                <x-button label="dark" style="outline" color="dark" size="lg" />
                                                <x-button label="dark" style="outline" color="dark" rounded />
                                                <x-button label="dark" color="dark" style="outline" icon="user" fontawesome />
                                                <x-button label="dark" color="dark" style="outline" icon="user" fontawesome iconRight />
                                                <x-button label="dark" color="dark" style="outline" icon="user" />
                                                <x-button label="dark" color="dark" style="outline" icon="user" iconRight />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/12">
                                    <div class="row">
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="primary" style="gradient" color="primary" size="sm" />
                                                <x-button label="primary" style="gradient" color="primary" />
                                                <x-button label="primary" style="gradient" color="primary" size="lg" />
                                                <x-button label="primary" style="gradient" color="primary" rounded />
                                                <x-button label="primary" color="primary" style="gradient" icon="user" fontawesome />
                                                <x-button label="primary" color="primary" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="primary" color="primary" style="gradient" icon="user" />
                                                <x-button label="primary" color="primary" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="danger" style="gradient" color="danger" size="sm" />
                                                <x-button label="danger" style="gradient" color="danger" />
                                                <x-button label="danger" style="gradient" color="danger" size="lg" />
                                                <x-button label="danger" style="gradient" color="danger" rounded />
                                                <x-button label="danger" color="danger" style="gradient" icon="user" fontawesome />
                                                <x-button label="danger" color="danger" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="danger" color="danger" style="gradient" icon="user" />
                                                <x-button label="danger" color="danger" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="warning" style="gradient" color="warning" size="sm" />
                                                <x-button label="warning" style="gradient" color="warning" />
                                                <x-button label="warning" style="gradient" color="warning" size="lg" />
                                                <x-button label="warning" style="gradient" color="warning" rounded />
                                                <x-button label="warning" color="warning" style="gradient" icon="user" fontawesome />
                                                <x-button label="warning" color="warning" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="warning" color="warning" style="gradient" icon="user" />
                                                <x-button label="warning" color="warning" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="success" style="gradient" color="success" size="sm" />
                                                <x-button label="success" style="gradient" color="success" />
                                                <x-button label="success" style="gradient" color="success" size="lg" />
                                                <x-button label="success" style="gradient" color="success" rounded />
                                                <x-button label="success" color="success" style="gradient" icon="user" fontawesome />
                                                <x-button label="success" color="success" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="success" color="success" style="gradient" icon="user" />
                                                <x-button label="success" color="success" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="info" style="gradient" color="info" size="sm" />
                                                <x-button label="info" style="gradient" color="info" />
                                                <x-button label="info" style="gradient" color="info" size="lg" />
                                                <x-button label="info" style="gradient" color="info" rounded />
                                                <x-button label="info" color="info" style="gradient" icon="user" fontawesome />
                                                <x-button label="info" color="info" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="info" color="info" style="gradient" icon="user" />
                                                <x-button label="info" color="info" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="light" style="gradient" color="light" size="sm" />
                                                <x-button label="light" style="gradient" color="light" />
                                                <x-button label="light" style="gradient" color="light" size="lg" />
                                                <x-button label="light" style="gradient" color="light" rounded />
                                                <x-button label="light" color="light" style="gradient" icon="user" fontawesome />
                                                <x-button label="light" color="light" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="light" color="light" style="gradient" icon="user" />
                                                <x-button label="light" color="light" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="secondary" style="gradient" color="secondary" size="sm" />
                                                <x-button label="secondary" style="gradient" color="secondary" />
                                                <x-button label="secondary" style="gradient" color="secondary" size="lg" />
                                                <x-button label="secondary" style="gradient" color="secondary" rounded />
                                                <x-button label="secondary" color="secondary" style="gradient" icon="user" fontawesome />
                                                <x-button label="secondary" color="secondary" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="secondary" color="secondary" style="gradient" icon="user" />
                                                <x-button label="secondary" color="secondary" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="">
                                                <x-button label="dark" style="gradient" color="dark" size="sm" />
                                                <x-button label="dark" style="gradient" color="dark" />
                                                <x-button label="dark" style="gradient" color="dark" size="lg" />
                                                <x-button label="dark" style="gradient" color="dark" rounded />
                                                <x-button label="dark" color="dark" style="gradient" icon="user" fontawesome />
                                                <x-button label="dark" color="dark" style="gradient" icon="user" fontawesome iconRight />
                                                <x-button label="dark" color="dark" style="gradient" icon="user" />
                                                <x-button label="dark" color="dark" style="gradient" icon="user" iconRight />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="mt-10">
                                    <div class="grid grid-cols-3 md:grid-cols-6 gap-5">
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
                                            <x-button type="submit" label="javascript state" color="primary" onclick="click_btn()" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h5 class="text-2xl">Card</h5>

                            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                <x-card title="title" class="" id="">
                                    <x-slot name="img">
                                        <img src="https://images.pexels.com/photos/7267852/pexels-photo-7267852.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img__fit rounded-t-lg" alt="">
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

                                <x-card title="title" class="" id="" headClass="border border-gray-300" headId="head-example">
                                    <x-slot name="body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste est excepturi nihil vel. Error accusantium, provident est, quis minus aspernatur perspiciatis saepe excepturi, repellat mollitia voluptas unde expedita aperiam.</p>
                                    </x-slot>
                                </x-card>

                                <x-card title="title" class="" id="" bodyClass="border border-gray-300" bodyId="body-example">
                                    <x-slot name="body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste est excepturi nihil vel. Error accusantium, provident est, quis minus aspernatur perspiciatis saepe excepturi, repellat mollitia voluptas unde expedita aperiam.</p>
                                    </x-slot>
                                </x-card>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <div class="fixed right-10 bottom-10">
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <script>
        const click_event = () => {
            console.log('click event');
        }
        const change_event = () => {
            console.log('change_event');
        }
        const keyup_event = () => {
            console.log('keyup_event');
        }
        const blur_event = () => {
            console.log('blur_event');
        }
        const click_btn = () => {
            console.log('click btn');
        }
    </script>
</body>

</html>
