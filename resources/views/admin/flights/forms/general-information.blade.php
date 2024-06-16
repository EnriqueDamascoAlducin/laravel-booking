<div class="row">
    
    <div class="col-12 col-md-6 mb-2">
        <div class="form-check form-switch">
            <label class="form-check-label" for="enable">{{ __('Enable') }}</label>
            <input class="form-check-input" type="checkbox" id="enable" name="status" value="1" @if(isset($flight) && $flight->status ==1) checked @endif>
          </div>
        <small class="mb-2">{{ __('Enable Product') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-name">{{ __('Name') }}</span>
            <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}" required
                aria-label="{{ __('Name') }}" aria-describedby="basic-name" @if(isset($flight)) value="{{$flight->name}}" @endif>
        </div>
        <small class="mb-3">{{ __('Name for product') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-price">$</span>
            <input type="number" class="form-control" name="price" placeholder="{{ __('Price') }}" required
                aria-label="{{ __('Price') }}" aria-describedby="basic-price" @if(isset($flight)) value="{{$flight->price}}" @endif>
        </div>
        <small class="mb-3">{{ __('Base price') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-special-price">$</span>
            <input type="number" class="form-control" name="special_price" placeholder="{{ __('Special Price') }}"
                aria-label="{{ __('Special Price') }}" aria-describedby="basic-special-price" @if(isset($flight)) value="{{$flight->special_price}}" @endif>
        </div>
        <small class="mb-2">{{ __('Special price for promotions') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-kids-price">$</span>
            <input type="number" class="form-control" name="kids_price" placeholder="{{ __('Kids Price') }}"
                aria-label="{{ __('Kids Price') }}" aria-describedby="basic-kids-price" @if(isset($flight)) value="{{$flight->kids_price}}" @endif>
        </div>
        <small class="mb-3">{{ __('Base price for Kids') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-kids-special-price">$</span>
            <input type="number" class="form-control" name="kids_special_price" placeholder="{{ __('Kids Special Price') }}"
                aria-label="{{ __('Special Price for Kids') }}" aria-describedby="basic-kids-special-price" @if(isset($flight)) value="{{$flight->kids_special_price}}" @endif>
        </div>
        <small class="mb-2">{{ __('Special price for kids') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-last-hours">
                <i class="align-middle" data-feather="clock"></i>
            </span>
            <input type="number" class="form-control" name="last_hours" placeholder="{{ __('Long in Hours') }}"
                aria-label="{{ __('Long in Hours') }}" aria-describedby="basic-last-hours" @if(isset($flight)) value="{{$flight->last_hours}}" @endif>
        </div>
        <small class="mb-2">{{ __('How does the flight long? (in hours)') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <label class="input-group-text" name="payment_by" for="buy_by">{{ __('Type') }}</label>
            <select class="form-select" id="buy_by">
              <option selected value=''>{{ __('Select an option') }}</option>
              <option value="individual" @if(isset($flight) && $flight->payment_by =='individual') selected @endif>{{ __('Individual') }}</option>
              <option value="group" @if(isset($flight) && $flight->payment_by =='group') selected @endif>{{ __('Group') }}</option>
            </select>
          </div>
        <small class="mb-2">{{ __('Pay like') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-min-people">
                <i class="align-middle" data-feather="clock"></i>
            </span>
            <input type="number" class="form-control" name="min_people" placeholder="{{ __('Min People') }}"
                aria-label="{{ __('Min People') }}" aria-describedby="basic-min-people"  @if(isset($flight)) value="{{$flight->min_people}}" @endif>
        </div>
        <small class="mb-2">{{ __('Min People to Flight') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-max-people">
                <i class="align-middle" data-feather="clock"></i>
            </span>
            <input type="number" class="form-control" name="max_people" placeholder="{{ __('Max People') }}"
                aria-label="{{ __('Max People') }}" aria-describedby="basic-max-people"  @if(isset($flight)) value="{{$flight->max_people}}" @endif>
        </div>
        <small class="mb-2">{{ __('Max People to Flight') }}</small>
    </div>


    
    <div class="col-12 col-md-6 mb-2">
        <div class="form-check form-switch">
            <label class="form-check-label" for="allow_kids">{{ __('Allow Kids') }}</label>
            <input class="form-check-input" type="checkbox" id="allow_kids" name="allow_kids" value="1" @if(isset($flight) && $flight->allow_kids ==1) checked @endif>
          </div>
        <small class="mb-2">{{ __('This flight includes kids') }}</small>
    </div>
    <div class="col-12 col-md-6 mb-2">
        <div class="form-check form-switch">
            <label class="form-check-label" for="is_recommended">{{ __('Is recommended?') }}</label>
            <input class="form-check-input" type="checkbox" id="is_recommended" name="is_recommended" value="1" @if(isset($flight) && $flight->is_recommended ==1) checked @endif>
          </div>
        <small class="mb-2">{{ __('Show in recommended section') }}</small>
    </div>
    @if(!isset($flight))
        <div class="col-12 col-md-6 mb-2">
            <div >
                <label for="photos" class="form-label">{{ __('Photos') }}</label>
                <input class="form-control form-control-sm" id="photos" name="photos[]" type="file" multiple  accept="image/png, image/gif, image/jpeg" >
            </div>
            <small class="mb-2">{{ __('Upload all photo required') }}</small>
        </div>
    @endif
    
    <div class="col-12 col-md-6 mb-2">
        <label for="photos" class="form-label">{{ __('URL Key') }}</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-url-key">
                <i class="align-middle" data-feather="clock"></i>
            </span>
            <input type="text" class="form-control" name="url_key" placeholder="{{ __('Url Key') }}"
                aria-label="{{ __('Url Key') }}" aria-describedby="basic-url-key"   @if(isset($flight)) value="{{$flight->url_key}}" @endif>
        </div>
        <small class="mb-2">{{ __('Url for engine') }}</small>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <button class="w-100 btn {{isset($flight) ? 'btn-primary' : 'btn-success'}}">{{isset($flight) ? __('Update') : __('Send')}}</button>
        </div>
    </div>




    <div class="col-12 mt-3">
        <div class="form-check form-switch">
            <label class="form-label" for="short-description">{{ __('Short Description') }}</label>
            <textarea class="tinny-editor" name="short_description" id="short-description">@if(isset($flight)) {{$flight->short_description}} @endif</textarea>
          </div>
          <hr>
    </div>

    <div class="col-12  mt-3">
        <div class="form-check form-switch">
            <label class="form-label" for="description">{{ __('Description') }}</label>
            <textarea class="tinny-editor" name="description" id="description">@if(isset($flight)) {{$flight->description}} @endif</textarea>
          </div>
          <hr>
    </div>

    <div class="col-12 mt-3 ">
        <div class="form-check form-switch">
            <label class="form-label" for="extra_comments">{{ __('Add Extra Info') }}</label>
            <textarea class="tinny-editor" name="extra_comments" id="extra_comments">@if(isset($flight)) {{$flight->extra_comments}} @endif</textarea>
          </div>
          <hr>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <button class="w-100 btn {{isset($flight) ? 'btn-primary' : 'btn-success'}}">{{isset($flight) ? __('Update') : __('Send')}}</button>
        </div>
    </div>


</div>
