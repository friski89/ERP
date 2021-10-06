@php $editing = isset($educationalBackground) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="emp_no"
            label="Nik Karyawan"
            value="{{ old('emp_no', ($editing ? $educationalBackground->emp_no : '')) }}"
            maxlength="100"
            placeholder="Nik Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="employee_name"
            label="Nama Karyawan"
            value="{{ old('employee_name', ($editing ? $educationalBackground->employee_name : '')) }}"
            maxlength="100"
            placeholder="Nama Karyawan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="institution_name"
            label="Nama Institusi"
            value="{{ old('institution_name', ($editing ? $educationalBackground->institution_name : '')) }}"
            maxlength="255"
            placeholder="Nama Institusi"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="faculty"
            label="Fakultas"
            value="{{ old('faculty', ($editing ? $educationalBackground->faculty : '')) }}"
            maxlength="255"
            placeholder="Fakultas"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="major"
            label="Jurusan"
            value="{{ old('major', ($editing ? $educationalBackground->major : '')) }}"
            maxlength="255"
            placeholder="Jurusan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="edu_id" label="Tingkat Pendidikan" required>
            @php $selected = old('edu_id', ($editing ? $educationalBackground->edu_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Tingkat Pendidikan</option>
            @foreach($edus as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.date
            name="graduate_date"
            label="Tanggal Lulus"
            value="{{ old('graduate_date', ($editing ? optional($educationalBackground->graduate_date)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="cost_category"
            label="Kategori Biaya"
            value="{{ old('cost_category', ($editing ? $educationalBackground->cost_category : '')) }}"
            maxlength="255"
            placeholder="Kategori Biaya"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="scholarship_institution"
            label="Institusi Pemberi Beasiswa"
            value="{{ old('scholarship_institution', ($editing ? $educationalBackground->scholarship_institution : '')) }}"
            maxlength="255"
            placeholder="Scholarship Institution"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="gpa"
            label="Gpa"
            value="{{ old('gpa', ($editing ? $educationalBackground->gpa : '')) }}"
            maxlength="255"
            placeholder="Gpa"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="gpa_scale"
            label="Gpa Scale"
            value="{{ old('gpa_scale', ($editing ? $educationalBackground->gpa_scale : '')) }}"
            maxlength="255"
            placeholder="Gpa Scale"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="default"
            label="Default"
            value="{{ old('default', ($editing ? $educationalBackground->default : '')) }}"
            maxlength="255"
            placeholder="Default"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.date
            name="start_year"
            label="Start Year"
            value="{{ old('start_year', ($editing ? optional($educationalBackground->start_year)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="city"
            label="City"
            value="{{ old('city', ($editing ? $educationalBackground->city : '')) }}"
            maxlength="255"
            placeholder="City"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="state"
            label="State"
            value="{{ old('state', ($editing ? $educationalBackground->state : '')) }}"
            maxlength="255"
            placeholder="State"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="country"
            label="Country"
            value="{{ old('country', ($editing ? $educationalBackground->country : '')) }}"
            maxlength="255"
            placeholder="Country"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $educationalBackground->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
