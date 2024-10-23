<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Software Developer"/>
        <x-forms.input label="Description" name="description" placeholder="Description"/>
        <x-forms.input label="Salary" name="salary" placeholder="50,000tk"/>
        <x-forms.input label="Location" name="location" placeholder="Uttara, Dhaka"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://laravel.com/jobs/software-developer-needed"/>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured"/>

        <x-forms.divider/>
        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="Frontend, Backend, Fullstack"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
