@extends('components.layouts.app')
@section('content')
@section('title', 'REGISTRAR USUARIO')



<div class="card bg-light container-full">
    <article class="card-body w-full">
        <h4 class="card-title mt-3 text-center">{{ __('Edit Account') }} {{ $user->name }}</h4>

        <div class="flex-none w-auto max-w-full px-3 my-auto">
            <div class="h-full">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form class="row" method="HEAD" action="{{ route('user.update',['user' => $user->id]) }}">
            @csrf
            @include('admin.users.forms.general-fields')
            <div class="col-12">
                <div class="form-group w-100 mt-2">
                    <button type="submit" class="btn btn-primary btn-block w-100"> {{ __('Update Account') }} </button>
                </div>
            </div>
        </form>
    </article>
</div> <!-- card.// -->
@endsection
