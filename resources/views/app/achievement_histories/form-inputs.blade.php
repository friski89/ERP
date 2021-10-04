@php $editing = isset($achievementHistory) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="emp_no"
            label="Nik Karyawan"
            value="{{ old('emp_no', ($editing ? $achievementHistory->emp_no : '')) }}"
            maxlength="255"
            placeholder="Nik Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="employee_name"
            label="Nama Karyawan"
            value="{{ old('employee_name', ($editing ? $achievementHistory->employee_name : '')) }}"
            maxlength="255"
            placeholder="Nama Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="award_name"
            label="Nama Penghargaan"
            value="{{ old('award_name', ($editing ? $achievementHistory->award_name : '')) }}"
            maxlength="255"
            placeholder="Nama Penghargaan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="no_sk"
            label="No Sk"
            value="{{ old('no_sk', ($editing ? $achievementHistory->no_sk : '')) }}"
            maxlength="255"
            placeholder="No Sk"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="office_name"
            label="Nama Penjabat"
            value="{{ old('office_name', ($editing ? $achievementHistory->office_name : '')) }}"
            maxlength="255"
            placeholder="Nama Penjabat"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.date
            name="date"
            label="Tanggal Perolehan"
            value="{{ old('date', ($editing ? optional($achievementHistory->date)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="institution"
            label="Institusi Yang memberikan"
            value="{{ old('institution', ($editing ? $achievementHistory->institution : '')) }}"
            maxlength="255"
            placeholder="Institusi Yang memberikan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="position_name"
            label="Posisi Penjabat"
            value="{{ old('position_name', ($editing ? $achievementHistory->position_name : '')) }}"
            maxlength="255"
            placeholder="Posisi Penjabat"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="remarks" label="Remarks" maxlength="255"
            >{{ old('remarks', ($editing ? $achievementHistory->remarks : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $achievementHistory->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
