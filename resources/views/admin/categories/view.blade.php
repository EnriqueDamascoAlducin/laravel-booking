<section class="container-full">
    <h1 class="h3 mb-3"><strong>{{__('Categories')}}</strong> <a href="#"
            class="float-end btn btn-success" wire:click="showCategoryModal"><i class="fas fa-plus text-white"></i></a></h1>
    @section('title', 'CATEGORIES')
    <div class="mask d-flex align-items-center h-100">
        <div class="w-100">
            @if ($successMessage)
                @include('admin.complements.alerts.success')
            @endif
            @include('admin.categories.complements.filters')
            @include('admin.categories.table')
         
            @if ($isAddingCategory)
                @include('admin.categories.complements.modals.register-category')
            @endif
            @if ($isRemovingCategory)
                @include('admin.categories.complements.modals.delete-category')
            @endif
            @if ($isAssigningFlight)
                @include('admin.categories.complements.modals.assign-flights')
            @endif
        </div>
    </div>
</section>
