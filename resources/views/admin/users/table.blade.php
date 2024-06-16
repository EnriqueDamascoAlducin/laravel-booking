<div class="row justify-content-center">
    <div class="col-12">
        <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0 table-hover">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Nickname')}}</th>
                                <th scope="col">{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td><a href="{{route('user.edit', ['user' => $user->id])}}" >{{ $user->name . ' ' .$user->lastname }} </a></td>
                                    <td> {{ $user->email }}</td>
                                    <td> {{ $user->nickname }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm px-3"  data-bs-toggle="modal" wire:click="removeUser({{ $user->id }})" data-bs-target=".removeUserModal">
                                            <i class="align-middle fas fa-user-xmark" ></i>
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
