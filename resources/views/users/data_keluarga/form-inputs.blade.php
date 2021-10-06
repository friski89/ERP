@php $editing = isset($family) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="employee_name"
            label="Nama Karyawan"
            value="{{ Auth::user()->name }}"
            maxlength="255"
            placeholder="Nama Karyawan"
            readonly
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="emp_no"
            label="Nik Karyawan"
            value="{{ Auth::user()->nik_company }}"
            maxlength="255"
            placeholder="Emp No"
            readonly
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="marital_status" label="Status Pernikahan">
            @php $selected = old('marital_status', ($editing ? $family->marital_status : '')) @endphp
            <option value="Menikah" {{ $selected == 'Menikah' ? 'selected' : '' }} >Menikah</option>
            <option value="Belum Menikah" {{ $selected == 'Belum Menikah' ? 'selected' : '' }} >Belum menikah</option>
            <option value="Duda" {{ $selected == 'Duda' ? 'selected' : '' }} >Duda</option>
            <option value="Janda" {{ $selected == 'Janda' ? 'selected' : '' }} >Janda</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="no_kk"
            label="No Kartu Keluarga"
            value="{{ old('no_kk', ($editing ? $family->no_kk : '')) }}"
            maxlength="255"
            placeholder="No Kk"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="family_name"
            label="Nama Keluarga"
            value="{{ old('family_name', ($editing ? $family->family_name : '')) }}"
            maxlength="255"
            placeholder="Nama Keluarga"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="nik_id"
            label="Nik Id"
            value="{{ old('nik_id', ($editing ? $family->nik_id : '')) }}"
            maxlength="255"
            placeholder="Nik Id"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="place_of_birth"
            label="Tempat Lahir"
            value="{{ old('place_of_birth', ($editing ? $family->place_of_birth : '')) }}"
            maxlength="255"
            placeholder="Tempat Lahir"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.date
            name="date_of_birth"
            label="Tanggal Lahir"
            value="{{ old('date_of_birth', ($editing ? optional($family->date_of_birth)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="gender" label="Jenis Kelamin">
            @php $selected = old('gender', ($editing ? $family->gender : '')) @endphp
            <option value="Male" {{ $selected == 'Male' ? 'selected' : '' }} >Male</option>
            <option value="Female" {{ $selected == 'Female' ? 'selected' : '' }} >Female</option>
            <option value="Other" {{ $selected == 'Other' ? 'selected' : '' }} >Other</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.date
            name="date_marital"
            label="Tanggal Menikah"
            value="{{ old('date_marital', ($editing ? optional($family->date_marital)->format('Y-m-d') : '')) }}"
            max="255"
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="religion" label="Agama">
            @php $selected = old('religion', ($editing ? $family->religion : '')) @endphp
            <option value="Islam" {{ $selected == 'Islam' ? 'selected' : '' }} >Islam</option>
            <option value="Kristen" {{ $selected == 'Kristen' ? 'selected' : '' }} >Kristen</option>
            <option value="Hindu" {{ $selected == 'Hindu' ? 'selected' : '' }} >Hindu</option>
            <option value="Budha" {{ $selected == 'Budha' ? 'selected' : '' }} >Budha</option>
            <option value="Konghucu" {{ $selected == 'Konghucu' ? 'selected' : '' }} >Konghucu</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="citizenship"
            label="Kewarganegaraan"
            value="{{ old('citizenship', ($editing ? $family->citizenship : '')) }}"
            maxlength="255"
            placeholder="Kewarganegaraan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="edu_id" label="Pendidikan" required>
            @php $selected = old('edu_id', ($editing ? $family->edu_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Pilih Pendidikan</option>
            @foreach($edus as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="work"
            label="Pekerjaan"
            value="{{ old('work', ($editing ? $family->work : '')) }}"
            maxlength="255"
            placeholder="Pekerjaan"
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="health_status" label="Status Tanggungan Kesehatan">
            @php $selected = old('health_status', ($editing ? $family->health_status : '')) @endphp
            <option value="0" {{ $selected == 0 ? 'selected' : '' }} >Tidak</option>
            <option value="1" {{ $selected == 1 ? 'selected' : '' }} >Ya</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="blood_group" label="Golangan Darah">
            @php $selected = old('blood_group', ($editing ? $family->blood_group : '')) @endphp
            <option value="Tidak Tahu" {{ $selected == 'Tidak Tahu' ? 'selected' : '' }} >Tidak tahu</option>
            <option value="O" {{ $selected == 'O' ? 'selected' : '' }} >O</option>
            <option value="A" {{ $selected == 'A' ? 'selected' : '' }} >A</option>
            <option value="B" {{ $selected == 'B' ? 'selected' : '' }} >B</option>
            <option value="AB" {{ $selected == 'AB' ? 'selected' : '' }} >Ab</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="blood_rhesus"
            label="Rhesus Darah"
            value="{{ old('blood_rhesus', ($editing ? $family->blood_rhesus : '')) }}"
            maxlength="255"
            placeholder="Rhesus Darah"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="house_number"
            label="No Telp Rumah"
            value="{{ old('house_number', ($editing ? $family->house_number : '')) }}"
            maxlength="255"
            placeholder="No Telp Rumah"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="handphone_number"
            label="No Telp Handphone"
            value="{{ old('handphone_number', ($editing ? $family->handphone_number : '')) }}"
            maxlength="255"
            placeholder="No Telp Handphone"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="emergency_number"
            label="No Telp Darurat"
            value="{{ old('emergency_number', ($editing ? $family->emergency_number : '')) }}"
            maxlength="255"
            placeholder="No Telp Darurat"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.textarea
            name="address"
            label="Alamat"
            maxlength="255"
            required
            >{{ old('address', ($editing ? $family->address : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="city"
            label="Kota"
            value="{{ old('city', ($editing ? $family->city : '')) }}"
            maxlength="255"
            placeholder="Kota"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="province"
            label="Provinsi"
            value="{{ old('province', ($editing ? $family->province : '')) }}"
            maxlength="255"
            placeholder="Provinsi"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="postal_code"
            label="Kode Pos"
            value="{{ old('postal_code', ($editing ? $family->postal_code : '')) }}"
            maxlength="255"
            placeholder="Kode Pos"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="relationship" label="Relationship">
            @php $selected = old('relationship', ($editing ? $family->relationship : '')) @endphp
            <option value="Suami" {{ $selected == 'Suami' ? 'selected' : '' }} >Suami</option>
            <option value="Istri" {{ $selected == 'Istri' ? 'selected' : '' }} >Istri</option>
            <option value="Anak" {{ $selected == 'Anak' ? 'selected' : '' }} >Anak</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="alive" label="Alive">
            @php $selected = old('alive', ($editing ? $family->alive : '')) @endphp
            <option value="0" {{ $selected == 0 ? 'selected' : '' }} >Tidak</option>
            <option value="1" {{ $selected == 1 ? 'selected' : '' }} >Ya</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.number
            name="urutan"
            label="Urutan"
            value="{{ old('urutan', ($editing ? $family->urutan : '')) }}"
            max="255"
            placeholder="Urutan"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="dependent_status" label="Dependent Status">
            @php $selected = old('dependent_status', ($editing ? $family->dependent_status : '')) @endphp
            <option value="0" {{ $selected == 0 ? 'selected' : '' }} >Tidak</option>
            <option value="1" {{ $selected == 1 ? 'selected' : '' }} >Ya</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.hidden
            name="user_id"
            value="{{ Auth::user()->id }}"
            required
        ></x-inputs.hidden>
    </x-inputs.group>
</div>
