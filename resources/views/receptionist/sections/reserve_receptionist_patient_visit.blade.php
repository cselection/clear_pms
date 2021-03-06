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

    <div class="">
        <h2>{{ __('lang.rec.patients.reserve.visit') }}</h2>
    </div>

    <form method="POST" action="{{route('receptionist.register.visit', ['patient_id'=> $patient_id])}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="date">{{ __('lang.rec.appointment_date')}}</label>
            <input type="date" name="date" class="form-control" id="birth_date" placeholder="{{ __('lang.rec.table.birth_date')}}">
        </div>
        <div class="form-group">
            <label for="from">{{ __('lang.doctor.table.from')}}</label>
            <input type="time" name="from" required>
        </div>
        <div class="form-group">
            <label for="to">{{ __('lang.doctor.table.to')}}</label>
            <input type="time" name="to" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">{{ __('lang.submit')}}</button>
    </form>
</div>