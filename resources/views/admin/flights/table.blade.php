<div class="row">
    @if (count($flights))
        @foreach ($flights as $flight)
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card ">
                    <a href="{{ route('flights.edit', ['flight' => $flight->id]) }}">
                        <img class="card-img-top {{ $flight->status == 0 ? 'opacity-25' : '' }} "
                            src="{{ $flight->getMainPhoto() }}" alt="{{ $flight->name }}">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ $flight->name }}
                                ({{ $flight->status == 0 ? 'Disabled' : 'Enabled' }})
                            </h5>
                        </div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">
                            @if ($flight->special_price)
                                <div class="row">
                                    <label class="fw-bolder">{{ __('Adults') }}</label>
                                    <div class="col-6">
                                        Antes <small class="text-decoration-line-through ">$
                                            {{ number_format($flight->price, 2) }} </small>
                                    </div>
                                    <div class="col-6">
                                        Ahora <span class="fw-bolder"> $ {{ number_format($flight->special_price, 2) }}
                                        </span>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <label class="fw-bolder">{{ __('Adults') }}</label>
                                    <div class="col-12">
                                        <p class="fw-bolder"> $ {{ number_format($flight->price, 2) }} </p>
                                    </div>
                                </div>
                            @endif

                            @if ($flight->kids_special_price)
                                <div class="row">
                                    <label class="fw-bolder">{{ __('Kids') }}</label>
                                    <div class="col-6">
                                        Antes <small class="text-decoration-line-through ">$
                                            {{ number_format($flight->kids_price, 2) }} </small>
                                    </div>
                                    <div class="col-6">
                                        Ahora <span class="fw-bolder"> $
                                            {{ number_format($flight->kids_special_price, 2) }}
                                        </span>
                                    </div>
                                </div>
                            @else
                                @if ($flight->kids_price)
                                    <div class="row">
                                        <label class="fw-bolder">{{ __('Kids') }}</label>
                                        <div class="col-12">
                                            <p class="fw-bolder"> $ {{ number_format($flight->kids_price, 2) }} </p>
                                        </div>
                                    </div>
                                @endif
                            @endif

                        </p>
                        <span class="card-link text-info cursor-pointer h5"
                            wire:click="showImagesModal({{ $flight->id }})"> <i class="fas fa-image"></i></span>
                        <span class="card-link text-success cursor-pointer h5"
                            wire:click="showPricesModal({{ $flight->id }})"> <i
                                class="fas fa-dollar-sign"></i></span>
                        <span class="card-link text-danger cursor-pointer h5"
                            wire:click="removeFlight({{ $flight->id }})"> <i class="fas fa-trash"></i></span>
                        <span class="card-link text-info cursor-pointer h5"
                            wire:click="showCategoryModal({{ $flight->id }})"> <i class="fas fa-layer-group"></i></span>
                        @if ($flight->status == 1)
                            <span class="card-link text-warning cursor-pointer h5"> <i class="fas fa-eye-slash"
                                    wire:click="disableFlight({{ $flight->id }})"></i></span>
                        @else
                            <span class="card-link text-success cursor-pointer h5"> <i class="fas fa-eye"
                                    wire:click="enableFlight({{ $flight->id }})"></i></span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-primary" role="alert">
            {{ __('There´s no flights with this filter') }}
        </div>
    @endif
</div>
