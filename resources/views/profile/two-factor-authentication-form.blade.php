<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Aqui puedes actuilizar la informacion de tu perfil, solo recuerda que el perfil sera activado cuando hallas impartido algun curso') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Foto de Perfil') }}" />
            <x-input  type="text" class="mt-1 block w-full" placeholder="Coloca la URL de un Foto ..." />
            
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Biografia') }}" />
            <x-input  type="text" class="mt-1 block w-full" />
            
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Actualizacion Exitosa!!') }}
        </x-action-message>

        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </x-slot>
</x-form-section>
