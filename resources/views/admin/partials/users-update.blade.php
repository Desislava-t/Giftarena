<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> {{ $user -> email }} / Редактирай</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin-register-users-update/update',$user->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">
                                <span class="text-danger pr-2">*</span>
                                {{ __('Име') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control"
                                       name="name" value="{{ $user->name }}" required
                                       autocomplete="name" autofocus>
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
                                       name="email" value="{{ $user->email }}" required
                                       autocomplete="email">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="userType"
                                   class="col-md-4 col-form-label text-md-right">{{ __('User type') }}</label>

                            <div class="col-md-6">
                                <input type="text" id="userType" name="userType" class="form-control"
                                       placeholder="Създай нов админ" value="{{ $user->userType }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">
                                <span class="text-danger pr-2">*</span>
                                {{ __('Парола') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control"
                                       name="password" value="{{ $user->password }}"
                                       required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">
                                <span class="text-danger pr-2">*</span>
                                {{ __('Потвърди парола') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"
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