<div class="card-body pt-2 pb-3 pe-2 marker-form">
    <form method="POST" action="{{ route('marker-store') }}" id="create-marker-form" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"/>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="land_area" :value="__('Land Area')" />
            <x-text-input id="land_area" class="block mt-1 w-full" type="text" name="land_area"/>
            <x-input-error :messages="$errors->get('land_area')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="soil" :value="__('Soil')" />
            <x-text-input id="soil" class="block mt-1 w-full" type="text" name="soil"/>
            <x-input-error :messages="$errors->get('soil')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="crops" :value="__('Crops')" />
            <x-text-input id="crops" class="block mt-1 w-full" type="text" name="crops"/>
            <x-input-error :messages="$errors->get('crops')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="damage" :value="__('Damage')" />
            <x-text-input id="damage" class="block mt-1 w-full" type="text" name="damage"/>
            <x-input-error :messages="$errors->get('damage')" class="mt-2" />
        </div>
        <div>
            <?php $default = 'Select the level of damage'; ?>
            <x-input-label for="level_of_damage" :value="__('Level of damage')"/>
            <x-select :default-option="$default" :options="\App\Http\Enum\DamageEnum::cases()" id="level_of_damage" class="block mt-1 w-full" type="text" name="level_of_damage"/>
            <x-input-error :messages="$errors->get('level_of_damage')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="photos" :value="__('Photo')" />
            <x-text-input id="photos" class="block mt-1 w-full" type="file" name="photos[]" multiple/>
            <x-input-error :messages="$errors->get('photos')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="expert_report" :value="__('Expert report')" />
            <x-text-input id="expert_report" class="block mt-1 w-full" type="file" name="expert_report"/>
            <x-input-error :messages="$errors->get('expert_report')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3" onclick="">
                {{ __('Save marker') }}
            </x-primary-button>
        </div>
    </form>
</div>
