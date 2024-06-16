<!-- Modal -->
<div class="modal fade removeUserModal show" style="display: block;" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl ">
        @csrf
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">{{ __('Assign Category to Flights ') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModals()"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <label class="form-label">{{ __('Select Flights') }}</label>
                    <select class="form-select" multiple aria-label="multiple select size 8"  size="8" wire:model="assignedFlights">
                        @foreach ($availableFlights as $flight)
                            <option value="{{ $flight->id }}" >{{ $flight->name }} ( {{ $flight->status == 1 ? 'ACTIVE' : 'DISABLED' }} )</option>
                        @endforeach
                      </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click="closeModals()">{{ __('Close') }}</button>
                <button type="button" class="btn btn-primary"
                    wire:click="assignCategoryToFlights">{{ __('Update Assignment') }}</button>
            </div>
        </div>
    </div>
</div>
