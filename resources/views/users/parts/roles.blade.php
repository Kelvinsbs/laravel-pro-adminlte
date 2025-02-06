<div class="card">
    <form action="{{ route('users.updateInterests', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Cargos
        </div>
        <div class="card-body">

            @foreach ($roles as $role)
                <div class="form-check">

                    <input class="form-check-input @error('roles') is-invalid @enderror" type="checkbox" value="{{ $role->id }}" name="roles[]">
                    <label class="form-check-label" for="flexCheckChecked">
                        {{$role->name}}
                    </label>

                    @if ($loop->last)
                        @error('roles')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @endif
                </div>
            @endforeach
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>

        </div>
    </form>
</div>
