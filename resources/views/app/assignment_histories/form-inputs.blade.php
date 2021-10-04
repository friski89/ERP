@php $editing = isset($assignmentHistory) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="emp_no"
            label="Nik Karyawan"
            value="{{ old('emp_no', ($editing ? $assignmentHistory->emp_no : '')) }}"
            maxlength="255"
            placeholder="Nik Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="employee_name"
            label="Nama Karyawan"
            value="{{ old('employee_name', ($editing ? $assignmentHistory->employee_name : '')) }}"
            maxlength="255"
            placeholder="Nama Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.date
            name="date"
            label="Tanggal Penugasan"
            value="{{ old('date', ($editing ? optional($assignmentHistory->date)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select
            name="company_home_id"
            label="Nama Perusahaan Home"
            required
        >
            @php $selected = old('company_home_id', ($editing ? $assignmentHistory->company_home_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Company Home</option>
            @foreach($companyHomes as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="job_title_id" label="Nama Jabatan" required>
            @php $selected = old('job_title_id', ($editing ? $assignmentHistory->job_title_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Job Title</option>
            @foreach($jobTitles as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $assignmentHistory->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
