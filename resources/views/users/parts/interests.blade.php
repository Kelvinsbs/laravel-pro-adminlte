<div class="card">
    <form action="{{ route('users.updateInterests', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Interesses
        </div>
        <div class="card-body">

            @foreach (['Futebol', 'Formula 1'] as $item)
                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="{{ $item }}" name="interests[][name]">
                    <label class="form-check-label" for="flexCheckChecked">
                        {{$item}}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>

        </div>
    </form>
</div>
