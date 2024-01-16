@extends('layouts.base')
@section('title')
    testing
@endsection

@section('body')
    <livewire:components.navbar :title=$title />

    <x-modal modalName="loginModal" title="Login" width="w-4/5 md:w-1/2" >
        <x-slot:body>
            <livewire:components.form-login />
        </x-slot:body>
    </x-modal>
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
