<x-slot:title>
    Login
</x-slot>

<x-slot:heading>
    Welcome back
</x-slot>

<x-slot:description>
    Sign in to your account to continue
</x-slot>

<form wire:submit="login" class="space-y-5">
    <x-ui.field>
        <x-ui.label>Email address</x-ui.label>
        <x-ui.input
            wire:model="form.email"
            type="email"
            placeholder="you@example.com"
            autofocus
        />
        <x-ui.error name="form.email" />
    </x-ui.field>

    <x-ui.field>
        <div class="flex items-center justify-between">
            <x-ui.label>Password</x-ui.label>
            <a href="{{ route('forgot-password') }}" wire:navigate
               class="text-xs font-medium text-primary hover:underline">
                Forgot password?
            </a>
        </div>
        <x-ui.input
            wire:model="form.password"
            type="password"
            revealable
            placeholder="Enter your password"
        />
        <x-ui.error name="form.password" />
    </x-ui.field>

    <x-ui.button class="w-full" type="submit">
        Sign in
    </x-ui.button>
</form>

<x-slot:footer>
    Don't have an account?
    <a href="{{ route('register') }}" wire:navigate
       class="font-medium text-primary hover:underline">
        Create one
    </a>
</x-slot>
