<div>
    <div class="single-settings-box profile-details-box overflow-hidden">

        <img src="{{ asset('assets/images/master_plan.jpg') }}" alt="User">

        <div class="single-settings-box">
            <h4 class="title">Upload Your Image</h4>
            <div class="row ">
                <div class="col-12 mb--20">
                    {{-- <div class="form-group mb--0"> --}}
                    <label for="phonenumber">Upload Your Image</label>
                    <input type="file" class="btn-default" id="uploadImage">
                    {{-- </div> --}}
                </div>
            </div>
            <h4 class="title">Select Room</h4>

            <div class="switcher-btn-grp">
                <button class="dark-switcher " style="display: none">
                    <img src="{{ asset('assets/images/switcher-img/bed1.png') }}" alt="Switcher Image">
                    <span class="text">Bed 1</span>
                </button>
                <button class="light-switcher active" style="display: none">
                    <img src="{{ asset('assets/images/switcher-img/bed2.png') }}" alt="Switcher Image">
                    <span class="text">Bed 2</span>
                </button>
                <button class="dark-switcher @if ($room == 'Bed 1') active @endif"
                    wire:click="selectRoom('Bed 1')">
                    <img src="{{ asset('assets/images/switcher-img/bed1.png') }}" alt="Switcher Image">
                    <span class="text">Bed 1</span>
                </button>
                <button class="light-switcher @if ($room == 'Bed 2') active @endif"
                    wire:click="selectRoom('Bed 2')">
                    <img src="{{ asset('assets/images/switcher-img/bed2.png') }}" alt="Switcher Image">
                    <span class="text">Bed 2</span>
                </button>
                <button class="dark-switcher @if ($room == 'Study') active @endif"
                    wire:click="selectRoom('Study')">
                    <img src="{{ asset('assets/images/switcher-img/study.png') }}" alt="Switcher Image">
                    <span class="text">Study</span>
                </button>
                <button class="dark-switcher @if ($room == 'Bathroom') active @endif"
                    wire:click="selectRoom('Bathroom')">
                    <img src="{{ asset('assets/images/switcher-img/bathroom.png') }}" alt="Switcher Image">
                    <span class="text">Bathroom</span>
                </button>
                <button class="dark-switcher @if ($room == 'Laundry') active @endif"
                    wire:click="selectRoom('Laundry')">
                    <img src="{{ asset('assets/images/switcher-img/laundry.png') }}" alt="Switcher Image">
                    <span class="text">Laundry</span>
                </button>
                <button class="dark-switcher @if ($room == 'Dining') active @endif"
                    wire:click="selectRoom('Dining')">
                    <img src="{{ asset('assets/images/switcher-img/dining.png') }}" alt="Switcher Image">
                    <span class="text">Dining</span>
                </button>
                <button class="dark-switcher @if ($room == 'Bedroom 1') active @endif"
                    wire:click="selectRoom('Bedroom 1')">
                    <img src="{{ asset('assets/images/switcher-img/bedroom1.png') }}" alt="Switcher Image">
                    <span class="text">Bedroom 1</span>
                </button>
                <button class="dark-switcher @if ($room == 'Kitchen') active @endif"
                    wire:click="selectRoom('Kitchen')">
                    <img src="{{ asset('assets/images/switcher-img/kitchen.png') }}" alt="Switcher Image">
                    <span class="text">Kitchen</span>
                </button>
            </div>
        </div>
        <div class="profile-details-tab">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="problem_place">Problem Place</label>
                        <select name="problem_place" id="problem_place" class="form-control">
                            <option value="">Select Problem Place</option>
                            <option value="Front Wall">Front Wall</option>
                            <option value="Left Wall">Left Wall</option>
                            <option value="Right Wall">Right Wall</option>
                            <option value="Back Wall">Back Wall</option>
                            <option value="Roof">Roof</option>
                            <option value="Ground">Ground</option>
                        </select>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="problem_type">Problem Type</label>
                        <select name="problem_type" id="problem_type" class="form-control">
                            <option value="">Select Problem Type</option>
                            <option value="Minor Crack">Minor Crack</option>
                            <option value="Minor Crack With Water Leak">Minor Crack With Water Leak</option>
                            <option value="Major Crack">Major Crack</option>
                            <option value="Major Crack With Water Leak">Major Crack With Water Leak</option>
                            <option value="Electricity">Electricity</option>
                        </select>

                    </div>
                </div>

                @if ($problem_type == 'Minor Crack With Water Leak' || $problem_type == 'Major Crack With Water Leak')
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="type_of_leak">Type of the Leak</label>
                            <select name="type_of_leak" id="type_of_leak" class="form-control">
                                <option value="">Select Type of Leak</option>
                                <option value="Inside">Inside</option>
                                <option value="Outside">Outside</option>
                            </select>
                        </div>
                    </div>
                @endif
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const problemPlaceSelect = document.getElementById('problem_place');
                        const problemTypeSelect = document.getElementById('problem_type');
                        const typeOfLeakSelect = document.getElementById('type_of_leak');

                        problemPlaceSelect.addEventListener('change', function() {
                            // Use Livewire to set the 'problem_place' property
                            @this.set('problem_place', problemPlaceSelect.value);
                        });

                        problemTypeSelect.addEventListener('change', function() {
                            // Use Livewire to set the 'problem_type' property
                            @this.set('problem_type', problemTypeSelect.value);
                        });

                        typeOfLeakSelect.addEventListener('change', function() {
                            // Use Livewire to set the 'type_of_leak' property
                            @this.set('type_of_leak', typeOfLeakSelect.value);
                        });
                    });
                </script>
                <div class="col-12">
                    <div class="form-group">
                        <label for="bio">Description</label>
                        <textarea id="bio" cols="20" rows="5" wire:model="description"></textarea>
                    </div>
                </div>
                {{-- submit button --}}
                <div class="row">
                    <div class="col-8 d-flex justify-content-end mt-3">
                        @error('answers')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button wire:click="save()" class="btn btn-default" wire:loading.attr="disabled">
                            <span class="align-middle d-sm-inline-block me-sm-1">
                                {{ __('Send') }}
                            </span>
                            <i class="fa-regular fa-arrow-left me-3"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
