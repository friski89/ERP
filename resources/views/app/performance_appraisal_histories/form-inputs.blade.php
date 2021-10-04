@php $editing = isset($performanceAppraisalHistory) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="emp_no"
            label="Nik Karyawan"
            value="{{ old('emp_no', ($editing ? $performanceAppraisalHistory->emp_no : '')) }}"
            maxlength="255"
            placeholder="Nik Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="employee_name"
            label="Nama Karyawan"
            value="{{ old('employee_name', ($editing ? $performanceAppraisalHistory->employee_name : '')) }}"
            maxlength="255"
            placeholder="Nama Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.number
            name="year"
            label="Tahun"
            value="{{ old('year', ($editing ? $performanceAppraisalHistory->year : '')) }}"
            max="255"
            placeholder="Tahun"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="performance_value"
            label="Nilai Performansi SKI"
            value="{{ old('performance_value', ($editing ? $performanceAppraisalHistory->performance_value : '')) }}"
            maxlength="255"
            placeholder="Nilai Performansi SKI"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="performance_score"
            label="Score Performansi SKI"
            value="{{ old('performance_score', ($editing ? $performanceAppraisalHistory->performance_score : '')) }}"
            maxlength="255"
            placeholder="Score Performansi SKI"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="competency_value"
            label="Nilai Kopetensi"
            value="{{ old('competency_value', ($editing ? $performanceAppraisalHistory->competency_value : '')) }}"
            maxlength="255"
            placeholder="Nilai Kopetensi"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="behavioral_value"
            label="Nilai Behavioral"
            value="{{ old('behavioral_value', ($editing ? $performanceAppraisalHistory->behavioral_value : '')) }}"
            maxlength="255"
            placeholder="Nilai Behavioral"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $performanceAppraisalHistory->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
