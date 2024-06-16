<!-- Modal -->
<div class="modal fade removeUserModal show" style="display: block;" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl ">
        @csrf
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">{{ __('Register Category ') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModals()"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <div class="col-6  mb-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="category"><i
                                        class="fas fa-layer-group"></i>{{ __('Name ') }} </span>
                            </div>
                            <input type="text" class="form-control" aria-label="Category" placeholder="Category"
                                wire:model.live="name" aria-describedby="category">
                        </div>
                    </div>
                    <div class="col-6  mb-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="urlKey"><i
                                        class="bi bi-browser-chrome"></i>{{ __('URL KEY ') }} </span>
                            </div>
                            <input type="text" class="form-control" placeholder="category-name" wire:model="urlKey"
                                aria-describedby="url_key">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click="closeModals()">{{ __('Close') }}</button>
                @if (trim($name))
                    @if (!$selectedCategory)
                        <button type="button" class="btn btn-success"
                            wire:click="createCategory">{{ __('Create Category') }}</button>
                    @else
                        <button type="button" class="btn btn-primary"
                        wire:click="updateCategory">{{ __('Update Category') }}</button>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
