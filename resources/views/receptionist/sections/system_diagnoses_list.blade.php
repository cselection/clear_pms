<div class="container">
    @if(count($system_diagnoses) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">{{ __('lang.rec.diagnoses.name') }}</th>
                    <th scope="col">{{ __('lang.rec.diagnoses.action') }}</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($system_diagnoses as $system_diagnose)
                        <tr>
                            <th>{{$system_diagnose->name}}</th>
                            <td class="d-flex">
                                <a href="{{route('receptionist.edit.diagnose', ['id' => $system_diagnose->id])}}" class="d-flex mx-1 btn btn-sm btn-success ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />
                                        <line x1="10" y1="14" x2="20" y2="4" />
                                        <polyline points="15 4 20 4 20 9" />
                                    </svg>
                                    <span>{{ __('lang.rec.diagnoses.update') }}</span>
                                </a>
                                <a href="{{route('receptionist.delete.diagnose', ['id' => $system_diagnose->id])}}" class="d-flex mx-1 btn btn-sm btn-danger ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="4" y1="7" x2="20" y2="7" />
                                        <line x1="10" y1="11" x2="10" y2="17" />
                                        <line x1="14" y1="11" x2="14" y2="17" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                    <span>{{ __('lang.rec.diagnoses.delete') }}</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center">
            <div>{!! $system_diagnoses->links() !!}</div>
        </div>
    @else
        <h3 class="text-danger">{{ __('lang.rec.no.diagnoses') }}</h3>
    @endif
</div>