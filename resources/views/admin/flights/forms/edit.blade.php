@extends('components.layouts.app')
@section('content')
    <form class="accordion" id="accordionExample" action="{{ route('flights.update', ['flight' => $flight->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="accordion-item">
            <h2 class="accordion-header" id="general">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#general-information" aria-expanded="true" aria-controls="general-information">
                    <span class="h3"> {{ $flight->name }}</span>
                </button>
            </h2>
            <div id="general-information" class="accordion-collapse collapse show" aria-labelledby="general"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('admin.flights.forms.general-information', ['flight' => $flight])
                </div>
            </div>
        </div>
    </form>
@endsection
