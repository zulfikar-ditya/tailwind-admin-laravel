@extends('layouts.app')

@section('title', 'Button')

@section('breadcumb')
    <x-breadcumb>
        <x-breadcumb-link :link="route('test-component.modal')" active>Modal</x-breadcumb-link>
    </x-breadcumb>
@endsection

@section('content')
    <x-card title="modal">
        <x-slot name="body">
            <div class="">
                <div class="">
                    <h5 class="text-2xl">Modal top center</h5>
                    <x-button label="defaul" color="primary" size="sm" target="modal-test-1" />
                    <x-modal target="modal-test-1" title="test modal 1">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                        <x-slot name="footer">
                            <h1>Modal Footer</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="primary" color="primary" size="sm" target="modal-test-2" />
                    <x-modal target="modal-test-2" title="test modal 2" headColor="primary">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="danger" color="danger" size="sm" target="modal-test-3" />
                    <x-modal target="modal-test-3" title="test modal 3" headColor="danger">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="success" color="success" size="sm" target="modal-test-4" />
                    <x-modal target="modal-test-4" title="test modal 4" headColor="success">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="warning" color="warning" size="sm" target="modal-test-5" />
                    <x-modal target="modal-test-5" title="test modal 5" headColor="warning">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="info" color="info" size="sm" target="modal-test-6" />
                    <x-modal target="modal-test-6" title="test modal 6" headColor="info">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="secondary" color="secondary" size="sm" target="modal-test-7" />
                    <x-modal target="modal-test-7" title="test modal 7" headColor="secondary">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="dark" color="dark" size="sm" target="modal-test-8" />
                    <x-modal target="modal-test-8" title="test modal 8" headColor="dark">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>
                </div>
                <div class="">
                    <h5 class="text-2xl">Modal top right</h5>
                    <x-button label="defaul" color="primary" size="sm" target="modal-top-right-1" />
                    <x-modal target="modal-top-right-1" title="test modal 1" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                        <x-slot name="footer">
                            <h1>Modal Footer</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="primary" color="primary" size="sm" target="modal-top-right-2" />
                    <x-modal target="modal-top-right-2" title="test modal 2" headColor="primary" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="danger" color="danger" size="sm" target="modal-top-right-3" />
                    <x-modal target="modal-top-right-3" title="test modal 3" headColor="danger" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="success" color="success" size="sm" target="modal-top-right-4" />
                    <x-modal target="modal-top-right-4" title="test modal 4" headColor="success" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="warning" color="warning" size="sm" target="modal-top-right-5" />
                    <x-modal target="modal-top-right-5" title="test modal 5" headColor="warning" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="info" color="info" size="sm" target="modal-top-right-6" />
                    <x-modal target="modal-top-right-6" title="test modal 6" headColor="info" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="secondary" color="secondary" size="sm" target="modal-top-right-7" />
                    <x-modal target="modal-top-right-7" title="test modal 7" headColor="secondary" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="dark" color="dark" size="sm" target="modal-top-right-8" />
                    <x-modal target="modal-top-right-8" title="test modal 8" headColor="dark" placement="top-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>
                </div>
                <div class="">
                    <h5 class="text-2xl">Modal top left</h5>
                    <x-button label="defaul" color="primary" size="sm" target="modal-top-left-1" />
                    <x-modal target="modal-top-left-1" title="test modal 1" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                        <x-slot name="footer">
                            <h1>Modal Footer</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="primary" color="primary" size="sm" target="modal-top-left-2" />
                    <x-modal target="modal-top-left-2" title="test modal 2" headColor="primary" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="danger" color="danger" size="sm" target="modal-top-left-3" />
                    <x-modal target="modal-top-left-3" title="test modal 3" headColor="danger" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="success" color="success" size="sm" target="modal-top-left-4" />
                    <x-modal target="modal-top-left-4" title="test modal 4" headColor="success" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="warning" color="warning" size="sm" target="modal-top-left-5" />
                    <x-modal target="modal-top-left-5" title="test modal 5" headColor="warning" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="info" color="info" size="sm" target="modal-top-left-6" />
                    <x-modal target="modal-top-left-6" title="test modal 6" headColor="info" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="secondary" color="secondary" size="sm" target="modal-top-left-7" />
                    <x-modal target="modal-top-left-7" title="test modal 7" headColor="secondary" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="dark" color="dark" size="sm" target="modal-top-left-8" />
                    <x-modal target="modal-top-left-8" title="test modal 8" headColor="dark" placement="top-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>
                </div>
            </div>

            <div class="">
                <div class="">
                    <h5 class="text-2xl">Modal center center</h5>
                    <x-button label="defaul" color="primary" size="sm" target="modal-buttom-center-1" />
                    <x-modal target="modal-buttom-center-1" title="test modal 1" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                        <x-slot name="footer">
                            <h1>Modal Footer</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="primary" color="primary" size="sm" target="modal-center-center-2" />
                    <x-modal target="modal-center-center-2" title="test modal 2" headColor="primary" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="danger" color="danger" size="sm" target="modal-center-center-3" />
                    <x-modal target="modal-center-center-3" title="test modal 3" headColor="danger" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="success" color="success" size="sm" target="modal-center-center-4" />
                    <x-modal target="modal-center-center-4" title="test modal 4" headColor="success" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="warning" color="warning" size="sm" target="modal-center-center-5" />
                    <x-modal target="modal-center-center-5" title="test modal 5" headColor="warning" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="info" color="info" size="sm" target="modal-center-center-6" />
                    <x-modal target="modal-center-center-6" title="test modal 6" headColor="info" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="secondary" color="secondary" size="sm" target="modal-center-center-7" />
                    <x-modal target="modal-center-center-7" title="test modal 7" headColor="secondary" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="dark" color="dark" size="sm" target="modal-center-center-8" />
                    <x-modal target="modal-center-center-8" title="test modal 8" headColor="dark" placement="center-center">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>
                </div>
                <div class="">
                    <h5 class="text-2xl">Modal center right</h5>
                    <x-button label="defaul" color="primary" size="sm" target="modal-center-right-1" />
                    <x-modal target="modal-center-right-1" title="test modal 1" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                        <x-slot name="footer">
                            <h1>Modal Footer</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="primary" color="primary" size="sm" target="modal-center-right-2" />
                    <x-modal target="modal-center-right-2" title="test modal 2" headColor="primary" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="danger" color="danger" size="sm" target="modal-center-right-3" />
                    <x-modal target="modal-center-right-3" title="test modal 3" headColor="danger" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="success" color="success" size="sm" target="modal-center-right-4" />
                    <x-modal target="modal-center-right-4" title="test modal 4" headColor="success" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="warning" color="warning" size="sm" target="modal-center-right-5" />
                    <x-modal target="modal-center-right-5" title="test modal 5" headColor="warning" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="info" color="info" size="sm" target="modal-center-right-6" />
                    <x-modal target="modal-center-right-6" title="test modal 6" headColor="info" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="secondary" color="secondary" size="sm" target="modal-center-right-7" />
                    <x-modal target="modal-center-right-7" title="test modal 7" headColor="secondary" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="dark" color="dark" size="sm" target="modal-center-right-8" />
                    <x-modal target="modal-center-right-8" title="test modal 8" headColor="dark" placement="center-right">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>
                </div>
                <div class="">
                    <h5 class="text-2xl">Modal center left</h5>
                    <x-button label="defaul" color="primary" size="sm" target="modal-center-left-1" />
                    <x-modal target="modal-center-left-1" title="test modal 1" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                        <x-slot name="footer">
                            <h1>Modal Footer</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="primary" color="primary" size="sm" target="modal-center-left-2" />
                    <x-modal target="modal-center-left-2" title="test modal 2" headColor="primary" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="danger" color="danger" size="sm" target="modal-center-left-3" />
                    <x-modal target="modal-center-left-3" title="test modal 3" headColor="danger" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="success" color="success" size="sm" target="modal-center-left-4" />
                    <x-modal target="modal-center-left-4" title="test modal 4" headColor="success" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="warning" color="warning" size="sm" target="modal-center-left-5" />
                    <x-modal target="modal-center-left-5" title="test modal 5" headColor="warning" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="info" color="info" size="sm" target="modal-center-left-6" />
                    <x-modal target="modal-center-left-6" title="test modal 6" headColor="info" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="secondary" color="secondary" size="sm" target="modal-center-left-7" />
                    <x-modal target="modal-center-left-7" title="test modal 7" headColor="secondary" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>

                    <x-button label="dark" color="dark" size="sm" target="modal-center-left-8" />
                    <x-modal target="modal-center-left-8" title="test modal 8" headColor="dark" placement="center-left">
                        <x-slot name="body">
                            <h1>Modal Body</h1>
                        </x-slot>
                    </x-modal>
                </div>
            </div>
        </x-slot>
    </x-card>

    <x-card title="modal delete" class="mt-5">
        <x-slot name="body">
            <x-button label="delete" color="danger" size="sm" target="modal-delete" />
            <x-modal-delete target="modal-delete" link="" />
        </x-slot>
    </x-card>
@endsection
