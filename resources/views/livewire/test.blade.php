<div>
<div x-data="{ title: 'Sure Delete?' }">
    <x-button label="Delete"
        x-on:confirm="{
            title,
            icon: 'warning',
            method: 'delete',
            params: 1
        }"
    />
</div>
</div>
