@php $editing = isset($profile) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="gender" label="Jenis Kelamin">
            @php $selected = old('gender', ($editing ? $profile->gender : '')) @endphp
            <option value="male" {{ $selected == 'male' ? 'selected' : '' }} >Male</option>
            <option value="female" {{ $selected == 'female' ? 'selected' : '' }} >Female</option>
            <option value="other" {{ $selected == 'other' ? 'selected' : '' }} >Other</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="phone_number"
            label="No Handphone"
            value="{{ old('phone_number', ($editing ? $profile->phone_number : '')) }}"
            maxlength="20"
            placeholder="Phone Number"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="blood_group" label="Golongan Darah">
            @php $selected = old('blood_group', ($editing ? $profile->blood_group : '')) @endphp
            <option value="Tidak Tahu" {{ $selected == 'Tidak Tahu' ? 'selected' : '' }} >Tidak tahu</option>
            <option value="O" {{ $selected == 'O' ? 'selected' : '' }} >O</option>
            <option value="A" {{ $selected == 'A' ? 'selected' : '' }} >A</option>
            <option value="B" {{ $selected == 'B' ? 'selected' : '' }} >B</option>
            <option value="AB" {{ $selected == 'AB' ? 'selected' : '' }} >Ab</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="no_ktp"
            label="No Ktp"
            value="{{ old('no_ktp', ($editing ? $profile->no_ktp : '')) }}"
            maxlength="30"
            placeholder="No Ktp"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="no_npwp"
            label="No Npwp"
            value="{{ old('no_npwp', ($editing ? $profile->no_npwp : '')) }}"
            maxlength="30"
            placeholder="No Npwp"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="status_domisili" label="Status Domisili">
            @php $selected = old('status_domisili', ($editing ? $profile->status_domisili : '')) @endphp
            <option value="Rumah Sendiri" {{ $selected == 'Rumah Sendiri' ? 'selected' : '' }} >Rumah sendiri</option>
            <option value="Rumah Sewa" {{ $selected == 'Rumah Sewa' ? 'selected' : '' }} >Rumah sewa</option>
            <option value="Rumah Keluarga" {{ $selected == 'Rumah Keluarga' ? 'selected' : '' }} >Rumah keluarga</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.textarea name="address_ktp" label="Alamat KTP" maxlength="255"
            >{{ old('address_ktp', ($editing ? $profile->address_ktp : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.textarea
            name="address_domisili"
            label="Alamat Domisili"
            maxlength="255"
            >{{ old('address_domisili', ($editing ? $profile->address_domisili :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $profile->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
