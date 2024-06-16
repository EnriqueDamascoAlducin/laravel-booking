<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ __('Filters') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <input type="text" class="form-control" placeholder="{{ __('Name') }}" wire:model.live="filterName">
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <select class="form-control" wire:model.live="filterStatus">
                    <option value="">{{ __('Status') }}</option>
                    <option value="1">{{ __('Enabled') }}</option>
                    <option value="0">{{ __('Disabled') }}</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <select class="form-control" wire:model.live="filterPage">
                    <option value="">{{ __('Show') }}</option>
                    <option >1</option>
                    <option >5</option>
                    <option >10</option>
                    <option >15</option>
                    <option >20</option>
                    <option >30</option>
                    <option >50</option>
                </select>
            </div>
        </div>
    </div>
</div>
