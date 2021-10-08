@php $editing = isset($profileHistory) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="id"
            label="Id"
            value="{{ old('id', ($editing ? $profileHistory->id : '')) }}"
            maxlength="255"
            placeholder="Id"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="gender"
            label="Gender"
            value="{{ old('gender', ($editing ? $profileHistory->gender : '')) }}"
            maxlength="20"
            placeholder="Gender"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="phone_number"
            label="Phone Number"
            value="{{ old('phone_number', ($editing ? $profileHistory->phone_number : '')) }}"
            maxlength="20"
            placeholder="Phone Number"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="blood_group"
            label="Blood Group"
            value="{{ old('blood_group', ($editing ? $profileHistory->blood_group : '')) }}"
            maxlength="5"
            placeholder="Blood Group"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="no_ktp"
            label="No Ktp"
            value="{{ old('no_ktp', ($editing ? $profileHistory->no_ktp : '')) }}"
            maxlength="20"
            placeholder="No Ktp"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="no_npwp"
            label="No Npwp"
            value="{{ old('no_npwp', ($editing ? $profileHistory->no_npwp : '')) }}"
            maxlength="20"
            placeholder="No Npwp"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="address_ktp"
            label="Address Ktp"
            maxlength="255"
            required
            >{{ old('address_ktp', ($editing ? $profileHistory->address_ktp :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="address_domisili"
            label="Address Domisili"
            maxlength="255"
            required
            >{{ old('address_domisili', ($editing ?
            $profileHistory->address_domisili : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="status_domisili"
            label="Status Domisili"
            maxlength="255"
            required
            >{{ old('status_domisili', ($editing ?
            $profileHistory->status_domisili : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="user_id"
            label="User Id"
            value="{{ old('user_id', ($editing ? $profileHistory->user_id : '')) }}"
            maxlength="255"
            placeholder="User Id"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
