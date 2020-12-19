<template>
  <lit-base-field :field="field" :model="model">
    <template>
      <editor
          :api-key="field.apikey"
          :initial-value="value"
          @onChange="update"
          :init="{
         height: 500,
         menubar: false,
         plugins: [
           'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr nonbreaking toc insertdatetime advlist lists wordcount imagetools textpattern noneditable charmap quickbars emoticons'
         ],
         toolbar:
           'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview save | image media link codesample | ltr rtl',
         quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
         noneditable_noneditable_class: 'mceNonEditable',
         toolbar_mode: 'sliding',
         contextmenu: 'link image imagetools table',
       }"
      />
    </template>
  </lit-base-field>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
  name: 'TinyMCEField',
  components: {
    'editor': Editor
  },
  props: {
    field: {
      required: true,
      type: Object
    },
    value: {
      required: true
    }
  },
  methods: {
    update(event, editor) {
      console.log(value, editor);
      this.$emit('input', value)
    }
  }
};
</script>