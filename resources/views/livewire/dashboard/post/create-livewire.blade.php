<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">

                <x-errors />

                <form wire:submit.prevent="store" class="p-5">
                    <div class="mb-3">
                        <x-input wire:model.defer="title" label="Nama" placeholder="Masukkan Nama" />
                    </div>

                    <div class="mb-3">
                        <x-input type="number" wire:model.lazy="slug" label="NIM" placeholder="Masukkan NIM" />
                    </div>

                    <div class="mb-5">
                        <x-input type="number" wire:model.defer="description" label="Nilai" placeholder="Masukkan Nilai" />
                    </div>

                    <div class="mb-5">
                        <x-checkbox id="is-active" label="Active" wire:model.defer="is_active" value="1" />
                    </div>

                    <x-button type="submit" primary label="Save" />
                </form>

            </div>
        </div>
    </div>
</div>