@extends('components.layouts.app')
@section('content')
    <form class="accordion" id="accordionExample" action="{{ route('flights.create') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="accordion-item">
            <h2 class="accordion-header" id="general">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#general-information" aria-expanded="true" aria-controls="general-information">
                    <span class="h3">{{ __('Flight Information') }}</span>
                </button>
            </h2>
            <div id="general-information" class="accordion-collapse collapse show" aria-labelledby="general"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('admin.flights.forms.general-information')
                </div>
            </div>
        </div>
    </form>
@endsection
