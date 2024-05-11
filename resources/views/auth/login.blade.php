<x-layout>
    <x-forms.form method="POST" action="/login">
        <x-forms.heading>Log In</x-forms.heading>

        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
