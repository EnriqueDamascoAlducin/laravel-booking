<div class="row justify-content-center">
    <div class="col-12">
        <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0 table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{ __('URL KEY') }}</th>
                                <th scope="col">{{ __('Flights Assigned') }}</th>
                                <th scope="col">{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr >
                                    <td class="cursor-pointer" wire:click="editCategory({{ $category->id }})"> {{ $category->name }}</td>
                                    <td> {{ $category->url_key }} </td>
                                    <td> 
                                        @foreach ($category->flights as $flight )
                                            {{$flight->name}} <br>       
                                        @endforeach
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm px-3"  wire:click="removeCategory({{ $category->id }})" >
                                            <i class="align-middle fas fa-xmark" ></i>
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm px-3"  wire:click="assignFlight({{ $category->id }})" >
                                            <i class="align-middle h5 bi bi-balloon"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
