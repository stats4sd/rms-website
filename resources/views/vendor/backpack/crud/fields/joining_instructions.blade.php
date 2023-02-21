{{-- used for heading, separators, etc --}}
@includeWhen(!isset($field['wrapper']) || $field['wrapper'] !== false, 'crud::fields.inc.wrapper_start')

<div class="alert alert-secondary text-dark">

    <h5>Default Joining Instructions</h5>
    <div id="joining_instructions_placeholder" class="mb-3">
        (select an event type)
    </div>
    <div>
        Registration Url: <span id="registration_url_placeholder"> -- </span>
    </div>
</div>

@includeWhen(!isset($field['wrapper']) || $field['wrapper'] !== false, 'crud::fields.inc.wrapper_end')



@pushonce('after_scripts')

    <script>

        crud.field('eventType').onChange(function (field) {

            // get the joining instructions for the selected event type
            axios.get('/admin/event_types/'+field.value+'/joining-instructions').
            then(res => {
                document.getElementById('joining_instructions_placeholder')
                    .innerHTML = res.data.joining_instructions

                document.getElementById('registration_url_placeholder')
                    .innerHTML = res.data.registration_url
            })

        })

    </script>
@endpushonce
