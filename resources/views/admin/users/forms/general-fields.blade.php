<div class="col-12 col-md-6">
    <div class="form-group input-group w-full">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="name" class="form-control" placeholder="{{ __('Name')}}" type="text" value="{{isset($user) ? $user->name : old('name')}}">
    </div> 
  </div>
  <div class="col-12 col-md-6">
    <div class="form-group input-group w-full">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="lastname" class="form-control" placeholder="{{__('Lastname')}}" type="text"  value="{{isset($user) ? $user->lastname : old('lastname')}}">
    </div> 
  </div>
  <div class="col-12 col-md-6">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
        </div>
        <input name="email" class="form-control" placeholder="{{__('Email address')}}" type="email"  value="{{isset($user) ? $user->email : old('email')}}">
    </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="form-group input-group w-full">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="nickname" class="form-control" placeholder="{{ __('Nickname')}}" type="text"  value="{{isset($user) ? $user->nickname : old('nickname')}}">
    </div> 
  </div>