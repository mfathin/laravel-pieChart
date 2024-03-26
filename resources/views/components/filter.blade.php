    <div style="width: 800px" class="mx-auto">
        <form id="filterForm" method="POST" action="{{ route('filter') }}">
            @csrf
            {{-- <select name="period" id="period" class="border border-primary">
                <option value="" selected>Select Periods</option>
                @foreach ($periods as $period)
                    <option value="{{ $period }}">{{ $period }}</option>
                @endforeach
            </select> --}}

            <select name="gender_id" id="gender_id" class="border border-danger">
                <option value="" selected>Select Gender</option>
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->gender_name }}</option>
                @endforeach
            </select>

            <select name="division_id" id="division_id" class="border border-secondary">
                <option value="" selected>Select Divisions</option>
                @foreach ($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                @endforeach
            </select>

            <select name="company_id" id="company_id" class="border border-success">
                <option value="" selected>Select Companies</option>

                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach
            </select>

            <select name="level_id" id="level_id" class="border border-warning">
                <option value="" selected>Select Levels</option>

                @foreach ($levels as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                @endforeach
            </select>

            <button type="submit">Filter</button>
        </form>
    </div>
