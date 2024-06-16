<section class="container-full">
    <h1 class="h3 mb-3"><strong>Usuarios</strong> Admin <a href="{{ route('user.register') }}"
            class="float-end btn btn-success"><i class="fas fa-user-plus text-white"></i></a></h1>
    @section('title', 'USUARIOS')
    <div class="mask d-flex align-items-center h-100">
        <div class="w-100">
            @include('admin.users.complements.filters')
            @if ($successMessage)
                @include('admin.complements.alerts.success')
            @endif
            @include('admin.users.table')
            @if ($isRemovingUser)
                @include('admin.users.complements.modals.delete-user')
            @endif
        </div>
    </div>
</section>
