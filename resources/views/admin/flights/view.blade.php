<section class="container-full">
    <h1 class="h3 mb-3"><strong>{{__('Flights')}}</strong> <a href="{{ route('flights.register') }}"
                                                              class="float-end btn btn-success"><i
                class="fas fa-plus text-white"></i></a></h1>
    @section('title', 'FLIGHTS')
    <div class="mask d-flex align-items-center h-100">
        <div class="w-100">
            @if ($successMessage)
                @include('admin.complements.alerts.success')
            @endif
            @include('admin.flights.complements.filters')
            @include('admin.flights.table')

            @if ($isUpdatingPhotos)
                @include('admin.flights.complements.modals.update-photos')
            @endif
            @if ($isRemovingFlight)
                @include('admin.flights.complements.modals.delete-flight')
            @endif
            @if ($isEditingPrices)
                @include('admin.flights.complements.modals.update-prices')
            @endif
            @if ($isAssigningCategory)
                @include('admin.flights.complements.modals.assign-category')
            @endif
        </div>
    </div>
</section>
