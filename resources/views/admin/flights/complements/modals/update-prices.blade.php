<!-- Modal -->
<div class="modal fade removeUserModal show" style="display: block;" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl ">
        @csrf
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">{{ __('Update Photos for ') }}
                    {{ $selectedFlight->name }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModals()"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <div class="col-6  mb-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="adults_price">{{ __('Adults Price') }} $</span>
                            </div>
                            <input type="number" class="form-control" aria-label="Adults Price" placeholder="Adults Price" wire:model="price"
                                aria-describedby="adults_price">
                        </div>
                    </div>
                    <div class="col-6  mb-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="adults_special_price">{{ __('Adults Special Price') }} $</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Adults Special Price" wire:model="specialPrice"
                                aria-describedby="adults_special_price">
                        </div>
                    </div>

                    
                    <div class="col-6  mb-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="kids_price">{{ __('Kids Price') }} $</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Kids Price" wire:model="kidsPrice"
                                aria-describedby="kids_price">
                        </div>
                    </div>
                    <div class="col-6  mb-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="kids_special_price">{{ __('Kids Special Price') }} $</span>
                            </div>
                            <input type="number" class="form-control"  placeholder="Kids Special Price"  wire:model="kidsSpecialPrice"
                                aria-describedby="kids_special_price">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click="closeModals()">{{ __('Close') }}</button>
                <button type="button" class="btn btn-primary" wire:click="updatePrices">{{ __('Update Prices') }}</button>
            </div>
        </div>
    </div>
</div>
