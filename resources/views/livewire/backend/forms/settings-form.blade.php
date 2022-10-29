<x-backend.custom-form>
    <div class="grid-cols-3 gap-2 sm:grid">
        <x-input wire:model="name" name="name" label="Clinic Name" type="text" />

        <x-input wire:model="email" name="email" label="Email" type="email" />

        <x-input wire:model="contact_no" name="contact_no" label="Contact No." type="number" />

        <x-input wire:model="gst" name="gst" label="GST Number(If Exists)" type="text" />

        <x-textarea wire:model="about" label="About" />

        <x-textarea wire:model="address" label="Address" />

        <div class="flex flex-col">
            @if ($this->logo != null)
                <img class="object-cover w-24 h-24"
                    src="{{ $isLogoUploaded ? $this->logo->temporaryUrl() : asset('storage/' . $this->logo) }}"
                    alt="{{ $this->name }}" />
            @endif

            <x-input wire:model="logo" name="logo" label="Upload Logo" type="file" />
        </div>

        <div class="flex flex-col">
            @if ($this->favicon != null)
                <img class="object-cover w-24 h-24"
                    src="{{ $isFaviconUploaded ? $this->favicon->temporaryUrl() : asset('storage/' . $this->favicon) }}"
                    alt="{{ $this->name }}" />
            @endif

            <x-input wire:model="favicon" name="favicon" label="Upload Favicon" type="file" />
        </div>

        <div></div>
        <div class="grid col-span-3 text-lg font-semibold">Social Media Links</div>

        <x-input wire:model="fb" name="fb" label="Facebook" type="url" />

        <x-input wire:model="twitter" name="twitter" label="Twitter" type="url" />

        <x-input wire:model="instagram" name="instagram" label="Instagram" type="url" />

        <x-input wire:model="Youtube" name="Youtube" label="Youtube" type="url" />

        <x-input wire:model="gmb" name="gmb" label="Google My Business" type="url" />

        <x-input wire:model="linkedin" name="linkedin" label="Linkedin" type="url" />

    </div>
</x-backend.custom-form>
