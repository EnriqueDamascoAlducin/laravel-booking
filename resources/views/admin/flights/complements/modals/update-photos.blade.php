<!-- Modal -->
<div class="modal fade removeUserModal show" style="display: block;" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-modal="true" role="dialog">
    <form class="modal-dialog modal-xl " method="POST"
        action="{{ route('flights.update-photos', ['flight' => $selectedFlight->id]) }}" enctype="multipart/form-data">
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

                    <div class="col-12 mb-4">
                        <div class="col-6 col-md-3 col-xl-2">
                            <label for="main_photo" class="form-label">
                                {{ __('Update Main Photo') }}
                                <img src="{{ $selectedFlight->getMainPhoto() }}" class="img-thumbnail"
                                    id="preview_main_photo" alt="{{ $selectedFlight->name }}">
                            </label>
                            <input class="form-control form-control-sm d-none input-photo-preview" id="main_photo"
                                name="main_photo" type="file" multiple accept="image/png, image/gif, image/jpeg">
                        </div>
                        <small
                            class="mb-2">{{ __('Update Main Phito if necessary') }}</small>
                    </div>



                    <div class="col-12 mb-3">
                        <div class="row">
                            @foreach ($selectedFlight->photos as $photo)
                                <div class="col-6 col-sm-4-col-md-3 col-xl-2 position-relative">
                                    <img src="{{ Storage::disk('products')->url($photo->name) }}" class="img-thumbnail"
                                        alt="{{ $selectedFlight->name }}">
                                    <span class="position-absolute top-5 start-90 translate-middle cursor-pointer"
                                        wire:click="removeImage('{{ $photo->id }}')">
                                        <i class="fas fa-trash text-danger "></i>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        <label for="gallery" class="form-label">{{ __('Update Gallery') }}</label>
                        <input class="form-control form-control-sm" id="gallery" name="photos[]" type="file"
                            multiple accept="image/png, image/gif, image/jpeg">

                        <small class="mb-2">{{ __('Add gallery photos') }}</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click="closeModals()">{{ __('Close') }}</button>
                <button type="submit" class="btn btn-primary">{{ __('Update Photos') }}</button>
            </div>
        </div>
    </form>
</div>
