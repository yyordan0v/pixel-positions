<x-layout>
    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">
        <x-forms.heading>Create a Job</x-forms.heading>

        <x-forms.input label="Job Title" name="title" placeholder="Web Developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="$60,000"/>
        <x-forms.input label="Location" name="location" placeholder="Varna, Bulgaria"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full time</option>
        </x-forms.select>

        <x-forms.checkbox label="Featured Jobs (extra cost)" name="featured"/>

        <x-forms.input label="URL" name="url"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated" name="tags" placeholder="front-end, back-end, api, php, laravel"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
