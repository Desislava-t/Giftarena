<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-dark">{{ __('Потребители') }}</h4>
                </div>
                <div class="">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-dark">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Име</th>
                                <th scope="col">Email</th>
                                <th scope="col">User type</th>
                                <th scope="col">Дата на създаден профил</th>
                                <th scope="col">Редактирай</th>
                                <th scope="col">Изтрий</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if($user->userType == 'admin')
                                      <td>{{ 'admin' }}</td>
                                       @else
                                        <td>{{ 'user' }}</td>
                                    @endif
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin-register-users-update/edit',$user->id) }}"
                                           class="btn btn-primary" aria-label="redact user information">Редактирай</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin-register-users/delete',$user->id) }}"
                                           class="btn btn-danger" aria-label="delete user information">Изтрий</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $usersPaginate->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{--Create user--}}
    <div class="accordion" id="addUser">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link text-dark text-decoration-none" type="button" data-toggle="collapse"
                            data-target="#createUser"
                            aria-expanded="true" aria-controls="createUser">
                        <i class="fas fa-user-plus pr-2"></i> Създай потребител
                    </button>
                </h2>
            </div>

            <div id="createUser" class="collapse show" aria-labelledby="headingOne" data-parent="#addUser">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin-register-users') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-4 col-form-label text-md-right">
                                                <span class="text-danger pr-2">*</span>
                                                {{ __('Име') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       name="name" value="{{ old('name') }}" required
                                                       autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">
                                                <span class="text-danger pr-2">*</span>
                                                {{ __('E-Mail адрес') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="userType"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('User type') }}</label>

                                            <div class="col-md-6">
                                                <input type="text" id="userType" name="userType" class="form-control"
                                                       placeholder="Създай нов админ">
                                            </div>
                                            @if($errors->has('userType'))
                                                <span class="alert-danger">
                                                    {{ $errors -> invalid('userType') }}
                                                </span>
                                            @endif

                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-4 col-form-label text-md-right">
                                                <span class="text-danger pr-2">*</span>
                                                {{ __('Парола') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password"
                                                       required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                   class="col-md-4 col-form-label text-md-right">
                                                <span class="text-danger pr-2">*</span>
                                                {{ __('Потвърди парола') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" required
                                                       autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Запис') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--.Create user--}}


    </div>
</div>


