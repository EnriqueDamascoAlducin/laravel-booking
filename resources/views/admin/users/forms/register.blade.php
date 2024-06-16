@extends('components.layouts.app')
@section('content')
@section('title', 'REGISTRAR USUARIO')



<div class="card bg-light container-full">
    <article class="card-body w-full">
        <h4 class="card-title mt-3 text-center">{{ __('Create Account') }}</h4>

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
        <form class="row" method="POST" action="{{route('user.create')}}">
          @csrf
          @include('admin.users.forms.general-fields')
          <div class="col-12 col-md-6">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="{{__('Create password')}}" type="password" name="password">
            </div> 
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="{{__('Confirm password')}}" type="password" name="password_confirmation">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group w-100 mt-2">
                <button type="submit" class="btn btn-success btn-block w-100"> {{__('Create Account')}} </button>
            </div>
          </div>
        </form>
    </article>
</div> <!-- card.// -->
@endsection
