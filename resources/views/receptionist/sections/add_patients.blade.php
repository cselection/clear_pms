<div class="container">

    <!--- if patient is added is added successfully ----------->
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <!--- if patient is not added successfully ----------->
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class=""><h2>{{ __('lang.rec.add_patient')}}</h2></div>
    <form method="POST" action="{{route('receptionist.store.patient')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">{{ __('lang.rec.table.name')}}</label>
            <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="{{ __('lang.rec.table.name')}}">
        </div>
        <div class="form-group">
            <label for="phone">{{ __('lang.rec.table.phone')}}</label>
            <input type="phone" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="{{ __('lang.rec.table.phone')}}">
        </div>
        <div class="form-group">
            <label for="phone">{{ __('lang.rec.table.age')}}</label>
            <input type="number" name="age" class="form-control" id="number" aria-describedby="emailHelp" placeholder="{{ __('lang.rec.table.age')}}">
        </div>
        <div class="form-group">
            <label for="birth_date">{{ __('lang.rec.table.birth_date')}}</label>
            <input type="date" name="birthdate" class="form-control" id="birth_date" placeholder="{{ __('lang.rec.table.birth_date')}}">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
            <label class="form-check-label" for="exampleRadios1">
            {{ __('lang.rec.table.male')}}
            </label>
        </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
            <label class="form-check-label" for="exampleRadios2">
            {{ __('lang.rec.table.female')}}
            </label>
        </div>
        <div class="my-2"><h4>{{ __('lang.rec.add_patient_card')}}</h4></div>
        <div class="my-2">
            <input type="file" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">{{ __('lang.submit')}}</button>
    </form>
</div>