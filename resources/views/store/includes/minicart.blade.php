<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header mt-3">
    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-4">
        <span>Your Cart</span>
        <span class="badge bg-primary rounded-circle pt-2 text-white">3</span>
        </h4>

        <ul class="list-group mb-4">
        <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
            <div>
            <h6 class="my-0">Marketing Course</h6>
            <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$120</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
            <div>
            <h6 class="my-0">Strategy Course</h6>
            <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$80</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
            <div>
            <h6 class="my-0">Digital Course</h6>
            <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$50</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center py-3">
            <span class="fw-bold">Total (USD)</span>
            <strong>$250</strong>
        </li>
        </ul>

        <div class="d-grid my-5">
        <button class="btn btn-primary px-5 py-3" type="submit">{{ __('Continue to checkout') }}</button>
        </div>
    </div>
    </div>
</div>